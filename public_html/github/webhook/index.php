<?php

#payload 
$data = json_decode(file_get_contents('php://input'), 1);

# needs work
function verify($reqHead)
{
  #test http method
  if ($reqHead['REQUEST_METHOD'] == "POST") {
    #check secret
    if($reqHead[X-Hub-Signature]==$GLOBALS["secret_token])
   {
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
    echo ("not verified");
  }
}

#entry point
run(verify($_SERVER), $data);
