<?php

/**
 * @file
 * Contains \Drupal\wunderground_weather\Plugin\Block\WeatherSatelliteBlock
 */

namespace Drupal\wunderground_weather\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Config\ConfigFactory;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Url;
use Drupal\wunderground_weather\RequestData;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a block with weather satellite images.
 *
 * @Block(
 *  id = "wunderground_weather_satellite_block",
 *  admin_label = @Translation("Weather satellite block"),
 *  module = "wunderground_weather"
 * )
 */
class WeatherSatelliteBlock extends BlockBase implements ContainerFactoryPluginInterface {
  public $base_url = 'http://api.wunderground.com/api/';
  /**
   * @var \Drupal\Core\Config\ConfigFactory
   */
  protected $config;
  /**
   * @var \Drupal\wunderground_weather\RequestData
   */
  protected $requestData;

  /**
   * WeatherCurrentBlock constructor.
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   * @param \Drupal\Core\Config\ConfigFactory $config
   * @param \Drupal\wunderground_weather\RequestData $request_data
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, ConfigFactory $config, RequestData $request_data) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);

    $this->config = $config;
    $this->requestData = $request_data;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('config.factory'),
      $container->get('wunderground_weather.request.data')
    );
  }

  public function blockForm($form, FormStateInterface $form_state) {
    $config = $this->getConfiguration();

    // Autocomplete to get location.
    $form['location'] = [
      '#title' => t('Location path'),
      '#type' => 'textfield',
      '#description' => t('Search for your city to determine the Wunderground location path.'),
      '#maxlength' => 120,
      '#required' => TRUE,
      '#autocomplete_route_name' => 'wunderground_weather.autocomplete',
      '#default_value' => isset($config['location']) ? $config['location'] : '',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $settings = $this->config->get('wunderground_weather.settings');
    $location = $form_state->getValue(['location']);

    preg_match('#\[(.*?)\]#', $location, $match);

    $options = [
      'api' => 'api',
      'key' => $settings->get('api_key'),
      'data_feature' => 'geolookup',
      'path' => $match[1],
    ];

    $geolookup = $this->requestData->get($options);
    if (isset($geolookup->location)) {
      $image_path = 'api/' . $settings->get('api_key') . '/animatedsatellite/image.gif';
      $image_url = Url::fromUri(WUNDERGROUND_WEATHER_BASE_URL . $image_path, [
        'query' => [
          'borders' => 1,
          'key' => 'sat_ir4',
          'lat' => $geolookup->location->lat,
          'lon' => $geolookup->location->lon,
          'num' => 8,
          'radius' => 200,
        ]
      ]);

      $this->setConfigurationValue('location', $location);
      $this->setConfigurationValue('image_url', $image_url->toUriString());
    }
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();
    $output = [
      '#theme' => 'image',
      '#uri' => $config['image_url'],
    ];

    return $output;
  }
}
