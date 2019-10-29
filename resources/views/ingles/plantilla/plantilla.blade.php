<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Icono de la aplicacion -->
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('imagenes/sistema/iconoPrincipal.ico') }}" sizes="64x32">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Theme Generales -->
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <!-- Css de la pagina -->
    @yield ('css_Pagina')
    <!-- ----------------------------------------------- -->
    <title>TRINITY FARMS S.A.</title>
</head>

<body>
    <div class="barraMenu">
        <div class="logoPrincipal">
            <div class="imagenMenu">
                <img src="{{ asset('imagenes/sistema/logoPrincipal.png') }}" class="img-fluid" width="100%" height="auto">
            </div>
            <div class="tituloMenu">
                <h1>TRINITY FARMS</h1>
                <img class="img-fluid" src="{{ asset('imagenes/sistema/asocolflores.png') }}" width="100%" height="auto">
            </div>
        </div>
        <div class="menuPrincipal">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{route("index_En")}}">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("producto_En")}}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_Blank">Brochure</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img class="img-fluid" src="{{ asset('imagenes/sistema/cambio-idioma.jpg') }}" width="50px" height="auto"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="barraRedes">
            <div class="row">
                <div class="col-md-11"></div>
                <div class="col-md-1">
                    <div class="redes" id="redes">
                        <a href="#" target="_blank" style="text-decoration: none;color: #80FD58;text-shadow: 1px 1px #000000;">
                            <img src="{{ asset('imagenes/sistema/facebook-icon.png') }}" height="40" width="40" style="margin-bottom: 15px;">
                        </a>
                        <a href="#" target=”_blank” style="text-decoration: none;color: #80FD58;text-shadow: 1px 1px #000000;">
                            <img src="{{ asset('imagenes/sistema/instagram-icon.png') }}" height="40" width="40">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------------------------------------------- -->
    <!-- Cuerpo de la pagina -->
    @yield ('cuerpo_Pagina')
    <!-- ----------------------------------------------- -->

    <div class="acordeonPaginaPrincipal">
            <div class="accordion">
                <ul>
                    <li>
                        <div>
                            <a href="paginaFlores.php?clase=Freedom" class="sliderLink">
                                <h2>Freedom</h2>
                                <p><br><br><br>
                                </p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="paginaFlores.php?clase=Oranges" class="sliderLink">
                                <h2>Oranges</h2>
                                <p><br><br></p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="paginaFlores.php?clase=Whites" class="sliderLink">
                                <h2>Whites</h2>
                                <p><br><br></p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="paginaFlores.php?clase=Yellows" class="sliderLink">
                                <h2>Yellows</h2>
                                <p><br><br></p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="paginaFlores.php?clase=Pinks" class="sliderLink">
                                <h2>Pinks</h2>
                                <p><br><br></p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="paginaFlores.php?clase=Purples" class="sliderLink">
                                <h2>Purples</h2>
                                <p><br><br></p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="paginaFlores.php?clase=Novelties" class="sliderLink">
                                <h2>Novelties</h2>
                                <p><br><br></p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <a href="paginaFlores.php?clase=Bicolor" class="sliderLink">
                                <h2>Bicolor</h2>
                                <p><br><br></p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    <footer>
        <div class="cubierta1"></div>
        <div class="cubierta2">
            <div class="logo-footer">
                <img class="img-fluid" src="{{ asset('imagenes/sistema/trinity-composicion.png') }}">
            </div>
            <div class="infoFooter">
                <p>Cultivo Vereda El OratorioHacienda</p>
                <p>La Luisiana Predio Trinidad</p>
                <p>Nemoc&oacute;n, Colombia</p>
                <p>M&oacute;vil: (57) 304 0634</p>
                <p>E-mail: sales1@trinityfarms.com.co</p>
            </div>
        </div>
        <div class="cubierta3"></div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
