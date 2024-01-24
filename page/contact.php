<div class="contact">
    <h1>Contact :</h1>
        <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
            <label>Nom :</label>
            <input type="text" id="name" name="name">

            <label>Email : </label>
            <input type="text" id="email" name="email">

            <label>Sujet :</label>
            <input type="text" id="subject" name="subject">

            <label>Votre message :</label>
            <textarea name="message" id="message" placeholder="Message ..."></textarea>

            <input class="submit" type="submit" name="send" value="Envoyer">

            <div id="statusMessage">
                <?php if (! empty($db_msg)) { ?>
                        <p class='<?php echo $type_db_msg; ?> Message'><?php echo $db_msg; ?></p>
                    <?php } ?>
                    <?php if (!empty($db_msg)) { ?>
                        <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
                    <?php } ?>
            </div>
    <?php
        if(!empty($_POST["send"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];
            $toEmail = "contact@ludovic-streetz.fr";
            $mailHeaders = "From: " . $name . "<". $email .">\r\n";
        if(mail($toEmail, $subject, $message, $mailHeaders)) {
            $mail_msg = "Vos informations de contact ont été reçues avec succés.";
            $type_mail_msg = "success";
        }else{
            $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
            $type_mail_msg = "error";
            }
        }
    ?>
</form>
</div>