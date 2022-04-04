namespace App\Http\Controllers;

use Iluminate\Http\Request;
use App\Models\Notas;

Clase NotasController extends Controllers
{
    public function index() {
        $notas = Notas::all();  //DB::table('notas') ->get();

        return view('notas', ['notas' => $notas]);
    }

    public function agregar() {
        return view('agregar');
    }

    public function editar() {
        return view('editar');
    }

    public function crear(Request $request){
        Notas::create([
            'titulo' => $request->input('title'),
            'contenido' =>$request->input('content'),
        ]);

        return redirect('/notas');
    }

    public function actualizar(){
        return 'Aqui actualizaremos notas';
    }


    public function editarnotas($id){
        $notas = Notas::find($id);  //DB::table('notas')->where('id', $id)->first();

        return view('editar', ['notas' => $notas]);
        //return 'Aqui se van a editar las notas: '.$id;
    }
}