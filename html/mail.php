<?php

	// ini_set('SMTP', 'localhost');
	// ini_set('smtp_port', '25');

	$recipient = 'domusaruon@gmail.com'; //antoine@ropeup.fr
	
    $retour = mail($recipient, 'Envoi depuis Contact', 'Nom:'. $_POST['nom'] . 'Message:' . $_POST['message'], 'From: '.$_POST['mail']);
    
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    else
    {
    	echo '<p>Erreur</p>';
    }

    //phpinfo();
?>

