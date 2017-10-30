<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><div class="container" style="width:18%">
            <img src="<?= base_url()?>/assets/imagens/logo5.png" style="width:100%">
</div></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Configurações <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>adm/dashboard/logout">Logout</a>
            </li>
         
            
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

   <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <?php if($_SESSION['nivel_usuario']==1){ ?>
              <li class="nav-item">
                <a class="nav-link active" href="<?= base_url()?>adm/dashboard">Tela Inicial <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>adm/usuario">Usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>adm/refeicao">Refeição</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>adm/ticket">Valor Ticket</a>
            </li>
            <?php } else if($_SESSION['nivel_usuario']==3){?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>adm/refeicao">Refeição</a>
            </li>
            <?php } else{ ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url()?>adm/ticket">Valor Ticket</a>
            </li>
            <?php } ?>
            
          </ul>

        </nav>
