@if (config('frontend.custom_url.status') == 'on')
    <script type="text/javascript">
		window.location.href = "{{ config('frontend.custom_url.link') }}"
	</script>
@else
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <!-- Meta data -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="author" content="{{$metadata['author']}}">
            <meta name="keywords" content="{{$metadata['keywords']}}">
            <meta name="desciption" content="{{$metadata['description']}}">

            <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/shopping-bag-icon.png')}}">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <!-- Title -->
            <title>{{ $metadata['title'] }}</title>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <!-- bootstrap 5 -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"/>
            
            <!-- custom css -->
            <link  href = "{{asset('css/style.css')}}" rel="stylesheet"/>
        </head>
        <body>
            @if (config('frontend.maintenance') == 'on')
			    <div class="container h-100vh">
			    	<div class="row text-center h-100vh align-items-center">
			    		<div class="col-md-12">
			    			<img src="https://lafac.net/img/logo.png" alt="Maintenance Image">
			    			<h2 class="mt-4 font-weight-bold">{{ __('We are just tuning up a few things') }}.</h2>
			    			<h5>{{ __('We apologize for the inconvenience but') }} <span class="font-weight-bold text-info">{{ config('app.name') }}</span> {{ __('is currently undergoing planned maintenance') }}.</h5>
			    		</div>
			    	</div>
			    </div>
		    @else
                
                <!-- NAVBAR -->
                @include('layouts.nav-top')
                <!-- END OF NAVBAR -->

                <!-- HEADER -->
                @include('layouts.header')
                <!-- END OF HEADER -->

                <!-- CONTENT -->
                @yield('content')
                <!-- END OF CONTENT -->

                <!-- FOOTER -->
                @include('layouts.footer')
                <!-- END OF FOOTER -->
                
            @endif

            <script src = "{{asset('js/jquery-3.6.0.js')}}"></script>
            <!-- isotope js -->
            <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
            <!-- bootstrap js -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>    <!-- custom js -->
            <script src = "{{asset('js/script.js')}}"></script> 
       
        </body>
    </html>
@endif