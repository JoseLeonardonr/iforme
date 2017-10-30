
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <div class="col-md-12">
        <div class="col-md-10">
            <h1 class="page-header">Usuários</h1>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary btn-block" href="<?= base_url() ?>adm/usuario/cadastro"> Novo usuário</a>
        </div>
        <div class="col-md-12">
            
            <table class="table table-striped">
                <tr>
                    <th>ID</th> 
                    <th>Nome: </th> 
                    <th>Email: </th> 
                    <th>Nível: </th> 
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($usuario as $usu){?>
                <tr>
                    <td><?= $usu->id_usuario; ?> </td>
                    <td><?= $usu->nome_usuario; ?> </td>
                    <td><?= $usu->email_usuario; ?> </td>
                    <td><?= $usu->nivel_usuario==1?'Administrador':'Usuario'; ?> </td>
                    <td>
                        
                       <a href="<?= base_url('adm/usuario/atualizar/'.$usu->id_usuario)?>" class="btn btn-primary btn-group">Atualizar</a>
                       <a href="<?= base_url('adm/usuario/excluir/'.$usu->id_usuario)?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o usuário? '); ">Excluir</a>
                    </td>
                </tr>
            <?php }?> 
            </table>
        </div>

    </div>




</main>
</div>
</div>
