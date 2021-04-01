<!DOCTYPE html>
<html>
<head>
	<title>CRMALL</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
</head>
<body>

	<div class="container">
		<div class="well text-center">
			<h1>Lista de Clientes</h1>
		</div>
		<a href="{{ $link_add }}" class="btn btn-success">Adicionar</a>
		<hr>
		<div class="row">
			@if(!empty($lista))
				@foreach($lista as $item)
					<div class="col-sm-4">
						<div class="alert alert-success">
							<h3 class="text-center">{{$item->nome}}</h3>
							<p>Nascimento: {{date('d/m/Y', strtotime($item->nascimento))}}</p>
							<p>Sexo: {{$item->sexo}}</p>
							<p>CEP: {{$item->cep}}</p>
							<p>Endereço: {{$item->endereco}}, {{$item->numero}}</p>
							<p>Complemento: {{$item->complemento}}</p>
							<p>Bairro: {{$item->bairro}}</p>
							<p>{{$item->cidade}}/{{$item->estado}}</p>
							<hr>
							<div class="row">
								<div class="col-sm-6">
									<a href="editar/{{ $item->id }}" class="btn btn-primary btn-block">Atualizar</a>
								</div>
								<div class="col-sm-6">
									<a href="delete/{{ $item->id }}" class="btn btn-danger btn-block">Deletar</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			@else
				<h3>Não há clientes cadastrados!</h3>
			@endif
		</div>
	</div>

</body>
</html>