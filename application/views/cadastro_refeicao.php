




<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <div class="col-md-10">
        <h1 class="page-header">Nova Refeição</h1>
    </div>


    <div class="col-md-12">
        <form class="form-control" action="<?= base_url() ?>adm/refeicao/cadastrar" method="post">
            <div class="form-group">
                <label for="data_ref">Data Refeição: </label>
                <input type="date" class="form-control" id="data_ref" name="data_ref" placeholder="Data..." required>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <label for="acomp_1">Acompanhamento 1</label>
                    <input type="text" class="form-control" id="acomp_1" name="acomp_1" aria-describedby="emailHelp" placeholder="Digite o acompanhamento 1" required>
                </div>
                <br>
                <div class="col-md-12">
                    <label for="acomp_2">Acompanhamento 2</label>
                    <input type="text" class="form-control" id="acomp_2" name="acomp_2" aria-describedby="emailHelp" placeholder="Digite o acompanhamento 2" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <label for="guarni_1">Guarnição 1</label>
                    <input type="text" class="form-control" id="guarni_1" name="guarni_1"  placeholder="Digite a guarnição 1" required>
                </div>
                <br>
                <div class="col-md-12">
                    <label for="guarni_2">Guarnição 2</label>
                    <input type="text" class="form-control" id="guarni_2" name="guarni_2"  placeholder="Digite a guarnição 2" required>
                </div>
                <br>
                <div class="col-md-12">
                    <label for="salada">Salada </label>
                    <input type="text" class="form-control" id="salada" name="salada"  placeholder="Digite a salada" required>
                </div>
                <div class="col-md-8">
                    <label for="tipo">Tipo Refeição: </label>
                    <select id="tipo" class="form-control" name="tipo" required>
                        <option value="0"> ---</option>
                        <option value="1"> Almoço</option>
                        <option value="2"> Jantar</option>
                        
                    </select>
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
