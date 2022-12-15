<?php 

include('db.php');

$query=$db->prepare("SELECT * FROM ilceler WHERE il_id=?");
$query->execute(array($_POST["il"]));
$cek=$query->fetchALL(PDO::FETCH_ASSOC);
foreach($cek as $row)
{
    echo '<option value="'.$row['id'].'">'.$row['adi'].'</option>';
}

?>