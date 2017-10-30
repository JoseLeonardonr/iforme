




<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <div class="col-md-10">
        <h1 class="page-header">Novo Ticket</h1>
    </div>


    <div class="col-md-12">
        <form class="form-control" action="<?= base_url() ?>adm/ticket/cadastrar" method="post">
            
            
            <div class="row">
                
                <br>
                
                <div class="col-md-4">
                    <label for="tipo">Tipo Ticket: </label>
                    <select id="tipo" class="form-control" name="tipo" required>
                        <option value="0"> ---</option>
                        <option value="1"> Estudante</option>
                        <option value="2"> Terceirizado</option>
                        
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="acomp_1">Valor: </label>
                    <input type="text" class="form-control" id="valor" name="valor" aria-describedby="emailHelp" placeholder="Digite o valor" required>
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
