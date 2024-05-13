<?php


include('../App/views/partials/header.view.php');

include('../App/views/partials/menu.view.php');


?>

<div class="container" style="min-height: 80vh;">
<form method="POST" action="/login">
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" id="username" name="username" >    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>


</div>

<?php
include('../App/views/partials/footer.view.php');

?>