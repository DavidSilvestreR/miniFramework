<?php
$data=$this->datos;
$title="titulo";
require_once ("moduls/head.php");?>
<?php require_once ("moduls/nav.php");?>
<main>
  <h1>Hola pagina inicio</h1>
  <section class="row">
    <div class="info col m8 offset-m2">
      <?php foreach ($data as $desc): ?>
        <p><?=  $desc['descript']; ?></p>
      <?php endforeach; ?>
    </div>

  </section>
</main>
<?php require_once ("moduls/footer.php");?>
</body>
</html>
