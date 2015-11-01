
<?php
$nombre_solicitante = array('name' => 'nombre_solicitante',
    'class' => 'mdl-textfield__input ', 'id' => 'nombre_solicitante');

$numero_factura = array('name' => 'numero_factura',
    'class' => 'mdl-textfield__input', 'id' => 'numero_factura', 'pattern' => '-?[0-9]*(\.[0-9]+)?');

$observacion = array('name' => 'observacion',
    'class' => 'mdl-textfield__input', 'id' => 'observacion', 'row' => '3', 'type' => 'text');
$btn_aceptar = array('name' => 'btn_aceptar', 'id' => 'btn_aceptar',
    'class' => 'mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--indigo-500 btm-margin', 'value' => 'Aceptar');
$btn_cancelar = array('name' => 'btn_cancelar', 'id' => 'btn_cancelar',
    'class' => 'mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--red-500', 'value' => 'Cancelar');
$select_oficinas = array('Oficinia de registro' => 'Oficinia de registro', 'Oficina de becas' => 'Oficina de becas', 'ATIC' => 'Administración Tecnología de Información y Comunicación');
$select_css = array('name' => 'select_oficinas');
$template = array(
    'table_open' => '<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table-inventario" style="float: left; margin-left: 5%;">',
    'cell_start' => '<td contenteditable="true">',
);
$form_atributos =  array('target'=>'_self','id' => 'form_solicitar_suministro');
?>




<?= form_open('/Solicitud_Suministro/recibir', $form_atributos) ?>
<div class="sombra-contenedora caja-factura" >
    <h3 class="mdl-color-text--grey-600" style="float: left;">Solicitud de suministros</h3>


    <label  class="mdl-color-text--grey-600 lbl-fecha-server-solicitud" >Fecha Solicitud: <?= date("Y/m/d") ?> </label>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label inv-textfield-num-factura">
        <?= form_input($numero_factura) ?>
        <label class="mdl-textfield__label mdl-color-text--grey-600 lbl-font-sie" for="numero_factura">No. Pedido</label>
        <span class="mdl-textfield__error">No es un numero!</span>
    </div>
    <label class="mdl-color-text--grey-600" style="float: left; font-size: 18px; margin-left: 20px;" >Unidad Solicitante: </label>
    <div class="caja">  
        <?= form_dropdown($select_css, $select_oficinas) ?>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="display: block; margin-left: 20px;">
        <?= form_input($nombre_solicitante) ?>
        <label class="mdl-textfield__label mdl-color-text--grey-600 lbl-font-sie" for="nombre_solicitante">Nombre solicitante</label>
    </div>

    <?php
    $this->table->set_template($template);
    $this->table->set_heading('    ', 'Nombre Suministro', 'Cant. Solicitada', 'Cant. Entregada');

    $this->table->add_row('1', 'Lapicero color azul', '10', '5');
    $this->table->add_row('2', 'Lapicero color azul', '10', '5');
    $this->table->add_row('3', 'Lapicero color azul', '10', '5');
    echo $this->table->generate();
    ?>


    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored btn-agregar" style="float: left;">
        <i class="material-icons">add</i>
    </button>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label inv-textfield-num-factura inv-text-observacion">
        <?= form_textarea($observacion) ?>
        <label class="mdl-textfield__label mdl-color-text--grey-600 lbl-font-sie" for="observacion">Observaciones</label>
    </div>

    <?= form_submit($btn_aceptar) ?>
    <?= form_submit($btn_cancelar) ?>
</div>
<?= form_close() ?>
<script>

var form = document.getElementById('form_solicitar_suministro');

form.onsubmit = function() {
    form.target = '_blank';
};


document.getElementById('btn_cancelar').onclick = function() {
    form.onsubmit = function() {
    form.target = '_self';
    document.forms['form_solicitar_suministro'].action = '<?= base_url()?>index.php/Solicitud_Suministro';
};
    
    form.submit();
};
</script>

