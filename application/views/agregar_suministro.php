<?php
$nombre_proveedor = array('name' => 'nombre_proveedor',
    'class' => 'mdl-textfield__input ', 'id' => 'nombre_proveedor');
$fecha_dia = array('name' => 'fecha_dia',
    'class' => 'mdl-textfield__input', 'id' => 'fecha_dia', 'pattern' => '-?[0-9]*(\.[0-9]+)?');
$fecha_mes = array('name' => 'fecha_mes',
    'class' => 'mdl-textfield__input', 'id' => 'fecha_mes', 'pattern' => '-?[0-9]*(\.[0-9]+)?');
$fecha_anno = array('name' => 'fecha_anno',
    'class' => 'mdl-textfield__input', 'id' => 'fecha_anno', 'pattern' => '-?[0-9]*(\.[0-9]+)?');
$numero_factura = array('name' => 'numero_factura',
    'class' => 'mdl-textfield__input', 'id' => 'numero_factura', 'pattern' => '-?[0-9]*(\.[0-9]+)?');
$rdb_requisicion = array('id' => 'requisicion',
    'class' => 'mdl-radio__button',
    'name' => 'opciones',
    'value' => 'requisicion', 'checked');
$rdb_compra_externa = array('id' => 'compra_externa',
    'class' => 'mdl-radio__button',
    'name' => 'opciones',
    'value' => 'compra_externa');
$precio_total = array('name' => 'precio_total',
    'class' => 'mdl-textfield__input ', 'id' => 'precio_total', 'pattern' => '-?[0-9]*(\.[0-9]+)?');
$btn_aceptar = array('name' => 'btn_aceptar',
    'class' => 'mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--indigo-500 btm-margin', 'value' => 'Aceptar');
$btn_cancelar = array('name' => 'btn_cancelar',
    'class' => 'mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--red-500', 'value' => 'Cancelar');
$template = array(
    'table_open' => '<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="float: left; margin-left: 2%; clear: both;">',
    'cell_start' => '<td contenteditable="true">',
);
?>

<?php form_open() ?>
<div class="sombra-contenedora caja-factura" >
    <h3 class="mdl-color-text--grey-600" style="float: left; margin-left: 20px;">Factura de suministros</h3>
    

    <div class="sombra-contenedora caja-size">
        <label class="mdl-color-text--grey-600 fecha">Fecha:</label>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label inv-textfield-fecha">
            <?= form_input($fecha_dia) ?>
            <label class="mdl-textfield__label mdl-color-text--grey-600 lbl-font-sie" for="fecha_dia">Dia</label>
            <span class="mdl-textfield__error">No es un numero!</span>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label inv-textfield-fecha">
            <?= form_input($fecha_mes) ?>
            <label class="mdl-textfield__label mdl-color-text--grey-600 lbl-font-sie" for="fecha_mes">Mes</label>
            <span class="mdl-textfield__error">No es un numero!</span>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label inv-textfield-fecha">
            <?= form_input($fecha_anno) ?>
            <label class="mdl-textfield__label mdl-color-text--grey-600 lbl-font-sie" for="fecha_anno">Año</label>
            <span class="mdl-textfield__error">No es un numero!</span>
        </div>
    </div>
    <label class="mdl-color-text--grey-600 lbl-fecha-server">fecha Ingreso: <?= date("Y/m/d")?> </label>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label inv-textfield-num-factura">
        <?= form_input($numero_factura) ?>
        <label class="mdl-textfield__label mdl-color-text--grey-600 lbl-font-sie" for="numero_factura">° Factura</label>
        <span class="mdl-textfield__error">No es un numero!</span>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="float: left; margin-left: 20px;">
        <?= form_input($nombre_proveedor) ?>
        <label class="mdl-textfield__label mdl-color-text--grey-600 lbl-font-sie" for="nombre_proveedor">Nombre Proveedor</label>
    </div>
    <div style="float: left;">
    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect rdb-margin" for="requisicion">
        <?= form_radio($rdb_requisicion) ?>
        <span class="mdl-radio__label">Requisición</span>
    </label>
    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="compra_externa">
        <?= form_radio($rdb_compra_externa) ?>
        <span class="mdl-radio__label">Compra Externa</span>
    </label>
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

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label inv-textfield-num-factura inv-textfield-num-precio-total">
        <?= form_input($precio_total) ?>
        <label class="mdl-textfield__label mdl-color-text--grey-600 lbl-font-sie" for="precio_total">Total</label>
        <span class="mdl-textfield__error">No es un numero!</span>
    </div>

    <?= form_submit($btn_aceptar)?>
    <?= form_submit($btn_cancelar)?>
</div>
<?php form_close() ?>


