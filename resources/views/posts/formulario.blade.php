@extends('layout.layout') 
@section('title') Blog - Formulário de Postagem!!! @stop @section('body')

<div class="card mb-4"></div>

<div class="card mb-4">
	<h5 class="card-header">Deixe o seu recado!!!</h5>

	<form name="formulario_post" id="formulario_post" method="post" action="/blog/postagem/gravar">
		<div class="card-body">
    		<h2 class="card-title"></h2>
    		<p class="card-text"></p>
			
			<input type="hidden" name="_token" value="{{ csrf_token() }}"> 
			
			<label>Titulo:</label>
			<input type="text" class="form-control" name="titulo" id="titulo" 
				placeholder="titulo"> 

			<br/>
				
			<label>Mensagem:</label>
				<textarea 
					rows="15" cols="" class="form-control" 
					name="texto" 
					id="texto" 
					placeholder="mensagem">
				</textarea>
			<br/>
		</div>
		
		<div class="card-footer text-muted">
			<div class="input-group">
				<a href="/blog/postagem">
					<span class="input-group-btn">
						<button class="btn btn-secondary" type="submit">Enviar Postagem</button>
					</span>
				</a>
			</div>
		</div>
	</form>
</div>

@stop @section('menu')
<div class="card my-4">
	<h5 class="card-header">Acoes</h5>
	<div class="card-body">
		<div class="input-group">
			<a href="/posts"> 
    			<span class="input-group-btn">
    				<button class="btn btn-secondary" type="button"> << Voltar</button>
    			</span>
			</a>
		</div>
	</div>
</div>
@stop