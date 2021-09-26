<?php $this->view("eshop/header",$data);?>
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Domů</a></li>
                    <li class="breadcrumb-item"><a href="#">Produkty</a></li>
                    <li class="breadcrumb-item active">Seznam produktů</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-search">
                                                <input type="email" value="Hledat">
                                                <button><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Filtrovat podle:</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Nejnovější</a>
                                                        <a href="#" class="dropdown-item">Populární</a>
                                                        <a href="#" class="dropdown-item">Slevy</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-price-range">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Cenové rozpětí</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">0 až CZK 50</a>
                                                        <a href="#" class="dropdown-item">CZK 51 až CZK 100</a>
                                                        <a href="#" class="dropdown-item">CZK 101 až CZK 150</a>
                                                        <a href="#" class="dropdown-item">CZK 151 až CZK 200</a>
                                                        <a href="#" class="dropdown-item">CZK 201 až CZK 250</a>
                                                        <a href="#" class="dropdown-item">CZK 251 až CZK 300</a>
                                                        <a href="#" class="dropdown-item">CZK 301 až CZK 350</a>
                                                        <a href="#" class="dropdown-item">CZK 351 až CZK 400</a>
                                                        <a href="#" class="dropdown-item">CZK 401 až CZK 450</a>
                                                        <a href="#" class="dropdown-item">CZK 451 až CZK 500</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-1.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-2.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>

                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-3.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>
                                         
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-4.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-5.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>
                                        
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-6.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>
                                           
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-7.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-8.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-9.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">předchozí</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">další</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Start -->
                    </div>           
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-4 sidebar">
                        <div class="sidebar-widget category">
                            <h2 class="title">Kategorie</h2>
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-female"></i>Móda & Krása</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-child"></i>Dětské oblečení</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Pánské & Dámské oblečení</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Doplňky</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Elektronika & Příslušenství</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        
                        <div class="sidebar-widget widget-slider">
                            <div class="sidebar-slider normal-slider">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-10.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>
                                           
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-9.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Název produktu</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product_detail">
                                            <img src="assets/eshop/img/product-8.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="cart"><i class="fa fa-cart-plus"></i></a>
                                            <a href="wishlist"><i class="fa fa-heart"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>CZK</span> 99</h3>
                                        <a class="btn" href="cart"><i class="fa fa-shopping-cart"></i>Koupit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar-widget brands">
                            <h2 class="title">Značky</h2>
                            <ul>
                                <li><a href="#">Nike </a><span>(45)</span></li>
                                <li><a href="#">Adidas</a><span>(34)</span></li>
                                <li><a href="#">Guess</a><span>(67)</span></li>
                                <li><a href="#">Puma</a><span>(74)</span></li>
                                <li><a href="#">CK </a><span>(89)</span></li>
                                <li><a href="#">Gap</a><span>(28)</span></li>
                            </ul>
                        </div>
                        
                        <div class="sidebar-widget tag">
                            <h2 class="title">Klíčová slova</h2>
                            <a href="#">Lorem ipsum</a>
                            <a href="#">Vivamus</a>
                            <a href="#">Phasellus</a>
                            <a href="#">pulvinar</a>
                            <a href="#">Curabitur</a>
                            <a href="#">Fusce</a>
                            <a href="#">Sem quis</a>
                            <a href="#">Mollis metus</a>
                            <a href="#">Sit amet</a>
                            <a href="#">Vel posuere</a>
                            <a href="#">orci luctus</a>
                            <a href="#">Nam lorem</a>
                        </div>
                    </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
        
        
        <?php $this->view("eshop/footer",$data);?>