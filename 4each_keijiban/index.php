<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>掲示板</title> 
<link rel= "stylesheet" type="text/css"href="style.css">
</head>

<header>
    <img src="4eachblog_logo.jpg">
</header>
    
<body>

<?php
    
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt = $pdo->query("select*from 4each_keijiban");
    
?>
    
    <ul class="topbar">
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
        
<div class="left">  
    <h1>プログラミングに役立つ掲示板</h1>
  <div class="nyuryokuform">
    <h2>入力フォーム</h2>
     <form method="post" action="insert.php">
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlname">
        </div>
        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
        </div>
        <div>
            <label>コメント</label>
            <br>
            <textarea cols="70" rows="7" name="comments"></textarea>
        </div>
  
        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
     </form>
  </div>   
 <?php
        
 while($row = $stmt->fetch()){
    
    echo"<div class='kiji'>";
    echo"<h2>".$row['title']."</h2>";
    echo"<div class='contents'>";
    echo $row['comments'];
    echo"<div class='handlname'>posted by".$row['handlname']."</div>";
    echo"</div>";
    echo"</div>";
    }
?>         
   
         
</div>

 <div class="right">
   <div class="ninnkikiji">
    <h2>人気の記事</h2>
     <ul>
      <li>PHPオススメ本</li>
      <li>PHP MyAdminの使い方</li>
      <li>今人気のエディタ　Top5</li>
      <li>HTMLの基礎</li>
     </ul>
   </div>
   <div class="osusume">
    <h2>オススメリンク</h2>
     <ul>
      <li>インターノウス株式会社</li>
      <li>XAMPPのダウンロード</li>
      <li>Eclipseのダウンロード</li>
      <li>Bracketsのダウンロード</li>
     </ul>
   </div>
   <div class="katego">
    <h2>カテゴリー</h2>
     <ul>
      <li>HTML</li>
      <li>PHP</li>
      <li>MySQL</li>
      <li>Javascript</li>
     </ul>
   </div>
</div>        

<footer>
    <p> copyright ©︎ internous | 4each blog the which provides A to Z about progamming.</p>
</footer>
    
</body>
</html>