//números armazenados no jogo da sorte
const numerosSorteados = [4, 12, 89];

//manipular o formulário do jogo
document.getElementById("verificar-btn").addEventListener("click", function () {
    const inputs = document.querySelectorAll("#numeros-inputs input");
    const numerosEscolhidos = Array.from(inputs).map(input => parseInt(input.value));
    
    const acertos = numerosEscolhidos.filter(num => numerosSorteados.includes(num));
    const desconto = acertos.length * 15;

    //exibir o resultado
    const resultado = document.getElementById("resultado");
    if (acertos.length > 0) {
        resultado.textContent = `Parabéns! Você acertou ${acertos.length} número(s): ${acertos.join(", ")}. Você ganhou ${desconto}% de desconto!`;
        resultado.style.color = "green";
    } else {
        resultado.textContent = "Que pena! Você não acertou nenhum número. Tente novamente!";
        resultado.style.color = "red";
    }
});

//manipular o formulário de serviço
document.getElementById("servico-form").addEventListener("submit", function (event) {
    event.preventDefault();

    const servico = document.getElementById("servico").value;
    const valor = parseFloat(document.getElementById("valor").value);

    alert(`Você escolheu o serviço ${servico} e definiu o valor de R$ ${valor.toFixed(2)}.`);
});
