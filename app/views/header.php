<!DOCTYPE html>
<html lang="cs">
<head>
        <meta charset="utf-8">
        <title>Eshop</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      

        <!-- Favicon -->
        <link href="assets/eshop/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="assets/eshop/lib/slick/slick.css" rel="stylesheet">
        <link href="assets/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
         <script src="assets/eshop/lib/easing/easing.min.js"></script> 
         <script src="assets/eshop/lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="assets/eshop/js/main.js"></script> 
        

        <!-- Template Stylesheet -->
        
        <link rel="stylesheet" href="assets/eshop/css/style.css">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@eshop.cz">info@eshop.cz</a>
                        <!--support@email.com-->
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +420-345-6789
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index" class="nav-item nav-link active">Domů</a>
                            <a href="product_list" class="nav-item nav-link">Produkty</a>
                            <a href="checkout" class="nav-item nav-link">Pokladna</a>
                            <a href="my_account" class="nav-item nav-link">Můj účet</a>
                            <a href="upload" class="nav-item nav-link">Nahrát soubor</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Další stránky</a>
                                <div class="dropdown-menu">
                                    <a href="wishlist" class="dropdown-item">Seznam přání</a>
                                    <a href="contact" class="dropdown-item">Kontaktujte nás</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Účet</a>
                                <div class="dropdown-menu">
                                    <a href="login" class="dropdown-item">Přihlášení</a>
                                    <a href="signup" class="dropdown-item">Registrace</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index">
                               <h1>Eshop</h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Hledat">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>