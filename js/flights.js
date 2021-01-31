window.addEventListener('load', function () {
    $('div[data-weglide-flights-widget][onload]').trigger('onload');
});


function loadFlightsWidget(widgetElement, widgetId, flightDetailsUrl, creditsUrl) {
    var baseUrl = window.$pagekit.url;
    var flightsUrl = baseUrl + '/weglide/flights?widget_id=' + widgetId;

    var xmlHTTP = new XMLHttpRequest();

    xmlHTTP.open('GET', flightsUrl, true);
    xmlHTTP.responseType = 'json';

    xmlHTTP.onload = function (e) {
        if (!this.response.error) {
            var flightsData = this.response.data;

            // Removes spinner
            $(widgetElement).empty();

            $(widgetElement).append(createFlightsDataTable(flightsData, flightDetailsUrl, creditsUrl));
        }
    };

    xmlHTTP.send();
};

function createFlightsDataTable(flightsData, flightDetailsUrl, creditsUrl) {
    var table = $(`
        <table class="uk-table">
            <caption style="caption-side: bottom;">Data by <a href="${creditsUrl}" target="_blank">WeGlide</a></caption>
            <tbody></tbody>
        </table>
    `);

    var tableBody = table.find('tbody');

    flightsData.forEach(flight => {
        var flightId = flight.id;
        var userName = flight.user.name;
        var distance = Math.round(flight.contest.distance);

        $(tableBody).append(`
            <tr>
                <td>${distance} km</td>
                <td>${userName}</td>
                <td><a href="${flightDetailsUrl}/${flightId}" target="_blank" class="uk-icon-plane"></a></td>
            </tr>
        `);
    });

    return table;
};