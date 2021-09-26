<?php $this->view("eshop/header", $data); ?>
                
                    <div class="col-lg-6">
                    <?php check_message()?>
                        <form class="login-form" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Uživatelské jméno</label>
                                    <input class="form-control" type="text" placeholder="Uživatelské jméno">
                                </div>
                                <div class="col-md-6">
                                    <label>Heslo</label>
                                    <input class="form-control" type="password" placeholder="Heslo">
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="newaccount">
                                        <label class="custom-control-label" for="newaccount">Zůstat přihlášen</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn-log">Přihlásit</button>
                                    <p class="message">Nejste registrovaní? <a href="signup">Vytvořte si účet</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <script>
            $(' .message a').click(function(){
                $('form') .animate({height: "toggle", opacity: "toggle"}, "slow");
            });
        </script>
        <!-- Login End -->
        <?php $this->view("eshop/footer", $data); ?>