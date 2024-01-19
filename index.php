<?php
$page = filter_input(INPUT_GET,"page", FILTER_SANITIZE_URL);
$Hobby=filter_input(INPUT_GET,'Hobby', FILTER_SANITIZE_URL);
$CV=filter_input(INPUT_GET,'CV', FILTER_SANITIZE_URL);
$contact=filter_input(INPUT_GET,'contact', FILTER_SANITIZE_URL);

$routes=array(
    'Hobby.php'=> "Hobby",
    'contact.php'=> "contact",
    'CV.php'=> "CV");
foreach ($routes as $key => $value){
if ($page == $value){
    include "./".$key;
}else{
    echo "404 PAS TROUVE, VA AILLEURS !";
}
};