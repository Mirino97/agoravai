@extends('master')

@section('content')
<form method="post" action="/laravel/{{ $user->id }}">
	@method('PATCH')
	@csrf
	
	<div>
		<input type="text" name="nome" value="{{ $user->nome }}">
	</div>
	<div>
		<input type="text" name="telefone" value="{{ $user->telefone }}">
	</div>
	<div>
		<input type="text" name="email" value="{{ $user->email }}">
	</div>
	<div>
		<input type="submit" name="botaoSubmit" value="Update">
	</div>
</form>
@endsection