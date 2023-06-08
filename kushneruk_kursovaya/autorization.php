<!-- Шапка -->
<?php
  include("header.php");
if(isset($_SESSION["user"])){
echo "<script>location.href='/';</script>";
}else{

?>
<div class="container">
    <h3>ВХОД</h3>
    <form action="/autorizationDB.php" method="POST">
      <div class="">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" id="phone" required pattern="{12,12}">
      </div>
      <div class="">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" required pattern="{6,200}">
      </div>
      <button type="submit" class="btn btn-primary">Войти</button>
    </form>
    <p>Еще не авторизовались? <a href="/registration.php">Зарегистрируйтесь</a></p>
</div>  
<!-- Подвал -->
<?php
include("footer.php");
}
?>