(function($) {
        "use strict";

        if ($("#googleMap").length > 0) {
            let lat = '42.008315';
            let long = '-88.163807';
            let myCenter = new google.maps.LatLng(
                lat, long
            );

            function changeMarker(newLogo) {
                "use strict";
                var marker = new google.maps.Marker({
                    position: myCenter,
                    icon: newLogo
                });
                var map = new google.maps.Map(document.getElementById("googleMap"), {
                    center: myCenter,
                    zoom: 12,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    rotateControl: false,
                    fullscreenControl: false,
                });
                marker.setMap(map);
            }

            google.maps.event.addDomListener(window, "load", function () {
                changeMarker("img/contact/location-color-1.png");
            });
        }

})(jQuery);