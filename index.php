<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  }else{
    echo "Welcome";
  }
}

function print_description(){
  $list=scandir('./data');

  $i=0;
  while($i < count($list)){
    if($list[$i]!='.'){
      if($list[$i]!='..'){
    echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
  }
}
    $i=$i+1;
  }
}


function print_list(){
  if(isset($_GET['id'])){
    echo  file_get_contents("data/".$_GET['id']);
  }else{
    echo "Hello, User";
  }
}

function print_login(){
      if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
          echo "<p>로그인을 해 주세요. <a href=\"login.php\">[로그인]</a></p>";
      } else {
          $user_id = $_SESSION['user_id'];
          $user_name = $_SESSION['user_name'];
          echo "<p><strong>$user_name</strong>($user_id)님 환영합니다.";
          echo "<a href=\"logout.php\">[로그아웃]</a></p>";
      }
}
 ?>


<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>

    <h1><a href="index.php">WEB</a></h2>

    <div align="right">
      <?php
      if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
          echo "<p>로그아웃. <a href=\"login.php\">[로그아웃]</a></p>";
      } else {
          $user_id = $_SESSION['user_id'];
          $user_name = $_SESSION['user_name'];
          echo "<p><strong>$user_name</strong>($user_id)님 환영합니다.";
          echo "<a href=\"logout.php\">[로그아웃]</a></p>";
      }
      ?>
    </div>

    <ol>
      <?php
      print_description();
      ?>
    </ol>

    <h2><a href="creat.php">creat</a></h2>
    <form action="creat_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Tilte">
      </p>
      <p>
        <textarea name="description" placeholder="description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>

    <h2>
      <?php
      print_title();
      ?>
    </h2>


  </body>
</html>
