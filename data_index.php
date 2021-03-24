<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
	<title>MENU 2</title>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: white;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: white;
}
fieldset{
	width: 50%;
	margin: 200px auto;
	border: none;
	background-color: gray;
}
select{
	width: 24%;
}
</style>
</head>
<body>
<fieldset>

<h3>DATA PASIEN VIRUS COVID-19</h3>
<div class="container">
	<form method="post">
	<label for="cars">Nama Wilayah</label>
<select name="wilayah">
  <option value="">--Pilih Wilayah--</option>
  <option value="DKI Jakarta">DKI Jakarta</option>
  <option value="Jawa Barat">Jawa Barat</option>
  <option value="Banten">Banten</option>
  <option value="Jawa Tengah">Jawa Tengah</option>
</select>
<br>
<tr>
    <td><label>Jumlah Positif</label></td>
    <td><input type="text" name="jmlpositif"></td>
</tr>
<br>
<tr>
    <td><label>Jumlah Dirawat</label></td>
    <td><input type="text" name="jmldirawat"></td>
</tr>
<br>
<tr>
    <td><label>Jumlah Sembuh</label></td>
    <td><input type="text" name="jmlsembuh"></td>
</tr>
<br>
<tr>
    <td><label>Jumlah Meninggal</label></td>
    <td><input type="text" name="jmlmeninggal"></td>
</tr>
<br>
<tr>
    <td><label>Nama Operator</label></td>
    <td><input type="text" name="nmoperator"></td>
</tr>
<br>
<tr>
    <td><label>NIM Mahasiswa</label></td>
    <td><input type="text" name="nim_mahasiswa"></td>
</tr>
<br>
<tr>
    <td><input type="submit" name="tambah" value="SUBMIT" class="btn"></td>
  </form>
</div>
</fieldset>

<?php 
        if(isset($_POST["tambah"])){
          $myFile = fopen("datapasien.txt", "w") ;
          fwrite($myFile, implode("|", $_POST));
       	   fclose($myFile);

          $content = file_get_contents("datapasien.txt");
          $datas = explode("|", $content);
          
          $wilayah = $datas[0];
          $positif = $datas[1];
          $dirawat = $datas[2];
          $sembuh = $datas[3];
          $meninggal = $datas[4];
          $operator = $datas[5];
          $nim = $datas[6];
        
      ?>
      <style type="text/css">
          tr {
            color: black; 
          }
          table {
            width: 50%;
          }
      </style>
      <body style="background-size: cover; background-image: url('');" >
      
      
      <div style="text-align:center;">
        <?php 
          echo "Data Pemantauan Covid19 Wilayah  ".$wilayah."<br>";
          echo "<td> Per ".date('d F Y h:i:s', time()). "<br>";
          echo $operator."/".$nim."<br>";
        ?>

        <table border=1 align="center" style="text-align:center">
        <thead>
          <tr>
            <th>POSITIF</th>
            <th>DIRAWAT</th>
            <th>SEMBUH</th>
            <th>MENINGGAL</th>
          </tr>
          </thead>

          <tbody>
            <tr>
              <td><?= $positif; ?></td>
              <td><?= $dirawat; ?></td>
              <td><?= $sembuh; ?></td>
              <td><?= $meninggal; ?></td>
            </tr>
          </tbody>
        </table>

      <?php } ?>
      </div>
</body>
</html>
</body>
</html> 
