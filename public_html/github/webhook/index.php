<?php

#payload 
$data = json_decode(file_get_contents('php://input'), 1);

# needs work
function verify($reqHead)
{
  #test http method
  if ($reqHead['REQUEST_METHOD'] == "POST") {
    #check secret
    if($reqHead["X-Hub-Signature"]==$GLOBALS["secret_token"])
   {
      //printf("yes");
      return true;
   }
  }
}


function run($verified, $data)
{
  if ($verified == true) {
    #find branch
    $branch = explode("/", $data["ref"])[2];
    #Set git action
    $action = "pull ";
    #create command string
    $commands = "git " . $action . "ghubpull " . $branch;
    #verify branch (live site only for master)
    if ($branch == "master") {
      #run shell commands
      $output = shell_exec($commands);
    } else {
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

function findGeoLocation($ip)
{

  // make request to api 
  $result = json_decode(shell_exec("curl https://tools.keycdn.com/geo.json?host=$ip"), 1);
  return $result;
}
#entry point
run(verify($_SERVER), $data);
