<?php $menus_metodos = $controlador->metodos_menu; ?>
<br>
<div class="card card-info">
    <input type="hidden" name="session_id" id="session_id" value="<?php echo $_GET['session_id'] ?>">
    <div class="card-header text-center">
        Grupo : <?php echo $controlador->nombre_grupo ?>
    </div>
    <div class="panel-body">
        <div class="container-fluid">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php foreach ($menus_metodos as $menu => $metodos ): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="Head<?php echo $menu ?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $menu ?>" aria-expanded="false" aria-controls="collapseOne">
                                    <?php echo $menu ?>
                                </a>
                            </h4>
                        </div>
                        <div id="<?php echo $menu ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <?php
                                foreach ($metodos as $metodo){
                                    $metodo_id = $metodo['id'];
                                    $grupo_id = $_GET['registro_id'];
                                    if($metodo['estado'] == 1){
                                        echo "<a onclick='asigna_permisos($metodo_id,$grupo_id);' id='$metodo_id' class='btn btn-info btn-flat'>".$metodo['metodo']."</a>";
                                    }else{
                                        echo "<a onclick='asigna_permisos($metodo_id,$grupo_id);' id='$metodo_id' class='btn btn-default btn-flat'>".$metodo['metodo']."</a>";
                                    }

                                }
                                ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>
