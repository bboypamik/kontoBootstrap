<?php if (isset($_POST["submit"])) :?>

<?php
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$email = $_POST["email"];
$password = $_POST["password"];
$username = $_POST["username"];

$sql = "INSERT INTO users (ime, prezime, email, password, username) VALUES ('$ime', '$prezime', '$email', '$password', '$username' )";

if ($conn->query($sql)) {
    echo "New record created successfully";
    header('Location: index.php?stranica=login');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<?php else: ?>
<div class="container">
    <h2 class="m-5">NAPRAVITE NALOG</h2>
    <form method="post">
        <label for="ime">Ime</label>
        <input type="text" name="ime" required class="form-control mb-2 forma">

        <label for="prezime">Prezime</label>
        <input type="text" name="prezime" required class="form-control mb-2 forma">
        <label for="email">email</label>
        <input type="email" name="email" required class="form-control mb-2 forma">
        <label for="password">šifra</label>
        <input type="password" name="password" required class="form-control mb-2 forma">
        <label for="username">Username</label>
        <input type="text" name="username" required class="form-control mb-2 forma">
        <input type="submit"  name="submit" value="PROSLEDI" class="form-control mb-4 btn-primary forma mb-5">


    </form>
</div>

<?php endif; ?>