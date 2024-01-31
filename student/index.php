<?php
include 'Header.php';
?>

Inloggen <br>
Naam: <br>
<input type="text" name="naam"> <br>
Wachtwoord: <br>
<input type="password" name="password"> <br>
<button type="submit">Inloggen</button>

<?php
$inlognaam = $_POST['naam'];
$wachtwoord = $_POST['password'];

$query = 'SELECT * FROM gebruikers'
?>


</body>
</html>