$(document).ready(function(){
    if ("geolocation" in navigator) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var userLat = position.coords.latitude;
        var userLng = position.coords.longitude;
        buildMap(userLat, userLng);
      });
    } else {
      buildMap(40.440625, -79.995886); 
    }
  });
  
  var sw = document.body.clientWidth,
      bp = 550,
      $map = $('.map');
  var static = "https://maps.google.com/maps/api/staticmap?center=40.440625,-79.995886&zoom=13&markers=40.440625,-79.995886&size=640x320&sensor=true";
  var embed = '<iframe width="980" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=pittsburgh,+pa&amp;aq=&amp;sll=38.003385,-79.420925&amp;sspn=5.54782,11.612549&amp;ie=UTF8&amp;hq=&amp;hnear=Pittsburgh,+Allegheny,+Pennsylvania&amp;t=m&amp;ll=40.440676,-79.995918&amp;spn=0.117583,0.336113&amp;z=12&amp;iwloc=A&amp;output=embed">';
  
  function buildMap(userLat, userLng) {
    if(sw > bp) {
      if($('.map-container').length < 1) {
        buildEmbed(userLat, userLng);
      }
    } else {
      if($('.static-img').length < 1) { 
        buildStatic(userLat, userLng);
      }
    }
  };
  
  function buildEmbed(userLat, userLng) { 
    var embedUrl = "https://maps.google.com/maps?q=" + userLat + "," + userLng + "&z=13&output=embed";
    var embedIframe = '<iframe width="980" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="' + embedUrl + '"></iframe>';
    $('<div class="map-container"/>').html(embedIframe).prependTo($map);
  };
    
  function buildStatic(userLat, userLng) { 
    var staticUrl = "https://maps.google.com/maps/api/staticmap?center=" + userLat + "," + userLng + "&zoom=13&markers=" + userLat + "," + userLng + "&size=640x320&sensor=true";
    var staticImg = '<img class="static-img" src="' + staticUrl + '" />';
    $('<a/>').attr('href', staticUrl).html(staticImg).prependTo($map); 
  }
  
  $(window).resize(function() {
    sw = document.body.clientWidth;
    buildMap();
  });