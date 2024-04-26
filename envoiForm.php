<?php
    $retour = mail('deratechd@gmail.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: '.$_POST['mail']. "\r\n" . 'Reply-to: ' . $_POST['mail']);
    if(isset($_POST['send'])){
        if (isset($_POST['message'])) 
        {
            $entete  = 'MIME-Version: 1.0' . "\r\n";
            $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $entete .= 'From:'.$_POST['mail']. "\r\n";
            $entete .= 'Reply-to: ' . $_POST['mail'];

            $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
            <p><b>Email : </b>' . $_POST['mail'] . '<br>
            <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

            $retour = mail('mohamed.mak@laposte.net', 'Envoi depuis page Contact', $message, $entete);
            if($retour)
                echo '<p>Votre message a bien été envoyé.</p>';
        }
            
    }
    
?>
