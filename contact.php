<?php
    require_once 'header.php';
?>
    <h2 class="w-100 p-4 d-flex justify-content-center pb-4">Nous contacter</h2>
        <section class="w-100 p-4 d-flex justify-content-center pb-4 needs-validation" >
            <form style="width: 26rem;" action="">
                <!-- Name input -->
                <div data-mdb-input-init="" class="form-outline mb-4" data-mdb-input-initialized="true">
                    <label class="form-label" for="form4Example1" style="margin-left: 0px;" required>Nom</label>
                    <input type="text" id="form4Example1" class="form-control">
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
                    <input type="email" id="form4Example2" class="form-control">
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
                    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
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
                <button data-mdb-ripple-init="" type="button" class="btn btn-primary btn-block mb-4">Envoyer</button>
            </form>
        </section>

<?php
    require_once 'footer.html';
?>