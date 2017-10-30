




<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <div class="col-md-10">
        <h1 class="page-header">Atualizar Dados Climatológicos</h1>
    </div>
    
    
    <div class="col-md-12">
        <form class="form-control" action="<?= base_url()?>clima/salvar_atualizacao" method="post">
            <input type="hidden" id="id_producao" name="id_dados_climatologicos" value="<?= $clima[0]->id_dados_climatologicos;?>">
            <div class="row">
                <div class="col-md-4">
                <label for="data_dados">Data Dados:</label>
                <input type="date" class="form-control" id="data_dados" name="data_dados" aria-describedby="" placeholder="" required value="<?= $clima[0]->data_dados;?>">
                </div>
                <div class="col-md-4">
                <label for="temp_media">Temp. Média: </label>
                <input type="text" class="form-control" id="temp_media" name="temp_media" placeholder="Temp. Média..." required value="<?= $clima[0]->temp_media;?>">
                </div>
                <div class="col-md-4">
                <label for="temp_max">Temp. Max: </label>
                <input type="text" class="form-control" id="temp_max" name="temp_max" placeholder="Temp. Max..." required value="<?= $clima[0]->temp_max;?>">
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4">
                <label for="temp_min">Temp. Min: </label>
                <input type="text" class="form-control" id="temp_min" name="temp_min" placeholder="Temp. Min..." required value="<?= $clima[0]->temp_min;?>">
                </div>
                <div class="col-md-4">
                <label for="chuva">Volume de Chuva: </label>
                <input type="text" class="form-control" id="chuva" name="chuva" placeholder="Chuva..." required value="<?= $clima[0]->chuva;?>">
                </div>
                <div class="col-md-4">
                <label for="um_media">Um. Média: </label>
                <input type="text" class="form-control" id="um_media" name="um_media" placeholder="Um. Média..." required value="<?= $clima[0]->um_media;?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                <label for="um_min">Um. Min: </label>
                <input type="text" class="form-control" id="um_min" name="um_min" placeholder="Um. Min..." required value="<?= $clima[0]->um_min;?>">
                </div>
                <div class="col-md-4">
                <label for="um_max">Um. Max: </label>
                <input type="text" class="form-control" id="um_max" name="um_max" placeholder="Um. Max..." required value="<?= $clima[0]->um_max;?>">
                </div>
                <div class="col-md-4">
                <label for="vento_max">Vento Max: </label>
                <input type="text" class="form-control" id="vento_max" name="vento_max" placeholder="Vento Max..." required value="<?= $clima[0]->vento_max;?>">
                </div>
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

