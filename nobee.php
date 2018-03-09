<!DOCTYPE html>
<html>
<head>
	<title>nobeee</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="nobee.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body  style="background-image:url(https://nts2f1lcc35cnhwu33g5hs1e-wpengine.netdna-ssl.com/wp-content/uploads/2015/06/Top_view-Desk.jpg);background-size: cover;background-repeat: no-repeat; background-attachment: fixed; background-position: center">
	<form action="tabel.php" method="POST" enctype="multipart/form-data">
	<h2><i class="fa fa-user"></i>Form Pendaftaran Nobee</h2>
	<br/>
		<div class="form-group">
  			<label for="namalengkap">Nama</label>
  			<input type="namalengkap" class="form-control" name="nama" id="namalengkap" placeholder="Nama Lengkap Anda"></input>
  		</div>
		<div class="form-group">
  			<label for="nim">NIM</label>
    		<input type="nim" class="form-control" name="NIM" id="nim" placeholder="NIM">
  		</div>
		
		 <div class="form-group">
 			<p>Jenis Kelamin</p>
  			<input type="radio" name="radiobutton" value="pria" id="cek-pria" class="cek"><label for="cek-pria">Pria</label>
  			<input type="radio" name="radiobutton" value="wanita" id="cek-wanita" class="cek"><label for="cek-wanita">Wanita</label>
 		</div>
		<div class="form-group">
			<label for="fk">Fakultas</label>
			<select class="form-control" name="fakultas">
				<option value = "fk">Fakultas Kedokteran</option>
				<option>Fakultas Kedokteran Gigi</option>
				<option>Fakultas Kedokteran Hewan</option>
				<option>Fakultas Ilmu Komputer</option>
				<option>Fakultas Ekonomi dan Bisnis</option>
				<option>Fakultas Teknologi Pertanian</option>
				<option>Fakultas Teknik</option>
				<option>Fakultas Hukum</option>
				<option>Fakultas Pertanian</option>
				<option>Fakultas Ilmu Administrasi</option>
				<option>Fakultas Perikananan dan Ilmu Kelautan</option>
				<option>Fakultas Peternakan</option>
				<option>Fakultas Vokasi</option>
				<option>Fakultas Matematika dan Ilmu Pengetahuan Alam</option>
			</select>
		</div>
		<div class="form-group">
			<label for="fk">Angkatan</label>
			<select class="form-control">
				<option>2014</option>
				<option>2015</option>
				<option>2016</option>
				<option>2017</option>
			</select>
		</div>
		<div class="form-group">
    		<label for="agama">Agama</label>
    		<input type="agama" class="form-control" name="agama" id="agama" placeholder="Agama">
		</div>
		<div class="form-group">
    		<label for="ttl">TTL</label>
    		<input type="ttl" class="form-control" name="TTL" id="ttl" placeholder="TTL">
		</div>
		<div class="form-group">
    		<label for="alamat">Alamat</label>
    		<input type="alamat" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
		</div>
		<div class="form-group">
    		<label for="nohp">No.Hp</label>
    		<input type="nohp" class="form-control" name="nohp" id="nohp" placeholder="No.hp">
		</div>
		<div class="form-group">
    		<label for="email">Id.Line/Email</label>
    		<input type="email" class="form-control" name="idemail" id="email" placeholder="Id.Line/Email">
		</div>
		<div class="form-group">
			<label for="orga">Divisi (maksimal 2)</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Wherever Needed">
			<label class="form-check-label" for="Whereverneeded">Humas</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Decoration">
			<label class="form-check-label" for="Decoration">Kominfo</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Game">
			<label class="form-check-label" for="Game">Kestari</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Food">
			<label class="form-check-label" for="Food">Bendahara</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Arts">
			<label class="form-check-label" for="Arts">PSDM</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Others">
			<label class="form-check-label" for="others">Kewirausahaan</label>
		</div>
		<div class="form-group">
			<label for="orga">Alat yang dimiliki untuk menunjang organisasi</label>
			<br
			<input type="checkbox" class="form-check-input" id="Wherever Needed">
			<label class="form-check-label" for="Whereverneeded">Handphone</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Decoration">s
			<label class="form-check-label" for="Decoration">Laptop</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Game">
			<label class="form-check-label" for="Game">Kamera</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Food">
			<label class="form-check-label" for="Food">Sepeda Motor</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Arts">
			<label class="form-check-label" for="Arts">Mobil</label>
			<br>
			<input type="checkbox" class="form-check-input" id="Others">
			<label class="form-check-label" for="others">Others</label>
		</div>
		<div class="form-group">
			<label for="offers">Motivasi mengikuti organisasi</label>
			<textarea class="form-control" id="offers" rows="3" placeholder="Motivasi saya adalah..."></textarea>
		</div>
		<div class="form-group">
			<label for="offers">Inovasi atau Harapan Forum Perempuan Brawijaya 2018</label>
			<textarea class="form-control" id="offers" rows="3" placeholder="Inovasi saya adalalah.."></textarea>
		</div>

		
<div class="form-group">
			<label for="picture">Foto Diri</label>
			<input type="file" class="form-control-file" id="picture" name="fileUpload">
		</div>
 <div class="form-group">
  <button class="btn btn-submit" type="submit">Daftar &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
 </div>


  </form>
</div></body>
</html>