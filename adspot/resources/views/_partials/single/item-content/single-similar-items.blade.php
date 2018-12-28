<div class="items-list-md single-similar-items">
		<h4>Similar ads</h4>
		<div class="items-list">

			@for( $i = 1; $i <=3; $i++)

			<article class="item-spot">
				<a href="#" class="imgAsBg" style="background-image: url(&quot;{{ asset('assets/img/items/ad' . $i . '.jpg') }}&quot;);">
					<img src="{{ asset('assets/img/items/ad' . $i . '.jpg') }}" alt="dummy data">
				</a>
				<div class="item-content">
					<header>
						<h5><a href="#">Canon SX Powershot A Great D-SLR</a></h5>
						<span class="item-info-short">2:49 pm in Melbourne</span>
					</header>
					<div class="price-tag">$229.9</div>
					<div class="item-actions text-center">
						<ul class="contact-options">
							<li><a href="#" class="fa fa-envelope tooltip-parent">
									<span class="tooltip">Send Message</span>
								</a></li>
							<li><a href="#" class="fa fa-phone tooltip-parent">
									<span class="tooltip">Mobile Number</span>
								</a></li>
							<li><a href="#" class="fa fa-heart tooltip-parent">
									<span class="tooltip">save ad</span>
								</a></li>
						</ul>
						<a class="view-item" href="#">view ad</a>
					</div>
				</div>
			</article>

			@endfor
		</div>
	</div>