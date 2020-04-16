<?php
$inputs = $controlador->inputs;
?>
<form autocomplete="off" role="form" method="POST"
      action="<?php echo get_url($controlador->tabla,'agregar_articulos_bd',SESSION_ID) ?>">
    <div class="row">
        <?php
        foreach ($inputs as $input) {
            echo $input;
        }
        ?>
    </div>
</form>
