<h1 class="tit" Align="center">Ingresar una Dignidad </h1>
<br>
<div class="container">
    <form class="" action="<?php echo site_url(); ?>/Dignidades/guardaDig" method="post">
        <div class="row">
            <div class="col-md-4">
                <label for="">Nombre:</label>
                <br>
                <input type="text" placeholder="Ingrese el nombre del candidato" class="form-control" name="nom_can" value="">
            </div>
            <div class="col-md-4">
                <label for="">Apellido:</label>
                <br>
                <input type="text" placeholder="Ingrese el Apellido del candidato" class="form-control" name="ape_can" value="">
            </div>
            <div class="col-md-4">
                <label for="">Movimiento Politíco:</label>
                <br>
                <input type="text" placeholder="Ingrese el Movimiento Político al que pertenece" class="form-control" name="mov_can" value="">
            </div>
            <div class="col-md-4">
                <label for="">Edad:</label>
                <br>
                <input type="number" placeholder="Ingrese la edade del candidato" class="form-control" name="edad_can" value="">
            </div>
            <div class="col-md-4">
                <label for="">Región:</label>
                <br>
                <input type="text" placeholder="Ingrese la region de dnde es oriundo" class="form-control" name="regi_can" value="">
            </div>
            <div class="col-md-4">
                <label for="">Latitud:</label>
                <br>
                <input type="text" placeholder="Ingrese la Latitud de donde se encuentra su cede" class="form-control" name="lati_can" value="">
            </div>
            <div class="col-md-4">
                <label for="">Longitud:</label>
                <br>
                <input type="text" placeholder="Ingrese la Longitud de donde se encuentra su cede" class="form-control" name="longi_can" value="">
            </div>

            <div class=" col-md-8">
                <label for="">Dignidad:</label>
                <br>
                <input type="text" placeholder="Ingrese la Dignidad a la que se esta postulando" class="form-control" name="dignidad_id_dig" value="">
            </div>
        </div>
        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                GUARDAR
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/dignidades/listar" class="btn btn-danger">CANCELAR</a>
        </div>
    </form>
</div>