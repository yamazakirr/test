<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
  </head>
  <body>
    <!-- ヘッダー -->
    <header>
      <img src="./diblog_logo.jpg">
      <div>

        <ul>
          <li>トップ</li>
          <li>プロフィール</li>
          <li>D.I.Blogについて</li>
          <li>登録フォーム</li>
          <li>問い合わせ</li>
          <li>その他</li>
        </ul>
      </div>
    </header>

    <!-- メイン -->
    <?php
    mb_internal_encoding("utf-8");
    $pdo = new PDO("mysql:dbname=lesson3;host=localhost;","root","root");
    $stmt = $pdo->query("select* from diworks_keijiban");

    // データベースに格納されている投稿の情報をweb上に表示する
    // while($row = $stmt->fetch()){
    //   echo $row['handlename'];
    //   echo $row['title'];
    //   echo $row['comments'];
    // }
    ?>


    <main>
      <!-- 左の記事 -->
      <div class="left">

        <h1>プログラミングに役立つ掲示板</h1>
        
        <!-- 入力画面 -->
        <form method="post" action="insert.php">
          <h2>入力ホーム</h2>
            <div>
              <label>ハンドルネーム</label><br>
              <input type="text" class="text" size="35" name="handlename">
            </div>

            <div>
              <lbael>タイトル</lbael><br>
              <input type="text" class="text" size="35" name="title">
            </div>

            <div>
              <label>コメント</label><br>
              <textarea cols="70" rows="7" name="comments"></textarea>
            </div>

            <div>
              <input type="submit" class="submit" value="送信する">
            </div>
        </form>

              <!-- 投稿記事を表示 -->
        <?php

        while($row = $stmt->fetch()){

          echo "<div class='kiji'>";
          echo "<h3>".$row['title']."</h3>";
          echo "<div class='contents'>";
          echo $row['comments'];
          echo "<div class='handlename'>posted by".$row['handlename']."</div>";
          echo "</div>";
          echo "</div>";
        }
      ?>





      </div>

      <!-- 右の記事 -->
      <div class="right">
        <!-- 記事① -->
        <h2 class="list_title">人気の記事</h2>
        <ul>
          <li>PHPオススメ本</li>
          <li>PHP MyAdminの使い方</li>
          <li>今人気のエディタ</li>
          <li>HTMLの基礎</li>
        </ul>
        <!-- 記事② -->
        <h2 class="list_title">オススメリンク</h2>
        <ul>
          <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
          <li>XAMPPのダウンロード</li>
          <li>Eclipseのダウンロード</li>
          <li>Braketsのダウンロード</li>
        </ul>
        <!-- 記事③ -->
        <h2 class="list_title">カテゴリ</h2>
        <ul>
          <li>HTML</li>
          <li>PHP</li>
          <li>MySQL</li>
          <li>JavaScript</li>
        </ul>
      </div>



    </main>

    <!-- フッター -->
    <footer>
      <p>
        Copyright D.I.works D.I.blog is the one which provides A to Z about programming
      </p>

    </footer>
    
  </body>
  
</html>