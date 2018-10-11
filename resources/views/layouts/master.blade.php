<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Learning</title>
    {{--  <link href="css/bootstrap.min.css" rel="stylesheet">  --}}
    {{Html::style('template/css/bootstrap.min.css')}}

    {{--  <link href="css/font-awesome.min.css" rel="stylesheet">  --}}
    {{Html::style('template/css/font-awesome.min.css')}}
    {{--  <link href="css/datepicker3.css" rel="stylesheet">  --}}
    {{Html::style('template/css/datepicker3.css')}}
    {{--  <link href="css/styles.css" rel="stylesheet">  --}}
    {{Html::style('template/css/styles.css')}}

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
    {{--  <script src="js/html5shiv.js"></script>  --}}
    {{Html::script('template/js/html5shiv.js')}}
    {{--  <script src="js/respond.min.js"></script>  --}}
    {{Html::script('template/js/respond.min.js')}}
	<![endif]-->

	@yield('css')

</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
                <a class="navbar-brand" href="#"><span>E</span>-Learning</a>
				<ul class="nav navbar-top-links navbar-right">
                    <li class="text-center">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                           style="color: white">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div class="col-sm-12 col-sm-offset-0 col-lg-12 col-lg-offset-0 main">

		@yield('content')

	</div>	<!--/.main-->

    {{--  <script src="js/jquery-1.11.1.min.js"></script>  --}}
    {{Html::script('template/js/jquery-1.11.1.min.js')}}
    {{--  <script src="js/bootstrap.min.js"></script>  --}}
    {{Html::script('template/js/bootstrap.min.js')}}
    {{--  <script src="js/chart.min.js"></script>  --}}
    {{Html::script('template/js/chart.min.js')}}
    {{--  <script src="js/chart-data.js"></script>  --}}
    {{Html::script('template/js/chart-data.js')}}
    {{--  <script src="js/easypiechart.js"></script>  --}}
    {{Html::script('template/js/easypiechart.js')}}
    {{--  <script src="js/easypiechart-data.js"></script>  --}}
    {{Html::script('template/js/easypiechart-data.js')}}
    {{--  <script src="js/bootstrap-datepicker.js"></script>  --}}
    {{Html::script('template/js/bootstrap-datepicker.js')}}
    {{--  <script src="js/custom.js"></script>  --}}
	{{Html::script('template/js/custom.js')}}


	@yield('js')

</body>
</html>
