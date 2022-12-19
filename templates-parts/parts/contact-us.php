<?php 
$locations   = get_field( 'mapa' );
$form        = get_field( 'form' );
$office       = get_field( 'office' );
?>

<section id="contact-us">
    <div class="contact-us__wraper">
        <div class="contact-us__col">
            <?php if($form ){ ?>
            <?php echo $form; ?>
            <?php }?>
        </div>
        <div class="contact-us__col">
            <div class="map-container">
                <?php if($office ) {  ?>
                <div class="map-top">
                    <?php if($office['address']) { ?>
                    <div class="left">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="21" viewBox="0 0 14 21">
                            <image id="Layer_860_copy" data-name="Layer 860 copy" width="14" height="21" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAVCAYAAAB2Wd+JAAAABHNCSVQICAgIfAhkiAAAAcRJREFUOE9900soRkEYxnGSsrEhURILpdggSSxEko17UUJJuaZIpMRGSdi4RcKG5JII5RLJbaEkC4qVLJSwUmwo/k/NfB2Hz9SvmTkz75z3zMzx9flZYulWIwH+ZuiD+hIzuLLTfR1xjbTrsIZFPJqxUOoSFGESI3puA+tpV6ECt64sbDeaxizmFazAOCwgD3dmVgN1ummfUI/iCxHYQrkC9eon9JiJQ9QxGDeTlb4W1KeodCBSgcfQ4DXS0IccvJmJAdQ76MahWXRGgUcoxjNqkQJ9r7NM0dHOKuVgrCrwFNq1ByRBqedD6ato4gZacIYwrChwE8PYNRO7qLOgI9GGlEJZKVWVDLQrsA3aaqVpi1LPhV142TGmdB80EAUdRwHsoTvm/WiG0FtHhb0A03RuMOAtwjxvpk5EpQ1UZwL6tlcvwYE830cTzpx3VVfpAoNeAvW2VOgEPHdV7XjoD8jGiys4iP4eanDuDlRfO/aOdldgL32dp2fnnalqbjh02GXQZqnoqJZQiHu7oDtQz1uRDB28yhz0A+sOe8pfgbrUB+jEJ/qRCX3Cv4Ea1ES9QQvrCm47g9T+6412zhgNP+iX+1W+AcUdWn3hlWSPAAAAAElFTkSuQmCC" />
                        </svg>
                        <span><?php echo $office['address']; ?></span>
                    </div>
                    <?php } ?>
                    <?php if($office['link_to_google_map']) {?>
                    <div class="right">
                        <a href="<?php echo $office['link_to_google_map']['url']; ?>" target="<?php echo $office['link_to_google_map']['target'] ? $office['link_to_google_map']['target'] : '_self'; ?>" class="btn"><?php echo $office['link_to_google_map']['title']; ?></a>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfHh56hTMdOgX__L2r4Lcw20Sdwhvw64g&callback=initMap"></script>
<script>
var map;

var myStyle = [{
    featureType: "poi",
    elementType: "labels",
    stylers: [{
        visibility: "off"
    }]
}];

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: <?php echo $locations['zoom']; ?>,
        center: new google.maps.LatLng(<?php echo $locations['lat']; ?>, <?php echo $locations['lng']; ?>),
        scrollwheel: false,
        zoomControl: true
    });

    var features = [{
            position: new google.maps.LatLng(<?php echo $locations['lat']; ?>, <?php echo $locations['lng']; ?>),
            icon: '<?php echo get_template_directory_uri(); ?>/src/img/pin.webp'
        },

    ];

    features.forEach(function(feature) {
        var marker = new google.maps.Marker({
            position: feature.position,
            icon: feature.icon,
            map: map
        });
    });

    map.set('styles', [{
        "featureType": "landscape",
        "stylers": [{
            "saturation": -100
        }, {
            "lightness": 65
        }, {
            "visibility": "on"
        }]
    }, {
        "featureType": "poi",
        "stylers": [{
            "saturation": -100
        }, {
            "lightness": 51
        }, {
            "visibility": "simplified"
        }]
    }, {
        "featureType": "road.highway",
        "stylers": [{
            "saturation": -100
        }, {
            "visibility": "simplified"
        }]
    }, {
        "featureType": "road.arterial",
        "stylers": [{
            "saturation": -100
        }, {
            "lightness": 30
        }, {
            "visibility": "on"
        }]
    }, {
        "featureType": "road.local",
        "stylers": [{
            "saturation": -100
        }, {
            "lightness": 40
        }, {
            "visibility": "on"
        }]
    }, {
        "featureType": "transit",
        "stylers": [{
            "saturation": -100
        }, {
            "visibility": "simplified"
        }]
    }, {
        "featureType": "administrative.province",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [{
            "visibility": "on"
        }, {
            "lightness": -25
        }, {
            "saturation": -100
        }]
    }, {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
            "hue": "#ffff00"
        }, {
            "lightness": -25
        }, {
            "saturation": -97
        }]
    }]);

}
</script>
