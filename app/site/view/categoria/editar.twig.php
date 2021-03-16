
{% extends 'partials/body.twig.php' %}


{% block title %}
	Editar Nova categoria
{% endblock %}


{% block body %}

	<div class="container">
		<div class="row"></div>
		<div class="content white z-depth-3	p-1">
			<div class="row">
				<div class="col s12">
					<h4>Editar Categoria</h4>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m6 hide-on-mobile-only">
					<img class="responsive-img" src="{{BASE}}/assets/img/cadastrar-usuario.jpg" alt="">
				</div>
				<div class="col s12 m6 ">


						<form class="form-login" action="{{BASE}}categoria/update/{{categoria.id}}" method="post" id="frmEditar" onsubmit="return validarCadastro(true);">
                        <div class="input-field col s12">
						
							<input id="txtId" type="hidden" name="txtId" value="{{categoria.id}}">
						</div>

						<div class="input-field col s12">
							<i class="material-icons prefix">layers</i> 
							<input id="txtNome" type="text" name="txtNome" value="{{categoria.nome}}"   class="validate red-text text-darken-2">
							<label for="txtNome">Nome</label>
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">layers_clearv</i> 
							<input id="txtSlug" type="text" name="txtSlug" value="{{categoria.slug}}"    class="validate red-text text-darken-2">
							<label for="txtSlug">Slug</label>
						</div>

						<div class="col s12">
							<div class="col s6">
								<a href="{{BASE}}categoria/lista"  class="amber-text text-darken-2 waves-effect waves-light right">Voltar
									<i class="material-icons left">arrow_back</i>
								</a>
							</div>
							<div class="col s6">

								<button type="submit" class="btn waves-effect waves-light right" type="submit" name="action">Editar
									<i class="material-icons right">build</i>
								</button>
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

<script src="{{BASE}}assets/js/categoria.min.js"></script>
{% endblock %}