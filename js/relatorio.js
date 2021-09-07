//const formulario = document.querySelector('[data-form]');

$('#inserir').click(function(evento){
    evento.preventDefault();

    $.ajax({
        url:"http://localhost:8080/php/relatorioAjax.php",
        type:"post",
        datatype:"json",
        data: $("#formulario").serialize(),
        } 
    )
})