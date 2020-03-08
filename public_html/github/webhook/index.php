<?php
include_once __DIR__ . "../../../../env.php";

#payload 
$data = json_decode(file_get_contents('php://input'), 1);

#entry point
run(verify($secret), $data, $remote);

function verify($secret){
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];
    if ($signature) {
      $hash = "sha1=".hash_hmac('sha1', file_get_contents("php://input"), $secret);
      return strcmp($signature, $hash) === 0;
    }
  }
  return false;
}

function run($verified, $data, $remote){
  echo($remote);
  // if verified then build git command
  if ($verified == true) {
    $branch = explode("/", $data["ref"])[2];
    $action = "pull ";
    $commands = "git " . $action . $remote . $branch;
    if ($branch == " sandbox") {
      echo(" " . $commands);
      shell_exec($commands);
    } else {
      echo(" " . $branch);
      echo ("branch error");
    }
  } else {
    $clientIpAddress = findRequestIpAddress($_SERVER);
    $clientIpData = findGeoLocation($clientIpAddress);
    echo ("<h1>not verified.</h1> <br> 
          <strong> finding request IP... </strong> <br>" . 
          "IP Address: " . $clientIpAddress . 
          "<br> <strong>finding location ... </strong>" . 
          "<br> location: " . $clientIpData["data"]["geo"]["city"] . ", " . $clientIpData["data"]["geo"]["region_code"] . 
          "<br> <strong> Finding ISP... </strong> <br>" . 
          "ISP: " . $clientIpData["data"]["geo"]["isp"]
        );
  }
}

function findRequestIpAddress($reqHeader)
{
  if (!empty($reqHeader['REMOTE_ADDR'])) {
    $ip  = $reqHeader['REMOTE_ADDR'];
  } elseif (!empty($reqHeader['HTTP_X_FORWARDED_FOR'])) {
    $ip = $reqHeader['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip  = $reqHeader['HTTP_CLIENT_IP'];
  }
  return $ip;
}

function findGeoLocation($ip){
  // make request to api 
  $result = json_decode(shell_exec("curl https://tools.keycdn.com/geo.json?host=$ip"), 1);
  return $result;
}
