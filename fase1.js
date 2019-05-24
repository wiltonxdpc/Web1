		$(document).ready(function(){
			var acertos = 0;
			var clicks = 0;
			var imagens = [];
			var pracima = [];
			var cartasviradas = [];
			for(var i = 0 ; i<=15;i++){
				var aux ={
					src:"imagens/1/"+i+".jpg",
					id:i%8
				}
				imagens.push(aux);	
			}
			var novaimagem = [];
			while(novaimagem.length !== imagens.length){
				var auxiliar = Math.floor(Math.random()*imagens.length);
				if(novaimagem.indexOf(imagens[auxiliar])< 0){
						novaimagem.push(imagens[auxiliar]);
				}
			}
			for(var j = 0 ; j<=15;j++){
			pracima = $('.cima:eq('+j+')');
			pracima.css("background-image","url('"+novaimagem[j].src+"')");
			pracima.attr("id",novaimagem[j].id);
			}
			$('.cartao').click(function(){
				if(cartasviradas.length < 2){

						var lados = $(this).find('.pra');
						if(lados[0].classList.length>2){
							return;
						}
						lados[0].classList.toggle("virado");
						lados[1].classList.toggle("virado");
						cartasviradas.push(this);
						
						if(cartasviradas.length === 2){
							clicks = clicks +2;
							if(clicks>=100){
								$('#modalfalha').modal('show');
								return ;
							}
							if(cartasviradas[0].childNodes[1].id === cartasviradas[1].childNodes[1].id){
								cartasviradas[0].childNodes[3].classList.toggle("acerto");
								cartasviradas[0].childNodes[1].classList.toggle("acerto");
								cartasviradas[1].childNodes[3].classList.toggle("acerto");
								cartasviradas[1].childNodes[1].classList.toggle("acerto");
								acertos++;
								cartasviradas=[];
								console.log(acertos);
								if(acertos ==8){
									$('#modalwin').modal('show');
								}
							}
							
						}
				}else{
					cartasviradas[0].childNodes[3].classList.toggle("virado");
					cartasviradas[0].childNodes[1].classList.toggle("virado");
					cartasviradas[1].childNodes[3].classList.toggle("virado");
					cartasviradas[1].childNodes[1].classList.toggle("virado");
					cartasviradas = [];
				}
				
			});	
		});
