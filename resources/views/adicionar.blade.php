<!DOCTYPE html>
<html>
<head>
	<title>CRMALL</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
</head>
<body>
	<div class="container">
		<div class="well text-center">
			<h1>Cadastro de Clientes</h1>
		</div>
		<a href="{{ $link_list }}" class="btn btn-info">Home</a>
		<hr>
			@if(session('success_up'))
				<div class="alert alert-success">
					Cliente atualizado com sucesso!
				</div>
			@endif
			@if(session('error'))
				<div class="alert alert-danger">
					Campos Nome, Data de Nascimento e Sexo são obrigatorios!
				</div>
			@endif	
			@if(session('success'))
				<div class="alert alert-success">
					Cliente adicionado com sucesso!
				</div>
			@endif	
			<!-- ATUALIZAR DADOS DE CLIENTE -->	
			@if(!empty($item))
				<form method="POST" action="{{ $link_action }}">
					@csrf
					@method('POST')
					<input type="hidden" name="id" value="{{$item[0]->id}}">
					<label>Nome</label>
					<input type="text" name="nome" class="form-control" value="{{$item[0]->nome}}" required="">
					<div class="row">
						<div class="col-sm-6">
							<label>Data de Nascimento</label>
							<input type="date" name="nascimento" value="{{$item[0]->nascimento}}" class="form-control" required="">
						</div>
						<div class="col-sm-6">
							<label>Sexo</label>
							<select name="sexo" class="form-control" required="">
								@foreach($sexo as $s)
									<option <?=($item[0]->sexo == $s)?'selected=""':''; ?> >{{$s}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<label>CEP</label>
							<input type="text" name="cep" value="{{$item[0]->cep}}" class="form-control cep">
						</div>
						<div class="col-sm-4">
							<label>Endereço</label>
							<input type="text" name="endereco" value="{{$item[0]->endereco}}" class="form-control endereco">
						</div>
						<div class="col-sm-4">
							<label>Número</label>
							<input type="number" name="numero" value="{{$item[0]->numero}}" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<label>Complemento</label>
							<input type="text" name="complemento" value="{{$item[0]->complemento}}" class="form-control complemento">
						</div>
						<div class="col-sm-3">
							<label>Bairro</label>
							<input type="text" name="bairro" value="{{$item[0]->bairro}}" class="form-control bairro">
						</div>
						<div class="col-sm-3">
							<label>Estado</label>
							<input type="text" name="estado" value="{{$item[0]->estado}}" class="form-control estado">
						</div>
						<div class="col-sm-3">
							<label>Cidade</label>
							<input type="text" name="cidade" value="{{$item[0]->cidade}}" class="form-control cidade">
						</div>
					</div>
					<br>
			<!-- ADICIONAR CLIENTE -->
			@else
				<form method="POST" action="{{ $link_action }}">
					@csrf
					<label>Nome</label>
					<input type="text" name="nome" class="form-control" required="">
					<div class="row">
						<div class="col-sm-6">
							<label>Data de Nascimento</label>
							<input type="date" name="nascimento" class="form-control">
						</div>
						<div class="col-sm-6">
							<label>Sexo</label>
							<select name="sexo" class="form-control" required="">
								<option>Masculino</option>
								<option>Feminino</option>
								<option>Outro</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<label>CEP</label>
							<input type="text" name="cep" class="form-control cep">
						</div>
						<div class="col-sm-4">
							<label>Endereço</label>
							<input type="text" name="endereco" class="form-control endereco">
						</div>
						<div class="col-sm-4">
							<label>Número</label>
							<input type="number" name="numero" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<label>Complemento</label>
							<input type="text" name="complemento" class="form-control complemento">
						</div>
						<div class="col-sm-3">
							<label>Bairro</label>
							<input type="text" name="bairro" class="form-control bairro">
						</div>
						<div class="col-sm-3">
							<label>Estado</label>
							<input type="text" name="estado" class="form-control estado">
						</div>
						<div class="col-sm-3">
							<label>Cidade</label>
							<input type="text" name="cidade" class="form-control cidade">
						</div>
					</div>
					<br>
			@endif
			<button class="btn btn-success">Cadastrar</button>
		</form>
	</div>

	<script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/jquery.mask.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/script.js') }}"></script>
	</body>
</html>