<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート（入力画面）</title>
</head>

<body>
  <form action="create.php" method="POST">
    <fieldset>
      <legend>アンケート入力（入力画面）</legend>
      <a href="read.php">一覧画面</a>
      <div>
        name: <input type="text" name="name">
      </div>
      <div>
        email: <input type="text" name="email">
      </div>
      <div>
        answer: <input type="textbox" name="answer">
      </div>
      <div>
        <button>送信</button>
      </div>
    </fieldset>
  </form>

</body>

</html>