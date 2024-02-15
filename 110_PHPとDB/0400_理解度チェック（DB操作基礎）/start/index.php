<?php
/**
 * 理解度チェック（DB操作基礎）
 */

$user = 'test_user';
$pwd = 'pwd';
$host = 'localhost';
$dbName = 'test_phpdb';
$dsn = "mysql:host={$host};port=8889;dbname={$dbName};";
$conn = new PDO($dsn, $user, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 以下の操作を行ってみてください。
// またtry, catchによってコードを囲んでください。

/**
 * 問１：
 * 店舗Cの全ての商品の在庫数に+10を足し合わせる
 */

// try{
//   $result = $conn->exec('update txn_stocks set amount = amount + 10 where shop_id = 3');
// } catch(PDOException $e) {
//   echo 'PDOException<br>';
//   echo '例外処理が実行されました。<br>';
//   echo $e->getMessage() . '<br>';
//   echo get_class($e) . '<br>';
//   echo '!!!';
// }
/**
 * 問２：
 * 店舗Dを以下のように追加してください。
 */
/**
 * name: '店舗D'
 * pref_id: 4
 */
// try{
//   $result = $conn->exec('insert into test_phpdb.mst_shops(name, pref_id, updated_by) values ("店舗D", 4, "takumi_takahashi")');
// }catch(PDOException $e) {
//   echo 'PDOException<br>';
//   echo '例外処理が実行されました。<br>';
//   echo $e->getMessage() . '<br>';
//   echo get_class($e) . '<br>';
//   echo '!!!';
// }

/**
 * 問３：
 * 店舗Aの椅子の在庫数を取得してください。
 */

 try{
  $pst = $conn->query('select amount from test_phpdb.txn_stocks where shop_id = 1 and product_id = 2');
  $result = $pst->fetchAll();
  echo '<pre>';
  print_r($result);
  echo '</pre>';
}catch(PDOException $e) {
  echo 'PDOException<br>';
  echo '例外処理が実行されました。<br>';
  echo $e->getMessage() . '<br>';
  echo get_class($e) . '<br>';
  echo '!!!';
}