function tamanhoMaximo(nome,email) {
    tamanho_nome = nome.value;
    tamanho_email = nome.value;
    if (tamanho_nome.length > 50 || tamanho_nome.length > 50 ){
        alert("Campo excede o tamanho maximo. Campo Nome e E-mail aceita apenas 50 caracteres.");
    }
}


function camposVazios(nome,email,idade){
    if (nome.value == "" || idade.value == "" || email.value == "") {
        alert("Campo obrigatório vazio. Gentileza preencha os campos adequadamente.")
    }
}


function validar(){
    var nome = document.getElementById('nome');
    var idade = document.getElementById('idade');
    var email = document.getElementById('email');

    camposVazios(nome,email,idade);
    tamanhoMaximo(nome,email);
}

function cancelar() {
    document.getElementById('form_cadastro').reset();
}