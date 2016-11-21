<!--
Written by Tester2009
muhammadaliffmuazzam@gmail.com
simple note before final exam :)
Nov 21, 2016
-->
<html>
<?php
if (isset($_POST['hantar'])) {
  echo "This is POST Method Result: <br />";
  echo $_POST['name_']."<br />";
  echo $_POST['age_']."<br />";
  echo $_POST['email_']."<br />";
}
if (isset($_GET['ambil'])) {
  echo "This is GET Method Result: <br />";
  echo $_GET['_name']."<br />";
  echo $_GET['_age']."<br />";
  echo $_GET['_email']."<br />";
}
?>
<br />
<form method="post" action="form.php">
  <fieldset>
    <legend>POST Method</legend>
    Name: <input type="text" name="name_" /><br />
    Age: <input type="text" name="age_" /><br />
    Email: <input type="email" name="email_" /><br />
    <button type="submit" name="hantar">Hantar</button>
    <button type="reset">Set Semula</button>
  </fieldset>
</form>

<form method="get" action="form.php">
  <fieldset>
    <legend>GET Method</legend>
    Name: <input type="text" name="_name" /><br />
    Age: <input type="text" name="_age" /><br />
    Email: <input type="email" name="_email" /><br />
    <button type="submit" name="ambil">Ambil</button>
    <button type="reset">Set Semula</button>
  </fieldset>
</form>
</html>
