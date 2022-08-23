<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EscolaController extends Controller{
    // cursos
    
    function index(){
        $cursos = DB::table('cursos')->get();
        $formularios = DB::table('form')->get();
        $formresposta = DB::table('formresp')
        ->join('form', 'formresp.formulario_id', '=', 'form.id')
        ->selectraw('formresp.*, date_format(form.dt_inicio, "%d/%m/%Y") as dt_inicio, date_format(form.dt_fim, "%d/%m/%Y") as dt_fim')
        ->get();
        $turmas = DB::table('turmas')
        ->join('cursos','turmas.curso_id','=','cursos.id')
        ->select('turmas.id','turmas.nome','cursos.nome as curso_nome')
        ->get();
        return view('escolas.index', [
            'cursos' => $cursos,
            'formularios' => $formularios,
            'formresposta' => $formresposta,
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





// Turma
    function createturma()
    {
        $cursos = DB::table('cursos')->get();

        return view('escolas.turmas.turmacreate', ['cursos' => $cursos]);
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


    function formaluno(){
        $cursos = DB::table('cursos')->get();
        $turmas = DB::table('turmas')->get();
        $date = date('Y/m/d');
        $periodo = DB::table('form')->where('dt_inicio', '<=', $date)->where('dt_fim', '>=', $date)->first();
        if(!empty($periodo->id))
            return view('escolas.formaluno', ['cursos' => $cursos, 'turmas' => $turmas, 'periodo' => $periodo ]);
         
        return view('escolas.periodofechado');
    }

function respostasform(){
    $formresposta = DB::table('formresp')->get();
    return view('escolas.formresposta', ['formresposta' => $formresposta]);
}
 
function store(Request $request){
    $data = $request->all();
    unset($data['_token']);
    $estado = explode(",", $data['estado']);
    $cidade = explode(",", $data['cidade']);
    $periodo = DB::table('form')->where('dt_inicio', '<=', "$date", 'and', 'dt_fim', '>=', "$date")->first();
    DB::table('formresp')->insert([
        'id' => NULL,
        'formulario_id' => $periodo->id,
        'nome_aluno' => $data['nome_aluno'],
        'turma_id' => $data['turma_id'],
        'cpf' => $data['cpf'],
        'cidade' => $cidade[1],
        'cidade_id' => $cidade[0],
        'uf' => $estado[1],
        'uf_id' => $estado[0],
        'transporte' => $data['transporte'],
        'poder_publico_RESPONSAVEL' => $data['poder_publico_RESPONSAVEL'],
        'diferenca_paga' => $data['diferenca']
    ]);
    return redirect('/escolas');
}

}

?>