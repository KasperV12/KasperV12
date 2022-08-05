<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Design Studio</title>

    <!-- ядкро бутстрап ксс -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- все стили -->
	<link rel="stylesheet" href="css/reset.css"> <!-- основа -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animated-logo.min.css"><!-- Логотип -->
	<link rel="stylesheet" href="css/our-team.css"> <!-- подтянул стили -->

	<!-- Шрифты -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Js -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  


</head>
<body>
	<!-- Навигация -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">IT-center</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="#page-top">Основное</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Курсы</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#new">Новости</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">О нас</a>
                    </li>
                        <li>
                          <a href="info.php">Оценки моего ребенка</a>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->

	<!-- /////////////////////////////////////////Header -->
	<header id="page-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="o-container">
						<div class="c-slack">
						  <span class="c-slack__dot c-slack__dot--a"></span>
						  <span class="c-slack__dot c-slack__dot--b"></span>
						  <span class="c-slack__dot c-slack__dot--c"></span>
						  <span class="c-slack__dot c-slack__dot--d"></span>
						</div>
					</div>
					<div class="intro-text">
						<div class="intro-lead-in">Добро пожаловать!</div>
						<div class="intro-heading">Здесь вы узнаете всё, что вам нужно</div>
					</div>
					<a class="btn btn-1 btn-sm" href="#about">О нас</a>
				</div>
			</div>
		</div>
    </header>
	<!-- Header -->

	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">

		<!-- ////////////Content Box 01 -->
		<section id="services" class="box-content box-1">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">
						<h2>Курсы</h2>
						<hr>
						<div class="intro">Чему мы вас научим?</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 box-item">
						<div class="wrap-img">
							<img src="images/Html.png" />
						</div>
						<h3 class="blue">HTML 5</h3>
						<p>То, с чего начинают все новички. Первым делом, обучаясь у нас, человек знакомится с тем, что такое HTML и с чем его едят</p>

					</div>
					<div class="col-sm-3 box-item">
						<div class="wrap-img">
							<img src="images/Css.png" />
						</div>
						<h3 class="yellow">CSS 3</h3>
						<p>Следующая ступень в обучении это изучение CSS. На этом этапе ученик научится делать свои сайты красивее и содержательнее</p>

					</div>
					<div class="col-sm-3 box-item">
						<div class="wrap-img">
							<img src="images/screen.png" />
						</div>
						<h3 class="red">АДАПТИВ</h3>
						<p>Третий этап обучения привносит в сайт адаптивность. BOOTSTRAP и его функции помогают сделать сайт "резиновым"</p>

					</div>
					<div class="col-sm-3 box-item">
						<div class="wrap-img">
							<img src="images/Setting.png" />
						</div>
						<h3 class="green">БЭК-ЭНД</h3>
						<p>Завершает курс по ве6-дизайну изучение работы с базами данных и инструментов, контроллирующих их работу</p>

					</div>
				</div>
			</div>
		</section>

		<!-- ////////////Content Box 02 -->
		<section id="new" class="box-content box-2 box-style">
			<div class="container">
				<div class="row">
					<blockquote>В летнее время мы объявляем скидку на обучение для новых клиентов в 20%! Успейте начать по выгодной цене!</blockquote>
				</div>
			</div>
		</section>

		<!-- ////////////Content Box 03 -->
		<section id="about" class="box-content box-3">
			<div class="container">
				<div class="row heading">
					<div class="col-lg-12">
						<h2>О нас</h2>
						<hr>
						<div class="intro">Краткий пересказ нашей истории</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<ul class="timeline">
							<li class="blue">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/4.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>Открытие</h4>
										<h4 class="subheading">Первые шаги учебного заведения</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Всего год назад, в апреле, наш центр начал свою деятельность. Переоборудовав помещение под свои нужды, мы начали набор учеников.</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted red">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/5.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>Лето 2021</h4>
										<h4 class="subheading">Зарождение репутации</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Летом 2021-ого года начали появляться первые ученики. Мы на тот момент были единственными, кто предлагал курсы по программированию по доступной цене и в этом районе.</p>
									</div>
								</div>
							</li>
							<li class="green">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/6.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>Осень 2021</h4>
										<h4 class="subheading">Укрепление позиций</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Знания учеников росли, как и доверие людей к нам. количество учеников стремилось вверх, а центр успешно развивался, набирая обороты.</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted yellow">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="images/7.jpg" alt="">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>Весна 2022</h4>
										<h4 class="subheading">Появление онлайн-курсов</h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">Весной текущего года мы наконец-то ввели возможность онлайн обучения, которая позволит комфортно обучаться у нас людям со всей нашей страны, а может даже больше!</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted ">
								<div class="timeline-image">
									<h4>Начни же
									<br>И Свою
									<br>Историю!</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!-- ////////////Content Box 04 -->


		<!-- ////////////Content Box 05 -->

	<!-- /////////////////////////////////////////Footer -->
	<footer>
    <div class="col-md-4 col-footer footer-2">

      </div>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-footer footer-1">
						<div class="heading"><h4>О нас</h4></div>
						<div class="content">
							<p>Всего год назад, в апреле, наш центр начал свою деятельность. Переоборудовав помещение под свои нужды, мы начали набор учеников. Летом 2021-ого года начали появляться первые ученики. Мы на тот момент были единственными, кто предлагал курсы по программированию по доступной цене и в этом районе. </p>
							<p>Знания учеников росли, как и доверие людей к нам. количество учеников стремилось вверх, а центр успешно развивался, набирая обороты. Весной текущего года мы наконец-то ввели возможность онлайн обучения, которая позволит комфортно обучаться у нас людям со всей нашей страны, а может даже больше!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</footer>
	<!-- Footer -->
<?php
      //Запускаем сессию
      session_start();

      //Добавляем файл подключения к БД
      require_once("dbconnect.php");

      //Объявляем ячейку для добавления ошибок, которые могут возникнуть при обработке формы.
      $_SESSION["error_messages"] = '';

      //Объявляем ячейку для добавления успешных сообщений
      $_SESSION["success_messages"] = '';

      $last_name = filter_var(trim($_POST['last_name']), FILTER_SANITIZE_STRING);
      $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);

              $result_query_insert = $mysqli->query("INSERT INTO `users` (last_name, email) VALUES ('".$last_name."', '".$email."')");
              $mysqli->close();
  ?>
	<!-- jQuery -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="js/agency.js"></script>

	<!-- Animated Top -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>

</body>
</html>
