function mostrarElementos() {
	var elementosExtras = document.getElementById("elementosExtras");
	if (elementosExtras.style.display === "none") {
		elementosExtras.style.display = "block";
		console.log("ENTROU AQUI");
	} else {
		elementosExtras.style.display = "none";
		console.log("PASSOU ALI AQUI");
	}
}

$(document).ready(function () {
	$("#barra-pesquisa").keyup(function () {
		let termo_pesquisa = $(this).val();
        alert('teste')
		$.ajax({
			type: "POST",
			url: "pesquisa_dinamica.php", // Arquivo PHP para processar a pesquisa
			data: { pesquisa: termo_pesquisa },
			success: function (response) {
				$("#resultado-pesquisa").html(response);
			},
		});
	});
});
