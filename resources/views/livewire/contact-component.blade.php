<div>
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">@lang("message.Home")</a></li>
					<li class="item-link"><span>@lang("message.Contact us")</span></li>
				</ul>
			</div>
			<div class="row">
				<div class=" main-content-area">
					<div class="wrap-contacts ">
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="contact-box contact-form">
								<h2 class="box-title">@lang("message.Leave a Message")</h2>
								@if (Session::has("message"))
								<div class="alert alert-success" role="alert">{{Session::get("message")}}</div>
								@endif
								<form name="frm-contact" wire:submit.prevent='sendMessage'>

									<label for="name">@lang("message.Name")<span>*</span></label>
									<input type="text" value="" id="name" name="name" wire:model='name'>
									@error('name')
									<p class="text-danger">{{$message}}</p>
									@enderror

									<label for="email">Email<span>*</span></label>
									<input type="text" value="" id="email" name="email" wire:model='email'>
									@error('email')
									<p class="text-danger">{{$message}}</p>
									@enderror

									<label for="phone">@lang("message.Number Phone")</label>
									<input type="text" value="" id="phone" name="phone" wire:model='phone'>
									@error('phone')
									<p class="text-danger">{{$message}}</p>
									@enderror

									<label for="comment">@lang("message.Comment")</label>
									<textarea name="comment" id="comment" wire:model='comment'></textarea>
									@error('comment')
									<p class="text-danger">{{$message}}</p>
									@enderror

									<input type="submit" name="ok" value="Submit">

								</form>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="contact-box contact-info">
								<div class="wrap-map">
									<div class="mercado-google-maps">
										<iframe src="{{$setting->map}}" width="700" height="260" style="border:0;" allowfullscreen="" loading="lazy"
											referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
								</div>
								<h2 class="box-title">@lang("message.Contact Detail")</h2>
								<div class="wrap-icon-box">

									<div class="icon-box-item">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<div class="right-info">
											<b>Email</b>
											<p>{{$setting->email}}</p>
										</div>
									</div>

									<div class="icon-box-item">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div class="right-info">
											<b>@lang("message.Phone")</b>
											<p>{{$setting->phone}}</p>
										</div>
									</div>

									<div class="icon-box-item">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<div class="right-info">
											<b>@lang("message.Address")</b>
											<p>{{$setting->address}}</p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end main products area-->

			</div>
			<!--end row-->

		</div>
		<!--end container-->

	</main>
</div>