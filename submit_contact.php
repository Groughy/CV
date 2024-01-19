<?php include 'header.php';


?>
<body>
<h1>Message bien reçu !</h1>

<div class="card">

    <div class="card-body">
        <h5 class="card-title">Rappel de vos informations</h5>
	<p class="card-text"><b>Genre</b> : <?php echo $_POST['Gender']; ?></p>
        <p class="card-text"><b>Nom et Prénom</b> : <?php echo $_POST['Name']=filter_input(INPUT_POST, 'Name'); ?></p>
        <p class="card-text"><b>E-mail</b> : <?php echo $_POST['email']=filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); ?></p>
	<p class="card-text"><b>Raison</b> : <?php echo $_POST['whyfor']; ?></p>
	<p class="card-text"><b>Message</b> : <?php echo $_POST['other']=filter_input(INPUT_POST, 'other', FILTER_SANITIZE_SPECIAL_CHARS); ?></p>
 </div>
</div>
</body>
<?php


 file_put_contents ('/var/www/phpdebase/contact/contact_Y-m-d-H-i-s.txt', $_POST['Gender'],FILE_APPEND);
 file_put_contents ('/var/www/phpdebase/contact/contact_Y-m-d-H-i-s.txt', $_POST['Name'],FILE_APPEND);
 file_put_contents ('/var/www/phpdebase/contact/contact_Y-m-d-H-i-s.txt', $_POST['email'],FILE_APPEND);
 file_put_contents ('/var/www/phpdebase/contact/contact_Y-m-d-H-i-s.txt', $_POST['whyfor'],FILE_APPEND);
 file_put_contents ('/var/www/phpdebase/contact/contact_Y-m-d-H-i-s.txt', $_POST['other'],FILE_APPEND);
include 'footer.php'
?>
