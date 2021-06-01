<?php

$var = $_SESSION['varname'];
require 'public/views/header.php';

?>



  <div class="container">
      <div class="row justify-content-center" style="margin-top: 10px">

              <?php require 'public/views/nav.php'; ?>

          <div class="col-10">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                  </div>
              </div>
          </div>

      </div>
  </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


  <?php

  require 'public/views/footer.php';

  ?>
