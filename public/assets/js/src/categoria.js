'use strict'


function validarCadastro(validarId){

  // var id =  getValueById('txtId');
  var nome =  getValueById('txtNome');
  var slug =  getValueById('txtSlug');
  var obj = getById('divAlert');

  if(validarId && getValueById('txtId') <= 0){
    obj.innerHTML = '<div class="alert red darken-1">ID iválido </div>';

    return false;
  }

  if(nome.trim().length < 2){
    obj.innerHTML = '<div class="alert red darken-1">O nome deve ter no minimo de 2 caracteres </div>';

    return false;
  }

  if(slug.trim().length < 2){
    obj.innerHTML = '<div class="alert red darken-1">O slug deve ter no minimo de 2 caracteres </div>';

    return false;
  }


  return true;
}