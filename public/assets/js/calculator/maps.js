// настройки калькулятора
// координаты широты и долготы вашего города (компании) на карте в десятичных градусах.
var calcCoordX = 50.4019514; var calcCoordY = 30.3926095;
var speedN = 60; // средняя скорость движения авто.
var calcTarifDistance = 10; // км, расстояние включенное в стоимость тарифа.
var calcTarifRatio = 3; // коэф. умножения стоимости тарифа.
//AIzaSyBPCgvVLXpoMt95uOMOpwuJJpO3hbEtjNo
var directionsDisplayy;
var directionsServicee = new google.maps.DirectionsService();
var geocoder = new google.maps.Geocoder();
var map;
var is_dark = 0;
function initialize() {
    directionsDisplayy = new google.maps.DirectionsRenderer();
    var chicagot = new google.maps.LatLng(calcCoordX, calcCoordY);
    var myOptions = {
        zoom:10,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: chicagot
    }
    map = new google.maps.Map(document.getElementById("mapa"), myOptions);
    directionsDisplayy.setMap(map);
    let checker = document.getElementById('dark-mode-switch');
    if(checker.checked){
        dark_map();
    }
    else {
        light_mode();
    }
}

function calcRoute() {
    // Вид транспорта из select => text
    var tonn = document.getElementById("ves").options [document.getElementById("ves").selectedIndex].text;
    // Вид транспорта из select => value
    var vesValueA = document.getElementById("ves").value.split('|');
    var calcTarifCost = parseFloat(vesValueA[0]); // стоимость тарифа (первый параметр из value).
    var costKmN = parseFloat(vesValueA[1]); // стоимость за 1км. (второй параметр из value).

    var from = document.getElementById("from").value;
    var to = document.getElementById("to").value;
    var request = {
        origin:from,
        destination:to,
        travelMode: google.maps.TravelMode.DRIVING
    };
    directionsServicee.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplayy.setDirections(response);
            var route = response.routes[0];
            var summaryPanel = document.getElementById("results");
            function removeSpaces(str) {
                var res = str.replace(/\s/g, "");
                return res;
            }
            for (var i = 0; i < route.legs.length; i++) {
                var routeSegment = i+1;
                // возвращает расстояние в формате "xx,x км"
                var distanceS = route.legs[i].distance.text;
                distanceS = removeSpaces(distanceS);
                distanceS = parseFloat(distanceS.replace(/,/,'.')); // преобразование к дробному числу хх.х
                if(distanceS<=calcTarifDistance){
                    var costDostavkaN = calcTarifCost*calcTarifRatio;
                }else{
                    // Стоимость доставки = расстояние с карты * цена за 1 км. (т.е. значение value из выпадающего списка для выбранного типа авто).
                    var costDostavkaN = calcTarifCost*calcTarifRatio + (distanceS-calcTarifDistance)*costKmN;
                }
                costDostavkaN = Math.round(costDostavkaN);
                // разделить тысячные и сотые в числе (пробел между тысячными и сотыми, например 1567 => 1 567)
                var costDostavkaS = costDostavkaN.toString().replace(/(\d{3})$/, " $1");
                // Ориентировочное время в пути при средней скорость движения км/час.
                var timeN = distanceS/speedN;
                var timeN = Math.ceil(timeN);

                let res_str = "<hr class=\"my-4\">";
                res_str +="<h6 class=\"text mb-3 text-uppercase fw-semibold\">Results</h6>";
                res_str += "<ol class=\"ps-3 text\">";
                res_str += "<li class=\"py-1\">";
                res_str += "<span class=\"text\">From: <span class=\"float-end\">" + (route.legs[i].start_address) + "</span></span>";
                res_str += "</li>";
                res_str += "<li class=\"py-1\">";
                res_str += "<span class=\"text\">To: <span class=\"float-end\">" + (route.legs[i].end_address) + "</span></span>";
                res_str += "</li>";
                res_str += "<li class=\"py-1\">";
                res_str += "<span class=\"text\">Distance: <span class=\"float-end\">" + (route.legs[i].distance.text) + "</span></span>";
                res_str += "</li>";
                res_str += "<li class=\"py-1\">";
                res_str += "<span class=\"text\">By: <span class=\"float-end\">" + (tonn) + "</span></span>";
                res_str += "</li>";
                res_str += "<li class=\"py-1\">";
                res_str += "<span class=\"text\">Time: <span class=\"float-end\">" + (timeN) + " hours at a speed of " + speedN + " km/h</span></span>";
                res_str += "</li>";
                res_str += "<li class=\"py-1\">";
                res_str += "<span class=\"text\">Price: <span class=\"float-end\">" + costDostavkaS + " &#x20B4;</span></span>";
                res_str += "</li>";
                res_str += "</ol>";

                summaryPanel.innerHTML = res_str;

                successMessage();
            }
        } else {
            errorMessage();
        }

    });
}

