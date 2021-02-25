function direita(){
	document.getElementById('wrapper').scrollTo({left:1000});
}
function esquerda(){
	document.getElementById('wrapper').scrollTo({left:0});
}
function position(){
	var pag = window.open('conteudo.html');
	pag.scroll(500, 0);
	pag.getElementById('wrapper').scrollTo({left:1000});
}