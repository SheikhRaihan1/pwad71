
<?php 
  print_r($data)


?>

<form action="<?php echo $base_url?>/customer/update" method="post" enctype="multipart/form-data">

<input type="text" name="name" value="<?= $data->name?> ">
<input type="submit" value="submit" name="btn_submit">

</form>