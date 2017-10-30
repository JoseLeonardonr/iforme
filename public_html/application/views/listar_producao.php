
<div class="content-wrapper">  
    <br>
    <div class=" col-md-4">
        <a class="btn btn-primary btn-block" href="<?= base_url() ?>producao/cadastro"> Nova Produção</a>
    </div>
    <br>

    <div class="container-fluid">
        <div class="card mb-3">


            <div class="card-header">
                <i class="fa fa-table"></i>
                Produção de Alface
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                    <th>ID</th> 
                    <th>Nome Lote </th> 
                    <th>Data Plantação </th> 
                    <th>tipo</th>
                    <th>Data Colheita </th> 
                    <th>Nivel de Praga</th> 
                    <th>Classificação</th> 
                    <th></th>
                    <th></th>
                </tr>
                        </thead>
                <?php foreach ($producao as $usu) { ?>
                        <tbody>
                    <tr>
                        <td><?= $usu->id_producao; ?> </td>
                        <td><?= $usu->nome_producao; ?> </td>
                        <td><?= $usu->data_plantacao; ?> </td>
                        <td><?= $usu->nome_tipo; ?> </td>
                        <td><?= $usu->data_colheita; ?> </td>
                        <td><?= $usu->nivel_praga; ?> </td>
                        <td><?= $usu->classificacao; ?> </td>
                        <td>

                            <a href="<?= base_url('producao/atualizar/' . $usu->id_producao) ?>" class="btn btn-primary btn-group">Atualizar</a>
                            </td><td>
                            <a href="<?= base_url('producao/excluir/' . $usu->id_producao) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o lote? '); ">Excluir</a>
                        </td>
                    </tr>
                    </tbody>
                <?php } ?> 
            </table>


        </div>




</main>
</div>
</div>
