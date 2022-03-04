<?php include_once('header.php'); ?>
<div class="container">
  <div class="login row">
    <div class="col loginL d-flex align-items-center">
      <div class="row">
        <h1>Staff Login Page</h1>
        <form action="functions.php?op=checkLogin" method="post">

          <div>
            <label for="inputEmail4" class="form-label d-flex justify-content-start">Email:</label>
            <input type="email" id="email" name="email" class="form-control" require placeholder="you@example.com"><br>
          </div>

          <div>
            <label for="email" class="d-flex justify-content-start">Password:</label>
            <input type="password" id="password" name="password" class="form-control">
          </div>
          <br>
          <input type="submit" class="btn" value="Login" id="btn">
        </form> 
      </div> 
    </div>
    <div class="col loginR align-items-center">
      <img src="../images/login1.jpg" alt="furniture">
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>

