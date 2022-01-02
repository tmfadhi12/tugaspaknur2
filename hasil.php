<?php
// Get the image and convert into string
// include_once "koneksi.php";

  echo "Silahkan Copy Hasil <br>";

  if(isset($_POST['submit'])){
      $nama = $_FILES['image']['name'];
      $file_tmp = $_FILES['image']['tmp_name'];	
      move_uploaded_file($file_tmp, $nama);
      $s = file_get_contents($nama);
      $data = base64_encode($s);
      $src = 'data:'.mime_content_type($nama).';base64,'.$data;
      echo "<textarea id='w3review' name='w3review' rows='30' cols='50'>".$src."</textarea> <br>";
      // $query = mysqli_query($koneksi,"INSERT INTO upload(img_name) VALUES('$nama')");
    //   if($query){
    //     echo 'FILE BERHASIL DI UPLOAD <br>';
    // }else{
    //     echo 'GAGAL MENGUPLOAD GAMBAR <br>';
    // }
  }

    echo "<a href='input.php'>Kembali</a> <br>";
