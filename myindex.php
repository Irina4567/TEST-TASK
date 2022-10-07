<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Пример шаблона сайта для тестового задания</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Headroom CSS ==-->
    <link href="assets/css/headroom.css" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Bardy Icon CSS ==-->
    <link href="assets/css/bardy.icon.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="assets/css/aos.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <!-- <link href="assets/css/style.css" rel="stylesheet" /> -->
    <link href="assets/scss/style.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--wrapper start-->
    <div class="wrapper">

        <!--== Start Preloader Content ==-->
        <div class="preloader-wrap">
            <div class="preloader">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!--== End Preloader Content ==-->


        <!--== Start Header Wrapper ==-->
        <header>
            <div class="header-mobile">
                <div class="nav-top">

                    <div class="col header-logo-wrapper">
                        <div class="header-logo-area">
                            <a href="index.php">
                                <img class="logo-main" src="assets/img/logo.png" alt="Logo" />
                                <img class="logo d-none" src="assets/img/logo-light.png" alt="Logo" />
                            </a>
                        </div>
                    </div>

                    <div class="col header-action-wrapper">
                        <div class="header-action-area">
                            <ul class="header-action">
                                <li class="user-menu">
                                    <a class="title" href="javascript:;"><i class="fa fa-user-o"></i></a>
                                    <ul class="user-dropdown">
                                        <li class="user">
                                            <ul>
                                                <li><a href="#/">Login</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="header-action">
                                <div class="header-search">
                                    <button class="search-toggle">
                                        <i class="search-icon bardy bardy-search"></i>
                                        <i class="close-icon bardy bardy-cancel"></i>
                                    </button>
                                    <div class="header-search-form">
                                        <form action="#">
                                            <input type="search" placeholder="Search our store">
                                            <button type="submit"><i class="bardy bardy-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action">
                                <div class="header-mini-cart">
                                    <button class="mini-cart-toggle">
                                        <i class="icon bardy bardy-shopping-cart"></i>
                                    </button>
                                    <div class="mini-cart-dropdown">
                                        <h4 class="cart-title">Корзина</h4>
                                        <div class="cart-item-wrap">
                                            <div class="cart-item">
                                                <div class="content">
                                                    <h5 class="title">Ваша корзина пуста</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <span class="hamburger material-icons" id="ham">menu</span>
                </div>

                <nav class="nav-drill">
                    <ul class="nav-items nav-level-1">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span>Галвная</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span>Продавцы</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span>Закупки</span>
                            </a>
                        </li>

                        <li class="nav-item nav-expand">
                            <a class="nav-link nav-expand-link" href="#">
                                <span>Аналитика</span>
                            </a>
                            <ul class="nav-items nav-expand-content">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Level 2
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item nav-expand">
                            <a class="nav-link nav-expand-link" href="#">
                                Menu
                            </a>
                            <ul class="nav-items nav-expand-content">
                                <li class="nav-item nav-expand">
                                    <a class="nav-link nav-expand-link" href="#">
                                        Menu
                                    </a>
                                    <ul class="nav-items nav-expand-content">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                Level 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                Level 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                Level 3
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item nav-expand">
                                    <a class="nav-link nav-expand-link" href="#">
                                        Menu
                                    </a>
                                    <ul class="nav-items nav-expand-content">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                Level 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                Level 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                Level 3
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-expand">
                                    <a class="nav-link nav-expand-link" href="#">
                                        Menu
                                    </a>
                                    <ul class="nav-items nav-expand-content">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                Level 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                Level 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">
                                                Level 3
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-desctop">
                <div class="header-area header-default sticky-header">
                    <div class="container">
                        <div class="row align-items-center justify-content-between position-relative">
                            <div class="col">
                                <div class="header-logo-area">
                                    <a href="index.php">
                                        <img class="logo-main" src="assets/img/logo.png" alt="Logo" />
                                        <img class="logo d-none" src="assets/img/logo-light.png" alt="Logo" />
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="header-navigation-area">
                                    <ul class="main-menu nav navbar-inner">
                                        <?
                                  function item_once ($url, $name, $class_item, $class_link = '') {
                                    return 
                                    '<li class="'.$class_item.'"><a class="'.$class_link.'" href="'.$url.'"><span>'.$name.'</span></a></li>';
                                  }

                                  function item_list ($url, $name, $list, $parent_tag) {
                                    $sub_list = '';
                                    foreach ($list as $sub_item)
                                      $sub_list .= '<li><a href="'.$sub_item->URL.'">'.$sub_item->NAME.'</a></li>';
                                    if ( $parent_tag == 'ul') {
                                      return generate_list($url, $name, $sub_list, "submenu-nav", "has-submenu", '', $parent_tag);
                                    } else {
                                      return generate_list($url, $name, $sub_list, "", "mega-menu-item", 'mega-title', $parent_tag);
                                    }
                                  }

                                  function generate_list ($url, $name, $sub_list, $class_item_menu, $class_item_sub, $class_link, $parent_tag) {
                                    if ($parent_tag == 'ul') {
                                      $sub_list = '<ul class="'.$class_item_menu.'">'.$sub_list.'</ul>';
                                      $list = '<li class="'.$class_item_sub.'"><a class="'.$class_link.'" href="'.$url.'"><span>'.$name.'</span></a>'.$sub_list.'</li>';
                                      return $list;
                                    } else {
                                      $sub_list = '<li class="'.$class_item_sub.'"><a class="'.$class_link.'" href="'.$url.'">'.$name.'</a><ul>'.$sub_list.'</ul></li>';   
                                      return $sub_list;
                                    }
                                  }

                                  function generate_catalog ($url, $name, $sub_list, $class_item_menu, $class_item_sub, $class_link = '') {
                                    $sub_list = '<ul class="'.$class_item_menu.'">'.$sub_list.'</ul>';
                                    $list = '<li class="'.$class_item_sub.'"><a class="'.$class_link.'" href="'.$url.'"><span>'.$name.'</span></a>'.$sub_list.'</li>';
                                    return $list;
                                  }

                                  $f_json = "menu.json";
                                  $json = file_get_contents($f_json);
                                  $struct = json_decode($json);
                                  foreach ($struct as $menu_item) {
                                    if ($menu_item->tip == 'once') {
                                      echo item_once ($menu_item->URL, $menu_item->NAME, "has-submenu");
                                    }
                                    if ($menu_item->tip == 'list') {
                                      echo item_list ($menu_item->URL, $menu_item->NAME, $menu_item->lists, 'ul');
                                    }
                                    if ($menu_item->tip == 'catalog') {
                                      $sub_list = '';
                                      foreach ($menu_item->KATEGORIA as $sub_item)
                                      {
                                        $sub_list .= item_list ($sub_item->URL, $sub_item->NAME, $sub_item->PODKATEGORIA, 'li');
                                      }
                                      echo generate_catalog ($menu_item->URL, $menu_item->NAME, $sub_list, "submenu-nav submenu-nav-mega", "has-submenu full-width");
                                    }
                                  }
                                ?>
                                    </ul>
                                </div>

                            </div>
                            <div class="col">
                                <div class="header-action-area">
                                    <ul class="header-action">
                                        <li class="user-menu">
                                            <a class="title" href="javascript:;"><i class="fa fa-user-o"></i></a>
                                            <ul class="user-dropdown">
                                                <li class="user">
                                                    <ul>
                                                        <li><a href="#/">Login</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="header-action">
                                        <div class="header-search">
                                            <button class="search-toggle">
                                                <i class="search-icon bardy bardy-search"></i>
                                                <i class="close-icon bardy bardy-cancel"></i>
                                            </button>
                                            <div class="header-search-form">
                                                <form action="#">
                                                    <input type="search" placeholder="Search our store">
                                                    <button type="submit"><i class="bardy bardy-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-action">
                                        <div class="header-mini-cart">
                                            <button class="mini-cart-toggle">
                                                <i class="icon bardy bardy-shopping-cart"></i>
                                            </button>
                                            <div class="mini-cart-dropdown">
                                                <h4 class="cart-title">Корзина</h4>
                                                <div class="cart-item-wrap">
                                                    <div class="cart-item">
                                                        <div class="content">
                                                            <h5 class="title">Ваша корзина пуста</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-action d-block d-lg-none text-end">
                                        <button class="btn-menu" type="button"><i class="zmdi zmdi-menu"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--== End Header Wrapper ==-->

        <main class="main-content">
            <!--== Start Hero Area Wrapper ==-->
            <section class="home-slider-area">
                <div class="swiper-container swiper-slide-gap home-slider-container default-slider-container">
                    <div class="swiper-wrapper home-slider-wrapper slider-default">
                        <div class="swiper-slide">
                            <div class="slider-content-area" data-bg-img="assets/img/slider/slider-01.jpg">
                                <div class="container">
                                    <div class="row align-items-center ">
                                        <div class="col-12">
                                            <div class="slider-content">
                                                <h5 class="sub-title">Текст</h5>
                                                <h2 class="title">ТекстТекстТекст <br>ТекстТекстТекст</h2>
                                                <a class="btn-slider" href="#">Открыть</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--== Add Swiper Arrows ==-->
                    <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                    <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                </div>
            </section>
            <!--== End Hero Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-6">
                            <div class="section-title">
                                <h2 class="title">New Arrivals</h2>
                                <div class="desc">
                                    <p>Some of our customers say that they trust us and buy our product without any
                                        hesitation because they believe us and always happy to buy our product.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper-container swiper-nav swiper-slide-gap product-slider-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <!--== Start Shop Item ==-->
                                        <div class="product-item">
                                            <div class="inner-content">
                                                <div class="product-thumb">
                                                    <a href="shop-single.html">
                                                        <img class="w-100" src="assets/img/shop/1.jpg"
                                                            alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="addto-wrap">
                                                            <a class="add-cart" href="shop-cart.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-shopping-cart"></i>
                                                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-wishlist" href="wishlist.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-wishlist"></i>
                                                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-quick-view" href="javascript:void(0);">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-quick-view"></i>
                                                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="shop-single.html">1. New and sale
                                                                badge product</a></h4>
                                                        <div class="star-content">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="prices">
                                                            <span class="price">Tk 110.00 </span>
                                                            <span class="price-old">Tk 130.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Shop Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Shop Item ==-->
                                        <div class="product-item">
                                            <div class="inner-content">
                                                <div class="product-thumb">
                                                    <a href="shop-single.html">
                                                        <img class="w-100" src="assets/img/shop/2.jpg"
                                                            alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="addto-wrap">
                                                            <a class="add-cart" href="shop-cart.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-shopping-cart"></i>
                                                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-wishlist" href="wishlist.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-wishlist"></i>
                                                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-quick-view" href="javascript:void(0);">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-quick-view"></i>
                                                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="shop-single.html">2. New badge
                                                                product</a></h4>
                                                        <div class="star-content">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="prices">
                                                            <span class="price">Tk 80.00 </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Shop Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Shop Item ==-->
                                        <div class="product-item">
                                            <div class="inner-content">
                                                <div class="product-thumb">
                                                    <a href="shop-single.html">
                                                        <img class="w-100" src="assets/img/shop/3.jpg"
                                                            alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="addto-wrap">
                                                            <a class="add-cart" href="shop-cart.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-shopping-cart"></i>
                                                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-wishlist" href="wishlist.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-wishlist"></i>
                                                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-quick-view" href="javascript:void(0);">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-quick-view"></i>
                                                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="shop-single.html">3. Variable
                                                                product</a></h4>
                                                        <div class="star-content">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="prices">
                                                            <span class="price">Tk 40.00 </span>
                                                            <span class="price-old">Tk 85.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Shop Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Shop Item ==-->
                                        <div class="product-item">
                                            <div class="inner-content">
                                                <div class="product-thumb">
                                                    <a href="shop-single.html">
                                                        <img class="w-100" src="assets/img/shop/4.jpg"
                                                            alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="addto-wrap">
                                                            <a class="add-cart" href="shop-cart.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-shopping-cart"></i>
                                                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-wishlist" href="wishlist.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-wishlist"></i>
                                                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-quick-view" href="javascript:void(0);">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-quick-view"></i>
                                                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="shop-single.html">4. Soldout
                                                                product</a></h4>
                                                        <div class="star-content">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="prices">
                                                            <span class="price">Tk 19.00 </span>
                                                            <span class="price-old">Tk 29.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Shop Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Shop Item ==-->
                                        <div class="product-item">
                                            <div class="inner-content">
                                                <div class="product-thumb">
                                                    <a href="shop-single.html">
                                                        <img class="w-100" src="assets/img/shop/5.jpg"
                                                            alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="addto-wrap">
                                                            <a class="add-cart" href="shop-cart.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-shopping-cart"></i>
                                                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-wishlist" href="wishlist.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-wishlist"></i>
                                                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-quick-view" href="javascript:void(0);">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-quick-view"></i>
                                                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="shop-single.html">5. Simple
                                                                product</a></h4>
                                                        <div class="star-content">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="prices">
                                                            <span class="price">Tk 50.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Shop Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Shop Item ==-->
                                        <div class="product-item">
                                            <div class="inner-content">
                                                <div class="product-thumb">
                                                    <a href="shop-single.html">
                                                        <img class="w-100" src="assets/img/shop/6.jpg"
                                                            alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="addto-wrap">
                                                            <a class="add-cart" href="shop-cart.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-shopping-cart"></i>
                                                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-wishlist" href="wishlist.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-wishlist"></i>
                                                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-quick-view" href="javascript:void(0);">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-quick-view"></i>
                                                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="shop-single.html">6. Variable with
                                                                soldout product</a></h4>
                                                        <div class="star-content">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="prices">
                                                            <span class="price">Tk 55.00</span>
                                                            <span class="price-old">Tk 75.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Shop Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Shop Item ==-->
                                        <div class="product-item">
                                            <div class="inner-content">
                                                <div class="product-thumb">
                                                    <a href="shop-single.html">
                                                        <img class="w-100" src="assets/img/shop/7.jpg"
                                                            alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="addto-wrap">
                                                            <a class="add-cart" href="shop-cart.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-shopping-cart"></i>
                                                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-wishlist" href="wishlist.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-wishlist"></i>
                                                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-quick-view" href="javascript:void(0);">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-quick-view"></i>
                                                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="shop-single.html">7. Sample affiliate
                                                                product</a></h4>
                                                        <div class="star-content">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="prices">
                                                            <span class="price">Tk 29.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Shop Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Shop Item ==-->
                                        <div class="product-item">
                                            <div class="inner-content">
                                                <div class="product-thumb">
                                                    <a href="shop-single.html">
                                                        <img class="w-100" src="assets/img/shop/8.jpg"
                                                            alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="addto-wrap">
                                                            <a class="add-cart" href="shop-cart.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-shopping-cart"></i>
                                                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-wishlist" href="wishlist.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-wishlist"></i>
                                                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-quick-view" href="javascript:void(0);">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-quick-view"></i>
                                                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ht-countdown ht-countdown-style" data-date="4/24/2022">
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="shop-single.html">8. Countdown
                                                                product</a></h4>
                                                        <div class="star-content">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="prices">
                                                            <span class="price">Tk 39.00 </span>
                                                            <span class="price-old">Tk 60.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Shop Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Shop Item ==-->
                                        <div class="product-item">
                                            <div class="inner-content">
                                                <div class="product-thumb">
                                                    <a href="shop-single.html">
                                                        <img class="w-100" src="assets/img/shop/9.jpg"
                                                            alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="addto-wrap">
                                                            <a class="add-cart" href="shop-cart.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-shopping-cart"></i>
                                                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-wishlist" href="wishlist.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-wishlist"></i>
                                                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-quick-view" href="javascript:void(0);">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-quick-view"></i>
                                                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="shop-single.html">9. Without
                                                                shortcode product</a></h4>
                                                        <div class="star-content">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="prices">
                                                            <span class="price">Tk 79.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Shop Item ==-->
                                    </div>
                                    <div class="swiper-slide">
                                        <!--== Start Shop Item ==-->
                                        <div class="product-item">
                                            <div class="inner-content">
                                                <div class="product-thumb">
                                                    <a href="shop-single.html">
                                                        <img class="w-100" src="assets/img/shop/10.jpg"
                                                            alt="Image-HasTech">
                                                    </a>
                                                    <div class="product-action">
                                                        <div class="addto-wrap">
                                                            <a class="add-cart" href="shop-cart.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-shopping-cart"></i>
                                                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-wishlist" href="wishlist.html">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-wishlist"></i>
                                                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                                                </span>
                                                            </a>
                                                            <a class="add-quick-view" href="javascript:void(0);">
                                                                <span class="icon">
                                                                    <i class="bardy bardy-quick-view"></i>
                                                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-desc">
                                                    <div class="product-info">
                                                        <h4 class="title"><a href="shop-single.html">11. Product with
                                                                video</a></h4>
                                                        <div class="star-content">
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                        <div class="prices">
                                                            <span class="price">Tk 39.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End Shop Item ==-->
                                    </div>
                                </div>

                                <!--== Add Swiper navigation Buttons ==-->
                                <div class="swiper-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="swiper-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->

            <!--== Start Product Area Wrapper ==-->
            <section class="product-area product-list-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-6">
                            <div class="section-title">
                                <h2 class="title">Product List</h2>
                                <div class="desc">
                                    <p>Some of our customers say that they trust us and buy our product without any
                                        hesitation because they believe us and always happy to buy our product.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-category-tab-wrap">
                                <ul class="nav nav-tabs product-category-nav" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="featured-tab" data-bs-toggle="tab"
                                            data-bs-target="#featured" type="button" role="tab" aria-controls="featured"
                                            aria-selected="true">Featured</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="chair-tab" data-bs-toggle="tab"
                                            data-bs-target="#chair" type="button" role="tab" aria-controls="chair"
                                            aria-selected="false">Chair</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="sofa-tab" data-bs-toggle="tab"
                                            data-bs-target="#sofa" type="button" role="tab" aria-controls="sofa"
                                            aria-selected="false">Sofa</button>
                                    </li>
                                </ul>
                                <div class="tab-content product-category-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="featured" role="tabpanel"
                                        aria-labelledby="featured-tab">
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="swiper-container swiper-nav swiper-slide-gap product-slider-container">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <!--== Start Shop Item ==-->
                                                            <div class="product-item">
                                                                <div class="inner-content">
                                                                    <div class="product-thumb">
                                                                        <a href="shop-single.html">
                                                                            <img class="w-100"
                                                                                src="assets/img/shop/1.jpg"
                                                                                alt="Image-HasTech">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <div class="addto-wrap">
                                                                                <a class="add-cart"
                                                                                    href="shop-cart.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-shopping-cart"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-shopping-cart"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-wishlist"
                                                                                    href="wishlist.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-wishlist"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-wishlist"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-quick-view"
                                                                                    href="javascript:void(0);">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-quick-view"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-quick-view"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-desc">
                                                                        <div class="product-info">
                                                                            <h4 class="title"><a
                                                                                    href="shop-single.html">1. New and
                                                                                    sale badge product</a></h4>
                                                                            <div class="star-content">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                            <div class="prices">
                                                                                <span class="price">Tk 110.00 </span>
                                                                                <span class="price-old">Tk 130.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--== End Shop Item ==-->

                                                            <!--== Start Shop Item ==-->
                                                            <div class="product-item">
                                                                <div class="inner-content">
                                                                    <div class="product-thumb">
                                                                        <a href="shop-single.html">
                                                                            <img class="w-100"
                                                                                src="assets/img/shop/2.jpg"
                                                                                alt="Image-HasTech">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <div class="addto-wrap">
                                                                                <a class="add-cart"
                                                                                    href="shop-cart.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-shopping-cart"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-shopping-cart"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-wishlist"
                                                                                    href="wishlist.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-wishlist"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-wishlist"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-quick-view"
                                                                                    href="javascript:void(0);">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-quick-view"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-quick-view"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-desc">
                                                                        <div class="product-info">
                                                                            <h4 class="title"><a
                                                                                    href="shop-single.html">2. New badge
                                                                                    product</a></h4>
                                                                            <div class="star-content">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                            <div class="prices">
                                                                                <span class="price">Tk 80.00 </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--== End Shop Item ==-->
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <!--== Start Shop Item ==-->
                                                            <div class="product-item">
                                                                <div class="inner-content">
                                                                    <div class="product-thumb">
                                                                        <a href="shop-single.html">
                                                                            <img class="w-100"
                                                                                src="assets/img/shop/3.jpg"
                                                                                alt="Image-HasTech">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <div class="addto-wrap">
                                                                                <a class="add-cart"
                                                                                    href="shop-cart.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-shopping-cart"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-shopping-cart"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-wishlist"
                                                                                    href="wishlist.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-wishlist"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-wishlist"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-quick-view"
                                                                                    href="javascript:void(0);">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-quick-view"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-quick-view"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-desc">
                                                                        <div class="product-info">
                                                                            <h4 class="title"><a
                                                                                    href="shop-single.html">3. Variable
                                                                                    product</a></h4>
                                                                            <div class="star-content">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                            <div class="prices">
                                                                                <span class="price">Tk 40.00 </span>
                                                                                <span class="price-old">Tk 85.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--== End Shop Item ==-->

                                                            <!--== Start Shop Item ==-->
                                                            <div class="product-item">
                                                                <div class="inner-content">
                                                                    <div class="product-thumb">
                                                                        <a href="shop-single.html">
                                                                            <img class="w-100"
                                                                                src="assets/img/shop/4.jpg"
                                                                                alt="Image-HasTech">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <div class="addto-wrap">
                                                                                <a class="add-cart"
                                                                                    href="shop-cart.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-shopping-cart"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-shopping-cart"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-wishlist"
                                                                                    href="wishlist.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-wishlist"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-wishlist"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-quick-view"
                                                                                    href="javascript:void(0);">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-quick-view"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-quick-view"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-desc">
                                                                        <div class="product-info">
                                                                            <h4 class="title"><a
                                                                                    href="shop-single.html">4. Soldout
                                                                                    product</a></h4>
                                                                            <div class="star-content">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                            <div class="prices">
                                                                                <span class="price">Tk 19.00 </span>
                                                                                <span class="price-old">Tk 29.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--== End Shop Item ==-->
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <!--== Start Shop Item ==-->
                                                            <div class="product-item">
                                                                <div class="inner-content">
                                                                    <div class="product-thumb">
                                                                        <a href="shop-single.html">
                                                                            <img class="w-100"
                                                                                src="assets/img/shop/5.jpg"
                                                                                alt="Image-HasTech">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <div class="addto-wrap">
                                                                                <a class="add-cart"
                                                                                    href="shop-cart.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-shopping-cart"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-shopping-cart"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-wishlist"
                                                                                    href="wishlist.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-wishlist"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-wishlist"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-quick-view"
                                                                                    href="javascript:void(0);">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-quick-view"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-quick-view"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-desc">
                                                                        <div class="product-info">
                                                                            <h4 class="title"><a
                                                                                    href="shop-single.html">5. Simple
                                                                                    product</a></h4>
                                                                            <div class="star-content">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                            <div class="prices">
                                                                                <span class="price">Tk 50.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--== End Shop Item ==-->

                                                            <!--== Start Shop Item ==-->
                                                            <div class="product-item">
                                                                <div class="inner-content">
                                                                    <div class="product-thumb">
                                                                        <a href="shop-single.html">
                                                                            <img class="w-100"
                                                                                src="assets/img/shop/6.jpg"
                                                                                alt="Image-HasTech">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <div class="addto-wrap">
                                                                                <a class="add-cart"
                                                                                    href="shop-cart.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-shopping-cart"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-shopping-cart"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-wishlist"
                                                                                    href="wishlist.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-wishlist"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-wishlist"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-quick-view"
                                                                                    href="javascript:void(0);">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-quick-view"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-quick-view"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-desc">
                                                                        <div class="product-info">
                                                                            <h4 class="title"><a
                                                                                    href="shop-single.html">6. Variable
                                                                                    with soldout product</a></h4>
                                                                            <div class="star-content">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                            <div class="prices">
                                                                                <span class="price">Tk 55.00</span>
                                                                                <span class="price-old">Tk 75.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--== End Shop Item ==-->
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <!--== Start Shop Item ==-->
                                                            <div class="product-item">
                                                                <div class="inner-content">
                                                                    <div class="product-thumb">
                                                                        <a href="shop-single.html">
                                                                            <img class="w-100"
                                                                                src="assets/img/shop/7.jpg"
                                                                                alt="Image-HasTech">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <div class="addto-wrap">
                                                                                <a class="add-cart"
                                                                                    href="shop-cart.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-shopping-cart"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-shopping-cart"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-wishlist"
                                                                                    href="wishlist.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-wishlist"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-wishlist"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-quick-view"
                                                                                    href="javascript:void(0);">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-quick-view"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-quick-view"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-desc">
                                                                        <div class="product-info">
                                                                            <h4 class="title"><a
                                                                                    href="shop-single.html">7. Sample
                                                                                    affiliate product</a></h4>
                                                                            <div class="star-content">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                            <div class="prices">
                                                                                <span class="price">Tk 29.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--== End Shop Item ==-->

                                                            <!--== Start Shop Item ==-->
                                                            <div class="product-item">
                                                                <div class="inner-content">
                                                                    <div class="product-thumb">
                                                                        <a href="shop-single.html">
                                                                            <img class="w-100"
                                                                                src="assets/img/shop/8.jpg"
                                                                                alt="Image-HasTech">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <div class="addto-wrap">
                                                                                <a class="add-cart"
                                                                                    href="shop-cart.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-shopping-cart"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-shopping-cart"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-wishlist"
                                                                                    href="wishlist.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-wishlist"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-wishlist"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-quick-view"
                                                                                    href="javascript:void(0);">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-quick-view"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-quick-view"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ht-countdown ht-countdown-style"
                                                                            data-date="4/24/2022"></div>
                                                                    </div>
                                                                    <div class="product-desc">
                                                                        <div class="product-info">
                                                                            <h4 class="title"><a
                                                                                    href="shop-single.html">8. Countdown
                                                                                    product</a></h4>
                                                                            <div class="star-content">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                            <div class="prices">
                                                                                <span class="price">Tk 39.00 </span>
                                                                                <span class="price-old">Tk 60.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--== End Shop Item ==-->
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <!--== Start Shop Item ==-->
                                                            <div class="product-item">
                                                                <div class="inner-content">
                                                                    <div class="product-thumb">
                                                                        <a href="shop-single.html">
                                                                            <img class="w-100"
                                                                                src="assets/img/shop/9.jpg"
                                                                                alt="Image-HasTech">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <div class="addto-wrap">
                                                                                <a class="add-cart"
                                                                                    href="shop-cart.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-shopping-cart"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-shopping-cart"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-wishlist"
                                                                                    href="wishlist.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-wishlist"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-wishlist"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-quick-view"
                                                                                    href="javascript:void(0);">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-quick-view"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-quick-view"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-desc">
                                                                        <div class="product-info">
                                                                            <h4 class="title"><a
                                                                                    href="shop-single.html">9. Without
                                                                                    shortcode product</a></h4>
                                                                            <div class="star-content">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                            <div class="prices">
                                                                                <span class="price">Tk 79.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--== End Shop Item ==-->

                                                            <!--== Start Shop Item ==-->
                                                            <div class="product-item">
                                                                <div class="inner-content">
                                                                    <div class="product-thumb">
                                                                        <a href="shop-single.html">
                                                                            <img class="w-100"
                                                                                src="assets/img/shop/10.jpg"
                                                                                alt="Image-HasTech">
                                                                        </a>
                                                                        <div class="product-action">
                                                                            <div class="addto-wrap">
                                                                                <a class="add-cart"
                                                                                    href="shop-cart.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-shopping-cart"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-shopping-cart"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-wishlist"
                                                                                    href="wishlist.html">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-wishlist"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-wishlist"></i>
                                                                                    </span>
                                                                                </a>
                                                                                <a class="add-quick-view"
                                                                                    href="javascript:void(0);">
                                                                                    <span class="icon">
                                                                                        <i
                                                                                            class="bardy bardy-quick-view"></i>
                                                                                        <i
                                                                                            class="hover-icon bardy bardy-quick-view"></i>
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-desc">
                                                                        <div class="product-info">
                                                                            <h4 class="title"><a
                                                                                    href="shop-single.html">11. Product
                                                                                    with video</a></h4>
                                                                            <div class="star-content">
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                                <i class="fa fa-star-o"></i>
                                                                            </div>
                                                                            <div class="prices">
                                                                                <span class="price">Tk 39.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--== End Shop Item ==-->
                                                        </div>
                                                    </div>

                                                    <!--== Add Swiper navigation Buttons ==-->
                                                    <div class="swiper-button swiper-button-prev"><i
                                                            class="fa fa-angle-left"></i></div>
                                                    <div class="swiper-button swiper-button-next"><i
                                                            class="fa fa-angle-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="chair" role="tabpanel" aria-labelledby="chair-tab">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/1.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">1. New and
                                                                        sale badge product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 110.00 </span>
                                                                    <span class="price-old">Tk 130.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->

                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/2.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">2. New
                                                                        badge product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 80.00 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/3.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">3. Variable
                                                                        product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 40.00 </span>
                                                                    <span class="price-old">Tk 85.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->

                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/4.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">4. Soldout
                                                                        product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 19.00 </span>
                                                                    <span class="price-old">Tk 29.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 d-none d-lg-block">
                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/5.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">5. Simple
                                                                        product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 50.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->

                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/6.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">6. Variable
                                                                        with soldout product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 55.00</span>
                                                                    <span class="price-old">Tk 75.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 d-none d-xl-block">
                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/7.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">7. Sample
                                                                        affiliate product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 29.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->

                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/8.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="ht-countdown ht-countdown-style"
                                                                data-date="4/24/2022"></div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">8.
                                                                        Countdown product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 39.00 </span>
                                                                    <span class="price-old">Tk 60.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sofa" role="tabpanel" aria-labelledby="sofa-tab">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/1.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">1. New and
                                                                        sale badge product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 110.00 </span>
                                                                    <span class="price-old">Tk 130.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->

                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/2.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">2. New
                                                                        badge product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 80.00 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/3.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">3. Variable
                                                                        product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 40.00 </span>
                                                                    <span class="price-old">Tk 85.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->

                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/4.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">4. Soldout
                                                                        product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 19.00 </span>
                                                                    <span class="price-old">Tk 29.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 d-none d-lg-block">
                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/5.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">5. Simple
                                                                        product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 50.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->

                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/6.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">6. Variable
                                                                        with soldout product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 55.00</span>
                                                                    <span class="price-old">Tk 75.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->
                                            </div>
                                            <div class="col-sm-6 col-lg-4 col-xl-3 d-none d-xl-block">
                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/7.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">7. Sample
                                                                        affiliate product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 29.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->

                                                <!--== Start Shop Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="shop-single.html">
                                                                <img class="w-100" src="assets/img/shop/8.jpg"
                                                                    alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <div class="addto-wrap">
                                                                    <a class="add-cart" href="shop-cart.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-shopping-cart"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-shopping-cart"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-wishlist" href="wishlist.html">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-wishlist"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-wishlist"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="add-quick-view"
                                                                        href="javascript:void(0);">
                                                                        <span class="icon">
                                                                            <i class="bardy bardy-quick-view"></i>
                                                                            <i
                                                                                class="hover-icon bardy bardy-quick-view"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="ht-countdown ht-countdown-style"
                                                                data-date="4/24/2022"></div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <div class="product-info">
                                                                <h4 class="title"><a href="shop-single.html">8.
                                                                        Countdown product</a></h4>
                                                                <div class="star-content">
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <i class="fa fa-star-o"></i>
                                                                </div>
                                                                <div class="prices">
                                                                    <span class="price">Tk 39.00 </span>
                                                                    <span class="price-old">Tk 60.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End Shop Item ==-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Product Area Wrapper ==-->


        </main>

        <!--== Start Footer Area Wrapper ==-->
        <footer class="footer-area bg-color-222">
            <div class="footer-top-area">
                <div class="container">
                    <div class="footer-widget-wrap row">
                        <div class="col">
                            <!--== Start widget Item ==-->
                            <div class="widget-item">
                                <div class="footer-logo-area">
                                    <a href="index.php">
                                        <img class="logo-main" src="assets/img/logo-light.png" alt="Logo" />
                                    </a>
                                </div>
                                <p>People have been using natural objects, such as tree stumps, rocks and moss, as
                                    furniture since the beginning of human civilisation.</p>
                                <p>Your current address goes to here,120 example, country.</p>
                                <p>+12546 687 987 / +15425 987 541</p>
                                <p>demo@example.com www.example.com</p>
                            </div>
                            <!--== End widget Item ==-->
                        </div>

                        <div class="col">
                            <!--== Start widget Item ==-->
                            <div class="widget-item">
                                <h4 class="widget-title">Quick Link</h4>
                                <div class="widget-menu-wrap">
                                    <ul class="nav-menu">
                                        <li><a href="page-search.html">Search</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="shipping-policy.html">Shipping policy</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="shop.html">All Products</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--== End widget Item ==-->
                        </div>

                        <div class="col">
                            <!--== Start widget Item ==-->
                            <div class="widget-item">
                                <h4 class="widget-title">Information</h4>
                                <div class="widget-menu-wrap">
                                    <ul class="nav-menu">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="#/">My Account</a></li>
                                        <li><a href="#/">Terms & Conditions</a></li>
                                        <li><a href="shop-shipping-policy.html">Shipping policy</a></li>
                                        <li><a href="shop-checkout.html">Payment System</a></li>
                                        <li><a href="#/">Promotional Offers</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--== End widget Item ==-->
                        </div>

                        <div class="col">
                            <!--== Start widget Item ==-->
                            <div class="widget-item">
                                <h4 class="widget-title">Follow us</h4>
                                <div class="widget-menu-wrap">
                                    <ul class="nav-menu">
                                        <li><a href="#/">Facebook</a></li>
                                        <li><a href="#/">Twitter</a></li>
                                        <li><a href="#/">Instagram</a></li>
                                        <li><a href="#/">LinkedIn</a></li>
                                        <li><a href="#/">Google Plus</a></li>
                                        <li><a href="#/">YouTube</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--== End widget Item ==-->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--== End Footer Area Wrapper ==-->

        <!--== Scroll Top Button ==-->
        <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

        <!--== Start Quick View Menu ==-->
        <aside class="product-quick-view-modal">
            <div class="product-quick-view-inner">
                <div class="product-quick-view-content">
                    <button type="button" class="btn-close">
                        <span class="close-icon"><i class="fa fa-close"></i></span>
                    </button>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="thumb">
                                <img src="assets/img/shop/quick-view1.jpg" alt="Alan-Shop">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="content">
                                <h4 class="title">3. Variable product</h4>
                                <div class="prices">
                                    <del class="price-old">$85.00</del>
                                    <span class="price">$70.00</span>
                                </div>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                    piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                    Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
                                <div class="quick-view-select">
                                    <div class="quick-view-select-item">
                                        <label for="forSize" class="form-label">Size:</label>
                                        <select class="form-select" id="forSize" required>
                                            <option selected value="">s</option>
                                            <option>m</option>
                                            <option>l</option>
                                            <option>xl</option>
                                        </select>
                                    </div>
                                    <div class="quick-view-select-item">
                                        <label for="forColor" class="form-label">Color:</label>
                                        <select class="form-select" id="forColor" required>
                                            <option selected value="">red</option>
                                            <option>green</option>
                                            <option>blue</option>
                                            <option>yellow</option>
                                            <option>white</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="action-top">
                                    <div class="pro-qty">
                                        <input type="text" id="quantity2" title="Quantity" value="1" />
                                    </div>
                                    <button class="btn btn-black">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-overlay"></div>
        </aside>
        <!--== End Quick View Menu ==-->

        <!--== Start Side Menu ==-->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <div class="off-canvas-overlay"></div>
                <!-- Start Off Canvas Content Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="close-action">
                            <button class="btn-menu-close">menu <i class="fa fa-chevron-left"></i></button>
                        </div>
                    </div>

                    <div class="off-canvas-item">
                        <!-- Start Mobile Menu Wrapper -->
                        <div class="res-mobile-menu menu-active-one">
                            <!-- Note Content Auto Generate By Jquery From Main Menu -->
                        </div>
                        <!-- End Mobile Menu Wrapper -->
                    </div>
                </div>
                <!-- End Off Canvas Content Wrapper -->
            </div>
        </aside>
        <!--== End Side Menu ==-->
    </div>

    <!--=======================Javascript============================-->

    <!--=== jQuery Modernizr Min Js ===-->
    <script src="assets/js/modernizr.js"></script>
    <!--=== jQuery Min Js ===-->
    <script src="assets/js/jquery-main.js"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="assets/js/jquery-migrate.js"></script>
    <!--=== jQuery Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== jQuery Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== jQuery Appear Js ===-->
    <script src="assets/js/jquery.appear.js"></script>
    <!--=== jQuery Headroom Min Js ===-->
    <script src="assets/js/headroom.min.js"></script>
    <!--=== jQuery Swiper Min Js ===-->
    <script src="assets/js/swiper.min.js"></script>
    <!--=== jQuery Fancybox Min Js ===-->
    <script src="assets/js/fancybox.min.js"></script>
    <!--=== jQuery Slick Nav Js ===-->
    <script src="assets/js/slicknav.js"></script>
    <!--=== jQuery Waypoint Js ===-->
    <script src="assets/js/waypoint.js"></script>
    <!--=== jQuery Parallax Min Js ===-->
    <script src="assets/js/parallax.min.js"></script>
    <!--=== jQuery Aos Min Js ===-->
    <script src="assets/js/aos.min.js"></script>
    <!--=== jQuery Countdown Js ===-->
    <script src="assets/js/countdown.js"></script>

    <!--=== jQuery Custom Js ===-->
    <script src="assets/js/custom.js"></script>

</body>

</html>