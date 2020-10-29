/* $(function() {
//var selectedClass = "";
//$(".filter").click(function(){
//selectedClass = $(this).attr("data-rel");
//$("#gallery").fadeTo(100, 0.1);
$("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('animation');
$("#gallery").fadeTo(300, 1);
}, 300);
});
});*/


  var myLatlng = new google.maps.LatLng( 52.812467, -2.1218766);
  var mapOptions = {
    zoom: 4,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      title:"Studio Location"
  });

  // To add the marker to the map, call setMap();
  marker.setMap(map);



