	<div class="item-gallery-slider">
		<div class="item-lg-images">
			<a href="#" class="trigger-gallery"><i class="adicon-expand"></i></a>
			<div class="slick-carousel slick-lg-images" data-asnav=".slick-sm-images" data-fade="true" data-slides-scroll="1" data-dots="false" data-nav="false" data-slides="1" data-slides-lg="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-auto="true">
				{{--<div class="item-lg-thumb imgAsBg">--}}
					{{--<img src="{{ asset('assets/img/lg1.jpg') }}" alt="dummy">--}}
				{{--</div>--}}

				@for( $i = 1; $i <= 7; $i++)
					<div class="item-lg-thumb imgAsBg">
						<img src="https://picsum.photos/1650/1100/?image={{ $i }}" alt="dummy">
					</div>
				@endfor
			</div>
		</div>
		<div class="item-sm-images">
			<div class="slick-carousel slick-sm-images" data-focus="true" data-asnav=".slick-lg-images"  data-slides-scroll="1" data-dots="false" data-nav="true" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right" data-slides="6" data-slides-lg="4" data-slides-md="4" data-slides-sm="2" data-loop="true" data-auto="false">
				{{--<div class="item-sm-thumb">--}}
					{{--<div class="imgAsBg">--}}
						{{--<img src="{{ asset('assets/img/lg1.jpg') }}" alt="dummy">--}}
					{{--</div>--}}
				{{--</div>--}}
				@for( $i = 1; $i <= 7; $i++)
					<div class="item-sm-thumb">
						<div class="imgAsBg">
							<img src="https://picsum.photos/1650/1100/?image={{ $i }}" alt="dummy">
						</div>
					</div>
				@endfor
			</div>
		</div>
	</div>

	<div class="full-width-gallery">
		<div class="inner">
			<div class="container">
				<div class="gallery-lg-area">
					<a href="#" class="close-lg-gallery"><i class="fa fa-close"></i></a>
					<div class="slick-carousel slick-gallery-lg-images" data-asnav=".slick-gallery-thumbs" data-fade="true" data-slides-scroll="1" data-dots="false" data-nav="false" data-slides="1" data-slides-lg="1" data-slides-md="1" data-slides-sm="1" data-loop="true" data-auto="false">
						{{--<div class="item-lg-thumb">--}}
							{{--<img src="{{ asset('assets/img/lg1.jpg') }}" alt="dummy">--}}
						{{--</div>--}}
						@for( $i = 1; $i <= 7; $i++)
							<div class="item-lg-thumb">
								<img src="https://picsum.photos/1650/1100/?image={{ $i }}" alt="dummy">
							</div>
						@endfor
					</div>
				</div>
			</div>
			<div class="gallery-thumbs">
				<div class="container">
					<div class="gallery-thumbs-inner">
						<div class="slick-carousel slick-gallery-thumbs" data-focus="true" data-asnav=".slick-gallery-lg-images"  data-slides-scroll="1" data-dots="false" data-nav="true" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right" data-slides="6" data-slides-lg="4" data-slides-md="4" data-slides-sm="2" data-loop="true" data-auto="false">
							{{--<div class="item-sm-thumb">--}}
								{{--<div class="imgAsBg">--}}
									{{--<img src="{{ asset('assets/img/lg1.jpg') }}" alt="dummy">--}}
								{{--</div>--}}
							{{--</div>--}}
							@for( $i = 1; $i <= 7; $i++)
								<div class="item-sm-thumb">
									<div class="imgAsBg">
										<img src="https://picsum.photos/1650/1100/?image={{ $i }}" alt="dummy">
									</div>
								</div>
							@endfor
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>