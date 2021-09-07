
const formulario = document.querySelector('[data-form]');

formulario.addEventListener('submit', function (evento){
    evento.preventDefault();

    const nome = evento.target.querySelector('[data-nome]').value;
    const idade = evento.target.querySelector('[data-idade]').value;

    inseriRegistro(nome,idade);
   window.location.href = "../php/indexPHP.php";
})

const inseriRegistro = function (nome,idade){
    let dados = JSON.stringify({nome:nome,idade:idade})
    return fetch ("http://localhost:8080/php/indexPHP.php",{
        method:'POST',
        headers: {
            'Content-type': 'application/json'
        },
        body: {
            dados: dados
        }
    }).then (resposta => {
        if (resposta.ok) {
            return resposta.body;    
        }
        throw new Error('Nao foi possivel inserir o registro');
    })
} 