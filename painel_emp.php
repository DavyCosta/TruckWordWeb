<?php
include('verifica_login.php');
?>
<!DOCTYPE html>

<html lang="PT_br" >
  <head>
    <meta charset="UTF-8">
    <title> TruckWorld </title>
    <link rel="stylesheet" href="styleemp.css">
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
        <a href="painel_emp.php">
          <i class='bx bxs-grid-alt bx-spin-hover'></i>
          <span class="links_name">Início</span>
        </a>
         <span class="tooltip">Início</span>
      </li>
      <li>
       <a href="minhaConta_emp.php">
         <i class='bx bx-user bx-tada-hover' ></i>
         <span class="links_name">Minha Conta</span>
       </a>
       <span class="tooltip">Minha Conta</span>
     </li>
     <li>
       <a href="emandamento_emp.php">
         <i class='bx bx-pie-chart-alt-2 bx-spin-hover' ></i>
         <span class="links_name">Em Andamento</span>
       </a>
       <span class="tooltip">Em Andamento</span>
     </li>
     <li>
       <a href="historico_emp.php">
         <i class='bx bxs-hot bx-spin-hover' ></i>
         <span class="links_name">Histórico</span>
       </a>
       <span class="tooltip">Histórico</span>
     </li>
     <li>
       <a href="configuracao_emp.php">
         <i class='bx bx-cog bx-spin-hover' ></i>
         <span class="links_name">Configurações</span>
       </a>
       <span class="tooltip">Configurações</span>
     </li>
     <li class="profile">
         <div class="profile-details ">
           <img src="2.png" alt="profileImg">
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['nome'];?></div>
             <div class="job">Transportadora</div>
           </div>
         </div>
         <a href="logout.php" class='bx bx-log-out ' id="log_out" ></a>
     </li>
    </ul>
  </div>


<!-- AQUI COMEÇA A PAGINA -->
      <?php
	include_once("conexao.php");
	$result_fretes = "SELECT * FROM fretes";
	$resultado_fretes = mysqli_query($conexao, $result_fretes);
?>

<section class="home-section">
<div class="container theme" role="main">
			<div class="page-header">
				<f>CADASTRAR FRETES</f>
			</div>
					

