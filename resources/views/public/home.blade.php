@extends('public.layouts.app')
@section('content')
    <div class="Fancy__Burgers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="Fancy__Burgers--title Page__title">
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
@endsection