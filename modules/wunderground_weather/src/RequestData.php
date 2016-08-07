<?php
/**
 * @file
 * Contains \Drupal\wunderground_weather\RequestData
 */

namespace Drupal\wunderground_weather;

use GuzzleHttp\Client;

class RequestData {
  protected $baseUri = 'http://api.wunderground.com';
  protected $client;

  /**
   * RequestData constructor.
   * @param \GuzzleHttp\Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * Make a request to the ww server and return it as an array.
   *
   * @param array $options
   *   Options build the request url.
   *
   * @return array
   *   An array containing weather data.
   */
  public function get($options) {
    $url = $this->baseUri;
    foreach ($options as $argument) {
      $url .= '/' . $argument;
    }
    $url .= '.json';

    $data = $this->client->request('GET', $url);
    return json_decode($data->getBody());
  }
}
