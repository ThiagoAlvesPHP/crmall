<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Clientes;

class HomeController extends Controller
{	
	//pagina listar clientes
    public function list(){
    	$dados = array();
    	$dados['link_add'] = route('add');

    	$c = new Clientes();
    	$dados['lista'] = $c->getAll();

    	return view('home', $dados);
    }
    //deletar
    public function delete($id){
    	$c = new Clientes();
    	if (!empty($id)) {
    		$c->del($id);
    		return redirect('/clientes/listar');
    	}
    }
    //pagina adicionar
    public function add(){
    	$dados = array();
    	$dados['link_action'] = route('addAction');
    	$dados['link_list'] = route('list');
    	$dados['sexo'] = array(
			'Masculino', 'Feminino', 'Outros'
		);

		return view('adicionar', $dados);
    }
    //action adicionar
    public function addAction(Request $request){
    	$c = new Clientes();
    	$redirect = route('add');

    	if ($request->filled('nome') && $request->filled('nascimento') && $request->filled('sexo')) {
    		$c->set(filter_input_array(INPUT_POST, FILTER_DEFAULT));
    		return redirect($redirect)->with('success', true);
    	} else {
    		return redirect($redirect)->with('error', true);
    	}
    }
    //pagina editar
    public function edit($id){
    	$dados = array();
    	$c = new Clientes();
    	$dados['link_action'] = route('editAction', [$id]);
    	$dados['link_list'] = route('list');
    	$dados['sexo'] = array(
			'Masculino', 'Feminino', 'Outros'
		);
		$dados['item'] = $c->get($id);

		return view('adicionar', $dados);
    }
    //action editar
    public function editAction(Request $request){
    	$dados = array();
    	$redirect = route('edit', [$request->input('id')]);
    	$c = new Clientes();

    	if ($request->filled('nome') && $request->filled('nascimento') && $request->filled('sexo')) {
    		$c->up(filter_input_array(INPUT_POST, FILTER_DEFAULT));
    		return redirect($redirect)->with('success_up', true);
    	} else {
    		return redirect($redirect)->with('error', true);
    	}
    }
}
