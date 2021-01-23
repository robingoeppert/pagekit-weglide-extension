window.addEventListener("load", function () {
    var baseUrl = window.$pagekit.url;
    var flightsUrl = baseUrl + '/weglide/flights';

    var xmlHTTP = new XMLHttpRequest();

    xmlHTTP.open('GET', flightsUrl, true);
    xmlHTTP.responseType = 'json';

    xmlHTTP.onload = function (e) {
        var flightsData = this.response;

        flightsData.forEach(flight => {
            var flightId = flight.id;
            var userName = flight.user.name;
            var distance = Math.round(flight.contest.distance);

            $('#weglide-flights tbody')
                .append(`<tr>
                    <td>${distance} km</td>
                    <td>${userName}</td>
                    <td><a href="https://beta.weglide.org/flights/${flightId}" target="_blank" class="uk-icon-plane"></a></td>
                </tr>`);
        });
    };

    xmlHTTP.send();
});