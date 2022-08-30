<?php
    include_once("../includes/cabecalho.php");
    // isset()  = verifica se alguma variável existe
    if(isset($_SESSION["mensagem"])){
        if($_SESSION["mensagem"]["status"]){
            echo "
                <div class='alert alert-success alert-dismissible fade show'>
                <h4 class='text-center'>{$_SESSION['mensagem']['msg']}</h4> 
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                </div>
                ";
        }   
         else{
            echo "
                <div class='alert alert-danger alert-dismissible fade show'>
                <h4 class='text-center'>{$_SESSION['mensagem']['msg']}</h4> 
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                </div>
                ";
         } 
        unset($_SESSION["mensagem"]);  // Destruindo a variável de sessão


    }
?>
    
    <main class="container-fluid mt-5">
        
      

        <h1 class="text-center fw-bold ">Cadastre um novo evento</h1>
        
        <hr>

        <form action="../controller/EventoController.php" method="POST" class="mt-5" enctype="multipart/form-data">

            <section class="container col-md-6">
                    <div class="row mb-3">
                        <label for="nomeEvento" class="form-label fs-5"> 

                            Nome <span class="text-danger">*</span>

                        </label>

                        <input type="text" name="nomeEvento" id="nomeEvento" class="form-control" >

                    </div>

                    <div class="row mb-3">
                        <label for="dataEvento" class="form-label fs-5">
                            Data do Evento<span class="text-danger">*</span>

                        </label>
                        <input type="date" name="dataEvento" id="dataEvento" class="form-control" >
                    </div>

                    <div class="row mb-3 cols-6">
                        <label for="banner" class="form-label fs-5">
                            Banner do Evento <span class="text-danger">*</span>
                        </label>

                        <input type="file" name="banner" id="banner" class="form-control" accept="image/*" >

                    </div>
                    <input type="hidden" name="cadastrar">
                    <button type="submit" class="btn btn-primary my-3 col-12"> Cadastrar </button>

            </section>

        </form>



    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>