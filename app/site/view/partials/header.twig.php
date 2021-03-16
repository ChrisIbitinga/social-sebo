<!-- Dropdown Structure -->

<nav class="teal">
  <div class="container">
    <div class="nav-wrapper">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>

      <a href="#!" class="brand-logo">
        <a href="{{BASE}}home/"><img src="{{BASE}}assets/img/logo/social-sebo-logo.svg" alt=""></a>
      </a>
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="{{BASE}}categoria/lista">Todas</a></li>
        <li><a href="{{BASE}}categoria/ver/comedia-romantica">Comédia Romantica</a></li>
        <li><a href="{{BASE}}categoria/ver/ficcao-cientifica">Ficção Ciêntifica</a></li>
        <li><a href="{{BASE}}categoria/ver/policial">Policial</a></li>
        <li><a href="{{BASE}}categoria/ver/suspense">Suspense</a></li>
        <li><a href="{{BASE}}categoria/ver/terror">Terror</a></li>
      </ul>
      <ul id="dropdown2" class="dropdown-content">
        <li><a href="{{BASE}}login/main">Login</a></li>

        {% if userName != null %}
        <li><a href="{{BASE}}login/editar">Editar</a></li>
        <li><a href="{{BASE}}login/senha">Alterar senha</a></li>
        <li><a href="{{BASE}}login/logout" onclick="return confirm('Deseja realmente sair?')">Sair</a></li>
        {% endif %}
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a class="dropdown-trigger left" href="{{BASE}}categoria" data-target="dropdown1">Categorias<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="{{BASE}}about/">Quem somos</a></li>
        {% if userName != null %}
         <li><a href="{{BASE}}dashboard/main">Painel</a></li>
         {% endif %}
        <li><a class="dropdown-trigger left" href="#!" data-target="dropdown2"> 
         {% if userName == null %}
          Entrar
          <i class="material-icons right">locked</i></a></li>

        {% else %}
          Olá {{userName}}
         <i class="material-icons right">lock_open</i></a></li>
        {% endif %}

          
      </ul>

      <ul class="sidenav" id="mobile-demo">
         {% if userName != null %}
         <li><a href="{{BASE}}dashboard/main">Painel</a></li>
         {% endif %}
         <li><a href="{{BASE}}about/">Quem somos</a></li>
      </ul>
    </div>
  </div>
  
</nav>
