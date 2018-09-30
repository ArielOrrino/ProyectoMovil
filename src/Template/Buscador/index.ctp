<nav class="large-3 medium-4 columns" id="actions-sidebar">


    <ul class="side-nav">
        <li class="heading"><?= __('Busquedas Recientes') ?></li>
   

</nav>


<div class="proyectos index large-9 medium-8 columns content">
<h3><?= __('Busquedas') ?></h3>

<form>
  <div class="form-group">
    <label for="Parametro">Filtrar Proyecto por:</label>
    <select class="form-control" id="Parametro">
      <option>Nombre</option>
      <option>Monto</option>
      <option>Fecha Creacion</option>      
    </select>
  </div>
  <div class="form-group">
    <label for="Parametro">Parametro</label>
    <input type="text" class="form-control" id="Parametro" placeholder="Ingresar el parametro a buscar">
  </div> 
  <button type="submit" class="btn btn-primary">Buscar</button>
</form>


<hr>
<h3><?= __('Resultado de la Busqueda') ?></h3>

<ul class="list-group list-group-flush">
  <li class="list-group-item">una busqueda</li> 
</ul>

</div>
<!--$nombre="Raul"; return $this->saludo($nombre);-->