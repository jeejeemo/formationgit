<?php
session_start();

/**
 * Alfonso: Pas de session start ici.
 * Dans notre système actuel soit on le fait dans le contrôleur soit dans les service
 * jamais dans les templates.
 */

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon forum</title>
</head>
<body>
    <h1>Inscriptions</h1>
        <div id="Cforum">
        <form method="post" action="./services/inscriptionService.php" enctype="multipart/form-data">
	<fieldset><legend>Identifiants</legend>
	<label for="pseudo">* Pseudo :</label>  <input name="pseudo" type="text" id="pseudo" /> (le pseudo doit contenir entre 3 et 15 caractères)<br />
	<label for="password">* Mot de Passe :</label><input type="password" name="password" id="password" /><br />
	<label for="email">* Votre adresse Mail :</label><input type="text" name="email" id="email" /><br />
	
	</fieldset>
	<label for="avatar">Choisissez votre avatar :</label><input type="file" name="avatar" id="avatar" />(Taille max : 10Ko<br />
	<p>Les champs précédés d un * sont obligatoires</p>
	<p><input type="submit" value="S'inscrire" action="./services/inscriptionService.php" method="post"/></p></form>
        </div>

    
    <?php

    if(!empty($_GET['mess'])): ?>
        <h2>"Ce nom d'utilisateur est déjà utilisé."</h2>
        <?php endif ; ?>
    <?php
    if(!empty($_GET['error'])): ?>
        <h2> "Cette adresse email est déjà utilisée."</h2>
        <?php endif ; ?>
    <?php
    if(!empty($_GET['success'])): ?>
        <h2> "Votre inscription est validée"</h2>
        <?php endif; ?>
</body>
</html>
    
