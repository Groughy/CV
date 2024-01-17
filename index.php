<?php

$_GET["page"] = filter_input(INPUT_GET,"page", FILTER_SANITIZE_URL);
if ($_GET["page"] == "CV") {
    include 'CV.php';
} else if ($_GET["page"] == "Hobby") {
    include 'Hobby.php';
} else if ($_GET["page"] == "contact") {
    include 'contact.php';
} else if ( $_GET["page"] == false) {
    include 'index.php';
} else {
    echo "erreur 404, Fais un effort !";
}
?>
