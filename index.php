<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題①-2</title>
</head>
<body>
<form method="POST">
  <div class="text">
    <input type="text" name="question" class="textbox">
    <input type="submit" value="検索" class="btn-submit"> 
  </div>
<?php
$fruits = ['apple', 'orange', 'strawberry'];
$question = $_POST['question'];
if($question == '') {
  echo '';
}
else if(in_array($question, $fruits)) {
  echo $question.'は、配列に含まれています。';
}
else {
  echo $question.'は、配列に含まれていません。';
}
?>
</body>
</html>