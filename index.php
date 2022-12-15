<?php include('db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>

<select id="iller" class="form-control">
    <option value="">İl Seçiniz</option>
    <?php $iller=$db->prepare("SELECT * FROM iller");
    $iller->execute();
    while($row=$iller->fetch(PDO::FETCH_ASSOC)){ ?>
    <option value="<?php echo $row['id']; ?>"><?php echo $row['adi']; ?></option>
    <?php } ?>
</select>

<select id="ilceler" class="form-control">
    <option value="">İlçe Seçiniz</option>
</select>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
<script>
  $(document).ready(function(){
    $("#iller").change(function(){
      var il_id=$(this).val();
      $.post("post.php",{il:il_id},function(data){
        $("#ilceler").append(data);
      });
    });
    });

     

</script>