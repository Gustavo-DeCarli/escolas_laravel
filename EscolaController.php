<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EscolaController extends Controller{
    function index(){
        $cursos = DB::table('cursos')->get();
        $formularios = DB::table('form')->get();
        $turmas = DB::table('turmas')->get();
        return view('escolas.index', [
            'cursos' => $cursos,
            'formularios' => $formularios,
            'turmas' => $turmas
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




    // formulario
    function createformulario(){
        return view('escolas.formularios.formularioscreate');
    }
    function storeformulario(Request $request){
        $data = $request->all();
        unset($data['_token']);
        DB::table('form')->insert($data);
        return redirect('/escolas');
    }
    function editformulario($id){
        $formulario = DB::table('form')->find($id);
        return view('escolas.formularios.formulariosedit', ['formulario' => $formulario]);
    }
    function updateformulario(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $id = array_shift($data);
        DB::table('form')
            ->where('id', $id)
            ->update($data);
        return redirect('/escolas');
    }
    function showformulario($id){
        $formulario = DB::table('form')->select()->find($id);
        return view('escolas.formularios.formulariosshow', ['formulario' => $formulario]);
    }
    function destroyformulario($id)
    {
        DB::table('form')->where('id', $id)->delete();
        return redirect('/escolas');
    }







    function createturma()
    {
        return view('escolas.turmas.turmacreate');
    }

    function storeturma(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        DB::table('turmas')->insert($data);
        return redirect('/escolas');
    }

    function editturma($id)
    {
        $turma = DB::table('turmas')->find($id);
        return view('escolas.turmas.turmaedit', ['turma' => $turma]);
    }

    function updateturma(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $id = array_shift($data);
        DB::table('turmas')
            ->where('id', $id)
            ->update($data);
        return redirect('/escolas');
    }

    function showturma($id)
    {
        $turma = DB::table('turmas')->select()->find($id);
        return view('escolas.turmas.turmashow', ['turma' => $turma]);
    }

    function destroyturma($id)
    {
        DB::table('turmas')->where('id', $id)->delete();
        return redirect('/escolas');
    }
}
?>