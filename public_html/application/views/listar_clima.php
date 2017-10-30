
<div class="content-wrapper">  
    <br>
    <div class=" col-md-4">
        <a class="btn btn-primary btn-block" href="<?= base_url() ?>clima/cadastro"> Novo Dados Climatológicos</a>
    </div>
    <br>

    <div class="container-fluid">
        <div class="card mb-3">


            <div class="card-header">
                Dados Climatológicos
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                    <th>ID</th> 
                    <th>Data </th> 
                    <th>Temp. Média </th> 
                    <th>Temp. Max</th>
                    <th>Temp. Min </th> 
                    <th>Vol. Chuva</th> 
                    <th>Um Média</th> 
                    <th>Um Min </th> 
                    <th>Um Max</th> 
                    <th>Vento Max</th> 
                    <th></th>
                    <th></th>
                </tr>
                        </thead>
                <?php foreach($clima as $cli){?>
                        <tbody>
                <tr>
                    <td><?= $cli->id_dados_climatologicos; ?> </td>
                    <td><?= $cli->data_dados; ?> </td>
                    <td><?= $cli->temp_media; ?> </td>
                    <td><?= $cli->temp_max; ?> </td>
                    <td><?= $cli->temp_min; ?> </td>
                    <td><?= $cli->chuva; ?> </td>
                    <td><?= $cli->um_media; ?> </td>
                    <td><?= $cli->um_min; ?> </td>
                    <td><?= $cli->um_max; ?> </td>
                    <td><?= $cli->vento_max; ?> </td>
                    <td>
                        
                       <a href="<?= base_url('clima/atualizar/'.$cli->id_dados_climatologicos)?>" class="btn btn-primary btn-group">Atualizar</a>
                        </td><td>
                       <a href="<?= base_url('clima/excluir/'.$cli->id_dados_climatologicos)?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir os Dados? '); ">Excluir</a>
                    </td>
                </tr>
                </tbody>
            <?php }?> 
            </table>
         

    </div>




</main>
</div>
</div>
