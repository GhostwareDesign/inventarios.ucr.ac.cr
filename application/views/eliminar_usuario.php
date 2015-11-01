<form action="#">
    <div class="sombra-contenedora-eliminarUsuario" >
        <h3 class="mdl-color-text--grey-600" id="ttlUsuario">Eliminar Usuario</h3>
        <br>
    <div id="div-panelBusquedaEliminar">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="sample3" />
    <label class="mdl-textfield__label mdl-color-text--grey-600" for="sample3">Identificador</label>
  </div>
    <button id="btnBuscarEliminar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--indigo-500 mdl-js-ripple-effect mdl-button--accent">
  Buscar
</button>
    <button id="btnlimpiarEliminar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--red-500">
  Limpiar
</button>
    </div>
</form>

<form action="#">
    <div class="mdl-grid">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" id="nombre" />
            <label class="mdl-textfield__label mdl-color-text--grey-600" for="nombre">Nombre Completo...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" id="correo" />
            <label class="mdl-textfield__label mdl-color-text--grey-600" for="correo">Correo Institucional...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" id="puesto" />
            <label class="mdl-textfield__label mdl-color-text--grey-600" for="puesto">Puesto...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" id="id" />
            <label class="mdl-textfield__label mdl-color-text--grey-600" for="id">Identificador...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="text" id="usuario" />
            <label class="mdl-textfield__label mdl-color-text--grey-600" for="usuario">Nombre de Usuario...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
            <input class="mdl-textfield__input" type="password" id="pass" />
            <label class="mdl-textfield__label mdl-color-text--grey-600" for="pass">Contraseña...</label>
        </div>
    </div>
        
    <div class="mdl-grid" id="div-panelBotonesEliminar">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <button onclick="alertaEliminar()" id="btnEliminar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--indigo-500 mdl-cell mdl-cell--2-col">
  Eliminar
</button>
    <button id="btnCancelarEliminar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--red-500 mdl-cell mdl-cell--2-col">
  Cancelar
</button>
    </div>
    </div>
</form>

<script>
function alertaEliminar() {
    var x;
    if (confirm("¿Está seguro que desea eliminarlo?") == true) {
        x = "eliminado";
    } else {
        x = "cancelado";
    }
    document.getElementById("demo").innerHTML = x;
}
</script>