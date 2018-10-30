<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pecahan Uang</title>
	{!! Html::style('assets/vendor/bootstrap/css/bootstrap.min.css') !!}
	{!! Html::style('assets/vendor/font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('assets/css/style.css') !!}
</head>
<body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Pecahan Uang</h5>
    </div>

    @yield('content')


	{!! Html::script('assets/js/jquery-3.3.1.min.js') !!}
	{!! Html::script('assets/vendor/bootstrap/js/bootstrap.min.js') !!}

</body>
</html>