<?php

namespace Drupal\leaflet_layers_geojson\Plugin\LeafletLayerType;

use Drupal\leaflet_layers\LayerTypePluginBase;
use Drupal\leaflet_layers\LayerTypeInterface;

/**
 * Defines a user info widget.
 *
 * @LayerType(
 *   id = "geojson",
 *   label = "GeoJSON Layer",
 * )
 */
class GeoJSON extends LayerTypePluginBase implements LayerTypeInterface {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    return [
      'settings' => [
        'file' => [
          '#type' => 'textfield',
          '#title' => t('File'),
          '#maxlength' => 255,
          '#description' => t("Url of the file."),
          '#default_value' => '',
          '#weight' => -1,
        ],
        'attribution' => [
          '#type' => 'textfield',
          '#title' => t('Attribution'),
          '#description' => t("Most map layers require attribution."),
          '#default_value' => '',
          '#maxlength' => 255,
        ],
        'minZoom' => [
          '#type' => 'number',
          '#title' => t('Minimum zoom'),
          '#default_value' => 0,
        ],
        'maxZoom' => [
          '#type' => 'number',
          '#title' => t('Maximum zoom'),
        ],
        'opacity' => [
          '#type' => 'number',
          '#title' => t('Opacity'),
          '#default_value' => 1,
          '#step' => 0.1,
        ],
      ],
    ];
  }

}
