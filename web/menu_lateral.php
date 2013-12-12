
<style type="text/css">
    .sombra {
       -webkit-box-shadow: 0 10px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 10px 10px rgba(0,0,0,.25);
              box-shadow: 0 10px 10px rgba(0,0,0,.25); 
      }
    
</style>
<div class="span3">
          <div class="well sidebar-nav sombra">
            <ul class="nav nav-list">
                <li class="nav-header"><h4>Walt Disney</h4></li>
                 <li <?php if (basename($_SERVER[PHP_SELF]) == "disney.php") echo 'class="active"'; ?>><a href="http://127.0.0.1:8080/bootstrap/disney.php">Noticias</a></li><li class="nav-header"></li>
               <li <?php if (basename($_SERVER[PHP_SELF]) == "clasicos.php") echo 'class="active"'; ?>><a href="http://127.0.0.1:8080/bootstrap/clasicos.php">Clásicos</a></li><li class="nav-header"></li>
               <li <?php if (basename($_SERVER[PHP_SELF]) == "sec.php") echo 'class="active"'; ?>><a href="http://127.0.0.1:8080/bootstrap/sec.php">Precuelas y Secuelas</a></li><li class="nav-header"></li>
              <li class="nav-header"><h4>Pixar</h4></li>
              <li <?php if (basename($_SERVER[PHP_SELF]) == "pixar.php") echo 'class="active"'; ?>><a href="http://127.0.0.1:8080/bootstrap/pixar.php">Noticias</a></li><li class="nav-header"></li>
              <li <?php if (basename($_SERVER[PHP_SELF]) == "movies.php") echo 'class="active"'; ?>><a href="http://127.0.0.1:8080/bootstrap/movies.php">Películas</a></li><li class="nav-header"></li>
              <li <?php if (basename($_SERVER[PHP_SELF]) == "corto1.php") echo 'class="active"'; ?>><a href="http://127.0.0.1:8080/bootstrap/corto1.php">Cortometrajes</a></li><li class="nav-header"></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
</div>



