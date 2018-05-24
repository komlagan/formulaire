<?php
  // Definition des constantes et variables
  define('LOGIN','adje');
  define('PASS','enyo');
  $errorMessage = '';
        require 'fonctions.php';
  
?>
<head>
    <meta charset="utf-8">
    <h1><center>Formulaire d'authentification</h1></center>
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>

<header>
    
</header>
<nav id="menu">

<fieldset>
   <legend>Identifiez-vous</legend>
    <center><form action="" method="post"><center>
		<p>
            <label for="loging">Identifiant:</label> 
            <input type="text" name="login" id="login" value="" />
        </p>
		
        <p>
          <label for="pass">Mot de Passe :</label> 
          <input type="pass" name="pass" id="pass" value="" /> 
		  <p>
          <input type="submit" name="submit" value="Se Connecter" />
		  </p>
        </p>

        <table>
            <tr>
                <td class="item"><a href="pages/contact">Contact</a></td>
				
				<center><img src="image/emotion.jpg" alt="" width="200" /></center>

            </tr>
        </table>
    </nav>
    </form></center>
</fieldset>


</body>
</html>
