
var markers = [];
function launchMap() {
    //changer une adresse en lat et long
    var request = "https://maps.googleapis.com/maps/api/geocode/json?address=25+Rue+Jules+Bouillon+1050+Ixelles,+BE&key=AIzaSyC8SSrauy-GNUtcYNZRKro0LsiqHKC1Bcg"
    $.ajax({
        url: request
    }).done(function (data) {
        try {
            //recup lat-lng 
            var ixelles = data.results[0].geometry.viewport.northeast;

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: ixelles
            });
            var marker = new google.maps.Marker({
                position: ixelles,
                map: map
            });
            var opt = {  minZoom: 18 };
            map.setOptions(opt);
        }
        catch (e) {
            //si point random = point dans la mer 
            infoWindow.setContent("No Location Found/Valid Adress");
        }


    });


}

