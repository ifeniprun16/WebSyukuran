<?php
session_start();
?>
<!DOCTYPE html>
<html style="background-color: #fff !important">

<head>
  <title>Buku Tamu</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" type=text/css> <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <link href="js/sweetalert2.css" rel="stylesheet" />
</head>
<!------ Include the above in your HEAD tag ---------->
<body onload="sweetalertclick()">
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="0.png" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form action="input-aksi.php" method="post">
        <div style="margin-bottom: 1px !important; margin-top:20px" class="form-group fadeIn first">
          <select style="height: 60px;margin: 5px;text-decoration: none; color:black" class="form-control dropdown-design a" name="select_lab" required>
            <option value="">Pilih Lab Anda</option>
            <option value="ERP">ERP</option>
            <option value="EAD">EAD</option>
            <option value="BPAD">BPAD</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <input type="text" name="nama" class="fadeIn second" id="nama" placeholder="Nama?">
        <input type="text" name="sepatah_kata" class="fadeIn third" name="sepatah_kata" placeholder="Sepatah kata untuk DASPRO">
        <input type="submit" class="fadeIn fourth" value="Gass!" name="submit">
        </input>
    </div>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="main.js"></script>
  <script src="js/sweetalert2.all.min.js"></script>
  <script>
    function sweetalertclick() {
      Swal.fire({
        icon: 'success',
        title: 'Halo, '+'<?php echo $_GET["name"] ?>',
        text: 'Selamat Datang di Syukuran DASPRO 18!',

      })
    }
  </script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->

</body>


</html>