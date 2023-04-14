# Leaflet Layers GeoJSON
The Leaflet Layers module adds the alternative background and overlays layers to Leaflet maps. The Leaflet Layers module currently only accepts WMS/TMS layers. The Leaflet Layers GeoJSON module adds vector layers from GeoJSON sources. The style and popup of each GeoJSON feature can be set via TwigJS.

## Usage
* Go to admin/structure/leaflet_layers/map_layer, add a new layer.
* Layer Type: "Overlay Layer", Map Type: "GeoJSON".
* File: Add the URL of the GeoJSON file. Make sure that it is available via CORS.
### Style
Style has to evaluate to a valid JSON (note the quotes around color), e.g.:
```
{ "weight": 3, "color": "{{ item.properties.color }}" }
```

### Pop-up can have HTML code, e.g.:
```
<b>{{ item.properties.title }}</b><br>{{ item.properties.description }}
```
