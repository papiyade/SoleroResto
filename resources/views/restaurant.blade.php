<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/restaurant/luxury/menu-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 May 2024 02:06:15 GMT -->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Restaurant HTML Template - Luxury</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">



    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/style.css') }}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/responsive.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('front/assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('front/assets/images/favicon.png') }}">

    <style>
.custom-cart-btn {
    display: flex; /* Utiliser flexbox pour aligner les éléments */
    align-items: center; /* Centrer verticalement les éléments */
    width: 100px; /* Ajustez la largeur selon vos besoins */
    height: 40px;
    justify-content: space-between; /* Répartir les éléments avec de l'espace entre eux */
}

.custom-cart-text {
    margin-left: 6px; /* Ajouter de l'espace entre le texte et le SVG */
    margin-right: auto; /* Pousse le texte vers la gauche */
}

.custom-cart-icon {
    margin-right: 6px; /* Ajouter de l'espace entre l'icône et le texte */
}

.custom-cart-badge {
    background-color: #8e8558; /* Couleur de fond jaune */
    border-radius: 50%; /* Pour rendre la forme arrondie */
    padding: 0.5rem; /* Ajoutez du padding pour agrandir la badge */
    font-size: 1.5rem; /* Augmente la taille du texte de la badge */
    color: white; /* Couleur du texte de la badge */
    min-width: 2rem; /* Largeur minimale pour s'assurer que la badge soit ronde */
    min-height: 2rem; /* Hauteur minimale pour s'assurer que la badge soit ronde */
    display: flex; /* Utiliser flexbox pour centrer le texte */
    align-items: center; /* Centrer verticalement le texte */
    justify-content: center; /* Centrer horizontalement le texte */
}



        .menu-item {
            position: relative;
            padding: 10px;
        }

        .menu-item .menu-item-inner {
            position: relative;
            overflow: hidden;
        }

        .menu-item .menu-item-image {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .menu-item .menu-item-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .menu-item .menu-item-hover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .menu-item:hover .menu-item-hover {
            opacity: 1;
        }

        .menu-item .menu-item-hover-content {
            text-align: center;
            color: #fff;
        }

        .menu-item .menu-item-name {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .menu-item .btn-add-to-cart {
            background-color: #977644;
            color: #fff;
            border: none;
            padding: 8px 16px;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .menu-item .btn-add-to-cart:hover {
            background-color: #c9a929;
        }

        .menu-item .menu-item-details {
            padding: 10px;
        }

        .menu-item .name {
            font-weight: bold;
        }

        .menu-item .line {
            width: 20px;
            height: 2px;
            background-color: #977644;
            margin: 8px 0;
        }

        .menu-item .price {
            color: #977644;
        }
    </style>

</head>

<body class="body">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="middle"></div>
    </div>
    <!-- /preload -->

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">

            <!-- header -->
            <header id="header_main" class="header header-fixed">
                <div class="header-top">
                    <div class="left">
                        <div class="wg-information">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="13" height="16" viewBox="0 0 13 16">
                                    <image id="_" data-name="" width="13" height="16"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAADaUlEQVRIia2We29UVRTFfx0uCC3TFtoCxUJRgwISCIjGQEz8xxg/l1/HT4CJPEQwCAIFlTdKQCmP1nagUx5TyE5+x1xO7p1pE3dy00nnzF577bX2Prfv9Hff0iUawGpgDTAADAJN//ccaAFzwDPgFfCiLlXRDcWkI8BG/24A1gsUSeeBx8CMfx9bwLKBgsk48BGwH9gNTAoc7PqAJcEeAXeAi8AF4FoVWBXQOmAb8CnwiUC7gK01RQXYXWACGJPxddnVAq0FdgJfAF8DH9uyobreyvA99dtmJ44BZ4AnVUANqz4CfAMcVpPlxCpgk+f7bW3oN6VhOmWgYWAf8BXw+QpAyhEm+VCNZnXiFeBpIZOg/z5wUE1GKpK0bEXLBGs9NyKjFO/Y/sOe/zt0LGzfiAAHbEEe81YWzroNtBU+OnAI2J6dD0336MZfY84So2GdtVP6KTpBW8seB05lQFHtS5+tOjbFmCMRhT9MjJrac0LqKRaBWwJ8r7jztu6RnxcF+tLfpwjQUZ+hQpcM2r6BCl2uAmdt3Uzpu7ZFYPX7MyDMHaba0BBk2EHLY8H23Bc0j9gOD2XXrvh+jd0aTEtztVrVxWuflcZ/+RuukAUrypP1K/KEzPNoKPZYZoQUr5yp54WumtPzz7IWNnXjtN//VroSoi1bgM8ci6oBbzu4s4VsIslfarGj5LwYyg9KTDcD93TaoLNyxEHPh7xtgZFzupBabNrfnaPxEtAqh2+Xn8czoFg3e4F33W8pOprohudnCmfgiVM/aZW5HgPeTVuy1g3p2L7sfIzBJeB8cmxhWxZdF1OulE3qU451NYLn0ZHFWcFCoxdlS/9r+352OKvmpldE0Q+Ay8AvwM3k5vI1EcP3D/CTrRutYNUrWoKc9pZ9ms7nN+yc936/18boCu+lO6XlO13+It8GSwo55VV8TbP0io7duKA2t/Lf1b0FhTV/dOLHdWO3mFGTU7ZsMT9bt99eyuaM7Ga77LolLRzanss2fE8gTB7uO+EtOVdxJrlsSkY3arZ4zzfVBzqo6fppZu8HLYs4KchCXaJeQC1ZrXfnbVSztAliTo4CP+QuWylQAvtDoTe7dmLZRuJgG0/YumssBygiWhhAsZpitoJhGCXeI9J1/r8AxRKNKzt0iMkPoDDAn3XivxXAG/709S6pPU+LAAAAAElFTkSuQmCC" />
                                </svg>
                            </div>
                            <div class="content">
                                <p class="tf-color">{{ $restaurant->name }}</p>
                                <p>{{ $restaurant->address }}</p>
                            </div>
                        </div>
                        <div class="wg-information">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="17" height="13" viewBox="0 0 17 13">
                                    <image id="_" data-name="" width="17" height="13"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAaCAYAAADSbo4CAAADAElEQVRIic2WWWtTQRiGnzSnaWtbbN2tW4tYUay4XKgg6m/wL/lPvPY3eFkv3FBRUEFRbF3q1s1qkjbyhWdgCF0Sl+oHQybnnHnnnffbpjR54xqZFcBWYAewGxgASsA3YA6YAb4AXb4fAbYBPcCKI7eS82q2/oPzH/n3RcuiIDEGjAJ7gcGMyDwwDbwBvgJliR6WVN2RWxBuADU3/yjGlGOulUjJjU8Dl4GTgld8XxfsPfAQmARe+34COC9GqyLJVlTlu4rcB24CD1S4SaQf2C7YFeAicDQjkVuQOaArJv1dBno9SLEGkdziUPuAPqAbuBNqx8Jxx1XgHLBnDRK4cNx5uO058AzYAlxy7UYWex5TgF5VehEPzzhCiZE2gHoyxeoqE2AH2ySCBMaNvVeBGUQuAKeUtl2rGNQvgdsG8pxuKneAM+r+fUmmMYOtKuiSoMkavq/ohgHnO4FdwIKnW9BlDVVaNE2RYBo9xsgWg71UKOewH8/r92mBUh2om4rDnmJMoH6JNCTxWdkbZkdk1ifJlCTRp/qR9kO6dLbwZGnDJfP7qcDpeU2QETfPo37Yb4P4rCrhfEoyM7quqppnLIRDqtNbZJv9ihUCFar23d+UxmWVjAL42GI46OHPZjj1oqUa9nna0jqu2akSydI3DeNqRSJx2kNihsvvqhDG5WK2rlo4SRZsjwD7NwjWSva8sQqRbgkPWgCXraKPVqm+jSRtTqRilW3XciK5i8vGUr//T1inagbuhH2NRL6dkvwnbLc97KAbH8qKX3UziUScHDdl0/9e5/XNJNLtGFzlXdO1XZtEZEP7r4h00qT+Foeurpb0/RfWLAG/S2Qgy4DUBFcLyPUsgrgcRN7ll9gOrW5dWM4uz7UOMaJjf470vWWHjLKe0nkjlVIVjd7xBHirOjUbXLpWrIWT1jevidEMY+Prltu4V4TE693GW4Gi/ce9I5paYN2zvYeb1iOSQiKuHeGR5n0kLkLRyOJ0nRKJ8hxdNH7D4t4RWKk7t0NkFlj6CW2ly+DSZ9BoAAAAAElFTkSuQmCC" />
                                </svg>
                            </div>
                            <div class="content">
                                <p class="tf-color">Email Contact</p>
                                <p>{{ $restaurant->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="wg-information">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="17" height="15" viewBox="0 0 17 15">
                                    <image id="_" data-name="" width="17" height="15"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAeCAYAAABJ/8wUAAAEFklEQVRYhbWXW2+UVRSGn6nTOqXnQk/WUFEpghIrFYmNh6gx3viv/DHeGK+81HiIEEXRKIkoRqFNtXUsWhjAocxYs+qzze7XmXYa05Xs5Jt9WOtdh3ftPaUL77zFHtIFlB3dQC8w4KgAJY9vAnWg5vgLuA80HH/vZqa8FwqgDxgGhoB+vwf3AHILWAduAzf9rv0fIEeAJ4CTwGPAw8CE4LpbnG8YhTvAb8Ay8BNwBfgeWNsPkPB8HJgEHgGecpwAjgqgEwlAS8APwOPAMeA6sApUjVRbIBHueeA54LSGA9BhYKRDAEm6jeIoMAssCOwycBH4Ik9XAOkx1xHySMHLwDngVGa8oRd/mvcNPa6bBkxXRQA91tOIQEaMSpyfAcZcv2IK62UnIvevAS8ZiQnnsQgXgW/M8wpwV1bUshAPGdFg1SFgyvp6GnjUoh7x96RznwAfRC2VZUAAeQF41d9kkQgQF4D3ge+MQDkrytvu7c+KuOH3qSxiM57rd4xJ6aihW2XDGd48VACBNIwofA58JQ3H9LY7YwkZi+4btVVTN5ClZzTTPajNsF0p27B6WoBAw98CV/UwmHPcIq64J+8jaDyK8kfpG2enbQGjBf2D2u4KIPc8HAVYlCULKrx8EXjFNA7ofakAZNMo1QTxIfClOpasi1w2tH2vnB06bxF2mbsN56oWV7Dp9X30kZPqWVbHeed7Mhtfu14rW/URxreBj9y44ajJgCdNSacgcO9xz34mOy6qP9lY0fbNlJqq7TdtSqmKSn/TBjeWGanL/zVpjLQ9IvVT/Yx5Ngr3PRmY+lZydusyzDtrTNQ1kiSKa84xlNVCKPzY/Fedj2vhWVM4a+0MeXbJFrCYAdgm7S69B/TmjA1u3PlQcMPmFn3l0wKQ9ex2Pqz34+o4Yyp+B5pFg11tgATnzwLPS9Ukd6XjJe+MFZU2/b7s2lX3JjmqrrPt7qxWQEo2mgVDPZyt1a3ya1kkcqm6tlxI8bC6FtRdKh5sBWTExjXvRdXbJmr7kV51zat7R1SKQCoemPMK72uxPu3bYpydMu7adMacJH3qnNPGtvVisU5It3M2saIckhEpBTcsPizu03o9696iTKp7RfovtgIS3+HJM4av6BGyYEqv1t1zzbVj3uBz7tlRB+4/4Z5L1lKzCCQ2TalwchdGlWTBG743Vp2ftAFOtAGBOtNbZEqbd4pAoiUP2IT2elRXNDpTeKF1IuXsSdDXCkjyop037aRTALlEw3zQVG9JHv646jdadb0DkKZdutEKSLpt1w4YTDO7ZNMzc1tqIiK/eH80zGFa39ypb1+S0h16//BZcD2/Boq378/Au24MIOkv5a7/WzuQiHz6SxpAfnX8p7fIjghVII2wbT1qDwBIPMTSf6N/BfgHi1YQplUrVPoAAAAASUVORK5CYII=" />
                                </svg>
                            </div>
                            <div class="content">
                                <p class="tf-color">Phone Call Us</p>
                                <p class="number-phone">{{ $restaurant->phone_number }}</p>
                            </div>
                        </div>
                        <div class="button-right">
                            <a href="book-a-table.html" class="button-default">BOOK A TABLE</a>
                        </div>
                    </div>
                </div>
                <div class="header-inner">
                    <div class="header-inner-wrap">
                        <div class="flex">
                            <div id="site-logo">
                                <div class="site-logo-wrap">
                                    <a href="index.html" rel="home" class="main-logo">
                                        <img id="logo_header" alt=""
                                            src="{{ asset('front/assets/images/logo/logo.png') }}"
                                            data-retina="assets/images/logo/logo@2x.png">
                                    </a>
                                </div>
                            </div><!-- /logo -->
                            <div class="header-left type-1">
                                <div class="header-clock ">
                                    <a href="javascript:void(0);"><span class="badge hours"></span></a> <span>:</span>
                                    <a href="javascript:void(0);"><span class="badge min"></span></a>
                                </div>
                            </div>
                        </div>
                        <nav class="main-nav">
                            <ul class="menu-primary-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="index.html">Home 1</a></li>
                                        <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="about.html">About</a></li>
                                        <li class="menu-item"><a href="book-a-table.html">Book A Table</a></li>
                                        <li class="menu-item"><a href="coming-soon.html">Coming Soon</a></li>
                                        <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                        <li class="menu-item"><a href="chef.html">Chef</a></li>
                                        <li class="menu-item"><a href="faq.html">FAQ</a></li>
                                        <li class="menu-item"><a href="services.html">Services</a></li>
                                        <li class="menu-item"><a href="services-detail.html">Services-detail</a></li>
                                        <li class="menu-item"><a href="shop.html">Shop</a></li>
                                        <li class="menu-item"><a href="shop-detail.html">Shop-detail</a></li>
                                        <li class="menu-item"><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children current-menu-item">
                                    <a href="#">Menu</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="menu-1.html">Menu Style 1</a></li>
                                        <li class="menu-item current-item"><a href="menu-2.html">Menu Style 2</a></li>
                                        <li class="menu-item"><a href="menu-3.html">Menu Style 3</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="portfolio-full-width.html">Portfolio Full
                                                Width</a></li>
                                        <li class="menu-item"><a href="portfolio-mansonry.html">Portfolio Mansonry</a>
                                        </li>
                                        <li class="menu-item"><a href="portfolio-three-colum.html">Portfolio Three
                                                Colum</a></li>
                                        <li class="menu-item"><a href="portfolio-carousel.html">Portfolio Carousel</a>
                                        </li>
                                        <li class="menu-item"><a href="portfolio-detail.html">Portfolio Detail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog.html">Blog</a></li>
                                        <li class="menu-item"><a href="blog-full-width.html">Blog Full Width</a></li>
                                        <li class="menu-item"><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="contact.html">Contact</a>
                                </li>
                                <li class="menu-item">
                                    <div class="container mt-5" style="width: 60%">
                                        @php
                                        $totalQuantity = 0;
                                        $cartKey = "cart_{$restaurant->id}";
                                        @endphp

                                        @if(session($cartKey))
                                            @foreach(session($cartKey) as $item)
                                                @php
                                                $totalQuantity += $item['quantity'];
                                                @endphp
                                            @endforeach
                                        @endif

                                        <div class="col-12">
                                            <div class="dropdown">
                                                <a class="btn btn-outline-dark custom-cart-btn" href="{{ url('cart/' . $restaurant->id) }}">
                                                    <i class="fa fa-shopping-cart custom-cart-icon" aria-hidden="true"></i>
                                                    <span class="custom-cart-text">
                                                        <svg style="color: #8e8558" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1"/>
                                                        </svg>
                                                    </span>
                                                    <span class="badge custom-cart-badge" id="cart-quantity">{{ $totalQuantity }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </li>

                            </ul>
                        </nav><!-- /main-nav -->
                        <div class="header-right type-1">
                            <div class="canvas">
                                <div class="canvas-button"><span></span></div>
                                <div class="wg-welcom">
                                    <div class="inner">
                                        <div class="button-close"><i class="icon-close"></i></div>
                                        <img src="assets/images/logo/logo-ft.png" alt="">
                                        <div class="text">Drawing on their respective experiences in the hospitality
                                            industry, the duo imagined a place celebrating.</div>
                                        <div class="number-phone">+39 399 461 1608</div>
                                        <div class="text line-under">Andé Restaurant 767 5th Avenue, Paris 10021,
                                            France <br> Brochetterestaurant@gmail.com</div>
                                        <div class="text line-under">Opening Hour: <br> Mon - Fri : 9.00am - 22.00pm,
                                            Holidays : Close</div>
                                        <div class="widget-social justify-center">
                                            <ul class="">
                                                <li><a href="#" class="icon-fb"></a></li>
                                                <li><a href="#" class="icon-trip"></a></li>
                                                <li><a href="#" class="icon-youtube-play"></a></li>
                                                <li><a href="#" class="icon-instagram2"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-button ">
                                <span></span>
                            </div>
                        </div><!-- /header-right -->
                    </div>
                </div>
                <div class="mobile-nav-wrap">
                    <div class="overlay-mobile-nav"></div>
                    <div class="inner-mobile-nav">
                        <div class="relative">
                            <a href="index.html" rel="home" class="main-logo">
                                <img id="mobile-logo_header" alt=""
                                    src="{{ asset('front/assets/images/logo/logo.png') }}"
                                    data-retina="assets/images/logo/logo@2x.png">
                            </a>
                            <div class="mobile-nav-close">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    fill="white" x="0px" y="0px" width="20px" height="20px"
                                    viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88"
                                    xml:space="preserve">
                                    <g>
                                        <path
                                            d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <nav id="mobile-main-nav" class="mobile-main-nav">
                            <ul id="menu-mobile-menu" class="menu">
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="#">Home</a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item"><a href="index.html">Home 1</a></li>
                                        <li class="menu-item"><a href="home-2.html">Home 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="#">Pages</a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item"><a href="about.html">About</a></li>
                                        <li class="menu-item"><a href="book-a-table.html">Book A Table</a></li>
                                        <li class="menu-item"><a href="coming-soon.html">Coming Soon</a></li>
                                        <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                        <li class="menu-item"><a href="chef.html">Chef</a></li>
                                        <li class="menu-item"><a href="faq.html">FAQ</a></li>
                                        <li class="menu-item"><a href="services.html">Services</a></li>
                                        <li class="menu-item"><a href="services-detail.html">Services-detail</a></li>
                                        <li class="menu-item"><a href="shop.html">Shop</a></li>
                                        <li class="menu-item"><a href="shop-detail.html">Shop-detail</a></li>
                                        <li class="menu-item"><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile current-menu-item">
                                    <a class="item-menu-mobile" href="#">Menu</a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item"><a href="menu-1.html">Menu Style 1</a></li>
                                        <li class="menu-item current-item"><a href="menu-2.html">Menu Style 2</a></li>
                                        <li class="menu-item"><a href="menu-3.html">Menu Style 3</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="#">Portfolio</a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item"><a href="portfolio-full-width.html">Portfolio Full
                                                Width</a></li>
                                        <li class="menu-item"><a href="portfolio-mansonry.html">Portfolio Mansonry</a>
                                        </li>
                                        <li class="menu-item"><a href="portfolio-three-colum.html">Portfolio Three
                                                Colum</a></li>
                                        <li class="menu-item"><a href="portfolio-carousel.html">Portfolio Carousel</a>
                                        </li>
                                        <li class="menu-item"><a href="portfolio-detail.html">Portfolio Detail</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="#">Blog</a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item"><a href="blog.html">Blog</a></li>
                                        <li class="menu-item"><a href="blog-full-width.html">Blog Full Width</a></li>
                                        <li class="menu-item"><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="contact.html">Contact</a>
                                </li>

                                <li class="menu-item">
                                    <div class="container mt-5" style="width: 60%">
                                        @php
                                        $totalQuantity = 0;
                                        $cartKey = "cart_{$restaurant->id}";
                                        @endphp

                                        @if(session($cartKey))
                                            @foreach(session($cartKey) as $item)
                                                @php
                                                $totalQuantity += $item['quantity'];
                                                @endphp
                                            @endforeach
                                        @endif

                                        <div class="col-12">
                                            <div class="dropdown">
                                                <a class="btn btn-outline-dark custom-cart-btn" href="{{ url('cart/' . $restaurant->id) }}">
                                                    <i class="fa fa-shopping-cart custom-cart-icon" aria-hidden="true"></i>
                                                    <span class="custom-cart-text">
                                                        <svg style="color: #8e8558" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                                                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1"/>
                                                        </svg>
                                                    </span>
                                                    <span class="badge custom-cart-badge" id="cart-quantity">{{ $totalQuantity }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- /header -->

            <!-- banner-page -->
            <div class="banner-page inner-page menu-page">
                <div class="content">
                    <div class="banner-text">our menu style 2</div>
                    <p>Explore our menu with a wide range of Asian to European dishes, dishes to suit all <br> your
                        tastes or events</p>
                </div>
            </div>
            <!-- /banner-page -->

            <!-- page-menu2-wrap -->
            <div class="page-menu2-wrap relative snare-half">
                <img class="item-1" src="{{ asset('front/assets/images/item-background/item-1.png') }}"
                    alt="">
                <img class="item-2" src="{{ asset('front/assets/images/item-background/item-1.png') }}"
                    alt="">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-section text-center">
                                <img class=" wow fadeInUp"
                                    src="{{ asset('front/assets/images/item-background/menu-1.png') }}"
                                    alt="">
                                <div class="sub wow fadeInUp">What food do we have in our restaurant?</div>
                                <div class="main wow fadeInUp">FROM OUR MENU</div>
                                <div class="text wow fadeInUp">We always give our customers a feeling of peace of mind
                                    and comfort when dining at our restaurant <br> Sed ut perspiciatis unde omnis iste
                                    natus error voluptate accusantium</div>
                                <div class="divider wow fadeInUp">
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="widget-tabs style-1">
                    <div class="top">
                        <ul class="widget-menu-tab">
                            <li class="item-title active" data-filter="*">
                                <span class="inner">Tout afficher</span>
                            </li>
                            @foreach ($categories as $category)
                                <li class="item-title" data-filter=".filter-{{ $category->id }}">
                                    <span class="inner">{{ $category->name }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="bottom">
                        <div class="image image-left">
                            <div class="wrap">
                                <img src="{{ asset('front/assets/images/box-item/menu-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="widget-content-tab">
                            <div class="widget-content-inner active">
                                <div class="swiper-container"
                                    data-swiper='{
                                    "spaceBetween": 0,
                                    "slidesPerView": 1,
                                    "pagination": {
                                        "el": ".menu-pagination",
                                        "clickable": true
                                    }
                                }'
                                    style="width: 220%;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wg-menu-item">
                                                @foreach ($lastMenu->plats as $plat)
                                                    <div class="col-lg-6 menu-item filter-{{ $plat->category_id }} menu-grid-item" :data-plat-id="{{ $plat->id }}">
                                                        <div class="flex items-center">
                                                            <div class="name"><a href="#">{{ $plat->name }}</a></div>
                                                            <div class="line" style="width: 300px"></div>
                                                            <div class="price">{{ $plat->price }} Fcfa</div>
                                                            <div @click="addToCart({{ $plat->id }}, {{ $restaurant->id }})" style="margin-left: 3rem; color:#977644;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                                                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <p>{{ $plat->description }}</p>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination style-dot menu-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="image image-right">
                            <div class="wrap">
                                <img src="{{ asset('front/assets/images/box-item/menu-4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="button-bot">
                        <a class="button-two-line w-full"
                            href="{{ route('client.book-table', ['id' => $restaurant->id]) }}">BOOK A TABLE TODAY</a>
                    </div>
                </div> --}}
                <div class="widget-tabs style-1">
                    <div class="top">
                        <ul class="widget-menu-tab">
                            <li class="item-title active" data-filter="*">
                                <span class="inner">Tout afficher</span>
                            </li>
                            @foreach ($categories as $category)
                                <li class="item-title" data-filter=".filter-{{ $category->id }}">
                                    <span class="inner">{{ $category->name }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="bottom">
                        <div class="image image-left">
                            <div class="wrap">
                                <img src="{{ asset('front/assets/images/box-item/menu-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="widget-content-tab">
                            <div class="widget-content-inner active">
                                <div class="swiper-container"
                                    data-swiper='{
                                    "spaceBetween": 0,
                                    "slidesPerView": 1,
                                    "pagination": {
                                        "el": ".menu-pagination",
                                        "clickable": true
                                    }
                                }'
                                    style="width: 220%;">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="wg-menu-item row">
                                                @foreach ($lastMenu->plats as $plat)
                                                    <div class="col-lg-3 menu-item filter-{{ $plat->category_id }} menu-grid-item"
                                                        :data-plat-id="{{ $plat->id }}"
                                                        :data-restaurant-id="{{ $restaurant->id }}">
                                                        <div class="menu-item-inner">
                                                            <!-- Contenu de chaque plat -->
                                                            <div class="menu-item-image">
                                                                @if ($plat->image_url)
                                                                    <img src="{{ asset('storage/' . $plat->image_url) }}"
                                                                        alt="Image du plat" class="menu-image">
                                                                    <div class="menu-item-hover">
                                                                        <div class="menu-item-hover-content">
                                                                            <p class="menu-item-name">
                                                                                {{ $plat->name }}</p>
                                                                            <button
                                                                                class="btn btn-primary btn-add-to-cart"
                                                                                data-plat-id="{{ $plat->id }}"
                                                                                data-restaurant-id="{{ $restaurant->id }}">
                                                                                Ajouter à la carte
                                                                            </button>


                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="menu-item-details">
                                                                <div class="flex items-center">
                                                                    <div class="name"><a
                                                                            href="#">{{ $plat->name }}</a>
                                                                    </div>
                                                                    <div class="line"></div>
                                                                    <div class="price">{{ $plat->price }} Fcfa</div>
                                                                </div>
                                                                <p class="description">{{ $plat->description }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>


                                        </div>
                                    </div>
                                    <div class="swiper-pagination style-dot menu-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="image image-right">
                            <div class="wrap">
                                <img src="{{ asset('front/assets/images/box-item/menu-4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="button-bot">
                        <a class="button-two-line w-full"
                            href="{{ route('client.book-table', ['id' => $restaurant->id]) }}">Faire une
                            réservation</a>
                    </div>
                </div>

                <div class="container mt-4">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @yield('content')
                </div>
                @yield('scripts')
            </div>
            <!-- /page-menu2-wrap -->

            <!-- footer -->
            <footer id="footer" class="footer">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="logo-footer" id="logo-footer">
                                <a href="index.html">
                                    <img id="logo_footer" alt=""
                                        src="{{ asset('front/assets/images/logo/logo-ft.png') }}"
                                        data-retina="assets/images/logo/logo-ft@2x.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-left">
                                <div class="footer-title">WE ARE HERE</div>
                                <p>
                                    82 Place Charles de Gaulle, Paris <br>
                                    Brochetterestaurant@gmail.com <br>
                                    +39-055-123456
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-center">
                                <p>A distinctive, well-preserved and comfortable space, high-quality products, authentic
                                    cuisine, food and drinks are done flawlessly.</p>
                                <div class="widget-social-text">
                                    <ul class="flex-wrap">
                                        <li><a href="#">facebook</a></li>
                                        <li><a href="#">instagram</a></li>
                                        <li><a href="#">tripadvisor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-right">
                                <div class="footer-title">OPENING TIME</div>
                                <p>
                                    Mon - Fri: 08:00 am - 09:00pm <br>
                                    Sat - Sun: 10:00 am - 11:00pm <br>
                                    Holiday: Close
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="footer-bottom">
                                <p>Copyright © 2023 themesflat. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /footer -->

        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- cusor -->
    <div class="tf-mouse tf-mouse-outer"></div>
    <div class="tf-mouse tf-mouse-inner"></div>

    <!-- go top button -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
            </path>
        </svg>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('front/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/swiper.js') }}"></script>
    <script src="{{ asset('front/assets/js/map.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/map.js') }}"></script>
    <script src="{{ asset('front/assets/js/circletype.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/countto.js') }}"></script>
    <script src="{{ asset('front/assets/js/count-down.js') }}"></script>
    <script src="{{ asset('front/assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Lorsque l'onglet de catégorie est cliqué
            $('.widget-menu-tab .item-title').on('click', function() {
                // Récupérer le filtre de catégorie
                var filterValue = $(this).attr('data-filter');
                // Ajouter la classe 'active' à l'onglet cliqué et la retirer des autres
                $('.widget-menu-tab .item-title').removeClass('active');
                $(this).addClass('active');

                // Afficher ou masquer les plats en fonction de la catégorie sélectionnée
                if (filterValue === '*') {
                    $('.menu-item').show(); // Afficher tous les plats
                } else {
                    $('.menu-item').hide(); // Masquer tous les plats
                    $(filterValue).show(); // Afficher les plats de la catégorie sélectionnée
                }
            });
        });
    </script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('.btn-add-to-cart').click(function(e) {
            e.preventDefault();

            var platId = $(this).data('plat-id');
            var restaurantId = $(this).data('restaurant-id');

            $.ajax({
                url: '{{ route('add.to.cart') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    plat_id: platId,
                    restaurant_id: restaurantId,
                    quantity: 1
                },
                success: function(response) {
                    $('#cart-quantity').text(response.cartCount);
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès!',
                        text: 'Plat ajouté au panier avec succès!',
                        timer: 1500,
                        showConfirmButton: false
                    });
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: 'Une erreur s\'est produite. Veuillez réessayer.'
                    });
                }
            });
        });
    });
</script>

</body>


<!-- Mirrored from themesflat.co/html/restaurant/luxury/menu-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 May 2024 02:06:17 GMT -->

</html>
