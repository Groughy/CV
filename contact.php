<?php 
$metaTitle = 'Formulaire de contact';
$metaDescription = 'Remplissez le formulaire et vous serez rappelé !';
include 'header.php';
$nameErr = $emailErr = $genderErr = $whyforErr = "";
$name = $email = $gender = $whyfor = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Gender"])) {
    $genderErr = "Définis toi !";

  } else {
    $gender = test_input($_POST["Gender"]);
  }

  if (empty($_POST["Name"])) {
    $nameErr = "Quel est ton nom ?!";
  } else {
    $name = test_input($_POST["Name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Et je te contacte comment après ?";
  } else {
    $email = test_input($_POST["email"]);
  }

 if (empty($_POST["other"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["other"]);
  }

$formErrors = array(
"genderErr" => $genderErr,
"nameErr" => $nameErr,
"emailErr" => $emailErr,
"whyforErr" => $whyforErr

);}
?>
<link rel="stylesheet" href="/CV/contact.css"/> 
<body>
        <h1><?php echo $metaTitle?></h1>
        <div class="formulaire"><p>Merci d'être venu visiter mon site. Pour plus d'informations, veuillez remplir le formulaire si dessous avec le plus d'élément possible.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
	    <label for="Gender-select">Civilité</label>
	    <select name="Gender" id="Gender-select">
	    <option value="">--C'est vide ça !</option>
	    <option value="Homme">Homme</option>
	    <option value="Femme">Femme</option>
	    <option value="Autre">Autre</option>
	    </select>
	    <span class="error">* <?php echo $formErrors["genderErr"];?></span>
            <label for="email">E-mail</label>
	    <input type="email" id="email" name="email">
	    <span class="error">* <?php echo $formErrors["emailErr"];?></span>
	    <label for="Name">Nom et Prénom</label><br>
            <input type="text" id="Name" name="Name"><br>
	    <span class="error">* <?php echo $formErrors["nameErr"];?></span>
        <p>Vous me contactez pour :</p>
            <input type="radio" id="rens" name="whyfor" value="Renseignement">
            <label for="Renseignement">Un renseignement</label><br>
            <input type="radio" id="com" name="whyfor" value="Commentaire">
            <label for="Commentaire">Un commentaire</label><br>
	    <span class="error">* <?php echo $formErrors["whyforErr"];?></span>
            <p>Avez-vous quelque chose à dire ?</p>
            <textarea name="other" style="width: 60%; height: 400px;">
            J'aime ma vie !
            </textarea><br>
            <div class="button">
                <button type="submit">Envoyer</button>
            </div>
        </form>
        
       
    <a href="mailto:sebastien.journiac@le-campus-numérique.fr?subject=Contact&body=J%27aime%20ma%20vie!">Me contacter par email</a></div>
    </body>
<?php include 'footer.php';?>
