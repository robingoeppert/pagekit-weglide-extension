window.addEventListener('load', function () {
    $('div[data-weglide-flights-widget][onload]').trigger('onload');
});


function loadFlightsData(widgetElement) {
    var baseUrl = window.$pagekit.url;
    var flightsUrl = baseUrl + '/weglide/flights';

    var xmlHTTP = new XMLHttpRequest();

    xmlHTTP.open('GET', flightsUrl, true);
    xmlHTTP.responseType = 'json';

    xmlHTTP.onload = function (e) {
        var flightsData = this.response;

        $(widgetElement).append(`
            <table class="uk-table">
                <caption style="caption-side: bottom;">Data by <a href="https://weglide.org" target="_blank">WeGlide</a></caption>
                <tbody></tbody>
            </table>
        `);

        var tableBody = $(widgetElement).find('table tbody');

        flightsData.forEach(flight => {
            var flightId = flight.id;
            var userName = flight.user.name;
            var distance = Math.round(flight.contest.distance);

            $(tableBody).append(`
                <tr>
                    <td>${distance} km</td>
                    <td>${userName}</td>
                    <td><a href="https://beta.weglide.org/flights/${flightId}" target="_blank" class="uk-icon-plane"></a></td>
                </tr>
            `);
        });
    };

    xmlHTTP.send();
};