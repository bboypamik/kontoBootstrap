<?php if (isset($_POST["submit"])) :?>

<?php
    $email = "bboypamik@gmail.com";
    $password = "btabta123";

    session_start();


    if ($_POST["email"] == $email && $_POST["password"] == $password){
        $_SESSION["is_logged"] = true;
        header('Location: admin/index.php?stranica=pocetna');
    }
    else{
        header('Location: http://localhost/kontoBootstrap/index.php?stranica=login');
    }

    ?>
<?php else: ?>

<div class="container">
    <h2 class="m-5">ULOGUJTE SE</h2>
    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required class="form-control mb-2 forma">

        <label for="password">Šifra</label>
        <input type="password" name="password" required class="form-control mb-2 forma">
        <input type="submit"  name="submit" value="LOGIN" class="form-control mb-4 btn-primary forma mb-5">
    </form>
</div>

<?php endif ?>
