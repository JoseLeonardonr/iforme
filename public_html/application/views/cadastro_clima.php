
<div class="content-wrapper">  
<div class="container-fluid">
        <div class="card mb-3">
  <div class="card-header">
            <i class="fa fa-table"></i>
            Novo Dados Climatológicos
          </div>
   
        <form class="form-control" action="<?= base_url()?>clima/cadastrar" method="post">
            
            <div class="row">
                <div class="col-md-4">
                <label for="data_dados">Data Dados:</label>
                <input type="date" class="form-control" id="data_dados" name="data_dados" aria-describedby="" placeholder="" required>
                </div>
                <div class="col-md-4">
                <label for="temp_media">Temp. Média: </label>
                <input type="text" class="form-control" id="temp_media" name="temp_media" placeholder="Temp. Média..." required>
                </div>
                <div class="col-md-4">
                <label for="temp_max">Temp. Max: </label>
                <input type="text" class="form-control" id="temp_max" name="temp_max" placeholder="Temp. Max..." required>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-4">
                <label for="temp_min">Temp. Min: </label>
                <input type="text" class="form-control" id="temp_min" name="temp_min" placeholder="Temp. Min..." required>
                </div>
                <div class="col-md-4">
                <label for="chuva">Volume de Chuva: </label>
                <input type="text" class="form-control" id="chuva" name="chuva" placeholder="Chuva..." required>
                </div>
                <div class="col-md-4">
                <label for="um_media">Um. Média: </label>
                <input type="text" class="form-control" id="um_media" name="um_media" placeholder="Um. Média..." required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                <label for="um_min">Um. Min: </label>
                <input type="text" class="form-control" id="um_min" name="um_min" placeholder="Um. Min..." required>
                </div>
                <div class="col-md-4">
                <label for="um_max">Um. Max: </label>
                <input type="text" class="form-control" id="um_max" name="um_max" placeholder="Um. Max..." required>
                </div>
                <div class="col-md-4">
                <label for="vento_max">Vento Max: </label>
                <input type="text" class="form-control" id="vento_max" name="vento_max" placeholder="Vento Max..." required>
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
