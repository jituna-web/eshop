<?php $this->view("eshop/header",$data);?>
    <body>
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Domů</a></li>
                    <li class="breadcrumb-item"><a href="#">Produkty</a></li>
                    <li class="breadcrumb-item active">Kontakt</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info">
                            <h2>Naše kancelář</h2>
                            <h3><i class="fa fa-map-marker"></i>Eshop, Česká republika</h3>
                            <h3><i class="fa fa-envelope"></i>office@example.com</h3>
                            <h3><i class="fa fa-phone"></i>+123-456-7890</h3>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info">
                            <h2>Náš obchod</h2>
                            <h3><i class="fa fa-map-marker"></i>Eshop,Česká republika</h3>
                            <h3><i class="fa fa-envelope"></i>store@example.com</h3>
                            <h3><i class="fa fa-phone"></i>+123-456-7890</h3>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-form">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Vaše jméno" />
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Váš email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Předmět" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Zpráva"></textarea>
                                </div>
                                <div><button class="btn" type="submit">Poslat zprávu</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2637845.782080491!2d13.232056475784178!3d49.78566490887451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b948fd7dd8243%3A0xf8661c75d3db586f!2zxIxlc2tv!5e0!3m2!1scs!2scz!4v1632314249719!5m2!1scs!2scz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        
        <?php $this->view("eshop/footer",$data);?>