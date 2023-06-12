<div class="container">
        <div class="row">
            <?php
                $consulta  = "SELECT * FROM tb_productos";
                
                $query = $conexion->prepare($consulta);
                $query->execute();
                while($registro = $query->fetch())
                {
            ?>
                <div class="mh-50-d-inline-flex-align-bottom-justify-content-col-9 col-md-4 text-center" id="contenido">
                    <div class="card shadow p-3 mb-5 bg-body rounded hover-overlay d-inline-block mh-25">
                        <div class="bg-image hover-zoom ">
                            <img src="data:image/jpg;base64, <?php echo base64_encode($registro['txt_foto_pro']); ?>" class="w-100 mh-50" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?=$registro["txt_nombre_pro"]?></h5>
                            <p class="card-text"><?=$registro["txt_descripcion_pro"]?></p>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
    </div>
</div>

