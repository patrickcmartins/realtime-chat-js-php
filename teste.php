<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }

  $userid = $_GET['user_id'];
?>
<?php include_once "header.php"; ?>
<body>
<div class="row">
    <div class="col">
        <div class="leftside">

   <div style="position:fixed; top:0; left:0%; bottom:0; right:0%; width:30%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;" class="wrapper">
   
    <section class="users" height="100%">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="https://media.istockphoto.com/vectors/user-avatar-profile-icon-black-vector-illustration-vector-id1209654046?k=20&m=1209654046&s=612x612&w=0&h=Atw7VdjWG8KgyST8AXXJdmBkzn0lvgqyWod9vTb2XoE=" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Selecione um Usuário para Conversar</span>
        <input type="text" placeholder="Nome...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

</div>
</div>
</div>


<div class="row">
    <div class="col">
        <div class="rightside">

        <iframe id="chatframe" src="chatvazio.php" style="position:fixed; top:0; left:30%; bottom:0; right:0%; width:72%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;"></iframe>

</div>
</div>
</div>

  <script src="javascript/users.js"></script>

</body>
</html>