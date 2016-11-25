$(document).ready(function() {
  
  var lightsRestUri = 'lights-api.php?';

  var hueRed = 0;
  var hueBlue = 47100;
  var hueYellow = 15740;

  function toggleLight(light) {
    var state = 'false';
    $.get(lightsRestUri + 'light=' + light, function(data) {
      if(data === 'false') {
        state = 'true';
      }
      $.get(lightsRestUri + 'light=' + light + '&on=' + state);
    });
  }

  function setLight(light, on, sat, bri, hue) {
    $.get(lightsRestUri + 'light=' + light + '&on=' + on + '&sat=' + sat + '&bri=' + bri + '&hue=' + hue);
  }

  $('button.set-light').click(function() {
    var self = $(this);
    setLight(self.attr('data-light'), self.attr('data-on'), self.attr('data-sat'), self.attr('data-bri'), self.attr('data-hue'));
  });

  $('#toggleCorridorBtn, #toggleLoungeBtn').click(function() {
    toggleLight($(this).attr('data-light'));
  });

  function alternatingLights(hue, loops) {
    $.get(lightsRestUri + 'hue=' + hue + '&loops=' + loops);
  }

  $('#alternateBlueBtn, #alternateYellowBtn, #alternateRedBtn').click(function() {
    alternatingLights($(this).attr('data-hue'), $('#alternateLoops').val());
  }); 

  $('#rainbowLightCorridorBtn, #rainbowLightLoungeBtn').click(function() {
    $.get(lightsRestUri + 'light=' + $(this).attr('data-light') + '&bri=' + $('#brightnessValueInput').val() + '&effect=' + 'colorloop');
  }); 

});