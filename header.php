<?php session_start();
date_default_timezone_set('Europe/Paris');
if (!isset($_SESSION['time'])){
$_SESSION['time']     = date("Y-m-d H:i:s");
}
if (!isset($_SESSION['countViewPage'])){
$_SESSION['countViewPage']     = 0;
}
else {$_SESSION['countViewPage']++;}

?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $metaDescription?>">
    <title><?php echo $metaTitle?></title>
 <link rel="stylesheet" href="/CV/styles.css">
  </head>
<header>
<ul class="navbar">
        <li class="linavbar"><a href="index.php?page=CV">Curriculum Vitae</a></li>
        <li class="linavbar"><a href="index.php?page=Hobby">Hobby</a></li>
        <li class="linavbar"><a href="index.php?page=contact">Contact</a></li>
    </ul>
</header>
