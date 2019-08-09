@extends('layout.layout')
@section('title') Blog - Postagens @stop
<form class="form-horizontal new-lg-form" id="loginform" action="/auth/login" method="post">
	{{ csrf_field() }}

	<div class="form-group  m-t-20">
		<div class="col-xs-12">
			<label>Endereço de Email</label> <input class="form-control"
				type="text" required="" placeholder="Email" id="email" name="email">
		</div>
	</div>

	<div class="form-group">
		<div class="col-xs-12">
			<label>Senha</label> <input class="form-control" type="password"
				required="" placeholder="Senha" id="senha" name="password">
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-12">
			<div class="checkbox checkbox-info pull-left p-t-0">
				<input id="checkbox-signup" type="checkbox"> <label
					for="checkbox-signup"> Lembrar-me </label>
			</div>
			<a href="javascript:void(0)" id="to-recover"
				class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i>
				Esqueceu a senha ?</a>
		</div>
	</div>

	<div class="form-group text-center m-t-20">
		<div class="col-xs-12">
			<button
				class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light"
				type="submit">Entrar</button>
		</div>
	</div>

</form>