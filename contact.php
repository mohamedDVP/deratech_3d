<?php
    session_start();
    require_once 'header.php';
?>
    <div class="row">
    <h2 class="w-100 p-4 d-flex justify-content-center pb-4">Nous contacter</h2>
    
            
            
        <section class="w-100 p-4 d-flex justify-content-center pb-4 needs-validation" >
            
            <form style="width: 26rem;" action="envoiForm.php" method="post">
            <?php
                if(array_key_exists('errors', $_SESSION)){?>
                    <div class="alert alert-danger justify-content-center" >
                        <?= implode('<br>', $_SESSION['errors']);?>
                    </div>
            <?php
                }
            ?>
            <?php
                if(array_key_exists('success', $_SESSION)){?>
                    <div class=" alert alert-success justify-content-center" >
                        Nous avons bien reçu votre mail
                    </div>
            <?php 
                }
            ?>
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

       