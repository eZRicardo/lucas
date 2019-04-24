function enviar(){
	var idAssociado = document.getElementById("idAssociado").value;
	var dataAssociacao = document.getElementById("dataAssociacao").value;
	var idDocumento = document.getElementById("idDocumento").value;

		if(idDocumento=='associacao'){
 	window.open('imprimeTermoAdesao.php?id='+idAssociado+'&data='+dataAssociacao);

}

 if(idDocumento=='desassociacao'){
 	window.open('imprimeTermoDesassociacao.php?id='+idAssociado+'&data='+dataAssociacao);

 }

 if(idDocumento=='certificado'){
	window.open('imprimeCertificado.php?id='+idAssociado+'&data='+dataAssociacao);

}



}
