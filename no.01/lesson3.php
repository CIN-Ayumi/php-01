<?php
// 連想配列のkey
// name, age, genderに
// 山田,  20,  女性
// という値を格納し、
$personalData = [ name => '山田', age => '20', gender => '女性'];

// 山田
// 20歳・女性
// と出力してください。
echo '<p>', $personalData[name], '</p>';
echo '<p>', $personalData[age], '・', $personalData[gender], '</p>';
?>

