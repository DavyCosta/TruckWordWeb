<?php
include('verifica_login.php');
?>
<!DOCTYPE html>

<html lang="PT_br" >
  <head>
    <meta charset="UTF-8">
    <title> TruckWorld </title>
    <link rel="stylesheet" href="minhaconta.css">
    <!-- Boxicons CDN Link -->
    <link rel="icon" href="image/ico.ico">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link href="css/bootstrap.min.css" rel="stylesheet">


     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">TruckWorld </div>
        <img src="image/logo2.png"class='bx bxl-c-plus-plus icon'>

        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Procurar...">
         <span class="tooltip">Procurar</span>
      </li>
      <li>
        <a href="painel.php">
          <i class='bx bxs-grid-alt bx-spin-hover'></i>
          <span class="links_name">Início</span>
        </a>
         <span class="tooltip">Início</span>
      </li>
      <li>
       <a href="minhaconta.php">
         <i class='bx bx-user bx-tada-hover' ></i>
         <span class="links_name">Minha Conta</span>
       </a>
       <span class="tooltip">Minha Conta</span>
     </li>
     <li>
       <a href="emandamento.php">
         <i class='bx bx-pie-chart-alt-2 bx-spin-hover' ></i>
         <span class="links_name">Em Andamento</span>
       </a>
       <span class="tooltip">Em Andamento</span>
     </li>
     <li>
       <a href="historico.php">
         <i class='bx bxs-hot bx-spin-hover' ></i>
         <span class="links_name">Histórico</span>
       </a>
       <span class="tooltip">Histórico</span>
     </li>
     <li>
       <a href="configuracao.php">
         <i class='bx bx-cog bx-spin-hover' ></i>
         <span class="links_name">Configurações</span>
       </a>
       <span class="tooltip">Configurações</span>
     </li>
     <li class="profile">
         <div class="profile-details ">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['nome'];?></div>
             <div class="job">Transportador</div>
           </div>
         </div>
         <a href="logout.php" class='bx bx-log-out ' id="log_out" ></a>
     </li>
    </ul>
  </div>


<!-- AQUI COMEÇA A PAGINA -->
      <?php
	include_once("conexao.php");
	$result_usuario = "SELECT * FROM usuario";
	$resultado_usuario = mysqli_query($conexao, $result_usuario);
?>

