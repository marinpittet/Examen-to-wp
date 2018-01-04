 // Ubicación inicial del mapa en Santiago de Chile
 var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.4488897, lng: -70.6692655},
          zoom: 10
        });
      };

// una vez cargada la página 
$(document).ready(function () {
	var keySky = 'a94237d3a71a6f66d9fd4a21a08663e8';
	var urlSky = 'https://cors-anywhere.herokuapp.com/https://api.darksky.net/forecast/';
	var coords = {
		scl: '-33.4488897,-70.6692655',
		ari: '-18.4782534,-70.31259879999999',
		ant: '-23.6509279,-70.39750219999996',
		cop: '-27.3665763,-70.33215869999998',
		ser: '-29.9026691,-71.25193739999997',
		val: '-33.047238,-71.61268849999999',
		ran: '-34.17013240000001,-70.7406259',
		tal: '-35.4232444,-71.64848039999998',
		ccp: '-36.8201352,-73.0443904',
		tem: '-38.7359018,-72.59037390000003', 
		via: '-39.8195857,-73.2452103',
		ptm: '-41.468917,-72.9411364',
		ays: '-45.5712254,-72.068265',
		puq: '-53.1638329,-70.91706829999998'
	}

	var queryParams = ['exclude=[minutely, hourly, daily, alerts, flags]', 'lang=es', 'units=auto']
	var icon = ($('img.icon').attr("src"));

	$('#select').on('change', function () {
		
		$('#clima').css("display", "block");
		
		$.ajax({
			url: urlSky + keySky + '/' + coords[$(this).val()] + '?' + queryParams[0] + '&' + queryParams[1] + '&' + queryParams[2],
			type: 'GET',
			success: function(data) {			
				$('#resumen').text(parseInt(data.currently.temperature) + '°' + ' ' + data.currently.summary)
				$('#ST').text(data.currently.apparentTemperature + '°')
				$('#PL').text(data.currently.precipProbability + '%')
				$('#HR').text(data.currently.precipProbability + '%')
				$('img.icon').attr("src", "images/256x256/" + data.currently.icon + ".png")
				console.log(data.currently.icon)
				console.log(icon)


				map = new google.maps.Map(document.getElementById('map'), {
		          center: {lat: (data.latitude), lng: (data.longitude)},
		          zoom: 14
		        });

		        marker = new google.maps.Marker({
		        	position: {lat: (data.latitude), lng: (data.longitude)},
		        	map: map
		        });
			}
		})
	})
});      

