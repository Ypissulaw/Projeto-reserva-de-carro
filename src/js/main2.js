// Exibe o loader ao enviar o formulário
function mostrarLoader() {
    document.getElementById("loader").style.display = "block";
}

// Atualiza o resumo em tempo real
document.addEventListener("input", function () {
    document.getElementById("resumoRetirada").innerText =
        document.getElementById("cidade_retirada").value + " - " +
        document.getElementById("data_retirada").value + " às " +
        document.getElementById("hora_retirada").value;

    document.getElementById("resumoDevolucao").innerText =
        document.getElementById("cidade_devolucao").value + " - " +
        document.getElementById("data_devolucao").value + " às " +
        document.getElementById("hora_devolucao").value;
});
