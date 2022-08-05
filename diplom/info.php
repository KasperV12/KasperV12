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
	<script src="js/modernizr.js"></script>
<!-- Modernizr -->



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
                <a class="navbar-brand page-scroll" href="index.php">IT-center</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li>
                        <a class="page-scroll" href="index.php">Главная</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Регистрация/вход</a>
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
				</div>
			</div>
		</div>
    </header>

    <!--Подключаем форму отправки данных -->

    <section class="box-content box-5" id="contact">
      <div class="container">
        <div class="row heading">
          <div class="col-lg-12">
                      <h2>Контакты</h2>
            <hr>
          <div class="intro">Зарегистрируйтесь через эту форму</div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-4 ">
            <div class="row box-item">
              <h3>Оставьте свои данные, чтобы узнать больше</h3>
              <p>Вы можете получить информацию об обучении своего ребенка, если зарегистрируетесь через эту форму</p>

              <!-- Вносим поле приёма эмейла -->

            </div>
          </div>
          <div class="col-md-8">
            <div id="contact-form">
              <form id="form" name="form1" method="post" action="reg.php">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="email" class="form-control input-lg" name="email" placeholder="Ваш электронный адресс" required="required" />
                    </div>
                  </div>
                </div>

                <!-- Вносим поле приёма фамилии ребенка -->

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control input-lg" name="last_name" id="subject" placeholder="Фамилия ребенка" required="required" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">

                    <!-- Вносим кнопку, отправляющую форму на сервер -->

                    <button type="submit" class="btn btn-3 btn-block" name="btn_submit_register" id="btnContactUs">
                Зарегистрироваться / Войти</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div>







          <!-- Footer -->

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



<script type="text/javascript">
    const form = document.getElementById('form')
    
    form.addEventListener('submit', e =>{
      e.preventDefault()
      
      const formData = new FormData(form)
      
      fetch(form.action,{
        method: "POST",
        body: formData
      })
      .then(res => res.text())

      .then(data => {
          alert(data)
      })
    })
</script>




  </body>
  </html>
