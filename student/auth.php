<?php
include("Header.php");

if ($_POST['submit']) {
    $inlognaam=isset($_POST['inlognaam']) ? $_POST['inlognaam'] : '';
    $wachtwoord=isset($_POST['wachtwoord']) ? $_POST['wachtwoord'] : '';
}
else {
    header('refresh: 1, index.php');
}
$query = "SELECT m.naam, m.wachtwoord FROM gebruikers m
            where m.naam='" . $inlognaam . "' and m.wachtwoord='" . $wachtwoord . "';";
$result = mysqli_query($dbconn, $query);
$aantal = mysqli_num_rows($result);
if ($aantal == 1) {
    while ($row = mysqli_fetch_array($result)) {
        $rol = $row['naam'];
    }
    $_SESSION['inlognaam'] = $inlognaam;
    $_SESSION['wachtwoord'] = $wachtwoord;
    $_SESSION['rol'] = $rol;
    $_SESSION['ingelogd'] = true;
    header('refresh: 1; url=studenten.php');
    exit;
} else {
    echo 'Helaas, uw inlognaam en/of wachtwoord corresponderen niet met onze gegevens. U wordt
            doorgestuurd...<br>';
    session_destroy();
    session_unset();
    mysqli_close($dbconn);
    header('refresh: 5; url=index.php');
    exit;
}
?>