<?php

// Acá seleciono la pagina que va en el popup


$ariston_settings = get_option('ariston_settings');

$ariston_pop_title = $ariston_settings['ariston_pop_title'];
$ariston_pop_content= $ariston_settings['ariston_pop_content'];


?>
    <!-- Button trigger modal
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
            data-target="#Infoproductos">
        <?php  //echo $ariston_pop_title; ?>
    </button> -->
<!-- Modal -->
<div class="modal fade in" id="Infoproductos" tabindex="-1" role="dialog"
     aria-labelledby="Infoproducto">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> <?php  echo $ariston_pop_title; ?></h4>
            </div>
            <div class="modal-body">
                <?php  echo $ariston_pop_content; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
