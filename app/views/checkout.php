<?php $this->view("eshop/header",$data);?>
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Fakturační adresa</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jméno</label>
                                        <input class="form-control" type="text" placeholder="Jméno">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Příjmení</label>
                                        <input class="form-control" type="text" placeholder="Příjmení">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="E-mail">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobil</label>
                                        <input class="form-control" type="text" placeholder="Mobil">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Adresa</label>
                                        <input class="form-control" type="text" placeholder="Adresa">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Stát</label>
                                        <select class="custom-select">
                                            <option selected>Česká republika</option>
                                            <option>Slovensko</option>
                                            <option>Německo</option>
                                            <option>Polsko</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Město</label>
                                        <input class="form-control" type="text" placeholder="Město">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label> PSČ</label>
                                        <input class="form-control" type="text" placeholder="PSČ">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="newaccount">
                                            <label class="custom-control-label" for="newaccount">Vytvořit účet</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipto">
                                            <label class="custom-control-label" for="shipto">Poslat na jinou adresu</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="shipping-address">
                                <h2>Doručovací adresa</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jméno</label>
                                        <input class="form-control" type="text" placeholder="Jméno">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Příjmení</label>
                                        <input class="form-control" type="text" placeholder="Příjmení">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text" placeholder="E-mail">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobil</label>
                                        <input class="form-control" type="text" placeholder="Mobil">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Adresa</label>
                                        <input class="form-control" type="text" placeholder="Adresa">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Stát</label>
                                        <select class="custom-select">
                                            <option selected>Česká republika</option>
                                            <option>Slovensko</option>
                                            <option>Německo</option>
                                            <option>Polsko</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Město</label>
                                        <input class="form-control" type="text" placeholder="City">
                                    </div>
                              
                                    <div class="col-md-6">
                                        <label>PSČ</label>
                                        <input class="form-control" type="text" placeholder="PSČ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1>Shrnutí košíku</h1>
                                <p>Název produktu<span>CZK 99</span></p>
                                <p class="sub-total">Celkem<span>CZK 99</span></p>
                                <p class="ship-cost">Poplatek za dopravu<span>CZK 1</span></p>
                                <h2>Celková cena s dopravou<span>CZK 100</span></h2>
                            </div>

                            <div class="checkout-payment">
                                <div class="payment-methods">
                                    <h1>Platba</h1>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                            <label class="custom-control-label" for="payment-1">Paypal</label>
                                        </div>
                                        <div class="payment-content" id="payment-1-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                            <label class="custom-control-label" for="payment-2">Payoneer</label>
                                        </div>
                                        <div class="payment-content" id="payment-2-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                            <label class="custom-control-label" for="payment-3">Zkontrolujte platbu</label>
                                        </div>
                                        <div class="payment-content" id="payment-3-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                            <label class="custom-control-label" for="payment-4">Bankovní převod</label>
                                        </div>
                                        <div class="payment-content" id="payment-4-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                            <label class="custom-control-label" for="payment-5">Dobírka</label>
                                        </div>
                                        <div class="payment-content" id="payment-5-show">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-btn">
                                    <button>Objednat</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->
        <?php $this->view("eshop/footer",$data);?>