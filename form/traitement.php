<?php

 $_POST['Name']=filter_input(INPUT_POST, 'Name');
 $_POST['Message']=filter_input(INPUT_POST, 'Message',FILTER_SANITIZE_SPECIAL_CHARS);


 if (!empty($_POST['Name'])){

header('Location: result.php');

}else{

echo "C'EST QUOI TON NOM ?!";
include 'formulaire.html'; 

 }

