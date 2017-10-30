


    <div class="container">
        <div class="container" style="width:30%">
            <img src="<?= base_url()?>/assets/imagens/logo5.png" style="width:100%">
</div>
        <form class="form-signin" method="post" action="<?= base_url()?>adm/dashboard/logar">
            <h2 class="form-signin-heading " style="text-align: center">Login</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus name="email">
        <label for="inputPassword" class="sr-only">Senha </label>
        <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required>
        <button class="btn btn-lg btn-primary btn-block" id="btnlogar" type="submit">Entrar</button>
      </form>

    </div> <!-- /container -->
