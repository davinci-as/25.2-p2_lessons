<ul class="nav justify-content-center">
  <?php 
  while($value = mysqli_fetch_assoc($result)) {
  ?>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/25.2-p2_lessons/?page=<?= $value["route"]?>"><?= $value["name"]?></a>
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
