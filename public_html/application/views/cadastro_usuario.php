



<div class="content-wrapper">  
<div class="container-fluid">
        <div class="card mb-3">
  <div class="card-header">
            <i class="fa fa-table"></i>
            Cadastro de Usuários
          </div>
    
    
    
        <form class="form-control" action="<?= base_url()?>usuario/cadastrar" method="post">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome..." required>
            </div>
            <div class="row">
                <div class="col-md-8">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite seu email..." required>
            </div>
                <div class="col-md-4">
                    <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="cpf">CPF: </label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Cpf..." required>
                </div>
                <div class="col-md-4">
                    <label for="nivel">Nível de Acesso: </label>
                    <select id="nivel" class="form-control" name="nivel" required>
                        <option value="0"> ---</option>
                        <option value="1"> Administrador</option>
                        <option value="2"> Usuário</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="status" >Status: </label>
                    <select id="status" class="form-control" name="status" required>
                        <option value="0"> ---</option>
                        <option value="1"> ativo</option>
                        <option value="2"> inativo</option>
                    </select>
                </div>
                <div class="col-md-4">  
                    <label for="cidade" >Cidades: </label>
                    <select id="cidade" class="form-control" name="cidade" required>
                        <option value="0"> ---</option>
                        <?php foreach ($cidades as $cidade){?>
                        <option value="<?= $cidade->id_cidade?>"> <?= $cidade->nome_cidade; ?></option>
                        <?php }?>
                    </select>
                </div>
                
            </div>
           
            <div class="btn">
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>

    
    




        </div>
</div>
</div>
