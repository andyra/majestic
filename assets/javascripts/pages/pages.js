(function() {
  var init;

  init = function() {
    var CustomZoomControl, assetPath, brightness_value, infowindow, is_internetExplorer11, latitude, longitude, main_color, map, mapContainer, map_options, map_zoom, marker_url, saturation_value, style, zoomControl, zoomControlDiv;
    if ($("body").hasClass(".body--contact")) {
      latitude = 32.450159;
      longitude = -99.7325808;
      map_zoom = 16;
      assetPath = '/assets/images/';
      is_internetExplorer11 = navigator.userAgent.toLowerCase().indexOf('trident') > -1;
      marker_url = is_internetExplorer11 ? assetPath + 'map-marker.png' : assetPath + 'map-marker.svg';
      main_color = '#A5895F';
      saturation_value = -20;
      brightness_value = 5;
      style = [
        {
          elementType: 'labels',
          stylers: [
            {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'poi',
          elementType: 'labels',
          stylers: [
            {
              visibility: 'off'
            }
          ]
        }, {
          featureType: 'road.highway',
          elementType: 'labels',
          stylers: [
            {
              visibility: 'off'
            }
          ]
        }, {
          featureType: 'road.local',
          elementType: 'labels.icon',
          stylers: [
            {
              visibility: 'off'
            }
          ]
        }, {
          featureType: 'road.arterial',
          elementType: 'labels.icon',
          stylers: [
            {
              visibility: 'off'
            }
          ]
        }, {
          featureType: 'road',
          elementType: 'geometry.stroke',
          stylers: [
            {
              visibility: 'off'
            }
          ]
        }, {
          featureType: 'transit',
          elementType: 'geometry.fill',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'poi',
          elementType: 'geometry.fill',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'poi.government',
          elementType: 'geometry.fill',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'poi.sport_complex',
          elementType: 'geometry.fill',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'poi.attraction',
          elementType: 'geometry.fill',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'poi.business',
          elementType: 'geometry.fill',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'transit',
          elementType: 'geometry.fill',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'transit.station',
          elementType: 'geometry.fill',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'landscape',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'road',
          elementType: 'geometry.fill',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'road.highway',
          elementType: 'geometry.fill',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }, {
          featureType: 'water',
          elementType: 'geometry',
          stylers: [
            {
              hue: main_color
            }, {
              visibility: 'on'
            }, {
              lightness: brightness_value
            }, {
              saturation: saturation_value
            }
          ]
        }
      ];
      map_options = {
        center: new google.maps.LatLng(latitude, longitude),
        mapTypeControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        panControl: true,
        scrollwheel: false,
        streetViewControl: false,
        styles: style,
        zoom: map_zoom,
        zoomControl: false
      };
      mapContainer = $('.map__container')[0];
      map = new google.maps.Map(mapContainer, map_options);
      infowindow = new google.maps.InfoWindow({
        position: new google.maps.LatLng(latitude, longitude),
        content: '<div class="map__info-window"><strong>Majestic Stage Co.</strong><br>181 Pine St.<br>Abilene, TX 79601</div>'
      });
      CustomZoomControl = function(controlDiv, map) {
        var controlUIzoomIn, controlUIzoomOut;
        controlUIzoomIn = $('.map__zoom-in')[0];
        controlUIzoomOut = $('.map__zoom-out')[0];
        controlDiv.appendChild(controlUIzoomIn);
        controlDiv.appendChild(controlUIzoomOut);
        google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
          return map.setZoom(map.getZoom() + 1);
        });
        return google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
          return map.setZoom(map.getZoom() - 1);
        });
      };
      infowindow.open(map);
      zoomControlDiv = document.createElement('div');
      zoomControl = new CustomZoomControl(zoomControlDiv, map);
      return map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);
    }
  };

  google.maps.event.addDomListener(window, "load", init);

}).call(this);
