<?php
$data=$this->datos;
$title="titulo";
require_once ("moduls/head.php");?>
<?php require_once ("moduls/nav.php");?>
<main>
  <h1 class="center">Personas</h1>
  <section class="row">
    <div class="view-dropPersonas col m6 offset-m1 ">
      <table>
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">apellido</th>
              <th data-field="price">Sexo</th>
              <th data-field="price">Borrar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $persona): ?>
            <form class="" id="delate<?= $persona['id']; ?>">
              <input type="hidden" name="id"  value=<?= $persona['id']; ?>>
              <tr>
                <td><?= $persona['name']; ?></td>
                <td><?= $persona['lastname']; ?></td>
                <td><?= $persona['sex']; ?></td>
                <td><a href="#" onclick="delate(<?= $persona['id']; ?>)" >borrar</a></td>
              </tr>
            </form>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="addpersona col m5">
      <form class="col s12" action="index.html" method="post">
        <div class="row">
        <div class="input-field col s12">
          <input placeholder="Name" id="first_name" type="text" class="validate">
         <label for="first_name">First Name</label>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <input placeholder="lastname" id="first_name" type="text" class="validate">
           <label for="first_name">lastname</label>
        </div>
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Genero</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          </select>
          <label>Selecciona tu genero</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="#addrres" id="first_name" type="text" class="validate">
           <label for="first_name">Direccion:</label>
        </div>
        <div class="input-field col s12 center">
          <input class="waves-effect waves-light btn"  id="first_name" type="submit" value="Registrar">

        </div>
      </form>

    </div>
  </section>
</main>
<?php require_once ("moduls/footer.php");?>
<script type="text/javascript">
$(document).ready(function() {
  $('select').material_select();
});
function delate(id){
var nameform="delate"+id;

var r = confirm("Realmente quiere borrar");
if (r == true) {
        var sendid= document.getElementById(nameform).elements[0].value;
        $.ajax({
          type:"POST",
          url:"Models/personas.php",
          data:'?sendid='+sendid,
        }).done(function(response){
          if(response==1){
            alert("borrado");
          }else {
            alert("algo fallo");
          }
        });
} else {

}



}

</script>
</body>
</html>
