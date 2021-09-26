<?php $this->view("eshop/header", $data); ?>
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Domů</a></li>
                    <li class="breadcrumb-item"><a href="#">Produkty</a></li>
                    <li class="breadcrumb-item active">Můj účet</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Nástěnka</a>
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Objednávky</a>
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i>Platební metody</a>
                            <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>Adresa</a>
                            <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Přihlašovací údaje</a>
                            <a class="nav-link" href="index.html"><i class="fa fa-sign-out-alt"></i>Odhlásit</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                <h4>Nástěnka</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus. Nulla tristique viverra nisl, sit amet bibendum ante suscipit non. Praesent in faucibus tellus, sed gravida lacus. Vivamus eu diam eros. Aliquam et sapien eget arcu rhoncus scelerisque.
                                </p> 
                            </div>
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Číslo</th>
                                                <th>Produkt</th>
                                                <th>Datum</th>
                                                <th>Cena</th>
                                                <th>Stav</th>
                                                <th>Akce</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Název produktu</td>
                                                <td>01.1.2021</td>
                                                <td>CZK 99</td>
                                                <td>Schváleno</td>
                                                <td><button class="btn">Náhled</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Název produktu</td>
                                                <td>02.2.2021</td>
                                                <td>CZK 99</td>
                                                <td>Schváleno</td>
                                                <td><button class="btn">Náhled</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Název produktu</td>
                                                <td>03.3.2021</td>
                                                <td>CZK 99</td>
                                                <td>Schváleno</td>
                                                <td><button class="btn">Náhled</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Platební metody</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus. Nulla tristique viverra nisl, sit amet bibendum ante suscipit non. Praesent in faucibus tellus, sed gravida lacus. Vivamus eu diam eros. Aliquam et sapien eget arcu rhoncus scelerisque.
                                </p> 
                            </div>
                            <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                <h4>Adresa</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Fakturační adresa</h5>
                                        <p>123 Eshop, Česká republika</p>
                                        <p>Mobil: 012-345-6789</p>
                                        <button class="btn">upravit adresu</button>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Dodací adresa</h5>
                                        <p>123 Eshop, Česká republika</p>
                                        <p>Mobil: 012-345-6789</p>
                                        <button class="btn">upravit adresu</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Přihlašovací údaje</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Jméno">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Příjmení">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Mobil">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Adresa">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Aktualizovat účet</button>
                                        <br><br>
                                    </div>
                                </div>
                                <h4>Změna hesla</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Současné heslo">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Nové heslo">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Zopakujte heslo">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Uložit změny</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
        <?php $this->view("eshop/footer", $data); ?>