    <footer>
        <p>Contact : sebastien.journiac@orange.fr</p>
<?php
  $dateFirstVisite = date("Y-m-d H:i:s");
echo $dateFirstVisite;
?>
 </footer>
  </body>
</html>

<?php
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
?>
