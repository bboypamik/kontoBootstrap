<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <title>konto</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css?family=Montserrat&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="../styles.css">
</head>

<?php
include '../includes/db.php';
include '../includes/functions.php';
?>
<body>

   <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
   <a href="../index.php?stranica=index" class="navbar-brand logo"><i class="fas fa-paperclip"></i> KONTO</a>
   <div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto ">
     <li class="nav-item"><a href="../index.php?stranica=about" class="nav-link">O NAMA</a></li>
     <li class="nav-item"><a href="../index.php?stranica=services" class="nav-link">USLUGE</a></li>
     <li class="nav-item"><a href="../index.php?stranica=gallery" class="nav-link">GALERIJA</a></li>
     <li class="nav-item"><a href="../index.php?stranica=contact" class="nav-link">KONTAKT</a></li>
        <li class="nav-item"><a href="../index.php?stranica=news" class="nav-link">VESTI</a></li>
        <?php if(!$_SESSION['is_logged']):?>
            <li class="nav-item"><a href="../index.php?stranica=login" class="nav-link">ULOGUJTE SE</a></li>
        <?php else: ?>
            <li class="nav-item"><a href="../index.php?stranica=logout" class="nav-link">ODJAVI SE</a></li>
        <?php endif; ?>

   </ul>


     
   </div>
 </nav>
   <?php if($_SESSION['is_logged']):?>

   <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

       <div class="collapse navbar-collapse">
           <ul class="navbar-nav ml-auto ">


               <li class="nav-item"><a href="index.php?stranica=pocetna" class="nav-link">ADMIN</a></li>
               <li class="nav-item"><a href="index.php?stranica=klijenti" class="nav-link">Klijenti</a></li>
           </ul>



       </div>
   </nav>

   <?php endif; ?>
 
   <?php
    $currentPage = $_GET['stranica'];
    switch($currentPage){
    
    case 'index':
    include 'pocetna.php';
    break;

    case 'list':
    include 'pocetna.php';
    break;

    case 'news':
    include 'news.php';
    break;

    case 'newArticle':
    include 'newArticle.php';
    break;
    case 'listNews':
    include 'listNews.php';
    break;

    case 'editNews':
    include 'editNews.php';
    break;

    case 'deleteNews':
    include 'deleteNews.php';
    break;

    case 'klijenti':
    include 'klijenti.php';
    break;

    case 'noviKlijent':
    include 'noviKlijent.php';
    break;

    case 'editKlijent':
    include 'editKlijent.php';
    break;

    case 'klijentInformations':
    include 'klijentInformations.php';
    break;

    case 'evidentiranje_uplate':
    include 'evidentiranje_uplate.php';
    break;

    case 'deleteKlijent':
    include 'deleteKlijent.php';
    break;

    case 'pitanja':
    include 'pitanja.php';
    break;

    case 'pitanje':
    include 'pitanje.php';
    break;

    case 'deletePitanje':
    include 'deletePitanje.php';
    break;

    default:
    include 'pocetna.php';
    break;


  }
    
   ?>
     
   </div>
   <!--Footer-->
   <footer class="py-5">
     <div class="container-fluid">
       <div class="row">
        <div class="col-sm-1"></div>
         <div class="col-sm-2">
          <h6>Copyright &copy; 2018 Konto</h6>
         </div>
          <div class="col-sm-4">
             <h6>About US</h6>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
             quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
             consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
             cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
             proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
           </div>
           <div class="col-sm-2">
            <h6>Navigation</h6>
            <ul class="unstyled">
              <li><a href="">Home</a></li>
               <li><a href="">Services</a></li>
                <li><a href="">Links</a></li>
                 <li><a href="">Contact</a></li>
            </ul>
          
         </div>
         <div class="col-sm-2">
          <h6>Follow Us</h6>
          <ul class="unstyled">
              <li><a href="">Twitter</a></li>
               <li><a href="">Facebook</a></li>
                <li><a href="">Google Plus</a></li>
            </ul>
         </div>
         
       </div>
     </div>
   </footer>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
   <script src="../js/jquery.magnific-popup.js"></script>
   <script src="../js/scripts.js"></script>
</body>
</html>