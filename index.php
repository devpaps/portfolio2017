<!DOCTYPE html>

<html lang="sv-SE">
<head>
    <title>Lars Jönsson | Frilansande Webbutvecklare</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="author" content="Lars Jönsson">
    <meta name="description" content="Lars J&#246;nsson &#228;r en frilansande webbutvecklare fr&#229;n den centrala delen av Sverige, &#214;stersund.">
    <meta name="keywords" content="webbdesigner, webdesigner, webdesign, design, webbutvecklaing, webutveckling, hemsida, hemsidor, webbplatser, webbplats, webbsida, Östersund, Jämtland, webbproduktion, portfolio">
    <meta name="google-site-verification" content="EKHpD342_nh74tp-EzJVa5Klxs21y4h8IzMn2cyINf4" />
    <meta name="language" content="SV">
    <link rel="alternate" hreflang="sv" href="http://www.webbkon.se">
    <meta content="#fff" name="theme-color">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
  <div id="Home">
    <div class="container-fluid">
        <header>
            <div class="collector navbar">
                <nav class="sidenav" id="mySidenav">
                    <span class="closebtn" onclick="closeNav()">&times;</span>
                    <a href="#Home" class="slide-section">Hem</a>
                    <a href="#About" class="slide-section">Om mig</a>
                    <a href="#Work" class="slide-section">Projekt</a>
                    <!--<a href="#Testamonials" class="slide-section">Referenser</a>-->
                    <a href="#Services" class="slide-section">Tjänster</a>
                    <a href="#Contact" class="slide-section">Kontakta mig</a>
                </nav>
                <span id="open" onclick="openNav()">Menu</span>
            </div>


            <div class="hero-img">
                <div class="container">
                    <h1 class="myName">Lars Jönsson</h1>


                    <h4 class="frontEnd">Front-End developer</h4>


                    <div class="hire-me">
                      <a href="#Contact" class="slide-section">
                        <button type="button" class="btn btn-danger">Kontakta mig</button>
                      </a>
                    </div>

                </div>
                <div class="container-right">
                  <img src="./assets/img/header-code-img.png" alt="" class="img-responsive">
                  <em><h5>"Jag gör simpelt kaffe till cyberkod."</h5></em>
                </div>
            </div>
        </header>

          <div id="About">
            <div class="container">
                <section class="about row">
                  <div class="picture-me col-md-6 col-sm-6 col-xs-12">
                  </div>


                  <article class="col-md-6 col-sm-6 col-xs-12">
                      <h3>Lite om mig</h3>


                      <div class="line"></div>


                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam magnam itaque, eos unde sequi totam maiores accusamus. Aspernatur deleniti aliquam voluptatem dicta similique. Voluptate ut doloremque eligendi, rem veniam necessitatibus.</p>
                  </article>
                </section>
            </div>
          </div>

          <div id="Work">
            <section class="gallerys container-fluid">
                <h3>De senaste projekten</h3>

                <div class="line"></div>


                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg">
                              <img alt="" class="thumbnail" src="./assets/img/image.jpeg">
                            </a>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg">
                              <img alt="" class="thumbnail" src="./assets/img/image.jpeg">
                            </a>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg">
                              <img alt="" class="thumbnail" src="./assets/img/image.jpeg">
                            </a>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg">
                              <img alt="" class="thumbnail" src="./assets/img/image.jpeg">
                            </a>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg">
                              <img alt="" class="thumbnail" src="./assets/img/image.jpeg">
                            </a>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg">
                              <img alt="" class="thumbnail" src="./assets/img/image.jpeg">
                            </a>
                        </div>

                        <div class="modal fade">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <img src=""/ class="img-responsive">
                            </div>
                          </div>
                        </div>

                    </div>
                </div>
            </section>
          </div>


        <!--
        <div id="Testamonials">
          <section class="testamonials container">
              <div class="carousel slide" data-ride="carousel" id="text-carousel">
                  <ol class="carousel-indicators">
                      <li class="active" data-slide-to="0" data-target="#text-carousel">
                      </li>


                      <li data-slide-to="1" data-target="#text-carousel">
                      </li>


                      <li data-slide-to="2" data-target="#text-carousel">
                      </li>
                  </ol>


                  <div class="row">
                      <div class="container">
                          <div class="carousel-inner" role="listbox">
                              <div class="item active">
                                  <div class="carousel-content">
                                      <div class="container text-testamonials">
                                          <h4>Sofie Blom</h4>
                                          <p>He is a wunderful human</p>
                                      </div>
                                  </div>
                              </div>


                              <div class="item">
                                  <div class="carousel-content">
                                      <div class="container text-testamonials">
                                          <h4>Stefan Larsson</h4>
                                          <p>Lorem ipsum dolor sit amet</p>
                                      </div>
                                  </div>
                              </div>


                              <div class="item">
                                  <div class="carousel-content">
                                      <div class="container text-testamonials">
                                        <h4>Martin Sundin</h4>
                                        <p>Sapiente, ducimus, voluptas, mollitia voluptatibus nemo.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

        </div>
              -->


        <section class="container tools">
          <h3>Verktygen jag använder mig av</h3>
          <div class="line"></div>
          <div class="row">

            <div class="container col-lg-offset-2">
                <div class="sass icons">
                    <div class="col-lg-2"><img alt="sass" src="./assets/img/sass.png" data-toggle="tooltip" data-placement="bottom" title="Syntactically Awesome Style Sheets">
                    </div>
                </div>


                <div class="pug icons">
                    <div class="col-lg-2"><img alt="pug/jade" src="./assets/img/pug.png" data-toggle="tooltip" data-placement="bottom" title="Pug/Jade">
                    </div>
                </div>


                <div class="jquery icons">
                    <div class="col-lg-2"><img alt="jquery" src="./assets/img/jquery.png" data-toggle="tooltip" data-placement="bottom" title="Jquery">
                    </div>
                </div>


                <div class="javascript icons">
                    <div class="col-lg-2"><img alt="javascript" src="./assets/img/js.png" data-toggle="tooltip" data-placement="bottom" title="Javascript">
                    </div>
                </div>

                <div class="github icons">
                    <div class="col-lg-2"><img alt="javascript" src="./assets/img/github3.png" data-toggle="tooltip" data-placement="bottom" title="GitHub">
                    </div>
                </div>
            </div>
          </div>
        </section>

        <div id="Services">
          <section class="container services">
              <div class="services-text">
                  <h3>Mina tjänster</h3>
                  <div class="line"></div>

                  <p>Jag jobbar med den senaste tekniken när jag kodar fram din webbplats. Jag jobbar även på ett agilt arbetssätt.</p>
              </div>


              <div class="container col-lg-12 seo">
                  <div class="row">
                      <div class="col-md-6 icon">
                          <img src="./assets/img/browser.svg" alt="browser icon">
                      </div>


                      <div class="col-md-6 text">
                          <h4>Banners</h4>
                          <p>Jag hjälper er med att göra banners av olika slag. Det kan vara något ni vill uttrycka på eran webbsida, t.ex. <strong><u>reklam</u></strong> för någon produkt vara vanligt brukar vara vanligt.</p>
                      </div>
                  </div>
              </div>


              <div class="container col-lg-12 responsive">
                  <div class="row">
                      <div class="col-md-6 text">
                          <h4>SEO</h4>
                          <p>Jag kommer ge er en <strong><u>sökvänlig</u></strong> webbplats som betyder att fler kan hitta till just er webbplats. Så att Googles <strong><u>sökspindlar</u></strong> kan lättare hitta eran webbplats. Så att ni kan få fler att besöka er.</p>
                      </div>


                      <div class="col-md-6 icon">
                          <img src="./assets/img/spider.svg" alt="SEO icon">
                      </div>
                  </div>
              </div>


              <div class="container col-lg-12 code">
                  <div class="row">
                      <div class="col-md-6 icon">
                          <img src="./assets/img/responsive.svg" alt="responsive icon">
                      </div>


                      <div class="col-md-6 text">
                          <h4>Responsiv</h4>
                          <p>Att ha en responsiv webbplats idag är ett måste. Nästan alla som surfar på webben idag använder sig av deras <strong><u>mobil</u></strong>. Därför är det viktigt att eran webbplats ska få en bra <strong><u>användarupplevelse</u></strong> på små skärmar.</p>
                      </div>
                  </div>
              </div>


              <div class="container col-lg-12 design">
                  <div class="row">
                      <div class="col-md-6 text">
                          <h4>Snabb</h4>
                          <p>Det är väldigt viktigt att dagens webbplatser är snabb. Det sägs att webbplatser som inte laddat klart på <strong><u>3 sekunder</u></strong>, finns det en risk att användaren blir <strong><u>frustrerad och lämnar webbplatsen</u></strong>.</p>
                      </div>


                      <div class="col-md-6 icon">
                          <img src="./assets/img/speedometer.svg" alt="speedometer icon">
                      </div>
                  </div>
              </div>
          </section>

        </div>

        <div id="Contact">
          <section class="container contact">
              <div class="contact-text">
                  <h3>Hör av dig</h3>
                  <div class="line"></div>
                  <p>Jag hjälper dig mer än gärna med just dina ideér. </p>

              </div>


              <div class="container col-lg-7">
                  <div class="row">
                      <div class="map">
                          <div id="map">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="container col-lg-5">
                  <div class="row">
                      <div class="col-lg-12">
                          <div class="form_main">

                            <div class="contact-google-icon icons">
                                <img src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png" alt="google-pin">
                                <span>Östersund, Sweden</span>
                            </div>

                            <div class="contact-google-icon icons">
                                <img src="./assets/img/Email-icon.png" alt="google-pin">
                                <span>info@webbkon.se</span>
                            </div>


                            <form id="my_form"  onsubmit="submitForm(); return false;">
                                <div class="row">
                                    <div class="form-group">
                                        <input type="text" required="" placeholder="Ditt namn" id="name" class="form-control">
                                    </div>
                                </div>

                            <div class="form">
                                <div class="row">
                                    <div class="form-group">
                                        <input type="email" required="" placeholder="Din e-post" id="email" class="form-control">
                                    </div>
                                </div>

                                <div class="form">
                                    <div class="row">
                                        <div class="form-group">
                                            <textarea placeholder="Vad kan jag stå till tjänst med?" required="" id="message" type="text" class="form-control" rows="7"></textarea>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <input id="mybtn" class="button" type="submit" value="Skicka">
                                    </div>
                                    <span id="status"></span>

                                </form>
                              </div>
                          </div>
                      </div
                  </div>
                </div>
              </div>
          </section>
        </div>
        </div>
        <section class="container links">
      		<div class="container">
      			<div class="row col-lg-12">
              <a href="https://www.twitter.com/devpaps">
      				<div class="twitter tot col-lg-3 col-xs-3">
      					<img src="./assets/img/twitter2.png" alt="twitter-icon">
      				</div>
              </a>
              <a href="https://github.com/devpaps">
      				<div class="github tot col-lg-3 col-xs-3">
      					<img src="./assets/img/github2.png" alt="Github-icon">
      				</div>
              </a>
              <a href="http://codepen.io/Devpaps/">
      				<div class="codepen tot col-lg-3 col-xs-3">
      					<img src="./assets/img/codepen2.png" alt="LinkedIn-icon">
      				</div>
              </a>
              <a href="https://se.linkedin.com/in/lars-jönsson-43b3646a">
      				<div class="linkedin tot col-lg-3 col-xs-3">
      					<img src="./assets/img/linkedin2.png" alt="">
      				</div>
              </a>
      			</div>
      		</div>
      	</section>
        <section class="container footer">
          <div class="row col-lg-6 col-xs-12">
            <strong>

              <a href="#Home">Hem</a>


              <a href="#About">Om mig</a>


              <a href="#Work">Arbete</a>


              <a href="#Testamonials">Referenser</a>


              <a href="#Services">Services</a>

            </strong>
          </div>
          <hr class="row">
          <div class="row col-lg-12 copyright">
            <strong>© 2017 – <a href="http://webbkon.se">Lars Jönsson</a></strong>
          </div>
        </section>

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
<script src="assets/js/mail.js">
</script>
<script src="assets/js/functions.js">
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDr0p_-clW9KPpMF01xEAOh36UR-DfLeSY&amp;callback=initMap">
</script>
</body>
</html>
