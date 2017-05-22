
var markers = [];
function launchMap() {
    var request = "https://maps.googleapis.com/maps/api/geocode/json?address=25+Rue+Jules+Bouillon+1050+Ixelles,+BE&key=AIzaSyC8SSrauy-GNUtcYNZRKro0LsiqHKC1Bcg"



    $.ajax({
        url: request
    }).done(function (data) {
        try {
            //recup et afficher adresse
            console.log(data.results[0].geometry.viewport.northeast);
            var ixelles = data.results[0].geometry.viewport.northeast;

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: ixelles
            });
            var marker = new google.maps.Marker({
                position: ixelles,
                map: map
            });
        }
        catch (e) {
            //si point random = point dans la mer 
            infoWindow.setContent("No Location Found/Valid Adress");
        }


    });


}

