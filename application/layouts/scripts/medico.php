<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pros Salud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
 
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
        <?php $auth = Zend_Auth::getInstance();?>
        <a class="brand" href="/index">Pros Salud</a>
          <div class="btn-group pull-right">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> <?php echo $auth->getIdentity() ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
				<li><a href="/dashboard">Cuadro de mando</a></li>
              <li class="divider"></li>
				 <li><a href="/auth/logout">Logout</a></li>
            </ul>
          </div>
        <div class="nav-collapse">
            <ul class="nav">
			 <?php
 				if ( $auth->hasIdentity()) :
				?>
 				<li><a href="/dashboard">Cuadro de mando</a></li>
				 <li><a href="/auth/logout">Logout</a></li>
				 
				<?php endif;?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
 				<li><a href="/analysis/index/page/1"><i class="icon-file"></i>Listado de Analisis</a></li>
				<li class="divider"></li>
				<li><a href="/analysis/add/"><i class="icon-ok-sign"></i>Solicitud de Analisis</a></li>
			<!--	<li class="divider"></li>
			<li><a href="#"><i class="icon-folder-open"></i> Listado Empresas</a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="icon-user"></i> Listado de Usuarios</a></li>  
 				<li><a href="/contact/index/page/1"><i class="icon-book icon-dark"></i> Lista de Cotactos</a></li>
				<li class="divider"></li>
				<li><a href="/especialidades/index/1"><i class="icon-align-justify"></i> Catalogo de Especialidades</a></li>
				<li class="divider"></li>
				<li><a href="/tests/index/page/1"><i class="icon-list-alt"></i> Catalogo de Estudios</a></li>
				<li class="divider"></li>
				<li><a href="/items/index/page/1"><i class="icon-th-list"></i> Catalogo de Pruebas</a></li>
				<li class="divider"></li>
				<li><a href="/references/index/1"><i class="icon-asterisk"></i> Catalogo de referencias</a></li>
 			<li><a href="#"><i class="icon-flag"></i> Metodos de medicion</a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="icon-tint"></i> Tipos de pruebas</a></li> -->
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
  		<?php echo $this->layout()->content ?>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	 <script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/custom.js"></script>
	<script src="/js/bootstrap-transition.js"></script>
	<script src="/js/bootstrap-alert.js"></script>
	<script src="/js/bootstrap-modal.js"></script>
	<script src="/js/bootstrap-dropdown.js"></script>
	<script src="/js/bootstrap-scrollspy.js"></script>
	<script src="/js/bootstrap-tab.js"></script>
	<script src="/js/bootstrap-tooltip.js"></script>
	<script src="/js/bootstrap-popover.js"></script>
	<script src="/js/bootstrap-button.js"></script>
	<script src="/js/bootstrap-collapse.js"></script>
	<script src="/js/bootstrap-carousel.js"></script>
	<script src="/js/bootstrap-typeahead.js"></script>

  </body>
</html>
