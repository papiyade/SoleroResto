<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/restaurant/luxury/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 May 2024 02:05:56 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Restaurant HTML Template - Luxury</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/style.css')}}">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/assets/css/responsive.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('front/assets/images/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('front/assets/images/favicon.png')}}">

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
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="13" height="16" viewBox="0 0 13 16">
                                    <image id="_" data-name="" width="13" height="16" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAADaUlEQVRIia2We29UVRTFfx0uCC3TFtoCxUJRgwISCIjGQEz8xxg/l1/HT4CJPEQwCAIFlTdKQCmP1nagUx5TyE5+x1xO7p1pE3dy00nnzF577bX2Prfv9Hff0iUawGpgDTAADAJN//ccaAFzwDPgFfCiLlXRDcWkI8BG/24A1gsUSeeBx8CMfx9bwLKBgsk48BGwH9gNTAoc7PqAJcEeAXeAi8AF4FoVWBXQOmAb8CnwiUC7gK01RQXYXWACGJPxddnVAq0FdgJfAF8DH9uyobreyvA99dtmJ44BZ4AnVUANqz4CfAMcVpPlxCpgk+f7bW3oN6VhOmWgYWAf8BXw+QpAyhEm+VCNZnXiFeBpIZOg/z5wUE1GKpK0bEXLBGs9NyKjFO/Y/sOe/zt0LGzfiAAHbEEe81YWzroNtBU+OnAI2J6dD0336MZfY84So2GdtVP6KTpBW8seB05lQFHtS5+tOjbFmCMRhT9MjJrac0LqKRaBWwJ8r7jztu6RnxcF+tLfpwjQUZ+hQpcM2r6BCl2uAmdt3Uzpu7ZFYPX7MyDMHaba0BBk2EHLY8H23Bc0j9gOD2XXrvh+jd0aTEtztVrVxWuflcZ/+RuukAUrypP1K/KEzPNoKPZYZoQUr5yp54WumtPzz7IWNnXjtN//VroSoi1bgM8ci6oBbzu4s4VsIslfarGj5LwYyg9KTDcD93TaoLNyxEHPh7xtgZFzupBabNrfnaPxEtAqh2+Xn8czoFg3e4F33W8pOprohudnCmfgiVM/aZW5HgPeTVuy1g3p2L7sfIzBJeB8cmxhWxZdF1OulE3qU451NYLn0ZHFWcFCoxdlS/9r+352OKvmpldE0Q+Ay8AvwM3k5vI1EcP3D/CTrRutYNUrWoKc9pZ9ms7nN+yc936/18boCu+lO6XlO13+It8GSwo55VV8TbP0io7duKA2t/Lf1b0FhTV/dOLHdWO3mFGTU7ZsMT9bt99eyuaM7Ga77LolLRzanss2fE8gTB7uO+EtOVdxJrlsSkY3arZ4zzfVBzqo6fppZu8HLYs4KchCXaJeQC1ZrXfnbVSztAliTo4CP+QuWylQAvtDoTe7dmLZRuJgG0/YumssBygiWhhAsZpitoJhGCXeI9J1/r8AxRKNKzt0iMkPoDDAn3XivxXAG/709S6pPU+LAAAAAElFTkSuQmCC"/>
                                </svg>
                            </div>
                            <div class="content">
                                <p class="tf-color">{{$restaurant->name}}</p>
                                <p> {{$restaurant->address}}  </p>
                            </div>
                        </div>
                        <div class="wg-information">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="13" viewBox="0 0 17 13">
                                    <image id="_" data-name="" width="17" height="13" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAaCAYAAADSbo4CAAADAElEQVRIic2WWWtTQRiGnzSnaWtbbN2tW4tYUay4XKgg6m/wL/lPvPY3eFkv3FBRUEFRbF3q1s1qkjbyhWdgCF0Sl+oHQybnnHnnnffbpjR54xqZFcBWYAewGxgASsA3YA6YAb4AXb4fAbYBPcCKI7eS82q2/oPzH/n3RcuiIDEGjAJ7gcGMyDwwDbwBvgJliR6WVN2RWxBuADU3/yjGlGOulUjJjU8Dl4GTgld8XxfsPfAQmARe+34COC9GqyLJVlTlu4rcB24CD1S4SaQf2C7YFeAicDQjkVuQOaArJv1dBno9SLEGkdziUPuAPqAbuBNqx8Jxx1XgHLBnDRK4cNx5uO058AzYAlxy7UYWex5TgF5VehEPzzhCiZE2gHoyxeoqE2AH2ySCBMaNvVeBGUQuAKeUtl2rGNQvgdsG8pxuKneAM+r+fUmmMYOtKuiSoMkavq/ohgHnO4FdwIKnW9BlDVVaNE2RYBo9xsgWg71UKOewH8/r92mBUh2om4rDnmJMoH6JNCTxWdkbZkdk1ifJlCTRp/qR9kO6dLbwZGnDJfP7qcDpeU2QETfPo37Yb4P4rCrhfEoyM7quqppnLIRDqtNbZJv9ihUCFar23d+UxmWVjAL42GI46OHPZjj1oqUa9nna0jqu2akSydI3DeNqRSJx2kNihsvvqhDG5WK2rlo4SRZsjwD7NwjWSva8sQqRbgkPWgCXraKPVqm+jSRtTqRilW3XciK5i8vGUr//T1inagbuhH2NRL6dkvwnbLc97KAbH8qKX3UziUScHDdl0/9e5/XNJNLtGFzlXdO1XZtEZEP7r4h00qT+Foeurpb0/RfWLAG/S2Qgy4DUBFcLyPUsgrgcRN7ll9gOrW5dWM4uz7UOMaJjf470vWWHjLKe0nkjlVIVjd7xBHirOjUbXLpWrIWT1jevidEMY+Prltu4V4TE693GW4Gi/ce9I5paYN2zvYeb1iOSQiKuHeGR5n0kLkLRyOJ0nRKJ8hxdNH7D4t4RWKk7t0NkFlj6CW2ly+DSZ9BoAAAAAElFTkSuQmCC"/>
                                </svg>
                            </div>
                            <div class="content">
                                <p class="tf-color">Email Contact</p>
                                <p> {{$restaurant->email}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="wg-information">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="15" viewBox="0 0 17 15">
                                    <image id="_" data-name="" width="17" height="15" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAeCAYAAABJ/8wUAAAEFklEQVRYhbWXW2+UVRSGn6nTOqXnQk/WUFEpghIrFYmNh6gx3viv/DHeGK+81HiIEEXRKIkoRqFNtXUsWhjAocxYs+qzze7XmXYa05Xs5Jt9WOtdh3ftPaUL77zFHtIFlB3dQC8w4KgAJY9vAnWg5vgLuA80HH/vZqa8FwqgDxgGhoB+vwf3AHILWAduAzf9rv0fIEeAJ4CTwGPAw8CE4LpbnG8YhTvAb8Ay8BNwBfgeWNsPkPB8HJgEHgGecpwAjgqgEwlAS8APwOPAMeA6sApUjVRbIBHueeA54LSGA9BhYKRDAEm6jeIoMAssCOwycBH4Ik9XAOkx1xHySMHLwDngVGa8oRd/mvcNPa6bBkxXRQA91tOIQEaMSpyfAcZcv2IK62UnIvevAS8ZiQnnsQgXgW/M8wpwV1bUshAPGdFg1SFgyvp6GnjUoh7x96RznwAfRC2VZUAAeQF41d9kkQgQF4D3ge+MQDkrytvu7c+KuOH3qSxiM57rd4xJ6aihW2XDGd48VACBNIwofA58JQ3H9LY7YwkZi+4btVVTN5ClZzTTPajNsF0p27B6WoBAw98CV/UwmHPcIq64J+8jaDyK8kfpG2enbQGjBf2D2u4KIPc8HAVYlCULKrx8EXjFNA7ofakAZNMo1QTxIfClOpasi1w2tH2vnB06bxF2mbsN56oWV7Dp9X30kZPqWVbHeed7Mhtfu14rW/URxreBj9y44ajJgCdNSacgcO9xz34mOy6qP9lY0fbNlJqq7TdtSqmKSn/TBjeWGanL/zVpjLQ9IvVT/Yx5Ngr3PRmY+lZydusyzDtrTNQ1kiSKa84xlNVCKPzY/Fedj2vhWVM4a+0MeXbJFrCYAdgm7S69B/TmjA1u3PlQcMPmFn3l0wKQ9ex2Pqz34+o4Yyp+B5pFg11tgATnzwLPS9Ukd6XjJe+MFZU2/b7s2lX3JjmqrrPt7qxWQEo2mgVDPZyt1a3ya1kkcqm6tlxI8bC6FtRdKh5sBWTExjXvRdXbJmr7kV51zat7R1SKQCoemPMK72uxPu3bYpydMu7adMacJH3qnNPGtvVisU5It3M2saIckhEpBTcsPizu03o9696iTKp7RfovtgIS3+HJM4av6BGyYEqv1t1zzbVj3uBz7tlRB+4/4Z5L1lKzCCQ2TalwchdGlWTBG743Vp2ftAFOtAGBOtNbZEqbd4pAoiUP2IT2elRXNDpTeKF1IuXsSdDXCkjyop037aRTALlEw3zQVG9JHv646jdadb0DkKZdutEKSLpt1w4YTDO7ZNMzc1tqIiK/eH80zGFa39ypb1+S0h16//BZcD2/Boq378/Au24MIOkv5a7/WzuQiHz6SxpAfnX8p7fIjghVII2wbT1qDwBIPMTSf6N/BfgHi1YQplUrVPoAAAAASUVORK5CYII="/>
                                </svg>
                            </div>
                            <div class="content">
                                <p class="tf-color">Phone Call Us</p>
                                <p class="number-phone"> {{$restaurant->phone_number}} </p>
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
                                        <img id="logo_header" alt="" src="{{asset('front/assets/images/logo/logo.png')}}"
                                        data-retina="{{asset('front/assets/images/logo/logo@2x.png')}}" >
                                    </a>
                                </div>
                            </div><!-- /logo -->
                            <div class="header-left">
                                <div class="canvas">
                                    <div class="canvas-button"><span></span></div>
                                    <div class="wg-welcom">
                                        <div class="inner">
                                            <div class="button-close"><i class="icon-close"></i></div>
                                            <img src="{{asset('front/assets/images/logo/logo-ft.png')}}" alt="">
                                            <div class="text">Drawing on their respective experiences in the hospitality industry,  the duo imagined a place celebrating.</div>
                                            <div class="number-phone">+39 399 461 1608</div>
                                            <div class="text line-under">Andé Restaurant 767 5th Avenue, Paris 10021, France <br> Brochetterestaurant@gmail.com</div>
                                            <div class="text line-under">Opening Hour: <br> Mon - Fri : 9.00am - 22.00pm, Holidays : Close</div>
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
                                <li class="menu-item menu-item-has-children current-menu-item">
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
                                        <li class="menu-item current-item"><a href="shop.html">Shop</a></li>
                                        <li class="menu-item"><a href="shop-detail.html">Shop-detail</a></li>
                                        <li class="menu-item"><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Menu</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="menu-1.html">Menu Style 1</a></li>
                                        <li class="menu-item"><a href="menu-2.html">Menu Style 2</a></li>
                                        <li class="menu-item"><a href="menu-3.html">Menu Style 3</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
                                        <li class="menu-item"><a href="portfolio-mansonry.html">Portfolio Mansonry</a></li>
                                        <li class="menu-item"><a href="portfolio-three-colum.html">Portfolio Three Colum</a></li>
                                        <li class="menu-item"><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                                        <li class="menu-item"><a href="portfolio-detail.html">Portfolio Detail</a></li>
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
                            </ul>
                        </nav><!-- /main-nav -->
                        <div class="header-right type-1">
                            <div class="header-language">
                                <span class="dropdown" id="select-language">
                                    <span class="btn-selector select">
                                        <span>English</span>
                                    </span>
                                    <ul>
                                        <li><span>English</span></li>
                                        <li><span>China</span></li>
                                        <li><span>Japan</span></li>
                                    </ul>
                                </span>
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
                                <img id="mobile-logo_header" alt="" src="{{asset('front/assets/images/logo/logo.png')}}" data-retina="{{asset('front/assets/images/logo/logo@2x.png')}}">
                            </a>
                            <div class="mobile-nav-close">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 122.878 122.88" enable-background="new 0 0 122.878 122.88" xml:space="preserve"><g><path d="M1.426,8.313c-1.901-1.901-1.901-4.984,0-6.886c1.901-1.902,4.984-1.902,6.886,0l53.127,53.127l53.127-53.127 c1.901-1.902,4.984-1.902,6.887,0c1.901,1.901,1.901,4.985,0,6.886L68.324,61.439l53.128,53.128c1.901,1.901,1.901,4.984,0,6.886 c-1.902,1.902-4.985,1.902-6.887,0L61.438,68.326L8.312,121.453c-1.901,1.902-4.984,1.902-6.886,0 c-1.901-1.901-1.901-4.984,0-6.886l53.127-53.128L1.426,8.313L1.426,8.313z"/></g></svg>
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
                                <li class="menu-item menu-item-has-children-mobile current-menu-item">
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
                                        <li class="menu-item current-item"><a href="shop.html">Shop</a></li>
                                        <li class="menu-item"><a href="shop-detail.html">Shop-detail</a></li>
                                        <li class="menu-item"><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="#">Menu</a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item"><a href="menu-1.html">Menu Style 1</a></li>
                                        <li class="menu-item"><a href="menu-2.html">Menu Style 2</a></li>
                                        <li class="menu-item"><a href="menu-3.html">Menu Style 3</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children-mobile">
                                    <a class="item-menu-mobile" href="#">Portfolio</a>
                                    <ul class="sub-menu-mobile">
                                        <li class="menu-item"><a href="portfolio-full-width.html">Portfolio Full Width</a></li>
                                        <li class="menu-item"><a href="portfolio-mansonry.html">Portfolio Mansonry</a></li>
                                        <li class="menu-item"><a href="portfolio-three-colum.html">Portfolio Three Colum</a></li>
                                        <li class="menu-item"><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                                        <li class="menu-item"><a href="portfolio-detail.html">Portfolio Detail</a></li>
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
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- /header -->

            <!-- banner-page -->
            <div class="banner-page inner-page shop-page">
                <div class="content">
                    <div class="banner-text">shop</div>
                    <p class="t1">Fusce ut bibendum sem. Proin hendrerit ante vel nibh gravida ultrices. Sed <br> vitae pharetra eros, morbi at ipsum non.</p>
                </div>
            </div>
            <!-- /banner-page -->

            <!-- wg-shop -->
            <div class="wg-shop">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="top">
                                <p>Showing 1–12 of 16 results</p>
                                <div class="option">
                                    <div class="select t1">
                                        <select class="style-1">
                                            <option value="Subject" selected>All Product</option>
                                            <option value="Subject">Sushi</option>
                                            <option value="Subject">Sashimi</option>
                                            <option value="Subject">Noodles</option>
                                        </select>
                                    </div>
                                    <div class="button-list">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="22px" height="17px">
                                            <path fill-rule="evenodd"  fill="rgb(45, 39, 35)"
                                            d="M-0.000,-0.000 L22.000,-0.000 L22.000,1.656 L-0.000,1.656 L-0.000,-0.000 Z"/>
                                            <path fill-rule="evenodd"  fill="rgb(45, 39, 35)"
                                            d="M-0.000,7.656 L22.000,7.656 L22.000,9.344 L-0.000,9.344 L-0.000,7.656 Z"/>
                                            <path fill-rule="evenodd"  fill="rgb(45, 39, 35)"
                                            d="M-0.000,15.344 L22.000,15.344 L22.000,17.000 L-0.000,17.000 L-0.000,15.344 Z"/>
                                        </svg>
                                    </div>
                                    <div class="button-grid">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="22px" height="21px">
                                            <path fill-rule="evenodd"  fill="rgb(45, 39, 35)"
                                            d="M3.500,-0.000 C5.433,-0.000 7.000,1.567 7.000,3.500 C7.000,5.433 5.433,7.000 3.500,7.000 C1.567,7.000 -0.000,5.433 -0.000,3.500 C-0.000,1.567 1.567,-0.000 3.500,-0.000 Z"/>
                                            <path fill-rule="evenodd"  fill="rgb(45, 39, 35)"
                                            d="M18.500,-0.000 C20.433,-0.000 22.000,1.567 22.000,3.500 C22.000,5.433 20.433,7.000 18.500,7.000 C16.567,7.000 15.000,5.433 15.000,3.500 C15.000,1.567 16.567,-0.000 18.500,-0.000 Z"/>
                                            <path fill-rule="evenodd"  fill="rgb(45, 39, 35)"
                                            d="M3.500,14.000 C5.433,14.000 7.000,15.567 7.000,17.500 C7.000,19.433 5.433,21.000 3.500,21.000 C1.567,21.000 -0.000,19.433 -0.000,17.500 C-0.000,15.567 1.567,14.000 3.500,14.000 Z"/>
                                            <path fill-rule="evenodd"  fill="rgb(45, 39, 35)"
                                            d="M18.500,14.000 C20.433,14.000 22.000,15.567 22.000,17.500 C22.000,19.433 20.433,21.000 18.500,21.000 C16.567,21.000 15.000,19.433 15.000,17.500 C15.000,15.567 16.567,14.000 18.500,14.000 Z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="wg-shop-content">
                                <div class="row">
                                    @foreach ($categories as $category)
                                        @foreach ($category->plats as $plat)
                                            <div class="col-md-6">
                                                <div class="shop-item wow fadeInUp">
                                                    <div class="image">
                                                        <img src="{{ asset('front/assets/images/box-item/shop-item-1.jpg') }}" alt="">
                                                        <div class="box-icon">
                                                            <div class="wrap">
                                                                <a href="{{ route('shop-detail', ['id' => $plat->id]) }}">
                                                                    <i class="icon-shopping-bag"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="button-wishlist"><span class="icon"></span></span>
                                                        <div class="price">${{ $plat->price }}</div>
                                                        <div class="name"><a href="{{ route('shop-detail', ['id' => $plat->id]) }}">{{ $plat->name }}</a></div>
                                                        <div class="rating">
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>




                        </div>
                        <div class="col-md-4 col-12">
                            <div class="main-sidebar">
                                <div class="sidebar-item cart">
                                    <div class="heading-top">cart</div>
                                    <div class="content">
                                        <div class="cart-item">
                                            <div class="image">
                                                <img src="{{asset('front/assets/images/box-item/cart-item-4.jpg')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price">$40.99</div>
                                                <div class="name"><a href="shop-detail.html">Starter Egg Soup</a></div>
                                            </div>
                                            <div class="close-button"><i class="icon-close"></i></div>
                                        </div>
                                        <div class="cart-item">
                                            <div class="image">
                                                <img src="{{asset('front/assets/images/box-item/cart-item-5.jpg')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="price">$30.15</div>
                                                <div class="name"><a href="shop-detail.html">Starter Egg Soup</a></div>
                                            </div>
                                            <div class="close-button"><i class="icon-close"></i></div>
                                        </div>
                                        <div class="subtotal">
                                            <div class="title">Subtotal:</div><span class="price">$55.00</span>
                                        </div>
                                        <div class="bottom">
                                            <a class="" href="#">view cart <i class="icon-arrow-right"></i></a>
                                            <a class="" href="#">check out <i class="icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-item category">
                                    <div class="heading-top">categories</div>
                                    <div class="content">
                                        <ul>
                                            <li><a href="#">Food</a></li>
                                            <li class="active"><a href="#">Industry expertise</a></li>
                                            <li><a href="#">Restaurants</a></li>
                                            <li><a href="#">Fast Casual Restaurants</a></li>
                                            <li><a href="#">Casual Dining</a></li>
                                            <li><a href="#">Pizzerias</a></li>
                                            <li><a href="#">Coffee’s </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-item filter">
                                    <div class="heading-top">filter by prive</div>
                                    <div class="content">
                                        <div id="range-two-val"></div>
                                        <div class="bottom">
                                            <a href="#">FILTER</a>
                                            <div class="total">
                                                <div id="skip-value-lower"></div>&nbsp;-&nbsp;<div id="skip-value-upper"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sidebar-item recent-product">
                                    <div class="heading-top">recent products</div>
                                    <div class="content">
                                        <div class="cart-item">
                                            <div class="image">
                                                <img src="{{asset('front/assets/images/box-item/cart-item-1.jpg')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="flex items-center">
                                                    <div class="price mb-0">$32.00</div>
                                                    <div class="rating flex-grow">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                </div>
                                                </div>
                                                <div class="name"><a href="shop-detail.html">Salad Dessert Sauce</a></div>
                                            </div>
                                        </div>
                                        <div class="cart-item">
                                            <div class="image">
                                                <img src="{{asset('front/assets/images/box-item/cart-item-2.jpg')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="flex items-center">
                                                    <div class="price mb-0">$25.00</div>
                                                    <div class="rating flex-grow">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                </div>
                                                </div>
                                                <div class="name"><a href="shop-detail.html">Salad Dessert Sauce</a></div>
                                            </div>
                                        </div>
                                        <div class="cart-item last">
                                            <div class="image">
                                                <img src="{{asset('front/assets/images/box-item/cart-item-3.jpg')}}" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="flex items-center">
                                                    <div class="price mb-0">$24.19</div>
                                                    <div class="rating flex-grow">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                </div>
                                                </div>
                                                <div class="name"><a href="shop-detail.html">Salad Dessert Sauce</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /wg-shop -->

            <!-- footer -->
            <footer id="footer" class="footer">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="logo-footer" id="logo-footer">
                                <a href="index.html">
                                    <img id="logo_footer" alt="" src="{{asset('front/assets/images/logo/logo-ft.png')}}" data-retina="{{asset('front/assets/images/logo/logo-ft@2x.png')}}">
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
                                <p>A distinctive, well-preserved and comfortable space, high-quality products, authentic cuisine, food and drinks are done flawlessly.</p>
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
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>

    <!-- Javascript -->
    <script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('front/assets/js/swiper.js')}}"></script>
    <script src="{{asset('front/assets/js/map.min.js')}}"></script>
    <script src="{{asset('front/assets/js/map.js')}}"></script>
    <script src="{{asset('front/assets/js/countto.js')}}"></script>
    <script src="{{asset('front/assets/js/count-down.js')}}"></script>
    <script src="{{asset('front/assets/js/nouislider.min.js')}}"></script>
    <script src="{{asset('front/assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('front/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('front/assets/js/main.js')}}"></script>

</body>


<!-- Mirrored from themesflat.co/html/restaurant/luxury/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 May 2024 02:06:07 GMT -->
</html>