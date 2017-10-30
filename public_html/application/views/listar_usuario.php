<div class="content-wrapper">  
    <br>
    <div class=" col-md-4">
        <a class="btn btn-primary btn-block" href="<?= base_url() ?>usuario/cadastro"> Novo usuário</a>
    </div>
    <br>

    <div class="container-fluid">
        <div class="card mb-3">


            <div class="card-header">
                <i class="fa fa-table"></i>
                Usuários
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="90%" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th> 
                                <th>Nome: </th> 
                                <th>Email: </th> 
                                <th>Nível: </th>
                                <th>Cidades: </th>
                                <th>Cpf: </th> 
                                <th>Status</th> 
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                       
                        <?php foreach ($usuario as $usu) { ?>
                            <tbody>
                                <tr>
                                    <td><?= $usu->id_usuario; ?> </td>
                                    <td><?= $usu->nome_usuario; ?> </td>
                                    <td><?= $usu->email_usuario; ?> </td>
                                    <td><?= $usu->nivel_usuario == 1 ? 'Administrador' : 'Usuario'; ?> </td>
                                    <td><?= $usu->nome_cidade; ?> </td>
                                    <td><?= $usu->cpf_usuario; ?> </td>
                                    <td><?= $usu->status_usuario == 1 ? 'Ativo' : 'Inativo'; ?> </td>
                                    <td>

                                        <a href="<?= base_url('usuario/atualizar/' . $usu->id_usuario) ?>" class="btn btn-primary btn-group">Atualizar</a>
                                    </td><td>
                                        <a href="<?= base_url('usuario/excluir/' . $usu->id_usuario) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o usuário? '); ">Excluir</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?> 
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>