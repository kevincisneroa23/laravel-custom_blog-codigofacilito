<nav class="navbar navbar-default" id="main_nav">
<div class="container-fluid"> 
<div class="row">

    <!-- LOGO -->
    <div class="col-md-2" id="logo_nav">
      <a href="{{ route('front.index') }}">
        <img src="{{ asset('images/logo_custom_blog.png')}}" alt="Responsive image">
      </a>
    </div><!-- /#logo_nav -->

    <!-- BUSCADOR -->
    <div class="col-md-3" id="search_nav">
      <form >
        <div class="input-group">
          <span class="input-group-addon" id="search_nav_btn">
            <span class="glyphicon  glyphicon-search"></span>
          </span>
  
          <input type="text"  placeholder="Buscar..." id="search_nav_input" aria-describedby="search_nav_btn">
        </div>
      </form>
    </div><!-- /#search_nav -->

    <!-- CONTENIDO -->
    <div class="col-md-7" id="content_nav">
      <!--OPCIONES-->
      <ul class="nav navbar-nav">
        <li><a href="#"><i class="fa fa-user"></i> Usuarios</a></li>
        <li><a href="#"><i class="fa fa-list"></i> Categorias</a></li>
        <li><a href="#"><i class="fa fa-tag"></i> Tags</a></li>
        <li><a href="#"><i class="fa fa-files-o"></i> Articulos</a></li>
        <li><a href="#"><i class="fa fa-photo"></i> Imagenes</a></li>
      </ul>
      <!--USUARIO-->
      <ul  class="nav navbar-nav" id="content_nav_user">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Kevin Cisnero <span class="caret"></span></a>  
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-pencil"></i> Editar</a></li>
            <li><a href="#"><i class="fa fa-power-off"></i> Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /#content_nav -->

</div><!-- /.row -->
</div><!-- /.container-fluid -->
</nav><!-- /#main_nav -->