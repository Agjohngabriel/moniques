    <div class="top-bar_sub_w3layouts container-fluid">
        <div class="row">
            
            <div class="col-md-4 col-sm-6 log-icons mt-2">
                <p class="py-2"><i class="fas fa-phone"></i> Call Us : <a href="/tel: +234 (816) 931 8651">+234 (816) 931 8651</a></p>
            </div>
            
            <div class="col-md-4 col-sm-6 logo">
                <a class="navbar-brand" href="/index">
                    <i class="fas fa-bus"></i> MONIQUE MOTORS </a>
            </div>
            
            
            <div class="col-md-4 top-forms mt-md-3 mt-2 mb-md-0 mb-3">
                @guest
                    <span class="mx-lg-4 mx-md-2  mx-1">
                        <a href="/#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
                            <i class="fas fa-lock"></i> Sign In</a>
                    </span>
                    <span>
                        <a href="/#" data-toggle="modal" data-target="#exampleModal1" >
                            <i class="fas fa-user"></i> Register</a>
                    </span>
                @endguest
                @if(Auth::user())
                    <span>
                        <a href="//user/profile">
                        <i class="fas fa-user"></i>Profile</a>
                    </span>
                    <span>
                        <a href="//dashboard">
                        <i class="fas fa-home"></i>Dashboard</a>
                    </span>
                @endif
            </div>
        </div>
    </div>
   @php
  	$pages = [
  		'about', 'contact'
  	]
   @endphp
    @if(Route::has($pages))

<div class="banner" id="home">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="/">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/book">Booking</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Connect
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item text-center" href="/about">About</a>
								<a class="dropdown-item text-center" href="/services">Services</a>

							</div>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="/contact">Contact</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
	</div>
	@endif
	