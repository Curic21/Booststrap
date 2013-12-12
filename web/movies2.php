<!DOCTYPE html>
<!-- saved from url=(0055)http://twitter.github.com/bootstrap/examples/fluid.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>| ANIMEB | Disney | Página web de Peliculas de Animación de Walt Disney Pictures y Pixar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
        <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
                background-color: #92bec6;
            }
            .sidebar-nav {
                padding: 9px 0;
            }

            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                }
            }

            .primer {
                background: url(./img/pixar2.jpg); 
                margin-left: 20px;
            }
            .sombra {
                -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.25);
                -moz-box-shadow: 0 5px 10px rgba(0,0,0,.25);
                box-shadow: 0 5px 10px rgba(0,0,0,.25); 
            }

            .size{
                width: 500px;
                height: 200px;
            }
            .btn{
                margin-top: 10px;
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
    </head>

    <body>
        <?php include("menu_superior.php"); ?>
        <?php include("menu_lateral.php"); ?>
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
        <div class="container-fluid" align="center">
            <div class="row-fluid">
                <div class="span9">
                    <div class="hero-unit primer sombra">
                        <h1>Películas</h1>
                    </div>
                    <div class="alert alert-success">  
                        <a class="close" data-dismiss="alert">×</a>  
                        <strong>Success!</strong> ¡Has logrado llegar hasta aquí!  
                    </div> 


                    <ul class="nav nav-tabs" id="myTab" align="center">
                        <li ><a href="#nemo">Buscando a Nemo</a></li>
                        <li class="active"><a href="#up">UP!</a></li>
                        <li><a href="#toystory">Toy Story</a></li>
                    </ul>
                    <div class="tab-content" >
                        <div class="tab-pane active" id="toystory" >
                            <div class="span9" align="center" class="img-rounded">
                             <a align="center" href='./img/toystory.jpg'><img class="featurette-image pull-left sombra" src="./img/toystory.jpg" ></a>
                                    <p><a class="btn">Toy Story</a></p> 
                                </div>
                            </div>
                        <div class="tab-pane active" id="up" >
                            <div class="span9" align="up" class="img-rounded">
                             <a align="center" href='./img/up.jpg'><img class="featurette-image pull-left sombra" src="./img/up.jpg" ></a>
                                    <p><a class="btn">UP!</a></p> 
                                </div>
                            </div>
                            <div class="tab-pane active" id="nemo" >
                            <div class="span9" align="center" class="img-rounded">
                             <a align="center" href='./img/nemo.jpg'><img class="featurette-image pull-left sombra" src="./img/nemo.jpg" ></a>
                                    <p><a class="btn">Buscando a Nemo</a></p> 
                                </div>
                            </div>
                                           
                        </div> 
                    </div><!--/span-->         
            </div><!--/span-->    
        </div><!--/row-->


        <hr>

        <footer>
            <p>© Company 2013</p>
        </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./pagina2_files/jquery.js"></script>
    <script src="./pagina2_files/bootstrap-transition.js"></script>
    <script src="./pagina2_files/bootstrap-alert.js"></script>
    <script src="./pagina2_files/bootstrap-modal.js"></script>
    <script src="./pagina2_files/bootstrap-dropdown.js"></script>
    <script src="./pagina2_files/bootstrap-scrollspy.js"></script>
    <script src="./pagina2_files/bootstrap-tab.js"></script>
    <script src="./pagina2_files/bootstrap-tooltip.js"></script>
    <script src="./pagina2_files/bootstrap-popover.js"></script>
    <script src="./pagina2_files/bootstrap-button.js"></script>
    <script src="./pagina2_files/bootstrap-collapse.js"></script>
    <script src="./pagina2_files/bootstrap-carousel.js"></script>
    <script src="./pagina2_files/bootstrap-typeahead.js"></script>

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