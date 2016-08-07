<?php
/**
 * @file
 * Contains \Drupal\wunderground_weather\Plugin\Block\WeatherBlockBase
 */

namespace Drupal\wunderground_weather\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Config\ConfigFactory;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\wunderground_weather\RequestData;
use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * Class WeatherBlockBase
 * @package Drupal\wunderground_weather\Plugin\Block
 */
abstract class WeatherBlockBase extends BlockBase  implements ContainerFactoryPluginInterface {

  public $iconNames = [
    'chanceflurries',
    'chancerain',
    'chancerain',
    'chancesleet',
    'chancesleet',
    'chancesnow',
    'chancetstorms',
    'chancetstorms',
    'clear',
    'cloudy',
    'flurries',
    'fog',
    'hazy',
    'mostlycloudy',
    'mostlysunny',
    'partlycloudy',
    'partlysunny',
    'sleet',
    'rain',
    'sleet',
    'snow',
    'sunny',
    'tstorms',
    'tstorms',
    'unknown',
    'cloudy',
    'partlycloudy',
  ];

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

  /**
   * Transform the url to user an other icon set.
   *
   * @param string $set
   *   The letter to identify an icon set.
   * @param string $icon
   *   The name of the icon.
   *
   * @return string
   *   Url of the selected icon set.
   */
  public static function getIconUrl($set, $icon) {
    $path = drupal_get_path('module', 'wunderground_weather');
    return $path . '/icons/' . $set . '/' . $icon . '.gif';
  }

  /**
   * Get a sample of icons of a icon set.
   *
   * @param string $set
   *   The letter to identify an icon set.
   *
   * @return string
   *   A div containing a sample of icons from an icon set.
   */
  public function getIconSetSample($set) {
    $all_icons = $this->getIconNames();
    $sample = [
      $all_icons[8],
      $all_icons[9],
      $all_icons[15],
      $all_icons[18],
      $all_icons[20],
    ];

    $sample_icons = '';
    foreach ($sample as $name) {
      $image_variables = [
        '#theme' => 'image',
        '#uri' => $this->getIconUrl($set, $name),
      ];
      $sample_icons .= render($image_variables);
    };

    return $sample_icons;
  }

  /**
   * Get all available icon names.
   *
   * @return array
   *   All available icon names.
   */
  public function getIconNames() {
    return $this->iconNames;
  }

  /**
   * An array containing names for all wunderground icon names.
   *
   * @param array $icon_names
   *   Set the available icon names.
   */
  protected function setIconNames($icon_names) {
    $this->iconNames = $icon_names;
  }
}