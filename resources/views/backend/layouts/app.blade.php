	@include('backend.layouts.partial.styles')

	@include('backend.components.sidebar')

	@php
		 $active_user = App\Models\User::all()->count();
	@endphp

		<!-- ==========Navigation Starts======== -->

		<section class="nav">
			<div class="container">
				<div class="search-box">
					<i class="fa-solid fa-magnifying-glass"></i>
					<input type="text" name="search" placeholder="Search.." />
				</div>
				<div class="nav-right">
					<i class="fa-solid fa-bell"></i>
					<a href="#"
						><img class="profile" src="./assets/img/profile.jpg" alt="profile"
					/></a>
					<p class="text-sec">
						Galib Jaman<i class="fa-solid fa-angle-down" id="down"></i>
					</p>
				</div>
                <form id="btn_logout" action="{{route('logout')}} " method="POST" >
                    @csrf
                    <button id="submit_btn" href="{{route('logout')}} " class="" ><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</button>
                </form>

			</div>
		</section>

		<!-- ==========Navigation Ends======== -->

		<!-- ==========Main Content Starts======== -->

		<section class="main_content">
			<div class="container">
				<div class="info_box">
					<div class="info_single">
						<div class="info-icon"><i class="fa-solid fa-user-group"></i></div>
						<div class="info_text">
							<h1 class="number">{{ $active_user}}</h1>
							<p>Active users</p>
						</div>
					</div>
					<div class="info_single info2">
						<div class="info-icon">
							<i class="fa-solid fa-apple-whole"></i>
						</div>
						<div class="info_text">
							<h1 class="number">$256,12</h1>
							<p>Total investments</p>
						</div>
					</div>
					<div class="info_single info3">
						<div class="info-icon"><i class="fa-solid fa-leaf"></i></div>
						<div class="info_text">
							<h1 class="number">1,251,230</h1>
							<p>Trees planted</p>
						</div>
					</div>
					<div class="info_single info4">
						<div class="info-icon">
							<i class="fa-solid fa-handshake-angle"></i>
						</div>
						<div class="info_text">
							<h1 class="number">$362,612</h1>
							<p>Donated</p>
						</div>
					</div>
				</div>


				@section('main')

                @show
			</div>
		</section>

		<!-- ==========Main Content Ends======== -->
		@include('backend.layouts.partial.scripts')
