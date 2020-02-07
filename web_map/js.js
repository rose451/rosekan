
var map = L.map('map').setView([0,36],6);
// counties_layer = L.geoJSON(point).addTo(map);

function layerCreator(path){
	$(function(){
		$.ajax({
			type: "GET",
			url: path,
			success: function(data){
				// var jsonObject = JSON.stringify(data)
				counties = JSON.parse(data);
				counties_layer = L.geoJSON(counties).addTo(map);

			}
		})
	});

}

layerCreator("counties.php");
layerCreator("hotels.php");