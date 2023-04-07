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
        'style' => [
          '#type' => 'textarea',
          '#title' => t('Style'),
          '#description' => t("This is a TwigJS template, which evaluates to a JSON structure for the style of each item. You can use <tt>{{ item.properties.value_name }}</tt> to get the value of a property of the item. Example: <tt>{ &quot;color&quot: &quot;{{ item.properties.color }}&quot; }</tt>."),
          '#default_value' => '',
          '#maxlength' => 65535,
        ],
        'popup' => [
          '#type' => 'textarea',
          '#title' => t('Popup'),
          '#description' => t("This is a TwigJS template, which returns HTML. You can use <tt>{{ item.properties.value_name }}</tt> to get the value of a property of the item."),
          '#default_value' => '',
          '#maxlength' => 65535,
        ],
      ],
    ];
  }

}
