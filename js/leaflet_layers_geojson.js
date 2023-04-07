(function($, Drupal, drupalSettings) {

const original_create_layer = Drupal.Leaflet.prototype.create_layer
Drupal.Leaflet.prototype.create_layer = function(layer, key) {
  if (layer.type === 'geojson') {
    const map_layer = new L.geoJSON({type: 'FeatureCollection', features: []})

    if (layer.options.style) {
      const template = Twig.twig({
        data: layer.options.style
      })

      map_layer.options.style = (item) => {
        const style = template.render({ item })

        try {
          return JSON.parse(style)
        }
        catch (e) {
          console.error(e)
          return {}
        }
      }
    }

    fetch(layer.options.file)
      .then(req => req.json())
      .then(json => map_layer.addData(json))

    return map_layer
  } else {
    return original_create_layer(layer, key)
  }
}

})(jQuery, Drupal, drupalSettings);
