@extends('ingles.plantilla.plantilla')
@section('css_Pagina')
<link rel="stylesheet" href="{{ asset('css/producto.css') }}">
@endsection
@section('cuerpo_Pagina')
<div class="cuerpo">
    <div class="cajonGaleriaInf">
        @foreach ($productos as $producto)
        <button class="botonFlores" onclick="cambiarFloresGaleria('{{$producto->id}}')">
            <div class="cajaFloresInf1">
                <div class="cajaFloresInf">
                    <img src="{{ asset('imagenes/productos/'.$producto->foto) }}" class="img-fluid">
                </div>
                <div class="estiloRosa2">{{$producto->nombre}}</div>
            </div>
        </button>
        @endforeach
    </div>
    <div class="galeriaFlores">
        <div class="cajonGaleria">
            <div class="cajonGaleriaSup">
                <div class="cajaPrincipalFlores">
                    <div class="fotoPrincipal" id="fotoPrincipal">
                        <div class="tituloGaleriaFlores">
                            <h2>{{$producto_elegido->nombre}}</h2>
                        </div>
                        <img src="{{ asset('imagenes/productos/'.$producto_elegido->foto) }}" class="img-fluid">
                    </div>
                    <div class="infoPrincipal" style="border: 1px black solid;">
                        <div class="tablaPrincipal">
                            <table class="table table-striped">
                                <tbody id="cuerpoTabla">
                                    <tr>
                                        <th scope="row">COLOR DESCRIPTION</th>
                                        <td>{{$producto_elegido->descripcion}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">STEM LENGTH (CMS)</th>
                                        <td>{{$producto_elegido->stem}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">HEAD SIZE</th>
                                        <td>{{$producto_elegido->head}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">VASE LIFE</th>
                                        <td>{{$producto_elegido->life}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">OPENING SPEED</th>
                                        <td>{{$producto_elegido->opening}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">BLOOM SIZE</th>
                                        <td>{{$producto_elegido->bloom}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">AVAILABLE IN SOLID BOXES</th>
                                        <td>{{$producto_elegido->available}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <input id="fk_rosa" type="text" value="{{$producto_elegido->id}}" style="display: none;">
                        <div class="cajonEmpaques">
                            <div class="empaqueunico">
                                <img class="img-fluid" src="{{ asset('imagenes/sistema/empaque-sin-fondo.png') }}">
                            </div>
                            <div class="cajaEmpaque">
                                <div class="estiloRosa1" style="height: 30px;">Quater box</div>
                                <div class="volumen">Box size: 100 x 28 x 17 cm</div>
                                <div class="volumen" id="capQuarto">Stems: 5 units</div>
                            </div>
                            <div class="cajaEmpaque">
                                <div class="estiloRosa1" style="height: 30px;">Half box</div>
                                <div class="volumen">Box size: 100 x 28 x 28 cm</div>
                                <div class="volumen" id="capTabaco1">Stems: 10 units</div>
                            </div>
                            <div class="cajaEmpaque">
                                <div class="estiloRosa1" style="height: 30px;">Russian half box</div>
                                <div class="volumen">Box size: 135 x 35 x 35 cm</div>
                                <div class="volumen" id="capTabaco2">Stems: 20 units</div>
                            </div>
                        </div>
                        <div class="seleccionadorTallo" style=" display: flex; flex-direction: row; justify-content: space-around; align-items: center; padding: 5px;;border: 1 solid;">
                            <div class="tituloSub" style="width: 40%;">
                                STEM LENGTH
                            </div>
                            <select class="form-control" id="tam_tallo" onchange="cambiarCajasFlores()" style="width: 40%;">
                                <option value="40" selected="true">40 cm</option>
                                <option value="50">50 cm</option>
                                <option value="60">60 cm</option>
                                <option value="70">70 cm</option>
                                <option value="80">80 cm</option>
                                <option value="90">90 cm</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr style="width: 100%; height: 1%; background-color: #000;">
            <br>
        </div>
        <div class="cajonInteractivo">
            <div class="cajaInteractiva" id="cajonInteractivo1">
                <div class="cajaInteractivaImagen" id="cajaInteractivaImagen1"><img id="fotoInteractiva1" class="fluid" src="{{ asset('imagenes/sistema/flor-interactiva-b-n-1.png') }}"></div>
                <div class="cajaInteractivaImagen" id="cajaInteractivaImagen2"><img id="fotoInteractiva2" class="fluid" src="{{ asset('imagenes/sistema/flor-interactiva-b-n-2.png') }}"></div>
                <div class="cajaInteractivaImagen" id="cajaInteractivaImagen3"><img id="fotoInteractiva3" class="fluid" src="{{ asset('imagenes/sistema/flor-interactiva-b-n-1.png') }}"></div>
                <div class="cajaInteractivaImagen" id="cajaInteractivaImagen4"><img id="fotoInteractiva4" class="fluid" src="{{ asset('imagenes/sistema/flor-interactiva-b-n-2.png') }}"></div>
            </div>
            <div class="cajaInteractiva" id="cajonInteractivo2">
                <div class="triangulo" id="triangulo"></div>
            </div>
            <div class="cajaInteractiva" id="cajonInteractivo3">
                <div class="textoInteractivo" id="textoInteractivo">Cut stems at least 1” (2.5cm) from bottom.</div>
            </div>
        </div>
        <br>
        <hr style="width: 100%; height: 1%; background-color: #000;">
        <br>
    </div>
</div>
@endsection
@section('scriptsPagina')
<script>
    function cambiarFloresGaleria(pk_rosa) {
        var espacioFotoPrincipal = "";
            var tablaDescripcion = "";
        $.ajax({
            type:'GET',
            url:'/prodSeleccionado/'+pk_rosa,
            success:function(data){
                $.each(data,function(index,value){

                });
            }
        });
    }
</script>
<script>
    var asset_global = '{{asset("/")}}';
    $(document).ready(function() {
        $('#cajaInteractivaImagen1').hover(function() {
            $('#textoInteractivo').html('Texto numero 1');
            var antiguoLeft = parseInt($("#cajonInteractivo2").width());
            antiguoLeft = antiguoLeft / 4;
            $('#triangulo').offset({
                left: antiguoLeft
            });
            $("#fotoInteractiva1").attr("src", asset_global + "imagenes/sistema/flor-interactiva-color-1.png");
            $("#fotoInteractiva2").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-2.png");
            $("#fotoInteractiva3").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-1.png");
            $("#fotoInteractiva4").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-2.png");
        });

        $('#cajaInteractivaImagen2').hover(function() {
            $('#textoInteractivo').html('Texto numero 2');
            var antiguoLeft = parseInt($("#cajonInteractivo2").width());
            antiguoLeft = (antiguoLeft / 4) * 2;
            $('#triangulo').offset({
                left: antiguoLeft
            });
            $("#fotoInteractiva1").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-1.png");
            $("#fotoInteractiva2").attr("src", asset_global + "imagenes/sistema/flor-interactiva-color-2.png");
            $("#fotoInteractiva3").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-1.png");
            $("#fotoInteractiva4").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-2.png");
        });

        $('#cajaInteractivaImagen3').hover(function() {
            $('#textoInteractivo').html('Texto numero 3');
            var antiguoLeft = parseInt($("#cajonInteractivo2").width());
            antiguoLeft = (antiguoLeft / 4) * 3;
            $('#triangulo').offset({
                left: antiguoLeft
            });
            $("#fotoInteractiva1").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-1.png");
            $("#fotoInteractiva2").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-2.png");
            $("#fotoInteractiva3").attr("src", asset_global + "imagenes/sistema/flor-interactiva-color-1.png");
            $("#fotoInteractiva4").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-2.png");
        });

        $('#cajaInteractivaImagen4').hover(function() {
            $('#textoInteractivo').html('Texto numero 4');
            var antiguoLeft = parseInt($("#cajonInteractivo2").width());
            antiguoLeft = (antiguoLeft / 4) * 4;
            $('#triangulo').offset({
                left: antiguoLeft
            });
            $("#fotoInteractiva1").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-1.png");
            $("#fotoInteractiva2").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-2.png");
            $("#fotoInteractiva3").attr("src", asset_global + "imagenes/sistema/flor-interactiva-b-n-1.png");
            $("#fotoInteractiva4").attr("src", asset_global + "imagenes/sistema/flor-interactiva-color-2.png");
        });
    });
</script>
@endsection