<!-- cadastraaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->

            <main class="cards ">

          <section class="card shop">		
			  		<button type="button" class="btn btn-success"  data-toggle="modal" data-target="#myModal">Cadastrar Novo Frete</button>
				<!-- Inicio Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header" id="moda2">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title text-center" id="myModalLabel" >Cadastrar Fretes </h4>
						</div>

						<div class="modal-body">
							<form method="POST" action="http://localhost/TruckWordWeb/processa_cad2.php" enctype="multipart/form-data">
								
							
								<div class="form-group">
									<label for="recipient-descricao" class="control-label">Descrição da carga:</label>
									<input name="descricao" type="text" class="form-control" id="recipient-descricao" placeholder="Computadores">
								</div>
								<div class="form-group">
									<label for="recipient-empresa" class="control-label">Empresa:</label>
									<input name="empresa" type="text" class="form-control" id="recipient-empresa" placeholder="Eniac Transportes">
								</div>
								<div class="form-group">
									<label for="recipient-valor" class="control-label">Valor/R$:</label> 
									<input name="valor" type="number" class="form-control" id="recipient-valor" placeholder="R$ 5000,00">
								</div>
								<div class="form-group">
									<label for="recipient-peso" class="control-label">Peso/Kg:</label>
									<input name="peso" type="number" class="form-control" id="recipient-peso" placeholder="10.000 Kg">
								</div>
								<div class="form-group">
									<label for="recipient-distancia" class="control-label">Distancia/Km:</label>
									<input name="distancia" type="number" class="form-control" id="recipient-distancia" placeholder="800 Km">
								</div>
								<div class="form-group">
									<label for="recipient-combustivelgasto" class="control-label">Combustivel a Gastar:</label>
									<input name="combustivelGasto" type="number" class="form-control" id="recipient-combustivelgasto" placeholder="1.500 Litros">
								</div>
								<div class="form-group">
									<label for="recipient-localcoleta" class="control-label">Local da Coleta:</label>
									<input name="localColeta" type="text" class="form-control" id="recipient-localcoleta" placeholder="Guarulhos">
								</div>
								<div class="form-group">
									<label for="recipient-datacoleta" class="control-label">Data da Coleta:</label>
									<input name="dataColeta" type="date" class="form-control" id="recipient-datacoleta" >
								</div>
								<div class="form-group">
									<label for="recipient-localentrega" class="control-label">local da Entrega:</label>
									<input name="localEntrega" type="text" class="form-control" id="recipient-localentrega" placeholder="Rio de Janeiro">
								</div>
								<div class="form-group">
									<label for="recipient-dataentrega" class="control-label">Data da Entrega:</label>
									<input name="dataEntrega" type="date" class="form-control" id="recipient-dataentrega" >
								</div>	



								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Cadastrar Novo Frete</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Fim Modal -->


			</div>
		
	







      
            <?php while($rows_fretes = mysqli_fetch_assoc($resultado_fretes)){ ?>

            <main class="cards ">
          <section class="card contact">
            <div class="icon">
                <img src="image/Temp.png" alt="Contact us.">
            </div>
            <h3>Carga de <?php echo $rows_fretes['descricao']; ?></h3>
            <span>De: <?php echo $rows_fretes['localColeta']; ?></span>
            <span>Para: <?php echo $rows_fretes['localEntrega']; ?></span>
            <div >
										<button type="button" id="int"  class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal<?php echo $rows_fretes['codigo']; ?>">Visualizar</button>
										
										<button type="button" id="int" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $rows_fretes['codigo']; ?>" 
										data-whatevercodigo="<?php echo $rows_fretes['codigo']; ?>"  
										data-whateverdescricao="<?php echo $rows_fretes['descricao']; ?>"  
										data-whateverempresa="<?php echo $rows_fretes['empresa']; ?>"  
										data-whatevervalor="<?php echo $rows_fretes['valor']; ?>"  
										data-whateverpeso="<?php echo $rows_fretes['peso']; ?>"  
										data-whateverdistancia="<?php echo $rows_fretes['distancia']; ?>"  
										data-whatevercombustivelgasto="<?php echo $rows_fretes['combustivelGasto']; ?>"  
										data-whateverlocalcoleta="<?php echo $rows_fretes['localColeta']; ?>"  
										data-whateverdatacoleta="<?php echo $rows_fretes['dataColeta']; ?>"  
										data-whateverlocalentrega="<?php echo $rows_fretes['localEntrega']; ?>"  
										data-whateverdataentrega="<?php echo $rows_fretes['dataEntrega']; ?>"  
										>Editar</button>
										
										<a href="processa_apag.php?codigo=<?php echo $rows_fretes['codigo']; ?>"><button type="button" id="int"  class="btn btn-success">Apagar</button></a>

									</div>
          
								<!-- Inicio Modal -->
								<div class="modal fade " id="myModal<?php echo $rows_fretes['codigo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header" id="moda1">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title text-center" id="myModalLabel">Transportadora <?php echo $rows_fretes['empresa']; ?></h4>
											</div>
											<div class="modal-body">
                        <div class="bloco"><h class="texx">Valor:</h><h id="valor"> <?php echo $rows_fretes['valor']; ?> R$</h>
												<h class="texx">Peso:</h><h> <?php echo $rows_fretes['peso']; ?> Kg</h></div><p>
												<h class="texx">Descrição:</h><h> <?php echo $rows_fretes['descricao']; ?></h><p>
												<h class="texx">Empresa:</h><h> <?php echo $rows_fretes['empresa']; ?></h><p>
                        <h class="texx">Distância:</h><h> <?php echo $rows_fretes['distancia']; ?>Km</h><p>
												<h class="texx">Combustivel Gasto:</h><h> <?php echo $rows_fretes['combustivelGasto']; ?>L</h><p>
												<h class="texx">Coleta:</h><p><h class="texx"></h><h> <?php echo $rows_fretes['localColeta']; ?></h><p>
												<p><h class="texx"></h><h><?php echo $rows_fretes['dataColeta']; ?></h><p>
												<h class="texx">Entrega:</h><p><h class="texx"></h><h> <?php echo $rows_fretes['localEntrega']; ?></h>
												<p><h class="texx"></h><h><?php echo $rows_fretes['dataEntrega']; ?></h>
                        <p>
  						</div>
					</div>
				</div>
			</div>
			<!-- Fim Modal -->   
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" id="moda1">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title " id="exampleModalLabel">codigo do frete</h4>
					</div>
					<div class="modal-body">
						<form method="POST" action="http://localhost/TruckWordWeb/processaf.php" enctype="multipart/form-data">
							<div class="form-groupp">
								<label for="recipient-codigo" ></label>
								<input name="codigo"  class="b" id="recipient-codigo" >
							</div>
							<div class="form-group">
								<label for="recipient-descricao" class="control-label">Descrição da carga:</label>
								<input name="descricao" type="text" class="form-control" id="recipient-descricao" >
							</div>
							<div class="form-group">
								<label for="recipient-empresa" class="control-label">Empresa:</label>
								<input name="empresa" type="text" class="form-control" id="recipient-empresa" >
							</div>
							<div class="form-group">
								<label for="recipient-valor" class="control-label">Valor/R$:</label> 
								<input name="valor" type="number" class="form-control" id="recipient-valor" >
							</div>
							<div class="form-group">
								<label for="recipient-peso" class="control-label">Peso/Kg:</label>
								<input name="peso" type="number" class="form-control" id="recipient-peso" >
							</div>
							<div class="form-group">
								<label for="recipient-distancia" class="control-label">Distancia/Km:</label>
								<input name="distancia" type="number" class="form-control" id="recipient-distancia" >
							</div>
							<div class="form-group">
								<label for="recipient-combustivelgasto" class="control-label">Combustivel a Gastar:</label>
								<input name="combustivelGasto" type="number" class="form-control" id="recipient-combustivelgasto" >
							</div>
							<div class="form-group">
								<label for="recipient-localcoleta" class="control-label">Local da Coleta:</label>
								<input name="localColeta" type="text" class="form-control" id="recipient-localcoleta" >
							</div>
							<div class="form-group">
								<label for="recipient-datacoleta" class="control-label">Data da Coleta:</label>
								<input name="dataColeta" type="date" class="form-control" id="recipient-datacoleta" >
							</div>
							<div class="form-group">
								<label for="recipient-localentrega" class="control-label">local da Entrega:</label>
								<input name="localEntrega" type="text" class="form-control" id="recipient-localentrega" >
							</div>
							<div class="form-group">
								<label for="recipient-dataentrega" class="control-label">Data da Entrega:</label>
								<input name="dataEntrega" type="date" class="form-control" id="recipient-dataentrega" >
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
		</div>
		
                </section>
							<?php } ?>
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
			var recipientdescricao = button.data('whateverdescricao')
			var recipientempresa = button.data('whateverempresa')
        	var recipientvalor = button.data('whatevervalor')
			var recipientpeso = button.data('whateverpeso')
        	var recipientdistancia = button.data('whateverdistancia')
        	var recipientcombustivelgasto = button.data('whatevercombustivelgasto')
       		var recipientlocalcoleta = button.data('whateverlocalcoleta')
        	var recipientdatacoleta = button.data('whateverdatacoleta')
        	var recipientlocalentrega = button.data('whateverlocalentrega')
        	var recipientdataentrega = button.data('whateverdataentrega')



				// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
				var modal = $(this)
				modal.find('.modal-title').text('Código do Fretes:   0000'  + recipient)
				modal.find('#codigo_fretes').val(recipient)
				modal.find('#recipient-codigo').val(recipientcodigo)
				modal.find('#recipient-descricao').val(recipientdescricao)
        		modal.find('#recipient-empresa').val(recipientempresa)
				modal.find('#recipient-valor').val(recipientvalor)
				modal.find('#recipient-peso').val(recipientpeso)
				modal.find('#recipient-distancia').val(recipientdistancia)
				modal.find('#recipient-combustivelgasto').val(recipientcombustivelgasto)
				modal.find('#recipient-localcoleta').val(recipientlocalcoleta)
        		modal.find('#recipient-datacoleta').val(recipientdatacoleta)
				modal.find('#recipient-localentrega').val(recipientlocalentrega)
				modal.find('#recipient-dataentrega').val(recipientdataentrega)        
			})
		</script>



</body>
</html>