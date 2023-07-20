<?php 

  require 'db/database.php';

  class AuthController extends database {

    function tambah($data){
      $koneksi = $this->connection;
      $nama = htmlspecialchars($data["nama"]);
      $nip= htmlspecialchars($data["nip"]);
      

      $query = "INSERT INTO dosen Values ('', '$nama', '$nip')";
      mysqli_query($koneksi, $query);
      return mysqli_affected_rows($koneksi);
  }

  function hapus($id_dosen){
      $koneksi = $this->connection;
      mysqli_query($koneksi, "DELETE FROM dosen WHERE Id_Dosen = $id_dosen");
      return mysqli_affected_rows($koneksi);
  }


  function ubah($data){

      $koneksi = $this->connection;

      $id = $_GET["id"];
      $nama = htmlspecialchars($data["nama"]);
      $nip = htmlspecialchars($data["nip"]);
     

      $query = "UPDATE dosen SET nama ='$nama', nip = '$nip' WHERE Id_Dosen = $id ";
      mysqli_query($koneksi, $query);
      return mysqli_affected_rows($koneksi);
  }

  }
?>