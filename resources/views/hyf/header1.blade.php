<!DOCTYPE html>
<html>
<head>
	<title>SCIT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<link rel="stylesheet" href=" {{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href=" {{ URL::asset('https://fonts.googleapis.com/css?family=Open+Sans') }} ">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
 
</head>
<body>
    @section('body')

    @show
<script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js') }}"></script>
<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js') }}"></script>
<script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js') }}"></script>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZKeNzENjHX4nAcELCYKe5MTMZ9bjvi2M&libraries=places"></script>
<script src="{{ URL::asset('js/map2.js') }}"></script>
</body>
</html>