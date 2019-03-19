<?php include("./templates/header.php")?>

<div class="form-container">
  <h2>Форма отправки комментария</h2>
  <form method="post" action="academy.php" id="academyForm">
    <div class="form-group">
      <label>Имя</label>
      <input type="text" name="first_name" class="form-control" placeholder="Введите Имя" required>
    </div>
    <div class="form-group">
      <label>Фамилия</label>
      <input type="text" name="last_name" class="form-control" placeholder="Введите фамилию" required>
    </div>
    <div class="form-group">
      <label>Отчество</label>
      <input type="text" name="patronymic" class="form-control" placeholder="Введите отчество" required>
    </div>
    <div class="form-group">
      <label>Номер телефона</label>
      <input type="tel" name="phone_number" class="form-control" placeholder="Введите телефон" required>
    </div>
    <div class="form-group">
      <label>Почта</label>
      <input type="email" name="email" class="form-control" placeholder="Введите почту" required>
    </div>
    <div class="form-group">
      <label>Дата рождения </label>
      <input type="date" name="date_of_birth" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Комментарий</label>
      <input type="text" name="comment" class="form-control" placeholder="Введите комментарий" required>
    </div>
    <div class="form-group">
      <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
    </div>
    <button type="submit" class="btn btn-primary">Отправить комментарий</button>
  </form>
  <script src='https://www.google.com/recaptcha/api.js?hl=ru'></script>
</div>
<script src='./js/recaptcha_validate.js'></script>

<?php include("./templates/footer.php")?>
