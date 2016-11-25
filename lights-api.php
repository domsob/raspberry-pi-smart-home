<?php

  function changeLightState($light, $on, $sat = '200', $bri = '150', $hue = '13524') {
    include('config.php');
    $curl = curl_init('http://'.$lightHost.'/api/'.$userToken.'/lights/'.$light.'/state');
    $data = '{"on":'.$on.', "sat":'.$sat.', "bri":'.$bri.',"hue":'.$hue.'}';
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  
    $response = curl_exec($curl);
    if (!$response) {
      die('Failure');
    }
  }

  function isLightOn($light) {
    include('config.php');
    $result = file_get_contents('http://'.$lightHost.'/api/'.$userToken.'/lights/'.$light);
    $json = json_decode($result);
    if($json->{'state'}->{'on'} == 1) {
      die('true');
    }
    die('false');
  }

  function alternatingLights($hue, $loops) {
    if(!is_numeric($loops)) {
      die('Failure');
    } elseif($loops > 25) {
      $loops = 25;
    } elseif($loops < 1) {
      $loops = 1;
    }

    changeLightState('1', 'false', '200', '150', $hue);
    changeLightState('2', 'false', '200', '150', $hue);
    sleep(1);
    
    for($i = 0; $i < $loops; $i++) {
      changeLightState('1', 'true', '200', '150', $hue);
      changeLightState('2', 'false', '200', '150', $hue);
      sleep(1);
      changeLightState('2', 'true', '200', '150', $hue);
      changeLightState('1', 'false', '200', '150', $hue);
      sleep(1);
    }

    changeLightState('1', 'false', '200', '150', $hue);
    changeLightState('2', 'false', '200', '150', $hue);
  }

  if(count($_GET) == 1) {
    isLightOn($_GET['light']); 
  } elseif(count($_GET) == 2) {
    if(isset($_GET['on'])) {
      changeLightState($_GET['light'], $_GET['on']);
    } else {
      alternatingLights($_GET['hue'], $_GET['loops']);
    }
  } elseif(count($_GET) == 5) {
    changeLightState($_GET['light'], $_GET['on'], $_GET['sat'], $_GET['bri'], $_GET['hue']);
  } else {
    die('Failure');
  }

?>