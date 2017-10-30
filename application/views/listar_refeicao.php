
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <div class="col-md-12">
        <div class="col-md-10">
            <h1 class="page-header">Refeição</h1>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary btn-block" href="<?= base_url() ?>adm/refeicao/cadastro"> Novo refeição</a>
        </div>
        <div class="col-md-12">
            
            <table class="table table-striped">
                <tr>
                    <th>ID</th> 
                    <th>Data Refeição </th> 
                    <th>Acompanhamento 1 </th> 
                    <th>Acompanhamento 2 </th> 
                    <th>Guarnição 1 </th> 
                    <th>Guarnição 2 </th> 
                    <th>Salada </th> 
                    <th>Tipo </th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($refeicao as $ref){?>
                <tr>
                    <td><?= $ref->id_refeicao; ?> </td>
                    <td><?= $ref->data_refeicao; ?> </td>
                    <td><?= $ref->acomp1_refeicao; ?> </td>
                    <td><?= $ref->acomp2_refeicao; ?> </td>
                    <td><?= $ref->guarnicao1_refeicao; ?> </td>
                    <td><?= $ref->guarnicao2_refeicao; ?> </td>
                    <td><?= $ref->salada_refeicao; ?> </td>
                    <td><?= $ref->tipo_id_tipo==1?'Almoço':'Janta'; ?> </td>
                    <td>
                        
                       <a href="<?= base_url('adm/refeicao/atualizar/'.$ref->id_refeicao)?>" class="btn btn-primary btn-group">Atualizar</a>
                       <a href="<?= base_url('adm/refeicao/excluir/'.$ref->id_refeicao)?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o usuário? '); ">Excluir</a>
                    </td>
                </tr>
            <?php }?> 
            </table>
        </div>

    </div>




</main>
</div>
</div>
