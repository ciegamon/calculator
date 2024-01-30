<?php 
include "proses.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Kaltulator</title>
</head>
<body>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<a  class="brand" href="">ande</a>
		<form action="" method="post">
		    <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="asupken bilangan pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="asupken bilangan kedua">
			<select  name="operasi" class="opt">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="hitung" class="tombol">
			
        </form>
		<?php if(isset($_POST['hitung'])) {?>
		     <input type="text" value="<?php echo $hasil;?>" class="bil">
		<?php } else { ?>
            <input type="text" value="0" class="bil">
		<?php } ?>

	</div>
</body>
</html>