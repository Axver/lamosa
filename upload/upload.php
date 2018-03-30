<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fileupload']['tmp_name'];
$nama_file   = $_FILES['fileupload']['name'];
$latitude= $_POST['lat'];
$longitude= $_POST['lon'];
// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

  // Masukkan informasi file ke database
  $konek = mysqli_connect("localhost","root","","sampah");

  $query = "INSERT INTO upload_masy (name,latitude,longitude,tgl_upload)
            VALUES('$nama_file','$latitude','$longitude','$tgl_upload')";

  mysqli_query($konek, $query);
}
else{
  echo "File gagal di upload";
}
header("Location: ../index.php");
?>