document.getElementById('dark-mode-switch').addEventListener('change', function (event){
    event.target.checked ? dark_map() : initialize();
});
document.getElementById('light-mode-switch').addEventListener('change', function (event){
    event.target.checked ? light_mode() : initialize();
});
function dark_map() {
    var myOptions = {
        styles: [
            {elementType: "geometry", stylers: [{color: "#242f3e"}]},
            {elementType: "labels.text.stroke", stylers: [{color: "#242f3e"}]},
            {elementType: "labels.text.fill", stylers: [{color: "#746855"}]},
            {
                featureType: "administrative.locality",
                elementType: "labels.text.fill",
                stylers: [{color: "#d59563"}],
            },
            {
                featureType: "poi",
                elementType: "labels.text.fill",
                stylers: [{color: "#d59563"}],
            },
            {
                featureType: "poi.park",
                elementType: "geometry",
                stylers: [{color: "#263c3f"}],
            },
            {
                featureType: "poi.park",
                elementType: "labels.text.fill",
                stylers: [{color: "#6b9a76"}],
            },
            {
                featureType: "road",
                elementType: "geometry",
                stylers: [{color: "#38414e"}],
            },
            {
                featureType: "road",
                elementType: "geometry.stroke",
                stylers: [{color: "#212a37"}],
            },
            {
                featureType: "road",
                elementType: "labels.text.fill",
                stylers: [{color: "#9ca5b3"}],
            },
            {
                featureType: "road.highway",
                elementType: "geometry",
                stylers: [{color: "#746855"}],
            },
            {
                featureType: "road.highway",
                elementType: "geometry.stroke",
                stylers: [{color: "#1f2835"}],
            },
            {
                featureType: "road.highway",
                elementType: "labels.text.fill",
                stylers: [{color: "#f3d19c"}],
            },
            {
                featureType: "transit",
                elementType: "geometry",
                stylers: [{color: "#2f3948"}],
            },
            {
                featureType: "transit.station",
                elementType: "labels.text.fill",
                stylers: [{color: "#d59563"}],
            },
            {
                featureType: "water",
                elementType: "geometry",
                stylers: [{color: "#17263c"}],
            },
            {
                featureType: "water",
                elementType: "labels.text.fill",
                stylers: [{color: "#515c6d"}],
            },
            {
                featureType: "water",
                elementType: "labels.text.stroke",
                stylers: [{color: "#17263c"}],
            }
        ]
    };
    map.setOptions(myOptions);

}
function light_mode() {
    var myOptions = {
        styles: []
    };
    map.setOptions(myOptions);
}

function successMessage(){
    Command: toastr["success"]("That's it! Check information.", "Success")

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 1500,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
}
function errorMessage(){
    Command: toastr["error"]("Opps! We can not find that address.", "Error")

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 1500,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
}
//window.onload = initialize;
function addHandler(ev, handler){
    try{
        window.addEventListener(ev, handler, false);
    }catch(e){
        window.attachEvent('on'+ev, handler);
    }
}
addHandler('load', initialize);
