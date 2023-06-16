<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
	<link href="{{asset('assets/style.css')}}" rel="stylesheet" type="text/css">
	<!--<script src="myinterests.js"></script>
	<script src="Date_menu.js" defer></script>-->
	<meta charset="utf-8">
	<title> Хобби </title>
</head>

<body>
@include('include.header')

@vite(['resources/js/Date_menu.js'])

	<h1 align="center"> Моё хобби </h1>
	<div id="navbar">
		<script>
			list("u", "<a href='#art'>Одно из моих хобби, в течении всей жизни - рисование. </a>", "<a href='#books'>Моя любимая книга</a>")
		</script>
	</div>

	<div class="navbar">
		<div class="dropdown">
			<button class="dropbtn">Мои интересы
				<i class="arrow down"></i>
			</button>
			<div class="dropdown-content">
				<a href="#art">
					<p>Рисование</p>
				</a>
				<a href="#books">
					<p>Книги</p>
				</a>
			</div>
		</div>
	</div>
	<section id="art">			<header>
		<h1 align="center">Рисование...</h1>			
		<hr></hr>
	</header>
		<p>&emsp;Рисунки ниже нарисованы акрилом. Материалы которые я когда либо пыталась чото рисовать: акрил, масло,
			акварель, карандаши, простые карандаши, маслянная пастель, лайнеры, тушь+перо. Ещё я не рисую уже несколько
			лет, просто выеживаюсь :) </p>

		<div align="center">
			<img src="img/pict1.jpg" alt="Акулки" width="400" height="600">
			<img src="img/pict2.jpg" alt="Мертвый Гоголь" width="750" height="500">
		</div>

		<div align="center"> Один из моих самых лучших рисунков - морские обитатели. Люблю реализм :) &emsp; &emsp;
			Мертвый Горький... Я рисую либо животных, насекомых, либо мертвых людей :) </div>
	</section>

	<section id="books">
		<section>
			<hr></hr>
			<header>
				<h1 align="center">Моя любимая книга - это Содзи Симада "Токийский зодиак"</h1>
			</header>
			<p> &emsp; Эта жуткая тайна будоражила Японию в течение последних 40 лет. В 1936 году эксцентричный
				художник, проживавший вместе с шестью дочерями, падчерицами и племянницами, был найден мертвым в
				комнате, запертой изнутри. Его дневники, посвященные алхимии и астрологии, содержали подробный план
				убийства каждой из них. И вскоре зловещий план исполнился: части тел этих женщин нашли спрятанными по
				всей Японии. Несколько десятилетий никто не мог понять, что же произошло… </p>
			<div align="center">
				<img src="img/tokio.jpg">
			</div>
		</section>
	</section>
    @include('include.footer')

<script>

window.onload = function(){
	n = sessionStorage.getItem("hobby");
	n++
	sessionStorage.setItem("hobby", n);

	m = localStorage.getItem("hobby");
	m++
	localStorage.setItem("hobby", m);
}

</script>
</body>

</html>