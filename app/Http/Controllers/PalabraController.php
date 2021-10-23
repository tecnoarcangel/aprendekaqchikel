<?php

namespace App\Http\Controllers;

use App\Models\Palabra;
use App\Models\palabracateogria;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PalabraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
            $this->middleware('auth')->except('index','indexFamilia','indexSabores','indexColores','indexPartescasa',
        'indexPartescuerpo','indexUtilesescolares','indexNumeros','indexAnimales','indexmesano','indextrasporte','indexprofesion',
    'indexfrutas','indexverduras','indextiempo','indexEstadotiempo','indexbuscar');

    }

    public function index()
    {
       
        
         
   
              
       
    }


    
    public function indexbuscar(Request $request)
    {
       
        $texto=trim($request->get('texto'));
        $palabra=DB::Table('palabra')
        ->select('id','imagen','palabraes','palabramaya','audio')
        ->where('palabraes','LIKE','%'.$texto.'%')
        ->get();
        return view('buscar.index', compact('palabra','texto'));
        
         
   
              
       
    }
    public function indexFamilia()
    {
       
        
        $familia = palabra::where("categoria_id","=",1)->paginate();
       
        return view('palabra.index',compact('familia'));
        
        
         
   
        
        
       
    }

    public function indexSabores()
    {
       
        $sabores = palabra::where("categoria_id","=",2)->paginate();
        
        
        return view('sabores.index',compact('sabores'));
        
     
       
    }

    public function indexColores()
    {
       
        $colores = palabra::where("categoria_id","=",3)->paginate();
        
        
        return view('colores.index',compact('colores'));
        
     
       
    }
    public function indexPartescasa()
    {
       
        $partescasa = palabra::where("categoria_id","=",4)->paginate();
        
        
        return view('partescasa.index',compact('partescasa'));
        
     
       
    }
    public function indexPartescuerpo()
    {
       
        $partescuerpo = palabra::where("categoria_id","=",5)->paginate();
        
        
        return view('partesdelcuerpo.index',compact('partescuerpo'));
        
     
       
    }
    public function indexUtilesescolares()
    {
       
        $utilesescolares = palabra::where("categoria_id","=",6)->paginate();
        
        
        return view('utilesescolares.index',compact('utilesescolares'));
        
     
       
    }
    public function indexNumeros()
    {
       
        $numeros = palabra::where("categoria_id","=",7)->paginate();
        
        
        return view('numeros.index',compact('numeros'));
                
    }
    public function indexAnimales()
    {
       
        $animales = palabra::where("categoria_id","=",8)->paginate();
        
        
        return view('animales.index',compact('animales'));
                
    }

    public function indexmesano()
    {
       
        $mesano = palabra::where("categoria_id","=",9)->paginate();
        
        
        return view('mesano.index',compact('mesano'));
                
    }
    public function indextrasporte()
    {
       
        $trasporte = palabra::where("categoria_id","=",10)->paginate();
        
        
        return view('trasportes.index',compact('trasporte'));
                
    }

    public function indexprofesion()
    {
       
        $profesion = palabra::where("categoria_id","=",11)->paginate();
        
        
        return view('profecionesyoficios.index',compact('profesion'));
                
    }
    public function indexfrutas()
    {
       
        $frutas = palabra::where("categoria_id","=",12)->paginate();
        
        
        return view('frutas.index',compact('frutas'));
                
    }

    public function indexverduras()
    {
       
        $verduras = palabra::where("categoria_id","=",13)->paginate();
        
        
        return view('verduras.index',compact('verduras'));
                
    }

    public function indextiempo()
    {
       
        $tiempo = palabra::where("categoria_id","=",14)->paginate();
        
        
        return view('tiempo.index',compact('tiempo'));
                
    }

    public function indexEstadotiempo()
    {
       
        $estadotiempo = palabra::where("categoria_id","=",14)->paginate();
        
        
        return view('estadodeltiempo.index',compact('estadotiempo'));
                
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {  $palabra = new palabra();
        $categorias=PalabraCateogria::pluck('Nombrecategoria','idcategoria');
        return view('palabra.create',compact('palabra','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = request()->validate([
            'imagen' => 'required',
            'palabraes' => 'required',
            'palabramaya' => 'required',
            'audio' => 'required',
        ]);

        $extension = $request->imagen->extension();
                $filename = sha1(time().time()).".$extension";
                $request->imagen->move(public_path('storage/uploads/images'),$filename);
                $imagen = ['imagen' => $filename];

                $extension2 = $request->audio->extension();
                $filename2 = sha1(time().time()).".$extension2";
                $request->audio->move(public_path('storage/uploads/audios'),$filename2);
                $audio = ['audio' => $filename2];

                $palabra = Palabra::create($request->except('_method','_token','imagen','audio')+$audio+$imagen);

        // familia::create($fields);

        return redirect('/palabra')->with('success', '!Traducion Guardada existosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //no lo voy usar porque no quiero link de base de datos.....
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
        
        $palabra = palabra::whereid($id)->firstOrFail();
        $categorias=PalabraCateogria::pluck('Nombrecategoria','idcategoria');
        return view('palabra.edit', compact('palabra','categorias'));
        
      //  return $id;
        //return view('familia.edit', [
         ///   'familia' => familia::findOrFail($id)
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Palabra $palabra)

    {
         $request->validate([
            'imagen' => 'required',
            'palabraes' => 'required',
            'palabramaya' => 'required',
            'audio' => 'required',
          
        ]);

        $data = $request->except('id','_method','_token','imagen','audio');

        $extension = $request->imagen->extension();
        $filename = sha1(time().time()).".$extension";
        $request->imagen->move(public_path('storage/uploads/images'),$filename);

        $extension2 = $request->audio->extension();
                $filename2 = sha1(time().time()).".$extension2";
                $request->audio->move(public_path('storage/uploads/audios'),$filename2);

        $palabra->update($data + ['imagen' => $filename]+['audio' => $filename2]);
        
    return  redirect('/palabra')->with('success', 'Registro actualizado');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $palabra =Palabra::find($id);
        $palabra->delete();

        return  redirect('/palabra')->with('success', 'Registro Elminado');
    }
}
