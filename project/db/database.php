<?php 

  class database {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "blog";
    public $connection;

    function __construct(){
      $this->connection = $this->connectDB();
    }

    function connectDB(){
      $connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
      return $connection;
    }

    function query($query){
      $koneksi = $this->connection;
      $result = mysqli_query($koneksi, $query);
      $rows = [];
      while($hasil = mysqli_fetch_array($result)){
          $rows[] = $hasil;
      }
      return $rows;

    }

  }

?>