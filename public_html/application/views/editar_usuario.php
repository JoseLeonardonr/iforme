




<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <div class="col-md-10">
        <h1 class="page-header">Atualizar Usuário</h1>
    </div>
    
    
    <div class="col-md-12">
        <form class="form-control" action="<?= base_url()?>usuario/salvar_atualizacao" method="post">
            <input type="hidden" id="id_usuario" name="id_usuario" value="<?= $usuario[0]->id_usuario;?>">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome..." required value="<?= $usuario[0]->nome_usuario;?>">
            </div>
            <div class="row">
                <div class="col-md-8">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite seu email..." required required value="<?= $usuario[0]->email_usuario;?>">
            </div>
                <div class="col-md-4">
                    <label for="senha">Senha</label>
                <!--<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required required value="">-->
                    <input type="button" class="btn btn-default btn-block" value="Atualizar Senha" data-toggle="modal" data-target="#myModal">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="cpf">CPF: </label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Cpf..." required required value="<?= $usuario[0]->cpf_usuario;?>">
                </div>
                <div class="col-md-4">
                    <label for="nivel">Nível de Acesso: </label>
                    <select id="nivel" class="form-control" name="nivel" required>
                        <option value="0"> ---</option>
                        <option value="1" <?= $usuario[0]->nivel_usuario==1?' selected ': ''?>> Administrador</option>
                        <option value="2" <?= $usuario[0]->nivel_usuario==2?' selected ': ''?>> Usuário</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="status" >Status: </label>
                    <select id="status" class="form-control" name="status" required>
                        <option value="0"> ---</option>
                        <option value="1" <?= $usuario[0]->status_usuario==1?' selected ': ''?>> ativo</option>
                        <option value="2" <?= $usuario[0]->status_usuario==2?' selected ': ''?>> inativo</option>
                    </select>
                </div>
                <div class="col-md-4">  
                    <label for="cidade" >Cidades: </label>
                    <select id="cidade" class="form-control" name="cidade" required>
                        <option value="0"> ---</option>
                        <?php foreach ($cidades as $cidade){
                            if($cidade->id_cidade==$usuario[0]->id_cidade_usuario){
                            ?>
                                <option value="<?= $cidade->id_cidade?>" selected> <?= $cidade->nome_cidade; ?></option>
                            <?php }else{  ?>
                                <option value="<?= $cidade->id_cidade?>"> <?= $cidade->nome_cidade; ?></option>
                        <?php }}?>
                    </select>
                </div>
                
            </div>
           
            <div class="btn">
            <button type="submit" class="btn btn-success">Atualizar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>

    </div>
</main>
</div>
</div>




<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <form action="<?= base_url()?>usuario/salvar_senha" method="post">
          <input type="hidden" id="id_usuario" name="id_usuario" value="<?= $usuario[0]->id_usuario;?>">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Atualizar Senha</h4>
      </div>
      <div class="modal-body">
          
              <div class="row">
              
              <div class="col-md-12 form-group" >
              <label for="senha_antiga">Senha Antiga</label>
              <input type="password" name="senha_antiga" id="senha_antiga" class="form-control">
              </div>
              
              <div class="col-md-12 form-group" >
              <label for="senha_nova">Nova Senha</label>
              <input type="password" name="senha_nova" id="senha_nova" onkeyup="checarSenha()" class="form-control">
              </div>
              
              <div class="col-md-12 form-group" >
              <label for="senha_confirmar">Confirmar Nova Senha</label>
              <input type="password" name="senha_confirmar" id="senha_confirmar" onkeyup="checarSenha()" class="form-control">
              </div>
                 
              <div class="col-md-12 form-group" >
                  <div id="divcheck">
                      
                  </div>
              </div>
                  
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary" id="enviarsennha">Salvar</button>
      </div>
    </div>
                    </form>

  </div>
</div>


<script>
    $(document).ready(function(){
    $("#senha_nova").keyup(checkPasswordMatch);
    $("#senha_confirmar").keyup(checkPasswordMatch);

    });
    function checarSenha(){
    var password = $("#senha_nova").val();
    var confirmPassword = $("#senha_confirmar").val();

    if(password == '' || '' == confirmPassword){
    $("#divcheck").html("<span style='color: red'>Campo de Senha Vazio!</span>");
    document.getElementById("enviarsenha").disabled = true;
    }else if(password != confirmPassword){
    $("#divcheck").html("<span style='color: red'>Senha não conferem!</span>");
    document.getElementById("enviarsenha").disabled = true;
    }else{
    $("#divcheck").html("<span style='color: green'>Senha iguais!</span>");
    document.getElementById("enviarsenha").disabled = false;
    }
    }
</script>