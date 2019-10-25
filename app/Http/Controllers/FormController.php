<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;

class FormController extends Controller
{
	/* Terceiro Passo: A função inserir abaixo é responsável por receber as informações do forḿulário que vieram pelo POST, utilizando o comando "Request" (para receber) e armazenando dentro de uma variável ($request). */
    public function inserir () {

        /*O campo abaixo cria uma instância do "request", e utiliza a função "validade" para garantir que os dados passados pelo request estão da forma correta que queremos. O request()->validate() retorna o mesmo valor que recebe (nesse caso, ele irá retornar o nome, telefone e email). Com essa informação em mãos, podemos salvar esse return em uma variável para poder utilizar todos os campos novamente sem ter que redigitá-los */
        $validated = request()->validate([

            'nome' => 'required',
            'telefone' => 'required',
            /* Para colocar mais de uma regra, passamos todas as regras como um objeto, igual a demonstração abaixo.*/
            'email' => ['required', 'email:rfc']
        ]);

        try {

            usuarios::Create($validated);

        } catch (\Exception $e) {

            return redirect('laravel')->withErrors('O e-mail cadastrado já está sendo usado!');
        }
        
        //O comando abaixo faz a mesma coisa que os comentários abaixo, porém de uma maneira muito mais concisa e rápida. O "usuarios" é referente ao nome do model, o comandó é "create". Dentro do create, faço um pedido de "request" do formulário que recebo o post e passo adiante para o create. Os campos "nome, telefone e email" devem estar dentro do Model como fillable, para garantir a segurança do formulário.
        //usuarios::Create($validated);

    	/*Após receber o post na variável $request, é necessário criar uma nova instância do model usuarios.php para que possamos jogar os dados no banco de dados.*/
    	//$cadastro = new usuarios;
    	/*Abaixo, passamos as informações presentes na variável $request para a instância do model chamada $cadastro*/
    	//$cadastro->nome = request('nome');
    	//$cadastro->telefone = request('telefone');
    	//$cadastro->email = request('email');

    	/*Aqui a instância está sendo salva ao banco de dados*/
    	//$cadastro->save();

    	/*Aqui o usuário está sendo retornado para a página anterior.*/
    	return redirect()->back();
    }


    /* A função edit recebe o wildcard do web.php e armazena na variável $id*/
    // public function edit ($id) {} - DESCONTINUADO PELO DE BAIXO

    // Através da feature Route Model Binding (própria do Laravel), se utilizarmos o nome do Model (usuarios) e uma variavel com o mesmo nome do wildcard, o comando usuarios::find($id) (comentado a baixo) já é interpretado automaticamente
    public function edit (usuarios $user) {

        /* Procura (find) o $id no banco de dados usuarios e armazena todo o resultado na variável $teste*/
        //$user = usuarios::find($id);
        /* Encaminha o usuário para a view showteste com a variável $teste compactada. o Compact envia todos os dados para a view alvo*/
        return view('showteste', compact('user'));
    }

    public function update (usuarios $user) {

        //Recebendo o $user de cima, cria o update com as novas informações do usuário através do formulário post recebido
        $user->update(request(['nome', 'telefone', 'email']));

        //DESCONTINUADO -- Método "manual" de fazer o comando acima
        //$user->nome = $aleatorio->nome;
        //$user->telefone = $aleatorio->telefone;
        //$user->email = $aleatorio->email;

        //$user->save();

        return redirect('/laravel');

    }

    public function destroy (usuarios $user) {
        
        $user->delete();

        return redirect('/laravel');
    }

}
