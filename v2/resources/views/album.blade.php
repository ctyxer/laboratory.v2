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

  <div class="div_pic">
		<img src="img/AlbumPhotos/кот.jpg" title ="котик" wight="200px" height="200px">
		<img src="img/AlbumPhotos/бокал.jpg" title ="бокал"wight="200px" height="200px">
		<img src="img/AlbumPhotos/в шаре.jpg"title ="в шаре"wight="200px" height="200px">
		<img src="img/AlbumPhotos/маленький.jpg"title ="маленький"wight="200px" height="200px">
		<img src="img/AlbumPhotos/мечтает.jpg"title ="мечтает"wight="200px" height="200px">
		<img src="img/AlbumPhotos/мокрый.jpg"title ="мокрый"wight="200px" height="200px">
		<img src="img/AlbumPhotos/наелся.jpg"title ="наелся"wight="200px" height="200px">
		<img src="img/AlbumPhotos/сидит.jpg"title ="сидит"wight="200px" height="200px">
	</div>
    @include('include.footer')


	<script>
/*
var path = "./img/";
fotos = [path + "cat1.jpg", path + "cat2.jpg", path + "cat3.jpg", path + "cat4.jpg", path + "cat5.jpg", path + "cat6.jpg", path + "cat7.jpg", path + "cat8.jpg", path + "cat9.jpg", path + "cat10.jpg", path + "cat11.jpg", path + "cat12.jpg", path + "cat13.jpg", path + "cat14.jpg", path + "cat15.jpg"];
titles = "жесть грустит";
body = document.getElementsByName("container")[0];
function ShowFoto() {
    var img_ar = new Array(15);
    var length_img = img_ar.length;
    var numberofshownfoto = 0;
    for (i = 0; i < length_img; i++) {
        div_img = document.createElement("div");
        div_img.className = "block_div";     
        for_img = document.createElement("img");
        for_img.src = fotos[numberofshownfoto];
        for_img.alt = "кот грустит" + (numberofshownfoto + 1);
        for_img.title = titles;
		for_img.addEventListener("click", PopUpShow);
        div_img.appendChild(for_img);
        numberofshownfoto++;
		body.appendChild(div_img);
    }
		div_clear= document.createElement("div");
        div_clear.className = "style = clear:both;";  
		body.appendChild(div_clear);
}
ShowFoto();

*/
		window.onload = function(){
	n = sessionStorage.getItem("album");
	n++
	sessionStorage.setItem("album", n);

	m = localStorage.getItem("album");
	m++
	localStorage.setItem("album", m);
}
	</script>
</body>

</html>