<?php
include_once './src/head.inc.php';
?>
<?php
include_once './src/connect_bdd.inc.php';
?>

<body>
    <header>
         <h1>Fidelio & Company</h1>
    </header>

<main>

<div role="form">


<h2>Inscription rapide votre login et mot de passe</h2>
   <form action="inscription.php" method="post">

        <label for="email">Adresse mail</label> <br>
        <input type="text" id="mail" name="mail" placeholder="Email" aria-required="true"> <br>


 
    <label for="password">Mot de passe</label> <br>
    <input type="password" id="password" name="psw" placeholder="Password" aria-required="true"> <br>
    <div>
    <input type="submit" value="Envoyer">
    </div>

   </form>


</div>
<?php
            //inclusion
            include_once "./src/inscription_user.inc.php";
 ?>

</main>
    <footer>
       
        
       <p> &copy; - PHP 2023 </p>
    </footer>

</body>
</html>