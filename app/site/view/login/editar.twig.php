
{% extends 'partials/body.twig.php' %}


{% block title %}
Editar Usuário
{% endblock %}


{% block body %}



<div class="container">
	<div class="row"></div>
	<div class="content white z-depth-3">
		<div class="row">
			<div class="col s12 m6 hide-on-small-only">
				<img class="responsive-img" src="{{BASE}}/assets/img/editar-usuario.jpg" alt="">
			</div>
			<div class="col s12 m6">
				<form class="form-login white" action="{{BASE}}login/update" method="post" id="frmEditar" onsubmit="return validarEditar();">


					<div class="input-field col s12">
						<i class="material-icons prefix">mail</i> 
						<input disabled value="{{usuario.email}}" id="txtEmail" type="email" name="txtEmail" value=""  class="disable" autofocus="true" readonly="true">
						<label for="txtEmail">E-mail</label>
					</div>

					<div class="input-field col s12">
						<i class="material-icons prefix">persona</i> 
						<input id="txtNome" type="text" name="txtNome"  class="validate">
						<label for="txtNome">Nome</label>
					</div>

					<div class="box-btn">
						<button type="submit" class="btn waves-effect waves-light " type="submit" name="action">Editar
							<i class="material-icons right">build</i>
						</button>
					</div>

					<div class="divAlert" id="divAlert">
						<div class="alert amber darken-2 white-text">Preencha todos os campos...</div>
					</div>
				</form>
			</div>
		</div>	
	</div>
</div>


<div class="row"></div>
{% endblock %}


{% block script %}

<script src="{{BASE}}assets/js/usuario.min.js"></script>
{% endblock %}