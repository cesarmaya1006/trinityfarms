@extends('ingles.plantilla.plantilla')
@section('css_Pagina')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('cuerpo_Pagina')
<div class="cuerpo">
    @if ($cantSlider>0)
    <div class="sliderPrincipal">
        <?php $contador = 0; ?>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($fotosSlider as $fotoSlider)
                <?php $contador = $contador + 1; ?>
                    @if ($contador<2)
                        <div class="carousel-item active">
                            <img src="{{ asset('imagenes/slider/'.$fotoSlider->foto) }}" class="d-block w-100">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/slider/'.$fotoSlider->foto) }}" class="d-block w-100">
                        </div>
                    @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <hr>
    <br>
    @endif
    <div class="textoPaginaPrincipal">
        <p align="justify">TRINITY FARMS is a 10 hectare rose farm founded in 1997, which grows and distributes top quality roses to a select
            group of customers in the US, Canada, Europe and Russia. TRINITY is designed to produce roses all year round rather than only in
            peak times for the yearly holidays. Despite this, we remain aware of the need to provide our customers with flowers for holiday
            seasons and we are able to increase a certain amount of our production without discrediting our goal of quality. We strive to
            maintain a select choice of varieties to ensure customer satisfaction.</p>
    </div>
    <br>
    <hr>
    <br>
    <!-- slider noticias1 -->
    @if ($cantNoticias>0)
    <?php $contador = 0; ?>
    <div class="noticias" id="noticias1">
        <div class="tituloNoticiasHome">
            <h3 class="section-title" style="text-align: center; Color : #0B9746;">NEWS</h3>
        </div>
        <div class="carruselNoticias">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($noticias as $noticia)
                    <?php $contador = $contador + 1; ?>
                    @if ($contador<2)
                        <div class="carousel-item active">
                            <img src="{{ asset('imagenes/noticias/'.$noticia->foto) }}" class="d-block w-100">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img src="{{ asset('imagenes/noticias/'.$noticia->foto) }}" class="d-block w-100">
                        </div>
                    @endif
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    @endif
</div>
@endsection
