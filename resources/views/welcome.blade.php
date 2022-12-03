<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shibuya's Ramen</title>
  <meta name="description" content="Shibuya's Ramen">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
  <link rel="stylesheet" href="css/styles-merged.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
  <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <!-- Fixed navbar -->

  <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html" title="uiCookies:FineOak">FineOak</a>
      </div>

      <div id="navbar-collapse" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#" data-nav-section="welcome">Bienvenidos</a></li>
          <li><a href="#" data-nav-section="specialties">Especialidades</a></li>
          <li><a href="#" data-nav-section="menu">Menu</a></li>
          <li><a href="{{ route('reservation.create') }}">Reservacion</a></li>
          <!--<li><a href="#" data-nav-section="events">Eventos</a></li>-->
          <li><a href="#" data-nav-section="contact">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="flexslider" data-section="welcome">
    <ul class="slides">
      <li style="background-image: url(img/hero_bg_1.jpg)" class="overlay" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                <h1 class="primary-heading">Bienvenidos</h1>
                <h3 class="secondary-heading">Shibuya's Ramen</h3>
                <p class="sub-heading">Restaurante Japones</p>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url(img/hero_bg_2.jpg)" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                <h1 class="primary-heading">Disfruta</h1>
                <h3 class="secondary-heading">con nosotros</h3>
                <p class="sub-heading">Shibuya's Ramen </p>
              </div>
            </div>
          </div>
        </div>

      </li>
      <li style="background-image: url(img/hero_bg_3.jpg)" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                <h1 class="primary-heading">Celebra</h1>
                <h3 class="secondary-heading">Con nosotros</h3>
                <p class="sub-heading">Shibuya's Ramen</p>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <section class="probootstrap-section probootstrap-bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-5 text-center probootstrap-animate">
          <div class="probootstrap-heading dark">
            <h1 class="primary-heading">Descubre</h1>
            <h3 class="secondary-heading">sobre nosotros</h3>
            <span class="seperator">* * *</span>
          </div>
          <p>La variedad de texturas, sabores, aromas y el colorido de los ingredientes naturales de la cocina japonesa,
            además de sus propiedades nutritivas y de salud, ofrecen una experiencia en el paladar rica en sensaciones.</p>
          <p><a href="#" class="probootstrap-custom-link">nosotros</a></p>
        </div>
        <div class="col-md-6 col-md-push-1 probootstrap-animate">
          <p><img src="img/chef.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></p>
        </div>
      </div>
      <!-- END row -->
    </div>
  </section>

  <section class="probootstrap-section-bg overlay" style="background-image: url(img/hero_bg_1.jpg);" data-stellar-background-ratio="0.5" data-section="Especialidades">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center probootstrap-animate">
          <div class="probootstrap-heading">
            <h2 class="primary-heading">Descubre nuestras especialidades</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- probootstrap-bg-white -->
  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="probootstrap-cell-retro">
          <div class="half">

            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/comida_2.jpg);"></div>
              <div class="text text-center">
                <h3>Ramen</h3>
                <p>Fideo japones servidos en caldo, ya sea a base de pollo o cerdo, además verduras, huevo, “narutos”.</p>
                <p class="price">$189.99</p>
              </div>
            </div>
            <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/comida_3.jpg);"></div>
              <div class="text text-center">
                <h3>Yakisoba</h3>
                <p>El platillo consiste en fideos fritos a la plancha, pueden llevar carne y verduras. </p>
                <p class="price">$150.00</p>
              </div>
            </div>
            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/comida_4.jpg);"></div>
              <div class="text text-center">
                <h3>Takoyakis</h3>
                <p>Está hecha a base de harina de trigo y pulpo, en forma de bola. Puede llevar ingredientes como jengibre encurtido.</p>
                <p class="price">$119.99</p>
              </div>
            </div>

          </div>
          <div class="half">

            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/comida_5.jpg);"></div>
              <div class="text text-center">
                <h3>Katsudon</h3>
                <p>Consiste en cuenco de arroz, cubierto con chuleta de cerdo rebozada, huevo revuelto, cebolla y condimentos. </p>
                <p class="price">$169.00</p>
              </div>
            </div>
            <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/comida_6.jpg);"></div>
              <div class="text text-center">
                <h3>Okonomiyaki</h3>
                <p>Masa cocinada con ingredientes al gusto, puede ser carne,
                  gambas, verduras.</p>
                <p class="price">$159.99</p>
              </div>
            </div>
            <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
              <div class="image" style="background-image: url(img/comida_7.jpg);"></div>
              <div class="text text-center">
                <h3>Omurice</h3>
                <p>Este platillo se prepara con arroz, tomate y pequeños trozos de carne y guisantes enrollados en una tortilla. </p>
                <p class="price">$129.00</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section-bg overlay" style="background-image: url(img/hero_bg_4.jpg);" data-stellar-background-ratio="0.5" data-section="menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center probootstrap-animate">
          <div class="probootstrap-heading">
            <h2 class="primary-heading">Descubre</h2>
            <h3 class="secondary-heading">Nuestro Menu</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section probootstrap-bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="menus">
            <li>
              <figure class="image"><img src="img/sushi_1.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="price">$99.99</span>
                <h3>Sushi Makizushi</h3>
                <p>Pescado / Verdura / Arroz</p>
              </div>
            </li>
            <li>
              <figure class="image"><img src="img/sushi_2.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="price">$99.99</span>
                <h3>Sushi Futomaki</h3>
                <p>Pulpo / Camaron / Arroz</p>
              </div>
            </li>
            <li>
              <figure class="image"><img src="img/sushi_3.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="price">$99.99</span>
                <h3>Sushi Hosomaki</h3>
                <p>Atun / Surimi / Arroz</p>
              </div>
            </li>
            <li>
              <figure class="image"><img src="img/sushi_4.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="price">$99.99</span>
                <h3>Sushi Uramaki</h3>
                <p>Camaron / Cangrejo / Arroz</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="menus">
            <li>
              <figure class="image"><img src="img/sushi_5.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="price">$119.99</span>
                <h3>Temaki</h3>
                <p>Atun / Cangrejo / Arroz</p>
              </div>
            </li>
            <li>
              <figure class="image"><img src="img/sushi_6.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="price">$179.99</span>
                <h3>Nigirizushi</h3>
                <p>Cangrejo / Atun / Arroz</p>
              </div>
            </li>
            <li>
              <figure class="image"><img src="img/sushi_7.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="price">$179.99</span>
                <h3>Gunkanzushi</h3>
                <p>Hueva de salmon / Arroz</p>
              </div>
            </li>
            <li>
              <figure class="image"><img src="img/sushi_8.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
              <div class="text">
                <span class="price">$179.99</span>
                <h3>Oshizushi</h3>
                <p>Cangrejo / Atun / Arroz</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

 <!-- <section class="probootstrap-section-bg overlay" style="background-image: url(img/hero_bg_5.jpg);" data-stellar-background-ratio="0.5" data-section="reservation">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center probootstrap-animate">
          <div class="probootstrap-heading">
            <h2 class="primary-heading">Booking</h2>
            <h3 class="secondary-heading">Reserve A Table</h3>
          </div>
        </div>
      </div>
    </div>
  </section>-->

  <!-- reservacion -->
  <!--<section class="probootstrap-section probootstrap-bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 probootstrap-animate">
          <form method="post" class="probootstrap-form">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="people">How Many People</label>
                  <div class="form-field">
                    <i class="icon icon-chevron-down"></i>
                    <select name="people" id="people" class="form-control">
                      <option value="#">1 people</option>
                      <option value="#">2 people</option>
                      <option value="#">3 people</option>
                      <option value="#">4+ people</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="date">Date</label>
                  <div class="form-field">
                    <i class="icon icon-calendar"></i>
                    <input type="text" id="date" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="time">Time</label>
                  <div class="form-field">
                    <i class="icon icon-clock"></i>
                    <input type="text" id="time" class="form-control">
                  </div>
                </div>
              </div>
            </div>-->
  <!-- END row -->
  <!--<div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="name">Name</label>
                  <div class="form-field">
                    <i class="icon icon-user2"></i>
                    <input type="text" id="name" class="form-control" placeholder="Your full name">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="email">Email</label>
                  <div class="form-field">
                    <i class="icon icon-mail"></i>
                    <input type="text" id="email" class="form-control" placeholder="Your email address">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <div class="form-field">
                    <i class="icon icon-phone"></i>
                    <input type="text" id="phone" class="form-control" placeholder="Your phone">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-lg btn-primary btn-block">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section-bg overlay" style="background-image: url(img/hero_bg_4.jpg);" data-stellar-background-ratio="0.5" data-section="events">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center probootstrap-animate">
          <div class="probootstrap-heading">
            <h2 class="primary-heading">Upcoming</h2>
            <h3 class="secondary-heading">Our Events</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><img src="img/img_square_2.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
            <div class="text">
              <span class="date">June 29, 2017</span>
              <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><img src="img/img_square_3.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
            <div class="text">
              <span class="date">June 29, 2017</span>
              <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 probootstrap-animate">
          <div class="probootstrap-block-image">
            <figure><img src="img/img_square_4.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>
            <div class="text">
              <span class="date">June 29, 2017</span>
              <h3><a href="#">Laboriosam Quod Dignissimos</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto provident qui tempore natus quos quibusdam soluta at.</p>
              <p class=""><a href="#" class="probootstrap-custom-link link-sm">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>-->

  <section class="probootstrap-section probootstrap-bg-white" data-section="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-5 text-center probootstrap-animate">
          <div class="probootstrap-heading dark">
            <h1 class="primary-heading">Contacto</h1>
          </div>
          <p>Por que nos interesa saber tu opinion. Escribemos</p>
        </div>
        <div class="col-md-6 col-md-push-1 probootstrap-animate">
          <form method="post" class="probootstrap-form">
            <div class="form-group">
              <label for="c_name">Nombre </label>
              <div class="form-field">
                <input type="text" id="c_name" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="c_email">Email </label>
              <div class="form-field">
                <input type="text" id="c_email" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="c_message">Mensaje </label>
              <div class="form-field">
                <textarea name="c_message" id="c_message" cols="30" rows="10" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" name="c_submit" id="c_submit" value="Enviar" class="btn btn-primary btn-lg">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 probootstrap-animate">
          <div class="probootstrap-footer-widget">
            <h3>Ubicacion</h3>
            <div class="row">
              <div class="col-md-6">
                <p> Av. Vallarta #986 <br> Guadalajara, Jal.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 probootstrap-animate">
          <div class="probootstrap-footer-widget">
            <h3>Horario</h3>
            <div class="row">
              <div class="col-md-5">
                <p>Lunes - Jueves <br> 5:30pm - 10:00pm</p>
              </div>
              <div class="col-md-5">
                <p>Viernes - Domingo <br> 5:30pm - 10:00pm</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p class="copyright-text">&copy; 2017 <a href="https://uicookies.com/">uiCookies:Resto</a>. All Rights Reserved. Images by <a href="https://graphicburger.com/">GraphicBurger</a> &amp; <a href="https://unsplash.com/">Unsplash</a></p>
        </div>
        <div class="col-md-4">
          <ul class="probootstrap-footer-social right">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script src="js/scripts.min.js"></script>
  <script src="js/custom.min.js"></script>

</body>

</html>