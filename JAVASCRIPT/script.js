function somar(){
    let valor_1 = Number(document.getElementById('valor_1').value);
    let valor_2 = Number(document.getElementById('valor_2').value);

    let soma = valor_1 + valor_2;

    document.getElementById('resultado').innerHTML = "Resultado: " + soma;
}

function subtrair(){
    let valor_1 = Number(document.getElementById('valor_1').value);
    let valor_2 = Number(document.getElementById('valor_2').value);

    let subtracao = valor_1 - valor_2;

    document.getElementById('resultado').innerHTML = "Resultado: " + subtracao;
}

function multiplicacao(){
    let valor_1 = Number(document.getElementById('valor_1').value);
    let valor_2 = Number(document.getElementById('valor_2').value);

    let multiplicacao = valor_1 * valor_2;

    document.getElementById('resultado').innerHTML = "Resultado: " + multiplicacao;
}

function dividir(){
    let valor_1 = Number(document.getElementById('valor_1').value);
    let valor_2 = Number(document.getElementById('valor_2').value);

    if(valor_2 === 0){
        document.getElementById('resultado').innerHTML = "Não é possível dividir por zero!";
    }
    else{
        let divisao = valor_1 / valor_2;
        document.getElementById('resultado').innerHTML = "Resultado: " + divisao;
    }
}