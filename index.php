<!DOCTYPE html>
<html style="background-color: #fff !important">

<head>
  <title>Guestbook | Daspro Walimatul Project 2020</title>
  <link rel="stylesheet" href="static/css/bootstrap.min.css">
  <link rel="stylesheet" href="static/css/style.css" type=text/css> 
  
  
  <link href="static/css/sweetalert2.css" rel="stylesheet" />
</head>
<!------ Include the above in your HEAD tag ---------->
<body onload="sweetalertclick()">
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="static/img/logo.png" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form action="input-aksi.php" method="post">
        <div style="margin-bottom: 1px !important; margin-top:20px" class="form-group fadeIn first">
          <select style="height: 60px;margin: 5px;text-decoration: none; color:black" class="form-control dropdown-design" name="select_lab" required>
            <option selected disabled>Pilih Organisasi Kamu</option>
            <option value="Pembina Lab/Keprof">Pembina Lab/Keprof</option>
            <option value="BPH HMSI">BPH HMSI</option>
            <option value="BPM HMSI">BPM HMSI</option>
            <option value="BPH HMTI">BPH HMTI</option>
            <option value="Laboratorium/Keprofesian DASPRO 2016">Laboratorium/Keprofesian DASPRO 2016</option>
            <option value="Laboratorium/Keprofesian DASPRO 2017">Laboratorium/Keprofesian DASPRO 2017</option>
            <option value="Keprofesian Technopreneur">Keprofesian Technopreneur</option>
            <option value="Laboratorium/Keprofesian APK&E">Laboratorium/Keprofesian APK&E</option>
            <option value="Laboratorium/Keprofesian BPAD">Laboratorium/Keprofesian BPAD</option>
            <option value="Laboratorium/Keprofesian EAD">Laboratorium/Keprofesian EAD</option>
            <option value="Laboratorium/Keprofesian ENSYS">Laboratorium/Keprofesian ENSYS</option>
            <option value="Laboratorium/Keprofesian ERP">Laboratorium/Keprofesian ERP</option>
            <option value="Laboratorium/Keprofesian FISDAS">Laboratorium/Keprofesian FISDAS</option>
            <option value="Laboratorium/Keprofesian GARTEK">Laboratorium/Keprofesian GARTEK</option>
            <option value="Laboratorium/Keprofesian ISM">Laboratorium/Keprofesian ISM</option>
            <option value="Laboratorium/Keprofesian Perancangan Produk">Laboratorium/Keprofesian Perancangan Produk</option>
            <option value="Laboratorium/Keprofesian PLTF">Laboratorium/Keprofesian PLTF</option>
            <option value="Laboratorium/Keprofesian PROSMAN">Laboratorium/Keprofesian PROSMAN</option>
            <option value="Laboratorium/Keprofesian ROBOTIK">Laboratorium/Keprofesian ROBOTIK</option>
            <option value="Laboratorium/Keprofesian SIMBI">Laboratorium/Keprofesian SIMBI</option>
            <option value="Laboratorium/Keprofesian SIPO">Laboratorium/Keprofesian SIPO</option>
            <option value="Laboratorium/Keprofesian SISJAR">Laboratorium/Keprofesian SISJAR</option>
            <option value="Laboratorium/Keprofesian SISPROMASI">Laboratorium/Keprofesian SISPROMASI</option>
            <option value="Laboratorium/Keprofesian TEKMI">Laboratorium/Keprofesian TEKMI</option>
          </select>
        </div>
        <input type="text" name="nama" class="fadeIn second" id="nama" placeholder="Ketik nama cantique kamu di sini" required>
        <input type="text" name="sepatah_kata" class="fadeIn third" name="sepatah_kata" placeholder="Sepatah kata untuk DASPRO" required>
        <input type="submit" class="fadeIn fourth" value="Gass!" name="submit">
        </input>
    </div>
  </div>

  <script src="static/js/jquery-3.4.1.min.js"></script>  
  <script src="static/js/bootstrap.min.js"></script>
  <script src="static/js/main.js"></script>
  <script src="static/js/sweetalert2.all.min.js"></script>

  <script>
    function sweetalertclick() {
      Swal.fire({
        icon: 'success',
        title: 'Halo, '+'<?php echo $_GET["name"] ?>',
        text: 'Selamat datang di Syukuran Keprofesian DASPRO 2018!',
        timer: 2500
      })
    }
  </script>

</body>
</html>