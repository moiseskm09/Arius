<?php 
include_once 'config/conexao.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js"></script>
    <link rel="stylesheet" href="assets/css/estilo.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <title>PROJETOS - ARIUS SISTEMAS</title>
  </head>
  <body class="fundo-azul">
      <div class="container-fluid">
          <div class="row mt-2">
              <div class="col-lg-12 col-md-12 col-12 text-end">
                  <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <i class="fas fa-plus-circle"></i>
</button>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-3 col-md-3 col-12">
                  <ul class="columns">
    <li class="column to-do-column">
      <div class="column-header">
        <h4>HÁ FAZER</h4>
      </div>
      <ul class="task-list" id="to-do">
          <?php 
          $sql = "SELECT * FROM projetos WHERE situacao = 1 ORDER BY posicao_y";
          $query = mysqli_query($conexao, $sql);
          while($haFazer = mysqli_fetch_assoc($query)){
              if($haFazer["situacao"] == 1){
                  ?>
        <li class="task" id="arrayordem_<?php echo $haFazer["cod_projeto"]?>">
            <p><?php echo $haFazer["titulo"]."<br>".date('d-m-Y', strtotime($haFazer["data"]));?></p>
        </li>
        <?php
                      }
          }
          ?>
      </ul>
    </li>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-3 col-12">
                  <ul class="columns">

    <li class="column doing-column">
      <div class="column-header">
        <h4>EM ANDAMENTO</h4>
      </div>
      <ul class="task-list" id="doing">
          <?php 
          $sql2 = "SELECT * FROM projetos WHERE situacao = 2";
          $query2 = mysqli_query($conexao, $sql2);
          while($emAndamento = mysqli_fetch_assoc($query2)){
              if($emAndamento["situacao"] == 2){
                  ?>
        <li class="task" id="<?php echo $emAndamento["cod_projeto"];?>">
            <p><?php echo $emAndamento["titulo"]."<br>".date('d-m-Y', strtotime($emAndamento["data"]));?></p>
            
        </li>
        <?php
                      }
          }
          ?>
      </ul>
    </li>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-3 col-12">
                  <ul class="columns">

    <li class="column done-column">
      <div class="column-header">
        <h4>CONCLUÍDOS</h4>
      </div>
      <ul class="task-list" id="done">
          <?php 
          $sql3 = "SELECT * FROM projetos WHERE situacao = 3";
          $query3 = mysqli_query($conexao, $sql3);
          while($Concluidos = mysqli_fetch_assoc($query3)){
              if($Concluidos["situacao"] == 3){
                  ?>
        <li class="task" id="<?php echo $Concluidos["cod_projeto"]?>">
            <p><?php echo $Concluidos["titulo"]."<br>".date('d-m-Y', strtotime($Concluidos["data"]));?></p>
        </li>
        <?php
                      }
          }
          ?>
      </ul>
    </li>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-3 col-12">
                  <ul class="columns">

    <li class="column trash-column">
      <div class="column-header">
        <h4>EXCLUIR</h4>
      </div>
      <ul class="task-list" id="trash">
          <?php
          $sql4 = "SELECT * FROM projetos WHERE situacao = 4";
          $query4 = mysqli_query($conexao, $sql4);
          while($excluir = mysqli_fetch_assoc($query4)){
              if($excluir["situacao"] == 4){
                  ?>
        <li class="task" id="<?php echo $excluir["cod_projeto"]?>">
            <p><?php echo $excluir["titulo"]."<br>".date('d-m-Y', strtotime($excluir["data"]));?></p>
        </li>
        <?php
                      }
          }
          ?>
      </ul>
      <div class="column-button">
        <button class="button delete-button" onclick="emptyTrash()">Excluir</button>
      </div>
    </li>
                  </ul>
              </div>
          </div> 
          <div id="msg"></div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header fundo_amarelo">
        <h5 class="modal-title cor-azul" id="exampleModalLabel">Adicionar Tarefa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-2">
        <div class="row">
              <div class="col-lg-12 col-md-12 col-12">
                  <div class="input-group mb-3">
  <input type="text" class="form-control" id="taskText" placeholder="Adicione a descrição da tarefa" aria-label="nome da tarefa" aria-describedby="add" onkeydown="if (event.keyCode == 13) document.getElementById('add').click()">
</div>
              </div>
          </div>
      </div>
      <div class="modal-footer p-1">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success" id="add" onclick="addTask()">Adicionar</button>
      </div>
    </div>
  </div>
</div>
      
    <script src="assets/js/kanban.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script>
			$(document).ready(function () {
                $(function () {
                    $("#to-do").sortable({update: function () {
							var ordem_atual = $(this).sortable("serialize");
							$.post("editar_posicoes.php", ordem_atual, function (retorno) {
								//Imprimir retorno do arquivo proc_alt_ordem.php
								$("#msg").html(retorno);
								//Apresentar a mensagem leve
								$("#msg").slideDown('slow');
								retirarMsg();
							});
						}
                    });
                });
				
				//Retirar a mensagem após 1700 milissegundos
				function retirarMsg(){
					setTimeout( function (){
						$("#msg").slideUp('slow', function(){});
					}, 1700);
				}
            });
		</script>
      </body>
</html>