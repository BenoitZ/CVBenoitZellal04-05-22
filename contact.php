<?php 


        $surname = ($_POST['surname']);
        $firstname = ($_POST['firstname']);
        $email = ($_POST['email']);
        $message = ($_POST['message']);


        $mail = 'zellal.benoit@yahoo.fr'; 

        echo "L'envoi de ce formulaire ne semble pas fonctionner, merci de m'envoyer un mail à cette adresse : <a href='mailto:zellal.benoit@yahoo.fr'> $mail </a> pour me contacter, merci !";


?>