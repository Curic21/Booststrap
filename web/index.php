<!DOCTYPE html>
<!-- saved from url=(0058)http://twitter.github.com/bootstrap/examples/carousel.html -->
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>| ANIMEB | Índice | Página web de Peliculas de Animación de Walt Disney Pictures y Pixar </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
        <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
        <style type="text/css">

            /* GLOBAL STYLES
            -------------------------------------------------- */
            /* Padding below the footer and lighter body text */

            body {
                padding-bottom: 40px;
                /*color: #5a5a5a;*/
                background-color: #28619d;

            }



            /* CUSTOMIZE THE NAVBAR
            -------------------------------------------------- */

            /* Special class on .container surrounding .navbar, used for positioning it into place. */
            .navbar-wrapper {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                z-index: 10;
                margin-top: 20px;
                margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
            }
            .navbar-wrapper .navbar {

            }

            /* Remove border and change up box shadow for more contrast */
            .navbar .navbar-inner {
                border: 0;
                -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
                -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
                box-shadow: 0 2px 10px rgba(0,0,0,.25);
            }

            /* Downsize the brand/project name a bit */
            .navbar .brand {
                padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
                font-size: 16px;
                font-weight: bold;
                text-shadow: 0 -1px 0 rgba(0,0,0,.5);
            }

            /* Navbar links: increase padding for taller navbar */
            .navbar .nav > li > a {
                padding: 15px 20px;
            }

            /* Offset the responsive button for proper vertical alignment */
            .navbar .btn-navbar {
                margin-top: 10px;
            }



            /* CUSTOMIZE THE CAROUSEL
            -------------------------------------------------- */

            /* Carousel base class */
            .carousel {
                margin-bottom: 60px;
                text-shadow: 0 1px 1px rgba(0,0,0,.4);
                -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.25);
                -moz-box-shadow: 0 5px 10px rgba(0,0,0,.25);
                box-shadow: 0 5px 10px rgba(0,0,0,.25); 
            }

            .carousel .container {
                position: relative;
                z-index: 9;
            }

            .carousel-control {
                height: 80px;
                margin-top: 0;
                font-size: 120px;
                text-shadow: 0 1px 1px rgba(0,0,0,.4);
                background-color: transparent;
                border: 0px;
                z-index: 10;
            }

            .carousel .item {
                height: 500px;
            }
            .carousel img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: 500px;
            }

            .carousel-caption {
                background-color: transparent;
                position: static;
                max-width: 550px;
                padding: 0 20px;
                margin-top: 200px;
            }
            .carousel-caption h1,
            .carousel-caption .lead {
                margin: 0;
                line-height: 1.25;
                color: #fff;
                text-shadow: 0 1px 1px rgba(0,0,0,.4);
            }
            .carousel-caption .btn {
                margin-top: 10px;
            }



            /* MARKETING CONTENT
            -------------------------------------------------- */

            /* Center align the text within the three columns below the carousel */
            .marketing .span4 {
                text-align: center;
                background-color: #3473b7;
                text-shadow: 0 1px 1px rgba(0,0,0,.4);
                -webkit-box-shadow: 0 3px 10px rgba(0,0,0,.25);
                -moz-box-shadow: 0 3px 10px rgba(0,0,0,.25);
                box-shadow: 0 3px 10px rgba(0,0,0,.25);       
                color: #daf7ff;
            }
            .marketing h2 {
                font-weight: normal;
            }
            .marketing .span4 p {
                margin-left: 10px;
                margin-right: 10px;
            }


            /* Featurettes
            ------------------------- */

            .featurette-divider {
                margin: 80px 0; /* Space out the Bootstrap <hr> more */
                background-color: #04c;
            }
            .featurette {
                padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
                overflow: hidden; /* Vertically center images part 2: clear their floats. */
            }
            .featurette-image {
                margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
            }

            /* Give some space on the sides of the floated elements so text doesn't run right into it. */
            .featurette-image.pull-left {
                margin-right: 40px;
            }
            .featurette-image.pull-right {
                margin-left: 40px;
            }

            /* Thin out the marketing headings */
            .featurette-heading {
                font-size: 50px;
                font-weight: 300;
                line-height: 1;
                letter-spacing: -1px;
                color: #fff;
                text-shadow: 0 10px 20px rgba(0,0,0,.4);

            }



            /* RESPONSIVE CSS
            -------------------------------------------------- */

            @media (max-width: 979px) {

                .container.navbar-wrapper {
                    margin-bottom: 0;
                    width: auto;
                }
                .navbar-inner {
                    border-radius: 0;
                    margin: -20px 0;
                }

                .carousel .item {
                    height: 500px;
                }
                .carousel img {
                    width: auto;
                    height: 500px;
                }

                .featurette {
                    height: auto;
                    padding: 0;
                }
                .featurette-image.pull-left,
                .featurette-image.pull-right {
                    display: block;
                    float: none;
                    max-width: 40%;
                    margin: 0 auto 20px;
                }
            }


            @media (max-width: 767px) {

                .navbar-inner {
                    margin: -20px;
                }

                .carousel {
                    margin-left: -20px;
                    margin-right: -20px;
                }
                .carousel .container {

                }
                .carousel .item {
                    height: 300px;
                }
                .carousel img {
                    height: 300px;
                }
                .carousel-caption {
                    width: 65%;
                    padding: 0 70px;
                    margin-top: 100px;

                }
                .carousel-caption h1 {
                    font-size: 30px;
                }
                .carousel-caption .lead,
                .carousel-caption .btn {
                    font-size: 18px;

                }

                .marketing .span4 + .span4 {
                    margin-top: 40px;
                }

                .featurette-heading {
                    font-size: 30px;
                }
                .featurette .lead {
                    font-size: 18px;
                    line-height: 1.5;
                }

                footer {
                    margin-top: 100px;
                    text-shadow: 0 5px 5px rgba(0,0,0,.4); 
                }

                /* LOGIN
             -------------------------------------------------- */

                .form-container {
                    border: 1px solid #f2e3d2;
                    background: #c9b7a2;
                    background: -webkit-gradient(linear, left top, left bottom, from(#f2e3d2), to(#c9b7a2));
                    background: -webkit-linear-gradient(top, #f2e3d2, #c9b7a2);
                    background: -moz-linear-gradient(top, #f2e3d2, #c9b7a2);
                    background: -ms-linear-gradient(top, #f2e3d2, #c9b7a2);
                    background: -o-linear-gradient(top, #f2e3d2, #c9b7a2);
                    background-image: -ms-linear-gradient(top, #f2e3d2 0%, #c9b7a2 100%);
                    -webkit-border-radius: 8px;
                    -moz-border-radius: 8px;
                    border-radius: 8px;
                    -webkit-box-shadow: rgba(000,000,000,0.9) 0 1px 2px, inset rgba(255,255,255,0.4) 0 0px 0;
                    -moz-box-shadow: rgba(000,000,000,0.9) 0 1px 2px, inset rgba(255,255,255,0.4) 0 0px 0;
                    box-shadow: rgba(000,000,000,0.9) 0 1px 2px, inset rgba(255,255,255,0.4) 0 0px 0;
                    font-family: 'Helvetica Neue',Helvetica,sans-serif;
                    text-decoration: none;
                    vertical-align: middle;
                    min-width:300px;
                    padding:20px;
                    width:300px;
                }
                .form-field {
                    border: 1px solid #c9b7a2;
                    background: #e4d5c3;
                    -webkit-border-radius: 4px;
                    -moz-border-radius: 4px;
                    border-radius: 4px;
                    color: #c9b7a2;
                    -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 0px 0px;
                    -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 0px 0px;
                    box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 0px 0px;
                    padding:8px;
                    margin-bottom:20px;
                    width:280px;
                }
                .form-field:focus {
                    background: #fff;
                    color: #725129;
                }
                .form-container h2 {
                    text-shadow: #fdf2e4 0 1px 0;
                    font-size:18px;
                    margin: 0 0 10px 0;
                    font-weight:bold;
                    text-align:center;
                }
                .form-title {
                    margin-bottom:10px;
                    color: #725129;
                    text-shadow: #fdf2e4 0 1px 0;
                }
                .submit-container {
                    margin:8px 0;
                    text-align:right;
                }
                .submit-button {
                    border: 1px solid #447314;
                    background: #6aa436;
                    background: -webkit-gradient(linear, left top, left bottom, from(#8dc059), to(#6aa436));
                    background: -webkit-linear-gradient(top, #8dc059, #6aa436);
                    background: -moz-linear-gradient(top, #8dc059, #6aa436);
                    background: -ms-linear-gradient(top, #8dc059, #6aa436);
                    background: -o-linear-gradient(top, #8dc059, #6aa436);
                    background-image: -ms-linear-gradient(top, #8dc059 0%, #6aa436 100%);
                    -webkit-border-radius: 4px;
                    -moz-border-radius: 4px;
                    border-radius: 4px;
                    -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
                    -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
                    box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
                    text-shadow: #addc7e 0 1px 0;
                    color: #31540c;
                    font-family: helvetica, serif;
                    padding: 8.5px 18px;
                    font-size: 14px;
                    text-decoration: none;
                    vertical-align: middle;
                }
                .submit-button:hover {
                    border: 1px solid #447314;
                    text-shadow: #31540c 0 1px 0;
                    background: #6aa436;
                    background: -webkit-gradient(linear, left top, left bottom, from(#8dc059), to(#6aa436));
                    background: -webkit-linear-gradient(top, #8dc059, #6aa436);
                    background: -moz-linear-gradient(top, #8dc059, #6aa436);
                    background: -ms-linear-gradient(top, #8dc059, #6aa436);
                    background: -o-linear-gradient(top, #8dc059, #6aa436);
                    background-image: -ms-linear-gradient(top, #8dc059 0%, #6aa436 100%);
                    color: #fff;
                }
                .submit-button:active {
                    text-shadow: #31540c 0 1px 0;
                    border: 1px solid #447314;
                    background: #8dc059;
                    background: -webkit-gradient(linear, left top, left bottom, from(#6aa436), to(#6aa436));
                    background: -webkit-linear-gradient(top, #6aa436, #8dc059);
                    background: -moz-linear-gradient(top, #6aa436, #8dc059);
                    background: -ms-linear-gradient(top, #6aa436, #8dc059);
                    background: -o-linear-gradient(top, #6aa436, #8dc059);
                    background-image: -ms-linear-gradient(top, #6aa436 0%, #8dc059 100%);
                    color: #fff;
                }
            }
        </style>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/ico/favicon.png">
        <style id="holderjs-style" type="text/css">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}</style></head>

    <body>
        <div id="modal01" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form class="form-container">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-body"></div>
                <div class="form-title"><h2>Inicia Sesión</h2></div>
                <div class="form-title">Nombre</div>
                <input class="form-field" type="text" name="firstname" /><br />
                <div class="form-title">Email</div>
                <input class="form-field" type="text" name="email" /><br />
                <div class="submit-container">
                    <input class="submit-button" type="submit" value="Submit" />
                </div>
            </form>
        </div>

        <div id="modal02" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <form class="form-horizontal">
                <fieldset>
                    <div id="legend" class="">
                        <legend class="">Formulario</legend>
                    </div><div class="popover fade right" style="top: 84.5px; left: 691px; display: block;"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title">Form Title</h3><div class="popover-content"><p>

                                    <label class="control-label">Title</label> <input class="input-large" type="text" name="title" id="text">
                                </p><hr>
                                <button class="btn btn-info">Save</button><button class="btn btn-danger">Cancel</button>
                                <p></p></div></div></div>
                    <div class="control-group">

                        <!-- Text input-->
                        <label class="control-label" for="input01">Nombre</label>
                        <div class="controls">
                            <input type="text" placeholder="Nombre" class="input-xlarge">
                            <p class="help-block"></p>
                        </div>
                    </div><div class="control-group">

                        <!-- Text input-->
                        <label class="control-label" for="input01">Apellidos</label>
                        <div class="controls">
                            <input type="text" placeholder="Apellidos" class="input-xlarge">
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <div class="control-group">

                        <!-- Select Basic -->
                        <label class="control-label">¿Cual Prefieres?</label>
                        <div class="controls">
                            <select class="input-xlarge">
                                <option>Walt Disney</option>
                                <option>Pixar</option></select>
                        </div>

                    </div>

                    <div class="control-group">
                        <label class="control-label">Prefieres...</label>
                        <div class="controls">
                            <!-- Multiple Checkboxes -->
                            <label class="checkbox">
                                <input type="checkbox" value="Animación Tradicional">
                                Animación Tradicional
                            </label>
                            <label class="checkbox">
                                <input type="checkbox" value="Animación CGI">
                                Animación CGI
                            </label>
                        </div>

                    </div>

                    <div class="control-group">
                        <label class="control-label">Día para ver una peli...</label>
                        <div class="controls">
                            <!-- Multiple Radios -->
                            <label class="radio">
                                <input type="radio" value="Entre semana" name="group" checked="checked">
                                Entre semana
                            </label>
                            <label class="radio">
                                <input type="radio" value="Sábado" name="group">
                                Sábado
                            </label>
                            <label class="radio">
                                <input type="radio" value="Domingo" name="group">
                                Domingo
                            </label>
                        </div>

                    </div>

                    <div class="control-group">
                        <label class="control-label">Veces que vas al cine al mes...</label>
                        <div class="controls">
                            <!-- Inline Radios -->
                            <label class="radio inline">
                                <input type="radio" value="1" name="Cine" checked="checked">
                                1
                            </label>
                            <label class="radio inline">
                                <input type="radio" value="2" name="Cine">
                                2
                            </label>
                            <label class="radio inline">
                                <input type="radio" value="3" name="Cine">
                                3
                            </label>
                        </div>
                    </div>



                    <div class="control-group">

                        <!-- Select Multiple -->
                        <label class="control-label">Peliculas de Disney que ves diariamente</label>
                        <div class="controls">
                            <select class="input-xlarge" multiple="multiple">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option></select>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Form Actions -->
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn">Cancel</button>
                        </div>
                    </div>

                </fieldset></form></div>


        <!-- NAVBAR
        ================================================== -->
        <div class="navbar-wrapper">
            <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
            <div class="container">

                <?php include("menu_superior.php"); ?>
            </div> <!-- /.container -->
        </div><!-- /.navbar-wrapper -->


        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="./img/disneylogo.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <p class="lead">La compañía de películas de<br /> animación más conocida del mundo.</p>
                            <a class="btn btn-large btn-primary" href="http://127.0.0.1:8080/bootstrap/disney.php">Entra</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/pixar.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            <p class="lead">Compañía de animación perteneciente a Disney <br /> especializada en la animación 3D</p>
                            <a class="btn btn-large btn-primary" href="http://127.0.0.1:8080/bootstrap/pixar.php">Entra</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/barve1.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            <p class="lead">Todo sobre la película ganadora de un Oscar a mejor Película de animación</p>
                            <a class="btn btn-large btn-primary" href="http://127.0.0.1:8080/bootstrap/pixar.php">Entra</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="./img/dreamworks.jpg" alt="">
                    <div class="container">
                        <div class="carousel-caption">
                            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            <p class="lead">Compañía de animación que en la última década <br /> se ha ganado el reconocimiento por sus grandes películas</p>
                            <a class="btn btn-large btn-primary" href="http://127.0.0.1:8080/bootstrap/dreamworks.php">Entra</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="http://twitter.github.com/bootstrap/examples/carousel.html#myCarousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="http://twitter.github.com/bootstrap/examples/carousel.html#myCarousel" data-slide="next">›</a>
        </div><!-- /.carousel -->

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="span4 img-circle">
                    <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 240px; height: 240px; " src="./img/clasics.jpg"> 
                    <p class="white"><br />Los Clásicos de Disney todos en uno.<br /> Entra aquí para conocer todo <br />sobre los maravillosos <br />clásicos Disney.</p>

                </div><!-- /.span4 -->
                <div class="span4 img-circle">
                    <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 240px; height: 240px; " src="./img/brave.jpg">
                    <p><br />Toda la información sobre <br />las mejores películas de Pixar <br />y las más conocidas.</p>

                </div><!-- /.span4 -->
                <div class="span4 img-circle">
                    <img class="img-circle" data-src="holder.js/140x140" alt="140x140" style="width: 240px; height: 240px; " src="./img/cortos.jpeg">
                    <p><br />Todos los cortos que han pasado <br />por la compañía de Pixar desde <br />el primero hasta el último.</p>

                </div><!-- /.span4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">
            <div class="featurette">
                <img class="featurette-image pull-right" src="./img/actualidad.jpg">
                <h2 class="featurette-heading">Noticias y Actualidad</h2>
                <p class="lead" style="color: #fff">Todo lo que necesitas saber sobre las últimas películas de Animación y los próximos Proyectos que vayan a salir.</p>
            </div>
            <hr class="featurette-divider">
            <div class="featurette">
                <img class="featurette-image pull-left" src="./img/disney_Interactive.jpg">
                <h2 class="featurette-heading">Videojuegos</h2>
                <p class="lead" style="color: #fff"> Todo sobre los videojuegos de la compañía Disney desde la década de los '90 hasta hoy.</p>
            </div>


            <!-- /END THE FEATURETTES -->


            <!-- FOOTER -->
            <footer>
                <br /><br /><br /><br /><br /><br />
                <p align="center"><a class="btn" href="http://127.0.0.1:8080/bootstrap/index.php">Subir »</a></p>
                <?php include("pie.php"); ?>
            </footer>

        </div><!-- /.container -->



        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="./index_files/jquery.js"></script>
        <script src="./index_files/bootstrap-transition.js"></script>
        <script src="./index_files/bootstrap-alert.js"></script>
        <script src="./index_files/bootstrap-modal.js"></script>
        <script src="./index_files/bootstrap-dropdown.js"></script>
        <script src="./index_files/bootstrap-scrollspy.js"></script>
        <script src="./index_files/bootstrap-tab.js"></script>
        <script src="./index_files/bootstrap-tooltip.js"></script>
        <script src="./index_files/bootstrap-popover.js"></script>
        <script src="./index_files/bootstrap-button.js"></script>
        <script src="./index_files/bootstrap-collapse.js"></script>
        <script src="./index_files/bootstrap-carousel.js"></script>
        <script src="./index_files/bootstrap-typeahead.js"></script>
        <script src="./index_files/holder.js"></script>
        <script>
                !function ($) {
                $(function(){
                    // carousel demo
                    $('#myCarousel').carousel()
                })
                $('#hola').click(function() {
                    $("#modal01").modal({
                        keyboard: true
                    })
                }
            )
                $('#formulario').click(function() {
                    $("#modal02").modal({
                        keyboard: true
                    })
                })
                $('#myTab a').click(function(e) {
                    e.preventDefault();
                    $(this).tab('show');
                })
            
            }(window.jQuery)
        </script>


    </body></html>