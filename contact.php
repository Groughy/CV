<?php
$metaTitle = 'Formulaire de contact';
$metaDescription = 'Remplissez le formulaire et vous serez rappelé !';
include 'header.php';
$formErrors = array();
$name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$gender = filter_input(INPUT_POST, 'Gender', FILTER_SANITIZE_SPECIAL_CHARS);
$whyfor = filter_input(INPUT_POST, 'whyfor', FILTER_SANITIZE_NUMBER_INT);
$other = filter_input(INPUT_POST, 'other', FILTER_SANITIZE_SPECIAL_CHARS);
$submited = filter_input(INPUT_POST, 'submitted');
if (isset($submited)) {
    if (empty($gender)) {
        $formErrors['genderErr'] = "Définis toi !";
    }
    if (empty($name)) {
        $formErrors['nameErr'] = "Quel est ton nom ?!";
    }
    if (empty($email)) {
        $formErrors['emailErr'] = "Et je te contact comment après ?";
    }
    if (empty($other)) {
        $formErrors['otherErr'] = "";
    }
}
?>
    <link rel="stylesheet" href="/CV/contact.css"/>
    <body>
    <h1><?php echo $metaTitle ?></h1>
    <div class="formulaire"><p>Merci d'être venu visité mon site. Pour plus d'informations, veuillez remplir le
            formulaire
            si dessous avec le plus d'élément possible.</p>
        <form action="" method="POST">
            <label for="Gender-select">Civilité</label>
            <select name="Gender" id="Gender-select">
                <option value="">C'est vide ça !</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>
            </select>
            <?php if (isset($formErrors['genderErr'])) : ?>
                <span class="error">* <?= $formErrors['genderErr'] ?></span>
            <?php endif ?>
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email">
            <?php if (isset($formErrors['emailErr'])) : ?>
                <span class="error">* <?= $formErrors['emailErr'] ?></span>
            <?php endif ?>
            <br> <label for="Name">Nom et Prénom</label><br>
            <input type="text" id="Name" name="Name"><br>
            <?php if (isset($formErrors['nameErr'])) : ?>
                <span class="error">* <?= $formErrors['nameErr'] ?></span>
            <?php endif ?>
            <p>Vous me contactez pour :</p>
            <label for="rens"><input type="radio" id="rens" name="whyfor" value="Renseignement">
                <label for="Renseignement">Un renseignement</label><br>
                <input type="radio" id="com" name="whyfor" value="Commentaire">
                <label for="Commentaire">Un commentaire</label><br>
                <?php if (isset($formErrors['whyforErr'])) : ?>
                    <span class="error">* <?= $formErrors['whyforErr'] ?></span>
                <?php endif ?><br>
                Avez-vous quelques choses à dire ?
                <textarea name="other" style="width: 60%; height: 400px;">
            J'aime ma vie !
        </textarea><br>
                <button type="submit" name="submitted">Envoyer</button>
        </form>
        <a href="mailto:sebastien.journiac@le-campus-numérique.fr?subject=Contact&body=J%27aime%20ma%20vie!">Me
            contacter
            par email</a></div>
    </body>
<?php include 'footer.php'; ?>