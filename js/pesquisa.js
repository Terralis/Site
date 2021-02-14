function pesquisar(){
	var input, filtro, menu, menuItens, links;
	input = document.getElementById("busca");
	filtro = input.value.toUpperCase();
	menu = document.getElementById("materias");
	menuItens = menu.getElementsByTagName("li");

	for (var i = 0; i < menuItens.length; i++) {
		links = menuItens[i].getElementsByTagName("a")[0];
		if (links.innerHTML.toUpperCase().indexOf(filtro) > -1) {
			menuItens[i].style.display = "";
		}
		else{
			menuItens[i].style.display = "none";
		}
	}
}

function opcaoPesquisa(){
	var nav = document.getElementById("pesquisa-materias");
	
	if (nav.style.display === "none") {
		nav.style.display = "block";
		// console.log(nav);
	}
	else{
		nav.style.display = "none";
	}
}

function opcaoPerfil(){
	var prof = document.getElementById("opcaoPerfil");
	
	if (prof.style.display === "none") {
		prof.style.display = "block";
		// console.log(prof);
	}
	else{
		prof.style.display = "none";
	}
}
