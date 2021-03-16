
{% extends 'partials/body.twig.php' %}


{% block title %}
	 Login
{% endblock %}


{% block body %}


	<div class="container">
		<div class="row">

		</div>
		<div class="content z-depth-3">
			<div class="row white">
			<div class="col s12 m6 hide-on-med-and-down">
				<div class="row">
					<img class="width-100" src="{{BASE}}/assets/img/login.jpg" alt="">
				</div>
			</div>
			<div class="col s12 m6">
			<form class="form-login white" action="{{BASE}}login/auth" method="post" id="frmLogin" onsubmit="return validarLogin();">

					<div class="input-field col s12">
						<i class="material-icons prefix">mail</i> 
						<input id="txtEmail" type="email" name="txtEmail"  class="validate" autofocus="true">
						<label for="txtEmail">E-mail</label>
					</div>

					<div class="input-field col s12">
						<i class="material-icons prefix">locked</i> 
						<input id="txtSenha" type="password" name="txtSenha"  class="validate">
						<label for="txtSenha">Senha</label>
					</div>

					<div class="box-btn">
						<button type="submit" class="btn waves-effect waves-light " type="submit" name="action">Logar
							<i class="material-icons right">fingerprint</i>
						</button>
					</div>

					<div class="login-links">
						<a class="amber-text" href="{{BASE}}login/recuperar">Recuperar senha</a> <!-- <p>│</p> -->
						<a class="success-text" href="{{BASE}}login/cadastrar">Cadastrar</a>
					</div>

					<div class="divAlert" id="divAlert">
						<div class="alert amber darken-2 white-text">Preencha todos os campos...</div>
					</div>
				</form>
			</div>
		</div>
		</div>
		
	</div>





{% endblock %}


{% block script %}

<script src="{{BASE}}assets/js/usuario.min.js"></script>
{% endblock %}