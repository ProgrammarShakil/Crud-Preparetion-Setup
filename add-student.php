<?php include "inc/header.php"; ?>
  <main class="container">
    
    <h5 class="text-end"><a style="color:#fff; border-radius:5px"  class="text-decoration-none btn btn-secondary px-4 px-1" href="index.php"></i> Back </a></h5>

      <form action="lib/process.php" method="post">

      <div class="row">
          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="First name">
          </div>

          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Last name">
          </div>

          <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Last name">
          </div>
      </div>

      <button type="submit" class="btn btn-success mt-2">Submit</button>
     </form>
  </main>
<?php include "inc/footer.php"; ?>