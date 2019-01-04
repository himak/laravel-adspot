@extends('layouts.master')
@section('title', 'Create Ad')


@section('content')

	<div class="breadcrumb">
		<ul>
			<li><a href="{{ url('/') }}">Home</a></li>
			<li>
				Post your ad
			</li>
		</ul>
	</div>

	<div class="page row">
		<header class="heading style-bg big text-center">
			<h1>World’s <strong>Biggest</strong> Classified Marketplace</h1>
			<p class="text-uppercase">sell &amp; purchase anything</p>
		</header>
		<div class="form-wrapper">

			<form method="POST" action="/ads">

				@csrf

				<div class="elements-block">
					<div class="inner">

						@include('_partials.errors')

						<div class="row field-block">
							<div class="col-xs-12 col-md-3">
								<label class="required" for="create001">Ad Title</label>
							</div>
							<div class="col-xs-12 col-md-9">
								<input type="text" id="create001" placeholder="e.g. Apple iPhone SE 2016" name="title" class="form-control {{ $errors->has('title') ? ' error' : ' valid' }}" _required>

								@if ($errors->has('title'))
									<span class="valid-block" role="alert"></span>
								@endif
							</div>
						</div>
						<div class="row field-block">
							<div class="col-xs-12 col-md-3">
								<span class="required label" >Category</span>
							</div>
							<div class="col-xs-12 col-md-9">
								<div class="mega-dropdown-wrap">
									<div class="mega-dropdown">
										<button>Select Category</button>
										<i class="fa fa-navicon"></i>
										<div class="mega-content">
											<ul class="category-list">
												<li><a href="#"><i class="adicon-grid"></i>All Categories</a></li>
												<li><a href="#"><i class="adicon-car"></i>Vehicles</a>
													<ul>
														<li><a href="#">Cars</a></li>
														<li><a href="#">Motorcycles</a></li>
														<li><a href="#">Scooters</a></li>
														<li><a href="#">Bicycles</a></li>
														<li><a href="#">Commercial Vehicles</a></li>
														<li><a href="#">Spare Parts &amp; Accessories</a></li>
														<li><a href="#">Other Vehicles</a></li>
													</ul>
												</li>
												<li><a href="#"><i class="adicon-tablet"></i>Mobiles</a>
													<ul>
														<li><a href="#">Iphone</a></li>
														<li><a href="#">Android</a></li>
														<li><a href="#">Q mobile</a></li>
														<li><a href="#">Black berry</a></li>
													</ul>
												</li>
												<li><a href="#"><i class="adicon-tv"></i>Electronics</a>
													<ul>
														<li><a href="#">Washing Machine</a></li>
														<li><a href="#">Television</a></li>
														<li><a href="#">Air conditioner</a></li>
														<li><a href="#">Computers and Laptops</a></li>
													</ul>
												</li>
												<li><a href="#"><i class="adicon-sofa"></i>Furniture</a></li>
												<li><a href="#"><i class="adicon-briefcase"></i>Jobs</a></li>
												<li><a href="#"><i class="adicon-buildings"></i>Real Estate</a></li>
												<li><a href="#"><i class="adicon-bell"></i>Services</a></li>
												<li><a href="#"><i class="adicon-hat"></i>Education</a></li>
												<li><a href="#"><i class="adicon-dog"></i>Animals</a></li>
												<li><a href="#"><i class="adicon-heal"></i>Fashion</a></li>
												<li><a href="#"><i class="adicon-smile"></i>Baby Products</a></li>
												<li><a href="#"><i class="adicon-hearts"></i>Matrimony</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row field-block">
							<div class="col-xs-12 col-md-3">
								<span class="required label">Condition</span>
							</div>
							<div class="col-xs-12 col-md-9">
								<div class="custom-radio">
									<input type="radio" id="create4221" name="item-condition">
									<label for="create4221">Used</label>
								</div>
								<div class="custom-radio">
									<input type="radio" id="create4222" name="item-condition">
									<label for="create4222">Brand New</label>
								</div>
							</div>
						</div>
						<div class="row field-block">
							<div class="col-xs-12 col-md-3">
								<span class="required label" >Brand Name</span>
							</div>
							<div class="col-xs-12 col-md-9">
								<div class="radio-dropdown">
									<i class="fa fa-bars"></i>
									<button>Select Brand</button>
									<ul>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create002">
											<label for="create002">Samsung</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create003">
											<label for="create003">Apple</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create004">
											<label for="create004">Blackberyy</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create005">
											<label for="create005">Nokia</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create006">
											<label for="create006">Hawaii</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create008">
											<label for="create008">Q mobile</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create009">
											<label for="create009">Motorola</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create010">
											<label for="create010">Sony</label>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="row field-block">
							<div class="col-xs-12 col-md-3">
								<label class="required" for="create011">Price</label>
							</div>
							<div class="col-xs-12 col-md-9">
								<div class="icon-field {{ $errors->has('price') ? ' error' : ' valid' }}">
									<span>€</span>
									<input type="text" id="create011" placeholder="e.g. 999" name="price" _required>
									@if ($errors->has('title'))
										<span class="valid-block" role="alert"></span>
									@endif
								</div>
							</div>
						</div>

						<div class="row field-block">
							<div class="col-xs-12 col-md-3">
								<span class="required label" >City</span>
							</div>
							<div class="col-xs-12 col-md-9">
								<div class="radio-dropdown">
									<i class="fa fa-bars"></i>
									<button>Select your city</button>
									<ul>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create022">
											<label for="create022">Bradford</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create023">
											<label for="create023">Cambridge</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create024">
											<label for="create024">Chester</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create025">
											<label for="create025">Durham</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create026">
											<label for="create026">Glasgow</label>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="row field-block">
							<div class="col-xs-12 col-md-3">
								<span class="label" >Town/Suburb</span>
							</div>
							<div class="col-xs-12 col-md-9">
								<div class="radio-dropdown">
									<i class="fa fa-bars"></i>
									<button>Select your city</button>
									<ul>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create0221">
											<label for="create0221">Bradford</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create0231">
											<label for="create0231">Cambridge</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create0241">
											<label for="create0241">Chester</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create0251">
											<label for="create0251">Durham</label>
										</li>
										<li class="custom-radio">
											<input name="item-brand-name" type="radio" id="create0261">
											<label for="create0261">Glasgow</label>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="row field-block">
							<div class="col-xs-12 col-md-3">
								<label class="required" for="create201">Ad Description</label>
							</div>
							<div class="col-xs-12 col-md-9">
								<textarea id="create201" placeholder="Include the brand, model, age and any included accessories." name="description" class="form-control {{ $errors->has('description') ? ' error' : ' valid' }}"></textarea>
								@if ($errors->has('description'))
									<span class="valid-block" role="alert"></span>
								@endif
							</div>
						</div>

					</div>
				</div>
				<div class="elements-block style-gray">
					<div class="inner">
						<table class="table table-responsive">
							<thead>
							<tr>
								<td>
									<h4>Make Your Ad Featured</h4>
								</td>
								<td class="text-right">
									<a href="#" class="link">What is a Featured Ad?</a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="custom-checkbox">
										<input checked="checked" class="showHideTarget" data-target="#featured-paymentOptions" type="checkbox" id="create42213" name="item-condition">
										<label class="big-font" for="create42213"> Featured Ad</label>
									</div>
								</td>
								<td class="text-right">
									<strong>$2.90 per ad</strong>
								</td>
							</tr>
							</thead>
							<tbody id="featured-paymentOptions">
							<tr>
								<td>
									<h5>Please select the preferred payment method.</h5>
									<div class="custom-radio block-element">
										<input type="radio" id="create422131" name="payment-method-opt">
										<label for="create422131"> Direct Bank Transfer</label>
									</div>
									<div class="custom-radio block-element">
										<input type="radio" id="create422132" name="payment-method-opt">
										<label for="create422132"> Cheque Payment</label>
									</div>
									<div class="custom-radio block-element">
										<input type="radio" id="create422133" name="payment-method-opt">
										<label for="create422133"> Paypal</label>
									</div>
									<div class="custom-radio block-element">
										<input type="radio" id="create422134" name="payment-method-opt">
										<label for="create422134"> Credit Card</label>
									</div>
								</td>
							</tr>
							</tbody>
							<tfoot>
							<tr>
								<td>&emsp;</td>
								<td class="text-right"><strong>Total : $2.90</strong></td>
							</tr>
							</tfoot>
						</table>
						<br>
						<br>
						<div>
							<button class="btn btn-green btn-md" type="submit">Create ad</button>&emsp;&emsp;
							<span class="termStatement">
                                By clicking 'Create Ad' you agree to <a class="link" href="#">our  Terms & Condition</a> and
                                <a class="link" href="#">Posting Rules</a>.
                            </span>
						</div>

					</div>
				</div>
			</form>
		</div>

	</div>

@endsection