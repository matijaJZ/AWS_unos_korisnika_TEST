<?php
require_once 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['unesi'])) {
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $email = $_POST["email"];
        $broj_mobitela = $_POST["broj_mobitela"];

        $query = "call baza_druga.unesi_korisnik('$ime', '$prezime', '$email', '$broj_mobitela')";
        $result = $con->query($query);

        header("Location: index.html");
        die;

    } else {
    // Button is not pressed
    echo "Button is not pressed.";
    }
}
?>