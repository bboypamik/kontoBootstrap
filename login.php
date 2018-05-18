
<?php if (isset($_POST["submit"])) :?>

<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = :email AND password = :password ";
    $statement = $conn->prepare($sql);
    $statement->bindParam(":email",$email);
    $statement->bindParam(":password",$password);
    $statement->execute();
    $login = $statement->fetch();


    if ($login ){
        $_SESSION["is_logged"] = true;
        $_SESSION["username"] = $login['username'];
        $_SESSION["user_id"] = $login['id'];
        header('Location: admin/index.php?stranica=pocetna');
    }
    else{
        echo "Pogrešno korisničko ime ili lozionka, probajte ponovo.";
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
        <p>Nemate nalog?</p><a class="form-control mb-4 btn-primary forma mb-5 col-2" href="index.php?stranica=registration">Registrujte se</a>

    </form>
</div>

<?php endif ?>
