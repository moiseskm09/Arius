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
    <title>INAUGURAÇÕES</title>
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
        <li class="task">
            <p>Rihappy - Vila Gomes<br> 18/08</p>
        </li>
        <li class="task">
            <p>Empório da Natureza<br> 18/08</p>
        </li>
        <li class="task">
            <p>Rihappy - Arujá<br> 25/08</p>
        </li>
        <li class="task">
            <p>Rihappy - São Luis<br> 31/08</p>
        </li>
        <li class="task">
            <p>Empório da Natureza<br> 18/08</p>
        </li>
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
      </ul>
      <div class="column-button">
        <button class="button delete-button" onclick="emptyTrash()">Excluir</button>
      </div>
    </li>
                  </ul>
              </div>
          </div>
      </div> 
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>