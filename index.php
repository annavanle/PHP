
<?php 
echo '<pre>';
var_dump($_POST);
echo '</pre>';
// echo '<pre>';
// var_dump ($_POST);
// echo '</pre>';
$pageFlag = 0;
if(!empty($_POST['btn_confirm'])){
    $pageFlag =1;
    //からではなかったらこのなか実行される
}
if(!empty($_POST['btn_submit'])){
   $pageFlag =2;
} 
//記入=0。確認=1。完了=2。３つの画面変更する　 $pageFlag は画面の代表
//input.php?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP CRUD</title>
  </head>
  <body>
<!--** 入力 -->
<!-- flag=0  -->
  <?php if($pageFlag === 0): ?>
   <form method="POST" action="index.php">
  <!-- sale -->
  <div class="form-group col-md-6">
    <label for="saleName">営業担当</label>
    <input type="text" class="form-control" name="saleName" placeholder="Input Your name">
  </div>
  <!-- client  -->
  <div class="form-group col-md-6">
    <label for="clientName">クライアント名</label>
    <input type="text" class="form-control" name="clientName" placeholder="Input Your Client Name">
  <!-- Requirement -->
 <div class="form-group">
    <label for="requirement">要件提議</label>
    <textarea class="form-control" cols="30" rows="10" name="requirement" placeholder="Input Requirement"></textarea>
</div>
<!-- deadline  -->
  <div class="form-group">
    <label for="deadline">締め切り</label>
    <input type="date" class="form-control" name="deadline" placeholder="Input Deadline">
   </div>
<!-- Check -->
    <div class="form-group">
    <input type="submit" value="確認する" name="btn_confirm" class="btn btn-primary">   
   </div>
  <form>
  <?php endif;?>
<!--** 確認 -->
<div>
<?php if($pageFlag ===1):?>
<form method="POST" action="index.php">
  <!-- sale -->
  <div class="form-group col-md-6">
    <label for="saleName">営業担当</label>
    <input type="text" class="form-control" name="saleName" placeholder="<?php echo $_POST['saleName'];?>">
  </div>
  <!-- client  -->
  <div class="form-group col-md-6">
    <label for="clientName">クライアント名</label>
    <input type="text" class="form-control" name="clientName" placeholder="<?php echo $_POST['clientName'];?>">
  <!-- Requirement -->
 <div class="form-group">
    <label for="requirement">要件提議</label>
    <textarea class="form-control" cols="30" rows="10" name="requirement" placeholder= "<?php echo $_POST['requirement'];?>"></textarea>
</div>
<!-- deadline  -->
  <div class="form-group"> 
    <label for="deadline">締め切り</label>
    <input type="text" class="form-control" name="deadline" placeholder="<?php echo $_POST['deadline'];?>">
   </div>
<!-- -->
    <div class="form-group">
    <input type="submit" class="btn btn-primary"　 value="戻る" name="back">
    <input type="submit" class="btn btn-primary"　value="送信" name="btn_submit">
   </div>
   <input type="hidden" name="saleName" value=" <?php echo $_POST['saleName'];?> ">
     <input type="hidden" name="clientName" value=" <?php echo $_POST['clientName'];?> ">
     <input type="hidden" name="requirement" value=" <?php echo $_POST['requirement'];?> ">
     <input type="hidden" name="deadline" value="<?php echo $_POST['deadline'];?>">
  </form>
  <?php endif;?>
  <!--** 完了 -->
  <!-- flag=2 -->
<?php if($pageFlag ===2): ?> 
<div class="form-group">
    <input type="submit" class="btn btn-primary"　 value="完了しました">
   </div>
  <?php endif;?>
 


  </body>
</html> 