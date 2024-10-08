
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    
{{--     
    <link href="{{asset('library/css/style.css')}}" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="{{asset('library/css/account.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('library/css/custom.css')}}" rel="stylesheet">

	<!-- LOADING SPINNER CSS -->
    <link href="{{asset('library/css/loading-spinner.css')}}" rel="stylesheet"> --}}
	

    <!-- BASE CSS -->
    <link href="{{asset('library/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('library/css/setup.css')}}" rel="stylesheet">

    <!-- toastmessage -->
	<link rel="stylesheet" href="{{asset('library/css/toastmessage.css')}}" />    
	<link rel="stylesheet" href="{{asset('library/css/scroll-to-top.css')}}" />    
	<link rel="stylesheet" href="{{asset('library/css/pagination.css')}}" />    

        
	<!--Load CSS-->
	@yield('setup-css')

    {{-- <script src="{{ asset('library/js/bootstrap.js') }}"></script> --}}

    <!-- sweetalert2 -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

	<!-- Jquery -->
	<script rel="stylesheet" src="{{ asset('library/js/jquery.min.js') }}"></script>

	<!--pagination-->
	<script  rel="stylesheet" src="{{asset('library/js/pagination.js')}}"></script>

	<!--hepler-->
	<script  rel="stylesheet" src="{{asset('library/js/helper.js')}}"></script>

	<!-- buildfontendrestfullapi -->
	<script src="{{asset('library/js/buildfontendrestfullapi.js')}}"></script>
	@routes(['group' => "api"])
</head>

<body>
	<ul class="notifications"></ul>
    @yield('setup-content')
    @yield('end') 
    <div id="toTop"></div><!-- Back to top button -->
	@yield('setup-js')
    	<!-- TOASTMESSAGE -->
	<script type="text/javascript" src="{{asset('library/js/scroll-to-top.js')}}"></script>   
	<script type="text/javascript" src="{{asset('library/js/toastmessage.js')}}"></script>  
    
</body>
</html>