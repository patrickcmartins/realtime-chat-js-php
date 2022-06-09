<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: teste.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper" style="max-width: 600px;">
    <section class="form signup">
      <header>Metech Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nome</label>
            <input type="text" name="fname" placeholder="Nome" required>
          </div>
          <div class="field input">
            <label>Sobrenome</label>
            <input type="text" name="lname" placeholder="Sobrenome" required>
          </div>
        </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Digite seu Email" required>
        </div>
        <div class="field input">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Nova senha" required>
          <i class="fas fa-eye"></i>
        </div>
        <!-- <div class="field image">
          <label>Selecione uma Imagem</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div> -->
        <div class="field button">
          <input type="submit" name="submit" value="Continue">
        </div>
      </form>
      <div class="link">Já tem uma conta? <a href="login.php">Faça Login</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
