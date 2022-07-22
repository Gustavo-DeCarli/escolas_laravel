<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EscolaController extends Controller{
    function index(){
        $cursos = DB::table('cursos')->get();
        return view('escolas.cursos.cursoindex', [
            'cursos' => $cursos
        ]);
    }
    function createcurso(){
        return view('escolas.cursos.cursocreate');
    }
    function storecurso(Request $request){
        $data = $request->all();
        unset($data['_token']);
        DB::table('cursos')->insert($data);
        return redirect('/escolas');
    }
    function editcurso($id){
        $curso = DB::table('cursos')->find($id);
        return view('escolas.cursos.cursoedit', ['curso' => $curso]);
    }
    function updatecurso(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $id = array_shift($data);
        DB::table('cursos')
            ->where('id', $id)
            ->update($data);
        return redirect('/escolas');
    }
    function showcurso($id){
        $curso = DB::table('cursos')->select()->find($id);
        return view('escolas.cursos.cursoshow', ['curso' => $curso]);
    }
    function destroycurso($id)
    {
        DB::table('cursos')->where('id', $id)->delete();
        return redirect('/escolas');
    }
}
?>