<?php
// var_dump($_POST);
// exit();
$name = $_POST["name"]; // データ受け取り
$email = $_POST["email"];
$answer = $_POST["answer"];
$write_data = "{$name},{$email},{$answer}\n"; // スペース区切りで最後に改行
$file = fopen('data/data.csv', 'a'); // ファイルを開く 引数はa
flock($file, LOCK_EX); // ファイルをロック
fwrite($file, $write_data); // データに書き込み，
flock($file, LOCK_UN); // ロック解除
fclose($file); // ファイルを閉じる
header("Location:input.php"); // 入力画面に移動
