<?php
    if (!empty($_GET['insertado']) && $_GET['insertado'] == 1 ){
    echo "<script>$(document).ready(function(){ $('#toast-success-cli').toast('show'); });</script>";
    }
    
    if (!empty($_GET['eliminado']) && $_GET['eliminado'] == 1 ){
    echo "<script>$(document).ready(function(){ $('#toast-delete-cli').toast('show'); });</script>";
    }

    ?>


<div style=" position: fixed; bottom: 2rem; right: 1rem; z-index: 900;">
    <div class="toast" id="toast-success-cli" role="alert" aria-live="assertive" aria-atomic="true" data-delay="6000">
        <div class="toast-header tct text-success">
            <span class="material-icons-round">check_circle_outline</span>
            <strong class="mr-auto">Se Registro un cliente Exitosamente</strong>
        <small class="text-gray-500 ml-2">Justo Ahora</small>
        <button class="ml-2 mb-1 close" type="button" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
    </div>
</div>

<div style=" position: fixed; bottom: 2rem; right: 1rem; z-index: 900;">
    <div class="toast" id="toast-delete-cli" role="alert" aria-live="assertive" aria-atomic="true" data-delay="6000">
        <div class="toast-header tct text-danger">
            <span class="material-icons-round">check_circle_outline</span>
            <strong class="mr-auto">Se Eliminó un Cliente Exitosamente</strong>
        <small class="text-gray-500 ml-2">Justo Ahora</small>
        <button class="ml-2 mb-1 close" type="button" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
    </div>
</div>

<div style=" position: fixed; bottom: 2rem; right: 1rem; z-index: 900;">
    <div class="toast" id="toast-error" role="alert" aria-live="assertive" aria-atomic="true" data-delay="6000">
        <div class="toast-header tct text-danger">
            <span class="material-icons-round">check_circle_outline</span>
            <strong class="mr-auto">Ha ocurrido un error</strong>
        <small class="text-gray-500 ml-2">Justo Ahora</small>
        <button class="ml-2 mb-1 close" type="button" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
    </div>
</div>