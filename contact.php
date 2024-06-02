<?php
    session_start();
    require_once 'header.php';
    require_once ("lib/config.php");
    require 'vendor/autoload.php';
    use Dotenv\Dotenv;
    $env=Dotenv::createImmutable(__DIR__);

    $env->Load();
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
                $to = $_SERVER['SMTP_USERNAME'];
                $email = filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);
                $subject = "[Deratech3d] Formulaire de contact";
                $emailContent = "Email : $email<br>"
                            ."Message : <br>".nl2br(htmlentities($_POST["message"]));
                $headers = "From: ".$_SERVER['SMTP_USERNAME'] . "\r\n" .
                            "MIME-Version: 1.0" . "\r\n" .
                            "Content-type: text/html; charset=utf-8";
        
        
        
                if(mail($to, $subject, $emailContent, $headers)) {
                    $messages[] = "Votre email a bien été envoyé";
        
                } else {
                    $errors[] = "Une erreur s'est produite durant l'envoi";
                }
            }

        }

    ?>
    <div class="row">
    <h2 class="w-100 p-4 d-flex justify-content-center pb-4">Nous contacter</h2>   
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


                <!-- Submit button -->
                <input data-mdb-ripple-init="" type="submit" class="btn btn-primary btn-block mb-4" name="send">
            </form>
        </section> 
    </div>

<?php
    unset($_SESSION['inputs']);
    unset($_SESSION['success']);
    unset($_SESSION['errors']);
?>

       