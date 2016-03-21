<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Krush Burger</title>

    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

</head>
    <body>
        <header>
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4 align-right">
                            <ul class="hidden-xs">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Locations</a></li>
                                <li><a href="#">Franchising</a></li>
                                <li><a href="#">Corporate</a></li>
                            </ul>

                            <ul class="visible-xs">
                                <li>
                                    <a href="#" id="trigger-overlay">
                                        <i class="fa fa-bars fa-2x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-6">
                        <h1>
                            <img src="/images/logo.png" 
                                alt="Krush Burger" title="Krush Burger" width="239" height="164" class="logo img-responsive" />
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <div class="Slideshow">
            <div class="container">
                <div class="row">
                    <div class="Slideshow__content">
                        <div class="col-md-5 col-xs-12">
                            <h2 class="Slideshow__intro-text">
                                Let your taste buds quiver
                            </h2>
                        </div>

                        <div class="col-md-7 col-xs-12">
                            <div class="Slideshow__images">
                                <img src="/images/slide-burger.png" 
                                    alt="Krush Burger" title="Krush Burger" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="Slideshow__bottom-bg"></div>
        </div>

        <div class="Fancy__Burgers">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="Fancy__Burgers--title">
                            <span>Fancy Burgers</span>
                        </h2>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="Burgers">
                                <div class="hand"></div>
                                @foreach( range(1, 4) as $index )
                                <div class="Burgers__Burger col-md-3 col-xs-6">
                                    <img src="/images/burger1.jpg" 
                                        alt="Krush Burger" title="Krush Burger" class="logo img-responsive" />
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="ViewMenu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>
                            <a href="#">
                                <span>View<br />Menu</span>
                            </a>
                        </h3>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-12">
                        <div class="row no-spacing">
                            <div class="col-md-6">
                                <div class="Contact">
                                    <div class="Contact__content">
                                        <div class="Contact__bg">
                                            <p class="Contact__title">Contact Us</p>
                                            <p class="Contact__number">+971 4 451 9562</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="Ingredients">
                                    <div class="Ingredients__content">
                                        <img src="/images/made-with-love.png" 
                                            alt="Krush Burger" title="Krush Burger" width="207" height="157" class="img-responsive" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

        <div class="Menus">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="Menus__content">
                            <div class="row">
                                <div class="col-md-5 hidden-xs">
                                    <div class="Menus__eating">
                                        {{-- <p>Stunning</p> --}}
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <h3>Krush Burgers</h3>
                                    <div class="row Menu__list">
                                        @foreach( range(1, 6) as $index )
                                        <div class="col-md-4 col-xs-6">
                                            <div class="Menu">
                                                <img src="/images/menu.png" 
                                                    alt="Krush Burger" title="Krush Burger" class="img-responsive" />
                                                <p class="Menu__price">AED 12</p>
                                            </div>
                                        </div>
                                        @endforeach                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="Footer__content">
                            <div class="row row-equal-height">
                                <div class="col-md-3 col-xs-5">
                                    <h5 class="Footer__title">
                                        Links
                                    </h5>   

                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <ul>
                                                <li><a href="#">Home</a></li>
                                                <li><a href="#">Menu</a></li>
                                                <li><a href="#">Locations</a></li>
                                                <li><a href="#">Catering</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-md-6 col-xs-6">
                                            <ul>
                                                <li><a href="#">Gift Cards</a></li>
                                                <li><a href="#">Franchising</a></li>
                                                <li><a href="#">Corporate</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-xs-7">
                                    <h5 class="Footer__title">
                                        Follow Us
                                    </h5>  

                                    <ul class="Footer__social">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter fa-2x"></i>
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                                <div class="col-md-3 col-xs-6">
                                    <h5 class="Footer__title">
                                        Download our app
                                    </h5>  
                                </div>

                                <div class="col-md-3 col-xs-6 Footer__subscribe">
                                    <h5 class="Footer__title">
                                        <a href="#">
                                            Subscribe for <span>Discounts</span>
                                        </a>
                                    </h5>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </footer>

        <div class="overlay overlay-slidedown">
            <button type="button" class="overlay-close">Close</button>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Locations</a></li>
                    <li><a href="#">Franchising</a></li>
                    <li><a href="#">Corporate</a></li>
                </ul>
            </nav>
        </div>

        <p style="margin-top: 200px;">&nbsp;</p>

        <script src="{{ elixir('js/app.js') }}"></script>

    </body>
</html>





















