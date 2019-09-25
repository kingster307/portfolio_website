<?php

#this gets thes payload request 
$data=json_decode(file_get_contents('php://input'),1);

#find URL from payload
#$data["repository"]["html_url"]

#find branch
#explode("/",$data["ref"])[2]

#find if post 
#$_SERVER['REQUEST_METHOD']

function verify($reqHead){
  #test http method
  if($reqHead['REQUEST_METHOD'] == "POST")
  {
   #need to check secret
   return true;
  }
 }


function run($verified, $data)
 {
  if($verified == true)
  {
   #find branch
   # echo(explode("/",$data["ref"])[2]);
    $branch = explode("/",$data["ref"])[2];
   #take in URL
   # $url ="https://github.com/kingster307/portfolio_website.git";
   #take in git action
    $action = "pull "; 
   #put it all in array
    $commands = "git " . $action . "ghubpull " . $branch;
   #verify branch (live site only for master)
    if($branch == "master")
    {
     #run shell commands line 40
     $output = shell_exec($commands); 
     printf("output " . $output);
    }else{
     echo("wrong branch ");    
    }    
  }else{
   echo("not verified");
  }

 }

run(verify($_SERVER), $data);

?>

