<?php

//Ini class alert
 class alert{

//ini method alert
  public function alertin(){

    if(isset($_POST['kirim'])){
    $nama = htmlspecialchars($_POST['nama']);

     echo " <script>
     setTimeout(function (){

     swal({
        title: 'Good job!',
        text: 'Nama Anda $nama',
        icon: 'success',
        button: 'Oke',
      });

    },10);

      </script>" ;



    }



  }




 }

//ini objek alert
 $alert = new alert;

?>
