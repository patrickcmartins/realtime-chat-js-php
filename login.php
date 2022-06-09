<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: teste.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper" style="max-width: 600px;">
    <section class="form login">
      <header>Metech Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="Digite seu email" required>
        </div>
        <div class="field input">
          <label>Senha</label>
          <input type="password" name="password" placeholder="Digite sua Senha" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue">
        </div>
      </form>
      <div class="link">Não tem uma conta? <a href="index.php">Registre-se agora</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
