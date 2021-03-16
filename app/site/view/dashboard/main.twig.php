

{% extends 'partials/body.twig.php' %}

{% block title %} 
Home
{% endblock %}


{% block body %}



<div class="container">
	<div class="row"></div>
	<div class="content white z-depth-3">
		<div class="row">
			<div class="col s12 m3 white">
				<div class="row p-1">
					<div class="row">
						<div class="col s12">
							<h4>Dashboard</h4>
						</div>
					</div>

					<div class="row">
						<div class="col s12">
							<a href="{{BASE}}categoria/lista" class="btn btn-large waves-effect waves-light" >Categorias
								<i class="material-icons right">assignment</i>
							</a>
						</div>
					</div>

					<div class="row">
						<div class="col s12">
							<a href="{{BASE}}livro/novo" class="btn btn-large waves-effect waves-light amber darken-2" >Novo Livro
								<i class="material-icons right">add_to_photos</i>
							</a>
						</div>
					</div>

					<div class="row">
						<div class="col s12 ">
							<a href="{{BASE}}login/logout" class="btn btn-large waves-effect waves-light red darken-2" onclick="return confirm('Deseja realmente sair?')">  &nbsp &nbsp  Logout 
								<i class="material-icons right">exit_to_app</i> &nbsp &nbsp
							</a>
						</div>
					</div>
					
				</div>
				
			</div>
			<div class="col s12 m9 p-1 ">
				<h4> Meus Livros</h4>
				<div class="col s12">
					<ul class="collection">

						{% for livro in livros %}

						<li class="collection-item avatar">
							<i class="material-icons circle teal darken-2">collections_bookmark</i>
							<span class="title"><span class="teal-text text-darken-3 bold-text">Título:</span> {{livro.titulo}}</span>

							<p><span class="teal-text text-darken-3 bold-text">Status:</span>
								{{livro.status == 1 ? 'Ativo' : 'Inativo'}}
							</p>

							<p><span class="teal-text text-darken-3 bold-text">Slug:</span>
								<a href="{{BASE}}livro/ver/{{livro.slug}}" target="_blank">{{livro.slug}}</a> 
							</p>

							<p><span class="teal-text text-darken-3 bold-text">Categoria:</span> {{livro.categoria.nome}}</p>
							<p><span class="teal-text text-darken-3 bold-text">Data de Cadastro:</span> {{livro.dataCadastro | date(DATE_TIME)}}</p>

							<div class="secondary-content teal-text">

								<span>
									<a href="{{BASE}}livro/thumb/{{livro.id}}" class=" teal-text"><i class="material-icons">camera_alt</i>
									</a>
								</span>


								<span>
									<a href="{{BASE}}livro/editar/{{livro.id}}" class="m-l-1 amber-text text-darken-2"><i class="material-icons">edit</i></a>	
								</span>
							</div>


						</li>
						{% endfor %}
					</ul>
				</div>
				<div class="col  s12 p-t-1">
					<a href="{{BASE}}categoria/lista"  class="amber-text text-darken-2 waves-effect waves-light right">Voltar
						<i class="material-icons left">arrow_back</i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row"></div>
</div>

{% endblock %}
