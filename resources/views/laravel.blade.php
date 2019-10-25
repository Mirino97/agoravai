@extends('master')

@section('content')
	<div>

		{{-- Primeiro passo: O formulário abaixo, através do 'method="post"' envia as informações do formulário para o alvo "action="/laravel/create". Tal alvo deve ser roteado no web.php.--}}
		<form method="post" action="/laravel/create" class="container pt-5 pb-5">

			{{ csrf_field() }}

			<div><input type="text" name="nome" placeholder="nome" required></div>
			<div><input type="text" name="telefone" placeholder="telefone" required></div>
			<div><input type="text" name="email" placeholder="email" required></div>
			<div><input type="submit" name="botaoSubmit" value="submitar"></div>
		</form>
	</div>
@endsection

@section('lista')
	{{--Abaixo, recebemos o objeto $usuarios com as informações do banco de dados e criamos uma lista ordenada com cada item--}}
	<table class="container pt-5 pb-5">
			<tr>
			<th scope="col">Id</th>
			<th scope="col">Nome</th>
			<th scope="col">Telefone</th>
			<th scope="col">Email</th>
		</tr>
		@foreach ($usuarios as $usuarios_k => $usuarios_v)

			<tr>
				<td>{{$usuarios_v['id']}}</td>
				<td><a href="{{url("/laravel/".$usuarios_v['id']."/edit")}}" class="btn bg-success" style="color: white">{{$usuarios_v['nome']}}</a></td>
				<td>{{$usuarios_v['telefone']}}</td>
				<td>{{$usuarios_v['email']}}</td>
				<td>
				<a href="{{url("/laravel/".$usuarios_v['id']."/delete")}}" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		@endforeach
	</table>
@endsection