@extends('public.layouts.app')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/menu.css') }}" />
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="Page__title"><span>Menus</span></h1>
			</div>

			<div class="col-md-12">
				<section class="main">
					<div id="rm-container" class="rm-container">

						<div class="rm-wrapper">

							<div class="rm-cover">

								<div class="rm-front">
									<div class="rm-content">

										<div class="rm-logo"></div>
										<h2>Krush Burger</h2>
										<h3>Slogan of the restaurant</h3>

										<a href="#" class="rm-button-open">View the Menu</a>
{{-- 										<div class="rm-info">
											<p>
											<strong>Gourmet Castle Restaurant</strong><br>
											246 Wonderful Paradise Ln.<br>
											Pasadena, CA 91101<br>
											<strong>Phone</strong> 626.511.1170<br>
											<strong>Fax</strong> 626.992.1020</p>
										</div> --}}

									</div><!-- /rm-content -->
								</div><!-- /rm-front -->

								<div class="rm-back">
									<div class="rm-content">
										<h4>Pick 2 mini burgers</h4>
										<dl>
											<dt>
												<a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/1.jpg">
													Original
												</a>
											</dt>
											<dd>Grilled Onion, Lettuce, Tomato, American Cheese + House Sauce</dd>

											<dt>
												<a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/1.jpg">
													Cowbell
												</a>
											</dt>
											<dd>Bacon, Crispy Onions, Gouda + BBQ Sauce</dd>

											<dt>
												<a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/1.jpg">
													Philly
												</a>
											</dt>
											<dd>Grilled Onions &amp; Mushrooms, Aged Provolone + Red Pepper Aioli</dd>

											<dt>
												<a href="http://herbivoracious.com/2011/11/crostini-with-young-pecorino-grilled-figs-and-arugula-mint-pesto-recipe.html" class="rm-viewdetails" data-thumb="images/1.jpg">
													Buffalo Chicken
												</a>
											</dt>
											<dd>Crispy Chicken, Buffalo Sauce, Country Slaw + Buffalo Blue Cheese Sauce</dd>											
										</dl>

										<h4>Extras</h4>
										<dl>
											<dt>Fries</dt>

											<dt>Sweet Potato Tots</dt>

											<dt>Mini Burger</dt>

											<dt>Bottled Water</dt>

											<dt>Soda / Iced Tea</dt>
										</dl>
									</div><!-- /rm-content -->
									<div class="rm-overlay"></div>

								</div><!-- /rm-back -->

							</div><!-- /rm-cover -->

							<div class="rm-middle">
								<div class="rm-inner">
									<div class="rm-content">
										<h4>Make it a Combo</h4>

										<h6>Pick a side</h6>
										<dl>
											<dt>French Fries</dt>
											<dd>Fresh cut Kennebec Potatoes + Krush Seasoning</dd>

											<dt>Sweet Potato Tots</dt>
											<dd>Sweet Potato Tater Tots + Ancho Honey Dipping Sauce</dd>
										</dl>

										<h6>&amp; Pick a Drink</h6>
										<dl>
											<dt>Soda / Iced Tea</dt>
											<dd>Choose from over 130 flavors</dd>

											<dt>Sweet Potato Tots</dt>
											<dd>Sweet Potato Tater Tots + Ancho Honey Dipping Sauce</dd>

											<dt>Draft Beer</dt>

											<dt>Wine</dt>

											<dt>Milkshake</dt>
										</dl>

										<h4>Beer &amp; Wine!</h4>
										<dl>
											<dt>Draft Beer</dt>
											<dd>Starting at $4</dd>

											<dt>Wine</dt>
											<dd>Starting at $5.5</dd>
										</dl>
									</div><!-- /rm-content -->
									<div class="rm-overlay"></div>
								</div><!-- /rm-inner -->
							</div><!-- /rm-middle -->

							<div class="rm-right">

								<div class="rm-front">
									
								</div>

								<div class="rm-back">
									<span class="rm-close">Close</span>
									<div class="rm-content">
										<h4>Soft Serve &amp; Shakes</h4>
										<h6>Soft Serve</h6>
										<dl>
											<dt>Vanilla</dt>
											<dd>AED</dd>

											<dt>Chocolate Dipped</dt>
											<dd>AED</dd>
										</dl>

										<h6>Shakes</h6>
										<dl>
											<dt>Vanilla</dt>
											<dt>Chocolate</dt>
											<dt>Caramel Toffee</dt>
											<dt>Cookies &amp; Cream</dt>
										</dl>

										<h4>12 &amp; Under</h4>
										<dl>
											<dt>Kids Meal</dt>
											<dd>Includes: A Mini Burger, Side Drink (Soda, Apple Juice or Milk) and a cone!</dd>
										</dl>

										<div class="rm-order">
										</div>
									</div><!-- /rm-content -->
								</div><!-- /rm-back -->

							</div><!-- /rm-right -->
						</div><!-- /rm-wrapper -->

					</div>
				</section>
			</div>
		</div>
	</div>	
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/menu.js') }}"></script>
@endsection	