
{% extends 'partials/body.twig.php' %}


{% block title %}
Editar Livro
{% endblock %}


{% block body %}

<div class="container">
	<div class="row"></div>
	<div class="content white z-depth-3	p-1">
		<div class="row">
			<div class="col s12">
				<h4>Editar Livro</h4>
				<div class="col s12">
					<a href="{{BASE}}livro/thumb/{{livro.id}}" class="waves-effect waves-light btn"><i class="material-icons left">camera_alt</i>Editar Thumb</a>
					<a href="{{BASE}}dashboard" class="waves-effect waves-light btn amber darken-2"><i class="material-icons left">arrow_back</i>Voltar</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 ">
				<form class="" action="{{BASE}}livro/update/{{livro.id}}" method="post" id="frmCadastro" onsubmit="return validarCadastro(true);">
					<div class="row">
						<div class="input-field col s12 m6">
							<i class="material-icons prefix">layers</i> 
							<input id="txtTitulo" type="text" name="txtTitulo" placeholder="Comédia romantica"  class="validate" value="{{livro.titulo}}">
							<label for="txtTitulo">Título</label>
							<input type="hidden" id="txtId" name="txtId" value="{{livro.id}}">
						</div>
						<div class="input-field col s12 m6">
							<i class="material-icons prefix">layers_clearv</i> 
							<input id="txtSlug" type="text" name="txtSlug"  class="validate" value="{{livro.slug}}">
							<label for="txtSlug">Slug</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12 m4">
							<i class="material-icons prefix">verified_user</i> 
							<select id="slStatus" name="slStatus" class="validate">
								<option value="1"{{livro.status == 1 ? 'selected' : ''}}>Ativo</option>
								<option value="2"{{livro.status == 2 ? 'selected' : ''}}>Inativo</option>
							</select>
							<label for="slStatus">Status</label>
						</div>
						<div class="input-field col s12 m4">
							<i class="material-icons prefix">library_books</i> 
							<select id="slCategoria" name="slCategoria" class="validate">
								{% for categoria in categorias %}
								<option value="{{categoria.id}}"{{categoria.id == livro.categoria.id ? 'selected' : ''}}>{{categoria.nome}}</option>
								{% endfor %}
							</select>
							<label for="slCategoria">Categoria</label>
						</div>
						<div class="input-field col s12 m4">
							<i class="material-icons prefix">attach_money</i> 
							<input id="txtValor" type="text" name="txtValor" class="validate" value="{{livro.valor}}">
							<label for="txtValor">Valor</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">edit</i> 
							<label for="slCategoria">Sinopse</label><br><br>
							<textarea id="txtSinopse" name="txtSinopse" class="materialize-textarea" >
								{{livro.sinopse | raw}}
							</textarea>
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

								<button type="submit" class="btn waves-effect waves-light right" type="submit" name="action">Alterar
									<i class="material-icons right">edit</i>
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