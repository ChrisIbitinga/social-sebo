

{% extends 'partials/body.twig.php' %}

{% block title %} 
Home
{% endblock %}


{% block body %}
<div class="row">
	<div class="slider">
		<ul class="slides ">


			<li>
				<img src="{{HOST}}/resources/slide/deth-note.png" alt="deth-note.png">

				<div class="caption left-align">
					<h3>
						Deth Note
					</h3>
					<h5 class="light grey-text text-lighten-3">R$: 49,99</h5>
				</div>
			</li>

			<li>
				<img src="{{HOST}}/resources/slide/davince-code.png" alt="davince-cod">

				<div class="caption center-align">
					<h3>
						Davince Cod
					</h3>
					<h5 class="light grey-text text-lighten-3">R$: 39,99</h5>
				</div>
			</li>


		</ul>
	</div>
</div>
</div>
<div class="container">
	<div class="row">
		<div class="col s12">
			<h1 class="title">Ultimos Livros</h1>
		</div>
	</div>
	<div class="row">
		

		<div class="box-livro">
			{% for livro in livros %}
			{%for item in livro %}
			<div class="livro-content">
					<div class="card">
				<div class="card-image">
					{% if item.thumb != null%}
					<img src="{{HOST}}/resources/thumb/{{item.thumb}}" alt="{{item.nome}}">
					{% else %}
					<img src="{{HOST}}/resources/imagens/no-available.png" alt="{{item.nome}}">
					<span class="card-title">{{item.titulo}}</span>
					{% endif %}
					<a href="{{BASE}}livro/ver/{{item.slug}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
				</div>
				<div class="card-content">
					<p class="teal-text text darken-2">{{item.titulo}}</p>
					<p class="amber-text text darken-2">{{item.valor}}</p>
				</div>
			</div>
			</div>
		

			{% endfor %}
			{% endfor %}
		</div>

	</div>
</div>




{% endblock %}
