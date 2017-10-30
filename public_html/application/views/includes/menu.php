<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><div class="container" style="width:15%">
            <img src="<?= base_url()?>/assets/imagens/logo4.png" style="width:100%">
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
                <a class="nav-link" href="<?= base_url()?>dashboard/logout">Logout</a>
            </li>
         
            
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Procurar..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
        </form>
    </div>
</nav>
   
          
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="#"> ALFACINHO</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="<?= base_url()?>dashboard">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">
                Tela Inicial</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="<?= base_url()?>usuario">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">
                Usuários</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?= base_url()?>producao">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Produção de Alface</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="<?= base_url()?>clima">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">
                Dados Climatológicos</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-wrench"></i>
              <span class="nav-link-text">
                Components</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseComponents">
              <li>
                <a href="static-nav.html">Static Navigation</a>
              </li>
              <li>
                <a href="#">Custom Card Examples</a>
              </li>
            </ul>
          </li>
          
        </ul>
        
        <ul class="navbar-nav ml-auto">
          
          
          <li class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Procurar...">
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>dashboard/logout">
              <i class="fa fa-fw fa-sign-out"></i>
              Logout</a>
              
          </li>
        </ul>
      </div>
    </nav>
</div>
