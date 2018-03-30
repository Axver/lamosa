<?php

include 'connect.php';
$query = "SELECT * FROM upload_masy";
$query2=mysqli_query($konek, $query);


$data = [];
$i = 0;

while ($row = mysqli_fetch_array($query2))
{
  $data[$i]['id_upload' ] = $row['id_upload'];
  $data[$i]['name'] = $row['name'];
  $data[$i]['latitude'] = $row['latitude'];
  $data[$i]['longitude'] = $row['longitude'];
  $i++;
}

// echo json_encode($data);






 ?>
