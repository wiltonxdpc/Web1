<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<script src="jquery.js"></script>
	<script src="fase2.js"></script>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<center><h1>Jogo Da Memória <img src="imagens/estrela-nada.png"><img src="imagens/estrela-nada.png"><img src="imagens/estrela-preenchida.png"></h1></center>
</head>
<body>
<div class="container">
   <div class="row">
    <div class="col">
    	<div class="cartao" id="cartao0">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div>
    </div>
    <div class="col">
    	<div class="cartao" id="cartao1">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div>
    </div>
    <div class="col">
    	<div class="cartao" id="cartao2">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div>
    </div>
    <div class="col">
    	<div class="cartao" id="cartao3">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div>
    </div>
  </div>
   <div class="row">
    <div class="col">
    	<div class="cartao" id="cartao4">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div>
    </div>
    <div class="col"><div class="cartao" id="cartao5">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div></div>
    <div class="col"><div class="cartao" id="cartao6">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div></div>
    <div class="col"><div class="cartao" id="cartao7">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div></div>
  </div>
   <div class="row">
    <div class="col"><div class="cartao" id="cartao8">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div></div>
    <div class="col"><div class="cartao" id="cartao9">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div></div>
    <div class="col"><div class="cartao" id="cartao10">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div></div>
    <div class="col"><div class="cartao" id="cartao11">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div></div>
  </div>
   <div class="row">
    <div class="col"><div class="cartao" id="cartao12">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div></div>
    <div class="col"><div class="cartao" id="cartao13">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div></div>
    <div class="col"><div class="cartao" id="cartao14">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div></div>
    <div class="col"><div class="cartao" id="cartao15">
    		<div class="pra cima"></div>
    		<div class="pra baixo"></div>
    	</div></div>
  </div>
 </div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalfalha">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<img src="imagens/gameover.png" style="width: 200px;margin-left: auto;margin-right: auto;display: block;padding-bottom: 30px;">
        <center><h2>Voce falhou, Clickou por mais de 100 vezes!!!!</h2></center>
      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-danger" onclick="location.reload();">Jogar novamente</button></center>
      </div>
    </div>
    </div>
  </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalwin">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<center>
      	<img src="imagens/estrela-100.png">
      	<img src="imagens/estrelapre-100.png">
      	<img src="imagens/estrelapre-100.png">
        </center>
        <center><h2>Voce venceu, Parabens!!!</h2></center>	
      </div>
      <div class="modal-footer">
        <center><a href="pagina3.php"><button type="button" class="btn btn-success" >Proxima Fase</button></center></a>
      </div>
    </div>
    </div>
  </div>
</div>
</body>
</html>