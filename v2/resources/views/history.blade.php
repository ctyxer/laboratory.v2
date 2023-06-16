<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
  <link href="{{asset('assets/style.css')}}" rel="stylesheet" type="text/css">
	<title> Главная страница </title>
</head>

<body>

@include('include.header')

@vite(['resources/js/Date_menu.js','resources/js/History.js'])


<br></br>
<div id="tableHistory1" class="tableHistory"> </div>
<div id="tableHistory2" class="tableHistory"> </div>

<br></br>
@include('include.footer')

</body>

</html>