
{% extends 'partials/body.twig.php' %}


{% block title %}
Redefinir senha
{% endblock %}


{% block body %}


<div class="container">
	<div class="row"></div>
	<div class="content white z-depth-3">
		<div class="row">
			<div class="col s12 m6 hide-on-small-only">
				<img class="responsive-img" src="{{BASE}}/assets/img/redefinir-senha.jpg" alt="">
			</div>
			<div class="col s12 m6">
				<form class="form-login white" action="{{BASE}}login/updatePassword" method="post" id="frmAlterarSenha" onsubmit="return validarSenha();">

					<div class="input-field col s12">
						<i class="material-icons prefix">locked</i> 
						<input id="txtSenha" type="password" name="txtSenha"  class="validate">
						<label for="txtSenha">Senha</label>
					</div>

					<div class="input-field col s12">
						<i class="material-icons prefix">error_outline</i> 
						<input id="txtSenhaConfirmar" type="password" name="txtSenhaConfirmar"  class="validate">
						<label for="txtSenhaConfirmar">Confirmar Senha</label>
					</div>

					<div class="box-btn">
						<button type="submit" class="btn waves-effect waves-light " type="submit" name="action">alterar
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
	<div class="row"></div>
</div>


{% endblock %}


{% block script %}

<script src="{{BASE}}assets/js/usuario.min.js"></script>
{% endblock %}