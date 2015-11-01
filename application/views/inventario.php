<?php 

$template = array(
    'table_open' => '<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table-inventario">'
);
?>
<div class="mdl-layout__header-row" id="headinv">
    <form id="form_radio">
        <span id="consultalbl">Consultar por:</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked />
            <span class="mdl-radio__label">Fecha</span>
        </label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
            <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2" />
            <span class="mdl-radio__label">Nombre</span>
        </label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
            <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="3" />
            <span class="mdl-radio__label">Código</span>
        </label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
            <input type="radio" id="option-4" class="mdl-radio__button" name="options" value="4" />
            <span class="mdl-radio__label">Cantidad</span>
        </label>
    </form>
</div>
<form id="form_table">
    <?php
    $this->table->set_template($template);
    $this->table->set_heading('    ', 'Nombre Suministro', 'Cant. Solicitada', 'Cant. Entregada');

    $this->table->add_row('1', 'Lapicero color azul', '10', '5');
    $this->table->add_row('2', 'Lapicero color azul', '10', '5');
    $this->table->add_row('3', 'Lapicero color azul', '10', '5');
    echo $this->table->generate();
    ?>
</form>
