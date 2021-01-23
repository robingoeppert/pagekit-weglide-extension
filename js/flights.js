window.addEventListener("load", function() {
    var baseUrl = window.$pagekit.url;
    var flightsUrl = baseUrl + '/weglide/flights';

    var xmlHTTP = new XMLHttpRequest();
    	    
    xmlHTTP.open('GET', flightsUrl, true);
    xmlHTTP.responseType = 'json';
    
    xmlHTTP.onload = function(e) {
        var flightsData = this.response;

        flightsData.forEach(flight => {
            var userName = flight.user.name;
            var distance = Math.round(flight.contest.distance);

            $('#weglide-flights').append(`<li>${distance} km, ${userName}</li>`);
        });
    };
    
    xmlHTTP.send();
});