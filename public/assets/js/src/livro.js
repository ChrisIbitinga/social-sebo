'use strict'


	function validarCadastro(validarId){

    var id        =  getValueById('txtId');
	var titulo    =  getValueById('txtTitulo');
	var slug      =  getValueById('txtSlug');
	var status    =  getValueById('slStatus');
	var categoria =  getValueById('slCategoria');
	var valor     =  getValueById('txtValor');
	var sinopse   =  CKEDITOR.instances['txtSinopse'].getData();
	var obj       =   getById('divAlert');

	if(validarId && getValueById('txtId') <= 0)
	{
		obj.innerHTML = '<div class="alert red darken-1">ID iválido </div>';

		return false;
	}

	if(titulo.trim().length < 2)
	{
		obj.innerHTML = '<div class="alert red darken-1">O título deve ter no minimo de 2 caracteres </div>';

		return false;
	}

	if(slug.trim().length < 2)
	{
		obj.innerHTML = '<div class="alert red darken-1">O slug deve ter no minimo de 2 caracteres </div>';

		return false;
	}

	if(valor.trim().length < 2)
	{
		obj.innerHTML = '<div class="alert red darken-1">Informe o valor </div>';

		return false;
	}

	if(status < 1 || staus > 2)
	{
		obj.innerHTML = '<div class="alert red darken-1">Status inválido </div>';

		return false;
	}

	if(categoria < 1 || categoria  == null)
	{
		obj.innerHTML = '<div class="alert red darken-1">Categoria inválida </div>';

		return false;
	}

	if(sinopse.length < 10)
	{
		obj.innerHTML = '<div class="alert red darken-1">A sinopse deve conter no mínimo de 10 caracteres </div>';

		return false;
	}

	return true;
}



function validarThumb()
{


	var thumb = getById('flThumb').files.length;
	var obj       =   getById('divAlert');

	if(thumb == 0)
	{
		obj.innerHTML = '<div class="alert red darken-1">Selecione uma imagem  </div>';
		return false;
	}


	return true;
}

