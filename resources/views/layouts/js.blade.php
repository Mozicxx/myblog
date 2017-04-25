<!-- JS includes -->
<script src="/js/vendor/jquery-1.11.2.min.js">
</script>
<script src="/js/vendor/bootstrap.min.js">
</script>
<script src="/js/jquery.magnific-popup.js">
</script>
<script src="/js/jquery.easing.1.3.js">
</script>
<script src="/js/slick.min.js">
</script>
<script src="/js/jquery.collapse.js">
</script>
<script src="/js/bootsnav.js">
</script>
<!-- paradise slider js -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8">
</script>
<script src="/js/gmaps.min.js">
</script>
<script>
  function showmap() {
    lat = 40.0532500083;
    lng = 116.4073455334;
    var myLatLng = new google.maps.LatLng(lat, lng);
    var myOptions = {
      zoom: 14,
      scrollwheel: false,
      center: myLatLng,
      mapTypeId: google.maps.MapTypeId.TERRAIN
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    var marker = new google.maps.Marker({
      position: myLatLng,
      title: "Hello World!"
    });
    marker.setMap(map); 

    var contentString = '<div id="content">' +'<div>' +
    '</div>' +
    '<h2>请不要查我水表~</h2>' +
    '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });

        $('.mapheight').css('height', '350');
        $('.maps_text h3').hide();
  }
</script>
<script src="/js/plugins.js">
</script>
<script src="/js/main.js">
</script>