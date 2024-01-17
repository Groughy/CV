<?php 
$metaTitle = 'Formulaire de contact';
$metaDescription = 'Remplissez le formulaire et vous serez rappelé !';
include 'header.php';?>
<link rel="stylesheet" href="/CV/contact.css"/> 
<body>
        <h1><?php echo $metaTitle?></h1>
        <div class="formulaire"><p>Merci d'être venu visiter mon site. Pour plus d'informations, veuillez remplir le formulaire si dessous avec le plus d'élément possible.</p>
        <form action="submit_contact.php" method="POST">
	    <label for="Gender-select">Civilité</label>
	    <select name="Gender" id="Gender-select">
	    <option value="">--C'est vide ça !</option>
	    <option value="Homme">Homme</option>
	    <option value="Femme">Femme</option>
	    <option value="Autre">Autre</option>
	    </select>
            <label for="email">E-mail</label>
	    <input type="email" id="email" name="email">
	    <label for="Name">Nom et Prénom</label><br>
            <input type="text" id="Name" name="Name"><br>
        <p>Vous me contactez pour :</p>
            <input type="radio" id="rens" name="whyfor" value="Renseignement">
            <label for="Renseignement">Un renseignement</label><br>
            <input type="radio" id="com" name="whyfor" value="Commentaire">
            <label for="Commentaire">Un commentaire</label><br>

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
