<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>{% block title %} {% endblock %} - Social Sebo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{BASE}}vendor/materialize/css/materialize.min.css" rel="stylesheet">
    <link href="{{BASE}}public/assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{BASE}}assets/img/favicon.ico" type="image/x-icon">      
</head>
<body>

    {% include 'partials/header.twig.php' %}
    
    {% block body %}
    
    <div class="content">
       Index
   </div>
   {% endblock %} 
   <!-- END BLOCK BODY -->

 {% block script %}
  <script src="{{BASE}}assets/js/jquery.min.js"></script>
  <script src="{{BASE}}assets/js/script.min.js"></script>
  <script src="{{BASE}}assets/js/materialize.min.js"></script>
  <script src="{{BASE}}assets/js/init-materialize.min.js"></script>

  {% endblock %}




   {% include 'partials/footer.twig.php' %}




<input type="hidden" id="txtBase" value="{{BASE}}">


</body>
</html>