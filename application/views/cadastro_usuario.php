




<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <div class="col-md-10">
        <h1 class="page-header">Novo Usuário</h1>
    </div>
    
    
    <div class="col-md-12">
        <form class="form-control" action="<?= base_url()?>adm/usuario/cadastrar" method="post">
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
                    <label for="nivel">Nível de Acesso: </label>
                    <select id="nivel" class="form-control" name="nivel" required>
                        <option value="0"> ---</option>
                        <option value="1"> Administrador</option>
                        <option value="2"> Cooperativa</option>
                        <option value="3"> Refeitório</option>
                    </select>
                </div>
                
                
                
            </div>
           
            <div class="btn">
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>

    </div>
    




</main>
</div>
</div>
