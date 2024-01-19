<?php
$_GET["page"] = filter_input(INPUT_GET,"page", FILTER_SANITIZE_URL);
$Hobby=filter_input(INPUT_GET,'Hobby', FILTER_SANITIZE_URL);
$CV=filter_input(INPUT_GET,'CV', FILTER_SANITIZE_URL);
$contact=filter_input(INPUT_GET,'contact', FILTER_SANITIZE_URL);
if ($_GET["page"] == "CV") {
    include 'CV.php';
} else if ($_GET["page"] == "Hobby") {
    include 'Hobby.php';
} else if ($_GET["page"] == "contact") {
    include 'contact.php';
} else if (!$_GET["page"]) {
    echo "erreur 404, Fais un effort !";
}
$routes=array(
    'Hobby.php'=> $Hobby,
    'contact.php'=> $contact,
    'CV.php'=>$CV
);