<section class="home-section">
<div class="container theme" role="main">
			<div class="page-header">
				<f>Editar Contas</f>
			</div>
      <?php while($rows_usuario = mysqli_fetch_assoc($resultado_usuario)){ ?>
        
      <button type="button" id="int" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal"  
										data-whatevercodigo="<?php echo $rows_usuario['codigo']; ?>"  
										data-whatevercpf="<?php echo $rows_usuario['cpf']; ?>"  
                    data-whatevernome="<?php echo $rows_usuario['nome']; ?>"  
										data-whateverusuario="<?php echo $rows_usuario['usuario']; ?>"  
										data-whatevercep="<?php echo $rows_usuario['cep']; ?>"  
										data-whatevercelular="<?php echo $rows_usuario['celular']; ?>"  
										data-whatevertelefone="<?php echo $rows_usuario['telefone']; ?>"  
										data-whatevercnh="<?php echo $rows_usuario['cnh']; ?>"  
										data-whatevercategoria="<?php echo $rows_usuario['categoria']; ?>"  
										data-whatevermarca="<?php echo $rows_usuario['marca']; ?>"  
										data-whatevermodelo="<?php echo $rows_usuario['modelo']; ?>"  
                    data-whatevercarroceria="<?php echo $rows_usuario['carroceria']; ?>"  
										data-whateverplaca="<?php echo $rows_usuario['placa']; ?>"  
										data-whatevermedia="<?php echo $rows_usuario['media']; ?>"  
										data-whateversenha="<?php echo $rows_usuario['senha']; ?>"  

										>Editar a conta <?php echo $rows_usuario['nome']; ?></button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" id="moda1">
						<h4 class="modal-title " id="exampleModalLabel">codigo do frete</h4>
					</div>
					<div class="modal-body">  <form method="POST" action="http://localhost/TruckWordWeb/processausu.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="recipient-codigo" ></label>
      <input name="codigo"  class="b" id="recipient-codigo" >
    </div>
    <div class="form-group">
      <label for="recipient-cpf"  class="control-label">cpf:</label>
      <input name="cpf" type="text" class="form-control" id="recipient-cpf" >
    </div>
    <div class="form-group">
      <label for="recipient-nome" class="control-label">nome:</label>
      <input name="nome" type="text" class="form-control" id="recipient-nome" >
    </div>
    <div class="form-group">
      <label for="recipient-usuario" class="control-label">usuario:</label> 
      <input name="usuario" type="text" class="form-control" id="recipient-usuario" >
    </div>
    <div class="form-group">
      <label for="recipient-cep" class="control-label">cep:</label>
      <input name="cep" type="text" class="form-control" id="recipient-cep" >
    </div>
    <div class="form-group">
      <label for="recipient-celular" class="control-label">celular:</label>
      <input name="celular" type="text" class="form-control" id="recipient-celular" >
    </div>
    <div class="form-group">
      <label for="recipient-telefone" class="control-label">telefone:</label>
      <input name="telefone" type="text" class="form-control" id="recipient-telefone" >
    </div>
    <div class="form-group">
      <label for="recipient-cnh" class="control-label">cnh:</label>
      <input name="cnh" type="text" class="form-control" id="recipient-cnh" >
    </div>
    <div class="form-group">
      <label for="recipient-categoria" class="control-label">categoria:</label>
      <input name="categoria" type="text" class="form-control" id="recipient-categoria" >
    </div>
    <div class="form-group">
      <label for="recipient-marca" class="control-label">marca:</label>
      <input name="marca" type="text" class="form-control" id="recipient-marca" >
    </div>
    <div class="form-group">
      <label for="recipient-modelo" class="control-label">modelo:</label>
      <input name="modelo" type="dattexte" class="form-control" id="recipient-modelo" >
    </div>
    <div class="form-group">
      <label for="recipient-carroceria" class="control-label">carroceria:</label>
      <input name="carroceria" type="text" class="form-control" id="recipient-carroceria" >
    </div>
    <div class="form-group">
      <label for="recipient-placa" class="control-label">placa:</label>
      <input name="placa" type="text" class="form-control" id="recipient-placa" >
    </div>
    <div class="form-group">
      <label for="recipient-media" class="control-label">media:</label>
      <input name="media" type="text" class="form-control" id="recipient-media" >
    </div>
    <div class="form-group">
      <label for="recipient-senha" class="control-label">Senha:</label>
      <input name="senha" type="text" class="form-control" id="recipient-senha" >
    </div>
  
    <input name="id" type="hidden" id="id_curso">
    <div class="modal-footer">
      <button type="button" id="cancelar" class="btn btn-primary" data-toggle="modal">Cancelar</button>
      <button type="submit" id="alterar" class="btn btn-primary" data-toggle="modal">Alterar</button>
      </div>
						</form>
					</div>			  
				</div>
			</div>
		</div>      <?php } ?>

      </section>

</div>		
</div>

    
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="script.js"></script>
    <script type="text/javascript">
			$('#exampleModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget) // Button that triggered the modal
			var recipient = button.data('whatever') // Extract info from data-* attributes
      var recipientcodigo = button.data('whatevercodigo')
			var recipientcpf = button.data('whatevercpf')
			var recipientnome = button.data('whatevernome')
        	var recipientusuario = button.data('whateverusuario')
			var recipientcep = button.data('whatevercep')
        	var recipientcelular = button.data('whatevercelular')
        	var recipienttelefone = button.data('whatevertelefone')
       		var recipientcnh = button.data('whatevercnh')
        	var recipientcategoria = button.data('whatevercategoria')
        	var recipientmarca = button.data('whatevermarca')
        	var recipientmodelo = button.data('whatevermodelo')
        	var recipientcarroceria = button.data('whatevercarroceria')
        	var recipientplaca = button.data('whateverplaca')
        	var recipientmedia = button.data('whatevermedia')
        	var recipientsenha = button.data('whateversenha')

				// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
				var modal = $(this)
				modal.find('.modal-title').text('Editando a Conta do '  + recipientnome)
				modal.find('#codigo_usuario').val(recipient)
				modal.find('#recipient-codigo').val(recipientcodigo)
				modal.find('#recipient-cpf').val(recipientcpf)
        		modal.find('#recipient-nome').val(recipientnome)
				modal.find('#recipient-usuario').val(recipientusuario)
				modal.find('#recipient-cep').val(recipientcep)
				modal.find('#recipient-celular').val(recipientcelular)
				modal.find('#recipient-telefone').val(recipienttelefone)
				modal.find('#recipient-cnh').val(recipientcnh)
        		modal.find('#recipient-categoria').val(recipientcategoria)
				modal.find('#recipient-marca').val(recipientmarca)
				modal.find('#recipient-modelo').val(recipientmodelo)  
        modal.find('#recipient-carroceria').val(recipientcarroceria)        
				modal.find('#recipient-placa').val(recipientplaca)        
				modal.find('#recipient-media').val(recipientmedia)
        modal.find('#recipient-senha').val(recipientsenha)        
        
      
			})
		</script>



</body>
</html>