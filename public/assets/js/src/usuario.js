'use strict'

function validarLogin() {
    var email = getValueById('txtEmail');

    if (!/.+@.+\..+/.test(email)) {
        getById('dvAlert').innerHTML = '<div class="alert red darken-2">Informe o e-mail cadastrado.</div>';
        return false;
    }

    if (getValueById('txtSenha').trim().length < 7) {
        getById('dvAlert').innerHTML = '<div class="alert red darken-2">Informe uma senha válida.</div>';
        return false;
    }

    return true;
}

function validarCadastro() {

    if (getValueById('txtNome').trim().length <= 5) {
        getById('dvAlert').innerHTML = '<div class="alert ">Informe um nome válido.</div>';
        return false;
    }

    var email = getValueById('txtEmail');
    if (!/.+@.+\..+/.test(email)) {
        getById('dvAlert').innerHTML = '<div class="alert red darken-2">Informe o e-mail cadastrado.</div>';
        return false;
    }

    if (
        (getValueById('txtSenha').trim().length < 7 || getValueById('txtSenhaConfirmar').trim().length < 7)
        ||
        (getValueById('txtSenha') != getValueById('txtSenhaConfirmar'))
    ) {
        getById('dvAlert').innerHTML = '<div class="alert red darken-2">As senhas não correspondem ou são inválidas.</div>';
        return false;
    }

    return true;
}

function validarEditar() {

    if (getValueById('txtNome').trim().length <= 5) {
        getById('dvAlert').innerHTML = '<div class="alert red darken-2">Informe um nome válido.</div>';
        return false;
    }

    return true;
}

function validarSenha() {
    if (
        (getValueById('txtSenha').trim().length < 7 || getValueById('txtSenhaConfirmar').trim().length < 7)
        ||
        (getValueById('txtSenha') != getValueById('txtSenhaConfirmar'))
    ) {
        getById('dvAlert').innerHTML = '<div class="alert red darken-2">As senhas não correspondem ou são inválidas.</div>';
        return false;
    }

    return true;
}

function validarEmail() {
    var email = getValueById('txtEmail');

    if (!/.+@.+\..+/.test(email)) {
        getById('dvAlert').innerHTML = '<div class="alert red darken-2">Informe o e-mail cadastrado.</div>';
        return false;
    }

    return true;
}

function validarRedefinirSenhaExterno() {
    if (
        (getValueById('txtSenha').trim().length < 7 || getValueById('txtSenhaConfirmar').trim().length < 7)
        ||
        (getValueById('txtSenha') != getValueById('txtSenhaConfirmar'))
    ) {
        getById('dvAlert').innerHTML = '<div class="alert red darken-2">As senhas não correspondem ou são inválidas.</div>';
        return false;
    }

    if (getValueById('txtToken').trim().length < 10) {
        getById('dvAlert').innerHTML = '<div class="alert red darken-2">Token inválido.</div>';
        return false;
    }

    return true;
}