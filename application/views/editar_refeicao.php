




<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <div class="col-md-10">
        <h1 class="page-header">Atualizar Refeição</h1>
    </div>
    
    
    <div class="col-md-12">
        <form class="form-control" action="<?= base_url()?>adm/refeicao/salvar_atualizacao" method="post">
            <input type="hidden" id="id_refeicao" name="id_refeicao" value="<?= $refeicao[0]->id_refeicao;?>">
            <div class="form-group">
                <label for="data_ref">Data Refeição: </label>
                <input type="date" class="form-control" id="data_ref" name="data_ref" placeholder="Data..." required value="<?= $refeicao[0]->data_refeicao;?>">
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <label for="acomp_1">Acompanhamento 1</label>
                    <input type="text" class="form-control" id="acomp_1" name="acomp_1" aria-describedby="emailHelp" placeholder="Digite o acompanhamento 1" required value="<?= $refeicao[0]->acomp1_refeicao;?>">
                </div>
                <br>
                <div class="col-md-12">
                    <label for="acomp_2">Acompanhamento 2</label>
                    <input type="text" class="form-control" id="acomp_2" name="acomp_2" aria-describedby="emailHelp" placeholder="Digite o acompanhamento 2" required value="<?= $refeicao[0]->acomp2_refeicao;?>">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <label for="guarni_1">Guarnição 1</label>
                    <input type="text" class="form-control" id="guarni_1" name="guarni_1"  placeholder="Digite a guarnição 1" required value="<?= $refeicao[0]->guarnicao1_refeicao;?>">
                </div>
                <br>
                <div class="col-md-12">
                    <label for="guarni_2">Guarnição 2</label>
                    <input type="text" class="form-control" id="guarni_2" name="guarni_2"  placeholder="Digite a guarnição 2" required value="<?= $refeicao[0]->guarnicao2_refeicao;?>">
                </div>
                <br>
                <div class="col-md-12">
                    <label for="salada">Salada </label>
                    <input type="text" class="form-control" id="salada" name="salada"  placeholder="Digite a salada" required value="<?= $refeicao[0]->salada_refeicao;?>">
                </div>
                <div class="col-md-8">
                    <label for="tipo">Tipo Refeição: </label>
                    <select id="tipo" class="form-control" name="tipo" required>
                        <option value="0"> ---</option>
                        <option value="1" <?= $refeicao[0]->tipo_id_tipo==1?' selected ': ''?>> Almoço</option>
                        <option value="2" <?= $refeicao[0]->tipo_id_tipo==2?' selected ': ''?>> Jantar</option>
                    </select>
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