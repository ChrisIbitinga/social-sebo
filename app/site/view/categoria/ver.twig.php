
{% extends 'partials/body.twig.php' %}

{% block title %} 
{{categoria.nome}}
{% endblock %}


{% block body %}
<div class="container">
	<div class="content">
		<div class="row"></div>
		
		<div class="row">
			<h4>{{categoria.nome}}</h4>
		</div>




		<div class="row">
			{% for livro in livros %}
			{%for item in livro %}
			<div class="col s12 m3 p-1">
				

				
				<div class="card">
					<div class="card-image">

					  {% if item.thumb != null%}
						  <img src="{{HOST}}/resources/thumb/{{item.thumb}}" alt="{{item.nome}}">
					   {% else %}
                          <img src="{{HOST}}/resources/imagens/no-available.png" alt="{{item.nome}}">
					   {% endif %}
						<a href="{{BASE}}livro/ver/{{item.slug}}" class="btn-floating halfway-fab waves-effect waves-light amber darken-2"><i class="material-icons">add</i></a>
					</div>
					<div class="card-content">
						<p>
							{{item.titulo}}
						</p>
					</div>
				</div>
				

				
			</div>
			{% endfor %}
			{% endfor %}
		</div>





   <div class="row">
   	<div class="col  s12 p-t-1">
   		<a href="{{BASE}}categoria/lista"  class=" waves-effect waves-light right btn btn-large">Voltar
   			<i class="material-icons left">arrow_back</i>
   		</a>
   	</div>	
   </div>


		
	</div>
</div>

{% endblock %}


