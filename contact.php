<?php
    require_once 'header.php';
?>
    <h2 class="w-100 p-4 d-flex justify-content-center pb-4">Nous contacter</h2>
        <section class="w-100 p-4 d-flex justify-content-center pb-4 needs-validation" >
            <form style="width: 26rem;" action="envoiForm.php" method="post">
                <!-- Name input -->
                 <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                    <label class="form-label" for="form4Example1" style="margin-left: 0px;" required>Nom</label>
                    <input type="text" id="form4Example1" class="form-control" name="nom">
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;">
                        </div>
                        <div class="form-notch-middle" style="width: 42.4px;">
                        </div>
                        <div class="form-notch-trailing">
                        </div>
                    </div>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                    <label class="form-label" for="form4Example2" style="margin-left: 0px;" required>Email</label>
                    <input type="email" id="form4Example2" class="form-control" name="mail">
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;">
                        </div>
                        <div class="form-notch-middle" style="width: 88.8px;">
                        </div>
                        <div class="form-notch-trailing">
                        </div>
                    </div>
                </div> 

                <!-- Message input -->
                <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                    <label class="form-label" for="form4Example3" style="margin-left: 0px;" required>Message</label>
                    <textarea class="form-control" id="form4Example3" rows="4" name="message"></textarea>
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;">
                        </div>
                        <div class="form-notch-middle" style="width: 60px;">
                        </div>
                        <div class="form-notch-trailing">
                        </div>
                    </div>
                </div>


                <!-- Submit button -->
                <input data-mdb-ripple-init="" type="submit" class="btn btn-primary btn-block mb-4" name="send">
            </form>
        </section> 




       <?php
// Vérifie si le formulaire a été soumis
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $subject = trim($_POST["subject"]);
    $message = trim($_POST["message"]);

    // Vérifie que toutes les données nécessaires sont présentes
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Adresse e-mail où envoyer le formulaire
        $to = "mohamed.mak@laposte.net";

        // Construction du contenu de l'e-mail
        $email_content = "Nom: $name\n";
        $email_content .= "E-mail: $email\n";
        $email_content .= "Sujet: $subject\n";
        $email_content .= "Message:\n$message\n";

        // En-têtes de l'e-mail
        $headers = "From: $name <$email>";

        // Envoi de l'e-mail
        if (mail($to, $subject, $email_content, $headers)) {
            $message_sent = true;
        } else {
            $error_message = "Une erreur s'est produite lors de l'envoi de l'e-mail.";
        }
    } else {
        $error_message = "Tous les champs sont obligatoires.";
    }
}
?>

<!-- Formulaire HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>
<body>
    <h2>Contactez-nous</h2>
    <?php if(isset($error_message)): ?>
        <p><?php echo $error_message; ?></p>
    <?php elseif(isset($message_sent)): ?>
        <p>Votre message a bien été envoyé.</p>
    <?php endif; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="subject">Sujet :</label>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>

<?php
    require_once 'footer.html';
?>*/