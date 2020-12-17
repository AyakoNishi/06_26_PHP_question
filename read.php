<?php
$str = '';
$file = fopen('data/data.csv', 'r'); // ファイルを開く 引数はa
flock($file, LOCK_EX); // ファイルをロック
if ($file) {
  while ($line = fgets($file)) {
    $str .= "<tr><td>{$line}</td></tr>";
  }
}
flock($file, LOCK_UN); // ロック解除
fclose($file); // ファイルを閉じる
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート回答一覧</title>
</head>

<body>
  <fieldset>
    <legend>アンケート回答一覧</legend>
    <a href="input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>アンケート</th>
        </tr>
        <?= $str ?>
      </thead>
      <tbody>

      </tbody>
    </table>
  </fieldset>
</body>

</html>