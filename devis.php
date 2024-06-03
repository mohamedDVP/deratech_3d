<?php
    session_start();
    require_once 'header.php';
    require_once ("lib/config.php");
    require 'vendor/autoload.php';
    use Dotenv\Dotenv;
    $env=Dotenv::createImmutable(__DIR__);

    $env->Load();
    use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);
?>
<?php 
        $messages = [];
        $errors = [];

        if (isset($_POST["send"])) {
            if (!isset($_POST["mail"]) || !filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
                $errors[] = "L'adresse e-mail n'est pas valide";
            }
            if (!isset($_POST["message"]) || $_POST["message"] == "") {
                $errors[] = "Le message ne doit pas être vide";
            }
            if (!isset($_POST["nom"]) || !filter_var($_POST["nom"])) {
                $errors[] = "Le nom ne doit pas être vide";
            }
            if (!$errors) {
                try{
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->SMTPSecure = 'ssl';
                    $mail->Host       = $_SERVER['SMTP_HOST'];                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = $_SERVER['SMTP_USERNAME'];                     //SMTP username
                    $mail->Password   = $_SERVER['SMTP_PASSWORD'];                               //SMTP password
                    $mail->Port       = $_SERVER['SMTP_PORT'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                    $mail->CharSet = 'UTF-8';
                    $mail->Encoding = 'base64';
                    $mail->setLanguage('fr', 'vendor/phpmailer/phpmailer/language');

                    //Recipients
                    $mail->setFrom($_SERVER['SMTP_USERNAME']);
                    $mail->addAddress($_SERVER['SMTP_USERNAME']);     //Add a recipient
                   

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Formulaire de demande de devis de '.$_POST["nom"];
                    $mail->Body    = $_POST["message"]."<br> Service :".$_POST['service']."<br> Email : ".$_POST["mail"];
                    $mail->AltBody = $_POST["message"]."<br> Service :".$_POST['service']."<br> Email : ".$_POST["mail"];

                    $mail->send();
                    $messages[] = "Votre email a bien été envoyé";
                } catch (Exception $e) {
                    $errors[] = "Une erreur s'est produite durant l'envoi".$mail->ErrorInfo;
                }
            }

        }

    ?>

    <div class="row">
        <h2 class="w-100 p-4 d-flex justify-content-center pb-4">Demander un devis</h2>
        <?php foreach($messages as $message) { ?>
            <div class="alert alert-success">
                <?=$message; ?>
            </div>
        <?php } ?>

        <?php foreach($errors as $error) { ?>
            <div class="alert alert-success">
                <?=$error; ?>
            </div>
        <?php } ?>
        <section class="w-100 p-4 d-flex justify-content-center pb-4 needs-validation" >

            <form style="width: 26rem;" method="post">
                
                <!-- Name input -->

                <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                    <label class="form-label" for="form4Example1" style="margin-left: 0px;" required>Nom</label>
                    <input type="text" id="form4Example1" class="form-control" name="nom" value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : "";?>">
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
                    <input type="email" id="form4Example2" class="form-control" name="mail" value="<?= isset($_SESSION['inputs']['mail']) ? $_SESSION['inputs']['mail'] : "";?>">
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
                    <textarea class="form-control" id="form4Example3" rows="4" name="message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : "";?></textarea>
                    <div class="form-notch">
                        <div class="form-notch-leading" style="width: 9px;">
                        </div>
                        <div class="form-notch-middle" style="width: 60px;">
                        </div>
                        <div class="form-notch-trailing">
                        </div>
                    </div>
                </div>
                
                <!-- Selection du service -->
                <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                    <label class ="form-label" for="form4Exemple3" style="margin-left: 0px;" required>Service</label>
                    <select class="form-select" id="floatingSelectGrid" name="service"><?= isset($_SESSION['inputs']['service']) ? $_SESSION['inputs']['service'] : "";?>
                        <option value="" selected>Choisissez un service</option>
                        <option value="Deratisation">Deratisation</option>
                        <option value="desinsectisation">Desinsectisation</option>
                        <option value="Desinfection">Desinfection</option>
                    </select>
                </div>

                <!-- Submit button -->
                <input data-mdb-ripple-init="" type="submit" class="btn btn-primary btn-block mb-4" name="send">
            </form>
        </section> 
    </div>
<?php

require_once ("footer.html");

?>