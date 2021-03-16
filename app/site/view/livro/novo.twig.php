
{% extends 'partials/body.twig.php' %}


{% block title %}
Novo Livro
{% endblock %}


{% block body %}

<div class="container">
	<div class="row"></div>
	<div class="content white z-depth-3	p-1">
		<div class="row">
			<div class="col s12">
				<h4>Novo Livro</h4>
			</div>
		</div>
		<div class="row">
			<!-- <div class="col s12 m4 hide-on-mobile-only">
				<img class="responsive-img" src="{{BASE}}/assets/img/cadastrar-usuario.jpg" alt="">
			</div> -->
			<div class="col s12 m12 ">
				<form class="" action="{{BASE}}livro/insert" method="post" id="frmCadastro" onsubmit="return validarCadastro(false);">
					<div class="row">
						<div class="input-field col s12 m6">
							<i class="material-icons prefix">layers</i> 
							<input id="txtTitulo" type="text" name="txtTitulo" placeholder="Comédia romantica"  class="validate">
							<label for="txtTitulo">Título</label>
						</div>
						<div class="input-field col s12 m6">
							<i class="material-icons prefix">layers_clearv</i> 
							<input id="txtSlug" type="text" name="txtSlug" placeholder="comedia-romantica"  class="validate">
							<label for="txtSlug">Slug</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12 m4">
							<i class="material-icons prefix">verified_user</i> 
							<select id="slqStatus" name="slqStatus" class="validate">
								<option value="1">Ativo</option>
								<option value="2">Inativo</option>
							</select>
							<label for="slqStatus">Status</label>
						</div>
						<div class="input-field col s12 m4">
							<i class="material-icons prefix">library_books</i> 
							<select id="slCategoria" name="slCategoria" class="validate">
								{% for categoria in categorias %}
								<option value="{{categoria.id}}">{{categoria.nome}}</option>
								{% endfor %}
							</select>
							<label for="slCategoria">Categoria</label>
						</div>
						<div class="input-field col s12 m4">
							<i class="material-icons prefix">attach_money</i> 
							<input id="txtValor" type="text" name="txtValor" placeholder="25.00"  class="validate">
							<label for="txtSlug">Valor</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">edit</i> 
							<label for="slCategoria">Sinopse</label><br><br>
							<textarea id="txtSinopse" name="txtSinopse" class="materialize-textarea"></textarea>
						</div>
					</div>
					
					<div class="row">
						<div class="col s12">
							<div class="col s12 m6">
								<a href="{{BASE}}dashboard"  class="amber-text text-darken-2 waves-effect waves-light right">Voltar
									<i class="material-icons left">arrow_back</i>
								</a>
							</div>
							<div class="col s12 m6">

								<button type="submit" class="btn waves-effect waves-light right" type="submit" name="action">Gravar
									<i class="material-icons right">save</i>
								</button>
							</div>
						</div>
					</div>
					
					
					<br>
					<div class="divAlert" id="divAlert">
						<div class="alert bg-amber">Preencha todos os campos...</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row"></div>
</div>

{% endblock %}


{% block script %}
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="{{BASE}}assets/js/livro.min.js"></script>
<script>
	CKEDITOR.replace('txtSinopse');
</script>
{% endblock %}