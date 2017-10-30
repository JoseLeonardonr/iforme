<body class="bg-dark">

    
      <div class="card card-login mx-auto mt-5">
          
        <div class="card-header">
            <div class="container">
<div class="container" style="width:75%">
            <img src="<?= base_url()?>/assets/imagens/logo7.png" style="width:100%">
</div>
          
          <h2 class="form-signin-heading " style="text-align: center">Login</h2>
        </div>
        <div class="card-body">
          <form class="form-signin" method="post" action="<?= base_url()?>/dashboard/logar">
            <div class="form-group">
              <label for="exampleInputEmail1">Email </label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <div class="form-group">
              <div class="form-check">
              </div>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
          </form>
        </div>
      </div>
    </div>