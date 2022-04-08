/*-------- Carregamento da foto -------*/

'use strict'

let photo = document.getElementById('imgPhoto');
let file = document.getElementById('flImage');

photo.addEventListener('click', () => {
    file.click();
});

file.addEventListener('change', () => {

    if (file.files.length <= 0) {
        return;
    }

    let reader = new FileReader();

    reader.onload = () => {
        photo.src = reader.result;
    }

    reader.readAsDataURL(file.files[0]);
});


/*-------- Formatar entrada CPF -------*/

function formataCPF(cpf) {
    const elementoAlvo = cpf
    const cpfAtual = cpf.value   
    
    let cpfAtualizado;
    
    cpfAtualizado = cpfAtual.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, 
     (argumento1, argumento2, argumento3, argumento4) => argumento1 + '.' + argumento2 + '.' + argumento3 + '-' + argumento4)  
    elementoAlvo.value = cpfAtualizado; 
    }    

    const cpf = document.querySelector("cpf");
cpf.addEventListener("input", function(){
 if (cpf.validity.patternMismatch) {
   cpf.setCustomValidity("Deveria ter apenas números aqui =) ");
   btnEnviar.disabled = true;
   } else {
     cpf.setCustomValidity("");
     btnEnviar.disabled = false;
   }
 })

$(document).ready(function () { 
    var $campo = $("#cep");
    $campo.mask('00000-000', {reverse: true});
});
