<?php
/**
 * @file
 * This is the wunderground_weather admin include which provides an interface to global redirect to change some of the default settings
 * Contains \Drupal\wunderground_weather\Form\wunderground_weatherSettingsForm.
 */

namespace Drupal\wunderground_weather\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\MetadataBubblingUrlGenerator;
use Drupal\Core\Utility\LinkGenerator;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Defines a form to configure module settings.
 */
class WundergroundWeatherSettingsForm extends ConfigFormBase {
  /**
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;
  /**
   * @var Drupal\Core\Routing\LinkGeneratorTrait
   */
  protected $linkGenerator;

  /**
   * WundergroundWeatherSettingsForm constructor.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   * @param \Drupal\Core\Utility\LinkGenerator $link_generator
   */
  public function __construct(ConfigFactoryInterface $config_factory, MetadataBubblingUrlGenerator $link_generator) {
    $this->setConfigFactory($config_factory);
    $this->configFactory = $config_factory;
    $this->linkGenerator = $link_generator;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('url_generator'),
      $container->get('link_generator')
    );
  }
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'wunderground_weather_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['wunderground_weather.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    // Get all settings
    $config = $this->configFactory->get('wunderground_weather.settings');

    $form['settings'] = [
      '#tree' => TRUE,
    ];

    // URL to get the api key.
    $url = Url::fromUri('http://www.wunderground.com/weather/api');
    $wg_link = \Drupal::l(t('http://www.wunderground.com/weather/api'), $url);


    $form['api_key'] = [
      '#type' => 'textfield',
      '#title' => t('Wunderground API key'),
      '#description' => t('Get your API key at !url', ['!url' => $wg_link]),
      '#default_value' => $config->get('api_key'),
      '#required' => TRUE,
    ];

    $form['language'] = [
      '#type' => 'select',
      '#title' => t('Language'),
      '#options' => _wunderground_weather_languages(),
      '#default_value' => $config->get('language'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->configFactory->getEditable('wunderground_weather.settings')
    ->set('api_key', $form_state->getValue('api_key'))
    ->set('language', $form_state->getValue('language'))
    ->save();

    parent::submitForm($form, $form_state);
  }
}
