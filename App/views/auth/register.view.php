
<?php


include('../App/views/partials/header.view.php');

include('../App/views/partials/menu.view.php');


?>

<div class="container" style="min-height: 80vh;">
<form method="POST" action="/register">
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" id="username" name="username" >    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">username</label>
    <input type="email" class="form-control" id="email" name="email" >    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="password_confirmation" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>

  <div class="mb-3">
    <select class="form-select" aria-label="Default select example" name="role">
      <option selected value="USER">USER</option>
      <option value="ADMIN">ADMIN</option>  
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
</form>


</div>

<?php
include('../App/views/partials/footer.view.php');

?>