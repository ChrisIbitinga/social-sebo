
{% extends 'partials/body.twig.php' %}

{% block title %} 
Categorias
{% endblock %}


{% block body %}
<div class="container">
	<div class="content">
		<div class="row"></div>
		
		<div class="row">
			<h4>Lista de Categorias</h4>
		</div>
		<div class="row">
		</div>
		<div class="row">
			<div class="col s12">
				<ul class="collection">
					{% for categoria in categorias %}
					
					<li class="collection-item avatar">
						<i class="material-icons circle teal darken-2">collections_bookmark</i>
						<span class="title"><span class="teal-text text-darken-3 bold-text">Categoria:</span> {{categoria.nome}}</span>
						<p><span class="teal-text text-darken-3 bold-text">Slug:</span> {{categoria.slug}}</p>
						<a href="{{BASE}}categoria/ver/{{categoria.slug}}" class="secondary-content"><i class="material-icons">send</i></a>
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

{% endblock %}






