
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <div class="col-md-12">
        <div class="col-md-10">
            <h1 class="page-header">Ticket</h1>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary btn-block" href="<?= base_url() ?>adm/ticket/cadastro"> Novo Ticket</a>
        </div>
        <div class="col-md-12">
            
            <table class="table table-striped">
                <tr>
                    <th>ID</th> 
                    <th>Data Cadastro </th> 
                    <th>Valor Ticket </th> 
                    <th>Tipo Ticket </th> 
                    <th></th>
                    
                </tr>
                <?php foreach($ticket as $ref){?>
                <tr>
                    <td><?= $ref->id_ticket; ?> </td>
                    <td><?= $ref->data_cadastro; ?> </td>
                    <td><?= $ref->valor_ticket; ?> </td>
                    <td><?= $ref->id_tipo_ticket==1?'Estudante':'Terceirizado'; ?> </td>
                    <td>
                        
                       
                       <a href="<?= base_url('adm/ticket/excluir/'.$ref->id_ticket)?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o ticket? '); ">Excluir</a>
                    </td>
                </tr>
            <?php }?> 
            </table>
        </div>

    </div>




</main>
</div>
</div>
