<head>
  <meta charset="UTF-8">
  <title>就活アンケート</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>就活アンケート</h1>
    <form action="write.php" method="post">
    <label>名前：
      <input type="text" name="name" required>
    </label>
    <label>Email：
      <input type="email" name="email" required>
    </label>
    <label>就活の悩みはなんですか？（複数選択可）</label>
    <label><input type="checkbox" name="questions[]" value="自己分析のやり方が分からない">自己分析のやり方が分からない</label>
    <label><input type="checkbox" name="questions[]" value="志望動機や自己PRがうまく書けない">志望動機や自己PRがうまく書けない</label>
    <label><input type="checkbox" name="questions[]" value="面接が苦手／緊張する">面接が苦手／緊張する</label>
    <label><input type="checkbox" name="questions[]" value="エントリーシートが通らない">エントリーシートが通らない</label>
    <label><input type="checkbox" name="questions[]" value="ブラック企業を避けたい">ブラック企業を避けたい</label>
    <label><input type="checkbox" name="questions[]" value="業界・企業の選び方が分からない">業界・企業の選び方が分からない</label>
    <label><input type="checkbox" name="questions[]" value="内定がなかなか出ない">内定がなかなか出ない</label>
    <label><input type="checkbox" name="questions[]" value="親や周囲の期待とのギャップがある">親や周囲の期待とのギャップがある</label>
    <label>その他：
      <input type="text" name="other">
    </label>
    <input type="submit" value="送信する">
  </form>
  </div>
</body>
</html>
