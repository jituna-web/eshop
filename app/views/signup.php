<?php $this->view("eshop/header",$data);?>
<!-- Login Start -->
<div class="login">
    <?php check_message()?>
            <div class="container-fluid">
                <div class="row">
                        <h2 class="reg">Registrační formulář</h2>  
                        <form class="register-form" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Uživatelské jméno</label>
                                    <input class="form-control" type="text" name="username" placeholder="Uživatelské jméno">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" name="email" placeholder="E-mail">
                                </div>
                                <div class="col-md-6">
                                    <label>Heslo</label>
                                    <input class="form-control" type="password" name="password" placeholder="Heslo">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn" id="btn-reg"> <a href="login">Registrace</a></button>
                                <p class="messege">Jste registrovaní? <a href="login">Přihlašte se</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <script>
            $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});


            
        </script>
       
                





