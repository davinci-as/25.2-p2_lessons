<ul class="nav justify-content-center">
  <?php 
    for ($i=0; $i < count($fullRoutes); $i++) { 
  ?>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/25.2-p2_lessons/?page=<?= $fullRoutes[$i]["route"]?>"><?= $fullRoutes[$i]["name"]?></a>
  </li>
  <?php
  }
  ?>

  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Admin</a>
  </li>
</ul>

<?php
mysqli_close($cnx);
