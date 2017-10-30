




<div class="content-wrapper">  
<div class="container-fluid">
        <div class="card mb-3">
  <div class="card-header">
            <i class="fa fa-table"></i>
            Nova Produção
          </div>
    
    
    
 
        <form class="form-control" action="<?= base_url()?>producao/cadastrar" method="post">
            
            <div class="row">
                <div class="col-md-4">
                <label for="nome_lote">Nome Lote: </label>
                <input type="text" class="form-control" id="nome_lote" name="nome_lote" placeholder="Nome Lote..." required>
                </div>
                <div class="col-md-4">
                <label for="data_plant">Data Plantação:</label>
                <input type="date" class="form-control" id="data_plant" name="data_plant" aria-describedby="" placeholder="" required>
                </div>
                <div class="col-md-4">
                    <label for="tipo">Tipo da Alface</label>
                    <select id="tipo" class="form-control" name="tipo" required>
                        <option value="0"> ---</option>
                        <?php foreach ($tipo as $tip){?>
                        <option value="<?= $tip->id_tipo?>"> <?= $tip->nome_tipo; ?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="quant_band">Quantidade de Bandeja: </label>
                    <input type="text" class="form-control" id="quant_band" name="quant_band" placeholder="Quantidade..." required>
                </div>
                <div class="col-md-4">
                    <label for="nivel_praga">Nível de Praga: </label>
                    <select id="nivel_praga" class="form-control" name="nivel_praga" required>
                        <option value="0"> ---</option>
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
                <input type="date" class="form-control" id="data_co" name="data_co" aria-describedby="" placeholder="" required>
                </div>
                
                <div class="col-md-4">  
                    <label for="classificacao" >Classificação: </label>
                    <select id="classificacao" class="form-control" name="classificacao" required>
                        <option value="0"> ---</option>
                        <?php foreach ($classificacao as $clas){?>
                        <option value="<?= $clas->id_classificacao?>"> <?= $clas->classificacao; ?></option>
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
