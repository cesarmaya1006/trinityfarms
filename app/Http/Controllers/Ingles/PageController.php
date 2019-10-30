<?php

namespace App\Http\Controllers\Ingles;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Producto;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cantNoticias = Noticia::count();
        $noticias = Noticia::where('fecha','>',date('Y-m-d', strtotime('-1 day')))->get();
        $cantSlider = Slider::count();
        $fotosSlider = Slider::all();
        return view('ingles/index',compact('fotosSlider','cantSlider','cantNoticias','noticias'));
    }
    public function producto($variedad=false)
    {
        if($variedad!=NULL){
            $productos = Producto::where('variedad',$variedad)->get();
            $producto_elegido = Producto::where('variedad',$variedad)->first();
        }else{
            $productos = Producto::where('variedad','Freedom')->get();
            $producto_elegido = Producto::where('variedad','Freedom')->first();
        }
        return view('ingles/producto',compact('productos','producto_elegido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function prodSeleccionado($id)
    {
        return Producto::find($id);
    }
}
