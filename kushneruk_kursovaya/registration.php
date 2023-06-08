<?php
// Шапка
include("header.php");
?>
<div class="container">
    <h2>Регистрация</h2>
    <!-- Форма -->
    <form action="registrationDB.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Surname</label> <br>
        <input type="text" name="name" class="form-control" id="name" required pattern="^[А-Яа-яЁё\s]+${1,200}">
      </div>
      <div class="mb-3">
        <label for="surname" class="form-label">Name</label> <br>
        <input type="text" name="surname" class="form-control" id="surname" required pattern="^[А-Яа-яЁё\s]+${1,200}">
      </div>
      <div class="mb-3">
        <label for="patronymic" class="form-label">Patronymic</label> <br>
        <input type="text" name="patronymic" class="form-control" id="patronymic" pattern="^[А-Яа-яЁё\s]+${1,200}">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label> <br>
        <input type="password" name="password" class="form-control" id="password" required pattern="[A-Za-z]{6,200}">
      </div>
      <div class="mb-3">
        <label for="password_repeat" class="form-label">Password_repeat</label> <br>
        <input type="password" name="password_repeat" class="form-control" id="password_repeat" required pattern="[A-Za-z]{6,200}">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label> <br>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required pattern="{1,200}">
      </div>
      <div class="mb-3">
        <label for="birthday" class="form-label">Birthday</label> <br>
        <input type="date" name="birthday" class="form-control" id="birthday" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label> <br>
        <input type="text" name="phone" class="form-control" id="phone" required pattern="{12,12}">
      </div>
      <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div> 