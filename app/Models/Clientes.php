<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Connection;

class Clientes extends Authenticatable
{
    public function getAll(){
        return DB::select('SELECT * FROM clientes');
    }
    public function get($id){
    	return DB::select('SELECT * FROM clientes WHERE id = :id', ['id' => $id]);
    }
    public function set($post){
        foreach ($post as $key => $value) {
        	$array[] = "$key";
            $array1[] = ":$key";
            $array2[] = "$value";
        }
        $array = implode(', ', $array);
        $array1 = implode(', ', $array1);
        $array2 = implode(', ', $array2);

        $sql = "INSERT INTO clientes ({$array}) VALUE ({$array1})";

        DB::insert($sql, $post);
    }
    public function del($id){
    	DB::select('DELETE FROM clientes WHERE id = :id', ['id' => $id]);
    }

    public function up($post){
        $sql = "
            UPDATE clientes 
            SET 
            _token      = :_token,
            nome        = :nome,
            nascimento  = :nascimento,
            sexo        = :sexo,
            cep         = :cep,
            endereco    = :endereco,
            numero      = :numero,
            complemento = :complemento,
            bairro      = :bairro,
            estado      = :estado,
            cidade      = :cidade
            WHERE 
            id          = :id
        ";

        DB::update($sql, [
            'id'            =>  $post['id'],
            '_token'        =>  $post['_token'],
            'nome'          =>  $post['nome'],
            'nascimento'    =>  $post['nascimento'],
            'sexo'          =>  $post['sexo'],
            'cep'           =>  $post['cep'],
            'endereco'      =>  $post['endereco'],
            'numero'        =>  $post['numero'],
            'complemento'   =>  $post['complemento'],
            'bairro'        =>  $post['bairro'],
            'estado'        =>  $post['estado'],
            'cidade'        =>  $post['cidade']
        ]);
    }
}
