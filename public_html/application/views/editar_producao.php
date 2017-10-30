




<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <div class="col-md-10">
        <h1 class="page-header">Atualizar Lote</h1>
    </div>
    
    
    <div class="col-md-12">
        <form class="form-control" action="<?= base_url()?>producao/salvar_atualizacao" method="post">
            <input type="hidden" id="id_producao" name="id_producao" value="<?= $producao[0]->id_producao;?>">
            <div class="row">
                <div class="col-md-4">
                <label for="nome_lote">Nome Lote: </label>
                <input type="text" class="form-control" id="nome_lote" name="nome_lote" placeholder="Nome Lote..." required value="<?= $producao[0]->nome_producao;?>">
                </div>
                <div class="col-md-4">
                <label for="data_plant">Data Plantação:</label>
                <input type="date" class="form-control" id="data_plant" name="data_plant" aria-describedby="" placeholder="" required value="<?= $producao[0]->data_plantacao;?>">
                </div>
                <div class="col-md-4">
                    <label for="tipo">Tipo da Alface</label>
                    <select id="tipo" class="form-control" name="tipo" required>
                        <option value="0"> ---</option>
                        <?php foreach ($tipo as $tip){
                            if($tip->id_tipo==$producao[0]->tipo_alface_id){
                            ?>
                                <option value="<?= $tip->id_tipo?>" selected> <?= $tip->nome_tipo; ?></option>
                            <?php }else{  ?>
                                <option value="<?= $tip->id_tipo?>"> <?= $tip->nome_tipo; ?></option>
                        <?php }}?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="quant_band">Quantidade de Bandeja: </label>
                    <input type="text" class="form-control" id="quant_band" name="quant_band" placeholder="Quantidade..." required value="<?= $producao[0]->quant_bandeja;?>">
                </div>
                <div class="col-md-4">
                    <label for="nivel_praga">Nível de Praga: </label>
                    <select id="nivel_praga" class="form-control" name="nivel_praga" required>
                        <option value="<?= $producao[0]->nivel_praga;?>"> <?= $producao[0]->nivel_praga;?></option>
                        <option value="1"> 1</option>
                        <option value="2"> 2</option>
                        <option value="3"> 3</option>
                        <option value="4"> 4</option>
                        <option value="5"> 5</option>
                        <option value="6"> 6</option>
                        <option value="7"> 7</option>
                        <option value="8"> 8</option>
                        <option value="9"> 9</option>
                        <option value="10"> 10</option>
                    </select>
                </div>
                <div class="col-md-4">
                <label for="data_co">Data Colheita:</label>
                <input type="date" class="form-control" id="data_co" name="data_co" aria-describedby="" placeholder="" required value="<?= $producao[0]->data_colheita;?>">
                </div>
                
                <div class="col-md-4">  
                    <label for="classificacao" >Classificação: </label>
                    <select id="classificacao" class="form-control" name="classificacao" required>
                        <option value="0"> ---</option>
                        <?php foreach ($classificacao as $clas){
                            if($clas->id_classificacao==$producao[0]->classificacao_id){
                            ?>
                                <option value="<?= $clas->id_classificacao?>" selected> <?= $clas->classificacao; ?></option>
                            <?php }else{  ?>
                                <option value="<?= $clas->id_classificacao?>"> <?= $clas->classificacao; ?></option>
                        <?php }}?>
                    </select>
                </div>
  
                
                
           
                <br>
            <div class="btn">
            <button type="submit" class="btn btn-success">Atualizar</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>

    </div>
</main>
</div>
</div>

