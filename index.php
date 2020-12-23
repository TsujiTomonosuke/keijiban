<!DOCTYPE html>
<httml lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css"href="style.css">
    </head>
    
    <body>
      <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt = $pdo->query("select * from 4each_keijiban");
        
        ?>
        
    <p><img src="4eachblog_logo%20-%20%E3%82%B3%E3%83%94%E3%83%BC.jpg"></p>
        
    <header>
        <ul>
         <li>トップ</li>
         <li>プロフィール</li>
         <li>4eachについて</li>
         <li>登録フォーム</li>
         <li>問い合わせ</li>
         <li>その他</li>
        </ul>
    </header>
        
    <main>
      <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        <form method="post" action="insert.php">
            <h2>入力ホーム</h2>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="50" name="handlename">
            </div>
            
            <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="50" name="title">
            </div>
            
            <div>
                <label>コメント</label>
                <br>
                <textarea rows="7" cols="80" name="comments"></textarea>
            </div>
            
            <div>
                <input type="submit" class="submit" value="投稿する">
            </div>
        </form>
          
        <?php
          
        while($row = $stmt->fetch()){
            
            echo "<div class='title1'>";
            echo "<h2>".$row['title']."</h2>";
            echo $row['comments'];
            echo "<p>posted by ".$row['handlename']."</p>";
            echo "</div>";
        }
        ?>
          
        </div>
        
      <div class="link">
            <h3>人気の記事</h3>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h3>オススメリンク</h3>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
       </div>  
    </main>
        
        <footer>
        copyright © internous|4each blog the which A to Z about programming
        </footer>
    
    </body>