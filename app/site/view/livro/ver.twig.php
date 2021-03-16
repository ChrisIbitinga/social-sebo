

{% extends 'partials/body.twig.php' %}

{% block title %} 
{{livro.titulo}}
{% endblock %}


{% block body %}

<div class="container"> <div class="row"></div>
<div class="content white z-depth-3">
	<div class="row"></div>
	<div class="row">

		<div class="col 12 m3 p-1">
			<div class="row">
				{% if livro.thumb != null%}
				<img class="responsive-img hoverable" src="{{HOST}}/resources/thumb/{{livro.thumb}}" alt="{{livro.titulo}}"  title="{{livro.titulo}}">
				{% else %}
				<img class="responsive-img" src="{{HOST}}/resources/imagens/no-available.png" alt="{{livro.titulo}}" title="{{livro.titulo}}">
				{% endif %}
			</div>
			<div class="row">
				<span class="amber-text text-darken-2 title-small">Preço: R$ {{livro.valor}}</span>
			</div>

		</div>
		<div class="col s12 m9 p-1">
			<div class="row">
				<h2 class="title">{{livro.titulo}}</h2>
			</div>
			<div class="row">
				<p class="bold">
					<blockquote>
						{{livro.sinopse | raw}}
					</blockquote>
				</p>
			</div>
			<div class="row">
				<p>
					<span class="bold">Publicado por:</span> {{livro.usuario.nome}}
				</p>
			</div>
			<div class="row">
				<p>
					<span class="bold">Data de publicação:</span> {{livro.dataCadastro | date(DATE_TIME)}}
				</p>
			</div>
			<div class="row">
				<hr>

				<div class="col s12 m12 ">
					<input type="hidden"  id="txtId" value="{{livro.id}}">
					{% if userName != null %}
					<div class="box-comentario">
						<div class="row">
							<h5 class="title">Deixar comentários</h5>
						</div>
						<div class="row">
							<form action="" method="post" id="frmComentario" name="frmComentario" class="col s12">
								<div class="input-field">
									<textarea onkeyup="countCharacters(this, 'spCaracteres', 500);" id="txtComentario" name="txtComentario" class="materialize-textarea" rows="10" maxlength="500" ></textarea>
									<label for="txtComentario">Insira seu comentários</label>
								</div>
								<div class="input-field">
									<span class="bold amber-text text-darken-3" ><span id="spCaracteres">500 - </span> caracteres restantes</span>
								</div>
								<div class="divAlert" id="divAlert">
									<div class="alert amber darken-2 white-text">Insirra seu comentário entre 10 e 500 caracteres.</div>
								</div>
							     <br> 
								<div class="input-fiel">
									<button class="btn waves-effect waves-light right" type="submit" id="btnComentar" name="btnComentar">Comentar
										<i class="material-icons right">send</i>
									</button>
								</div>
							</form>
						</div>
					</div>
					{% endif %}

				</div>
				  <div class="col s12">
				  	<h4 class="title">Ler comentários</h4>
				  </div>

				<div class="col s12 z-depth-3" id="divComentarios">
					
				</div>
			</div>
		</div>
	</div>
</div>
</div>


{% endblock %}

{% block script %}
<script src="{{BASE}}assets/js/jquery.min.js"></script>
<script src="{{BASE}}assets/js/comentario.min.js"></script>
{% endblock %}
