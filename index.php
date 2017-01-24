<!DOCTYPE html>

<html lang="sv">
<head>
    <title>Lars Jönsson * Front-End Developer</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="author" content="Lars Jönsson">
    <meta content="Lars J&#246;nsson &#228;r en frilansande webbutvecklare fr&#229;n den centrala delen av Sverige, &#214;stersund. Jag kan erbjuda dig just Din webbsida s&#229;som du vill ha den. G&#246;	ra &#228;ven l&#228;ttare jobb så som &#228;ndringar i kod eller banner av olika slag." name="description">
    <meta name='keywords' content='hemsida, webbsida, webbutvecklare, frilans, webben'>
    <meta name='language' content='SV'>
    <meta content="#fff" name="theme-color">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
                    <a href="#Testamonials" class="slide-section">Referenser</a>
                    <a href="#Services" class="slide-section">Service</a>
                    <a href="#Contact" class="slide-section">Kontakta mig</a>
                </nav>
                <span id="open" onclick="openNav()">Menu</span>
            </div>


            <div class="hero-img">
                <div class="container">
                    <h1 class="myName">Lars Jönsson</h1>


                    <h4 class="frontEnd">Front-End developer</h4>


                    <div class="social-media-icons">
                        <a href="#"><img alt="codepen" src="./assets/img/codepen.png"></a><a href="#"><img alt="github" src="./assets/img/github.png"></a><a href="#"><img alt="codepen" src="./assets/img/linkedin.png"></a><a href="#"><img alt="instagram" src="./assets/img/instagram.png"></a><a href="#"><img alt="twitter" src="./assets/img/twitter.png"></a>
                    </div>
                </div>
            </div>
        </header>

          <div id="About">
            <div class="container">
                <section class="about row">
                  <div class="picture-me col-md-6 col-sm-6 col-xs-12">
                  </div>


                  <article class="col-md-6 col-sm-6 col-xs-12">
                      <h4>A Little About Me</h4>


                      <div class="line">
                      </div>


                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam magnam itaque, eos unde sequi totam maiores accusamus. Aspernatur deleniti aliquam voluptatem dicta similique. Voluptate ut doloremque eligendi, rem veniam necessitatibus.</p>
                  </article>
                </section>
            </div>
          </div>

          <div id="Work">
            <section class="gallerys container-fluid">
                <h4>What I've Done</h4>


                <p>This Is Where I Can Guarantee My Skills</p>


                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg"><img alt="" class="thumbnail" src="./assets/img/image.jpeg"></a>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg"><img alt="" class="thumbnail" src="./assets/img/image.jpeg"></a>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg"><img alt="" class="thumbnail" src="./assets/img/image.jpeg"></a>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg"><img alt="" class="thumbnail" src="./assets/img/image.jpeg"></a>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg"><img alt="" class="thumbnail" src="./assets/img/image.jpeg"></a>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <a class="popupimage" href="./assets/img/image.jpeg"><img alt="" class="thumbnail" src="./assets/img/image.jpeg"></a>
                        </div>


                        <div class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content"><img src="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          </div>


        <div id="Testamonials">
          <section class="testamonials container">
              <h4>Testamonials</h4>


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
                                          <h4>Lorenzo Andersson</h4>
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


        <section class="container tools">
          <h4>The tools that i use daily in my development environment</h4>

          <div class="row">

            <div class="container col-lg-10 col-lg-offset-2">
                <div class="sass icons">
                    <div class="col-lg-2"><img alt="sass" src="./assets/img/sass.png">
                    </div>
                </div>


                <div class="pug icons">
                    <div class="col-lg-2"><img alt="pug/jade" src="./assets/img/pug.png">
                    </div>
                </div>


                <div class="jquery icons">
                    <div class="col-lg-2"><img alt="jquery" src="./assets/img/jquery.png">
                    </div>
                </div>


                <div class="javascript icons">
                    <div class="col-lg-2"><img alt="javascript" src="./assets/img/js.png">
                    </div>
                </div>

                <div class="github icons">
                    <div class="col-lg-2"><img alt="javascript" src="./assets/img/github3.png">
                    </div>
                </div>
            </div>
          </div>
        </section>

        <div id="Services">
          <section class="container services">
              <div class="services-text">
                  <h4>My Services</h4>


                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>


              <div class="container col-lg-12 seo">
                  <div class="row">
                      <div class="col-md-6 icon">
                          <p>IMG</p>
                      </div>


                      <div class="col-md-6 text">
                          <p>Text</p>
                      </div>
                  </div>
              </div>


              <div class="container col-lg-12 responsive">
                  <div class="row">
                      <div class="col-md-6 text">
                          <p>Text</p>
                      </div>


                      <div class="col-md-6 icon">
                          <p>IMG</p>
                      </div>
                  </div>
              </div>


              <div class="container col-lg-12 code">
                  <div class="row">
                      <div class="col-md-6 icon">
                          <p>IMG</p>
                      </div>


                      <div class="col-md-6 text">
                          <p>Text</p>
                      </div>
                  </div>
              </div>


              <div class="container col-lg-12 design">
                  <div class="row">
                      <div class="col-md-6 text">
                          <p>Text</p>
                      </div>


                      <div class="col-md-6 icon">
                          <p>IMG</p>
                      </div>
                  </div>
              </div>
          </section>

        </div>

        <div id="Contact">
          <section class="container contact">
              <div class="contact-text">
                  <h4>Hör av dig</h4>


                  <p>I’m are here to help You. Want to learn more about my services? Or you got an awesome idea, dont hesitate to share it with me. I'll sure make it come true.</p>
              <div class="line"></div>
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
                                              <input type="text" required="" placeholder="What is your Name" id="name" class="form-control">
                                          </div>
                                      </div>

                              <div class="form">
                                  <div class="row">
                                      <div class="form-group">
                                          <input type="email" required="" placeholder="What is your Email" id="email" class="form-control">
                                      </div>
                                  </div>

                                  <div class="form">
                                      <div class="row">
                                          <div class="form-group">
                                              <textarea placeholder="Whats on your mind?" required="" id="message" type="text" class="form-control" rows="7"></textarea>
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
          </section>

        </div>
              <section class="container links">
      		<div class="container col-lg-12">
      			<div class="row col-xs-12">
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
              <div class="col-lg-2 col-md-2 col-xs-2">
                <a href="#Home">Hem</a>
              </div>
                <div class="col-lg-2 col-md-2 col-xs-2">
                  <a href="#About">Om mig</a>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-2">
                  <a href="#Work">Arbete</a>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-3">
                  <a href="#Testamonials">Referenser</a>
                </div>
                <div class="col-lg-2 col-md-3 col-xs-3">
                  <a href="#Services">Services</a>
                </div>
              </strong>
          </div>
          <hr class="row">
          <div class="row col-lg-12 copyright">
            <strong>© 2017 – <a href="http://webbkon.se">Lars Jönsson</a></strong>
          </div>
        </section>

  </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
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
