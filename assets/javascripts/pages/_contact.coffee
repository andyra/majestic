# ============================================================================
# Custom Google Map
# http://codyhouse.co/gem/custom-google-map/
# https://developers.google.com/maps/documentation/javascript/examples/map-simple
# ============================================================================
# When the window has finished loading create our google map below

init = ->
  # Set google maps parameters
  latitude = 32.450159
  longitude = -99.7325808
  map_zoom = 16
  assetPath = '/assets/images/'
  # Google map custom marker icon w/png fallback for IE11
  is_internetExplorer11 = navigator.userAgent.toLowerCase().indexOf('trident') > -1
  marker_url = if is_internetExplorer11 then assetPath + 'map-marker.png' else assetPath + 'map-marker.svg'
  # Define the basic color of the map, plus a value for saturation and brightness
  main_color = '#A5895F'
  saturation_value = -20
  brightness_value = 5
  # Style the map
  style = [
    {
      elementType: 'labels'
      stylers: [ { saturation: saturation_value } ]
    }
    {
      featureType: 'poi'
      elementType: 'labels'
      stylers: [ { visibility: 'off' } ]
    }
    {
      featureType: 'road.highway'
      elementType: 'labels'
      stylers: [ { visibility: 'off' } ]
    }
    {
      featureType: 'road.local'
      elementType: 'labels.icon'
      stylers: [ { visibility: 'off' } ]
    }
    {
      featureType: 'road.arterial'
      elementType: 'labels.icon'
      stylers: [ { visibility: 'off' } ]
    }
    {
      featureType: 'road'
      elementType: 'geometry.stroke'
      stylers: [ { visibility: 'off' } ]
    }
    {
      featureType: 'transit'
      elementType: 'geometry.fill'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
    {
      featureType: 'poi'
      elementType: 'geometry.fill'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
    {
      featureType: 'poi.government'
      elementType: 'geometry.fill'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
    {
      featureType: 'poi.sport_complex'
      elementType: 'geometry.fill'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
    {
      featureType: 'poi.attraction'
      elementType: 'geometry.fill'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
    {
      featureType: 'poi.business'
      elementType: 'geometry.fill'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
    {
      featureType: 'transit'
      elementType: 'geometry.fill'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
    {
      featureType: 'transit.station'
      elementType: 'geometry.fill'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
    {
      featureType: 'landscape'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
    {
      featureType: 'road'
      elementType: 'geometry.fill'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
    {
      featureType: 'road.highway'
      elementType: 'geometry.fill'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
    {
      featureType: 'water'
      elementType: 'geometry'
      stylers: [
        { hue: main_color }
        { visibility: 'on' }
        { lightness: brightness_value }
        { saturation: saturation_value }
      ]
    }
  ]
  # Set google map options
  map_options =
    center: new (google.maps.LatLng)(latitude, longitude)
    mapTypeControl: false
    mapTypeId: google.maps.MapTypeId.ROADMAP
    panControl: true
    scrollwheel: false
    streetViewControl: false
    styles: style
    zoom: map_zoom
    zoomControl: false
  # Inizialize the map
  mapContainer = $('.map__container')[0]
  map = new (google.maps.Map)(mapContainer, map_options)
  # Add a custom marker to the map
  # var marker = new google.maps.Marker({
  #   icon: marker_url,
  #   map: map,
  #   position: new google.maps.LatLng(latitude, longitude),
  #   visible: true,
  #   animation: google.maps.Animation.DROP
  # });
  # Info window
  infowindow = new (google.maps.InfoWindow)(
    position: new (google.maps.LatLng)(latitude, longitude)
    content: '<div class="map__info-window"><strong>Majestic Stage Co.</strong><br>181 Pine St.<br>Abilene, TX 79601</div>')
  # google.maps.event.addListener(marker, 'click', function() {
  #   infowindow.open(map,marker);
  # });
  # Add custom buttons for the zoom-in/zoom-out

  CustomZoomControl = (controlDiv, map) ->
    # Grab the zoom elements from the DOM and insert them in the map
    controlUIzoomIn = $('.map__zoom-in')[0]
    controlUIzoomOut = $('.map__zoom-out')[0]
    controlDiv.appendChild controlUIzoomIn
    controlDiv.appendChild controlUIzoomOut
    # Setup the click event listeners and zoom-in or out according to the clicked element
    google.maps.event.addDomListener controlUIzoomIn, 'click', ->
      map.setZoom map.getZoom() + 1
    google.maps.event.addDomListener controlUIzoomOut, 'click', ->
      map.setZoom map.getZoom() - 1

  infowindow.open map
  zoomControlDiv = document.createElement('div')
  zoomControl = new CustomZoomControl(zoomControlDiv, map)
  # Insert the zoom div on the top left of the map
  map.controls[google.maps.ControlPosition.LEFT_TOP].push zoomControlDiv

google.maps.event.addDomListener window, "load", init
