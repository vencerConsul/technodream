<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('td-assets/common/td-logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/boxicons.min.css')}}"/>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
</head>
<body>
	@auth 
    <!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img class="img-fluid" src="{{asset('td-assets/common/td-logo.png')}}" alt="logo">
		</a>
		<ul class="side-menu top">
			<li class="@if(Route::currentRouteName() == 'admin.dashboard') active @endif">
				<a href="{{route('admin.dashboard')}}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Scanner</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li class="@if(Route::currentRouteName() == 'users.page' || Route::currentRouteName() == 'users.page.add') active @endif">
				<a href="{{route('users.page')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Users</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<div class="spacer"></div>
            <p>{{Auth::user()->name}}</p>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
			<i class='bx bx-log-out-circle' title="Sign out" onclick="event.preventDefault();
			document.getElementById('logout-form').submit();"></i>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
				@csrf
			</form>
		</nav>

        <main>
            <div class="head-title">
                <div class="left">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        @for($i = 2; $i <= count(Request::segments()); $i++)
							<li><i class='bx bx-chevron-right'></i></li>
							<li>
								<a class="text-capitalize" href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
									{{str_replace("-"," ",Request::segment($i))}}
								</a>
							</li>
						@endfor
                    </ul>
                </div>
                <a class="date-time">
                    <i class='bx bx-time-five'></i>
                    <small class="date">Loading...</small>
                </a>
            </div>

            @yield('content')

        </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-duration-format/1.3.0/moment-duration-format.min.js"></script>
    <script src="{{asset('js/admin.js')}}"></script>
    <script>
        Pusher.logToConsole = true;
        
        var pusher = new Pusher('a6a504d179874637b328', {
        cluster: 'ap1'
        });

        var channel = pusher.subscribe('authenticate-channel');
        channel.bind('authenticate-event', function(data) {
            alert(JSON.stringify(data));
        });
    </script>
    @endauth
</body>
</html>
