<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		Input tinggi anda: <input type="text" name="tinggi"><br>
		Input berat anda: <input type="text" name="berat"><br>
		Jenis Kelamin: <br>
		<input type="radio" name="jk" value="pria">Pria<br>
		<input type="radio" name="jk" value="wanita">Wanita<br>
		<button type="submit" name="submit">SUBMIT</button>
	</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$jk = $_POST['jk'];
	$tinggi = $_POST['tinggi'];
	$berat = $_POST['berat'];
	$bmi = new bmi;
	if ($jk == 'pria') {
		$bmi->hitung($tinggi,$berat);
		$bmi->pria();
	}else {
		$bmi->hitung($tinggi,$berat);
		$bmi->wanita();
		
	}
}
	class kalkulator{
		public $tinggi, $berat, $hasil;
		public function hitung($a, $b){
			$this->tinggi = $a / 100;
			$this->berat = $b;
			$this->hasil = $this->berat / ($this->tinggi*$this->tinggi);
		}

	}

	class bmi extends kalkulator{
		
		public function pria(){
			$hasil = $this->hasil;
			echo $hasil.'<br>';
			if ($hasil < 17) {
				echo "Under weight/Kurus";
			}elseif($hasil < 23){
				echo "Normal weight/Normal";
			}elseif($hasil < 27){
				echo "Over weight/Kegemukan";
			}elseif($hasil > 27){
				echo "Obesitas";
			}

		}

		public function wanita(){
			$hasil = $this->hasil;
			echo $hasil.'<br>';
			if ($hasil < 18) {
				echo "Under weight/Kurus";
			}elseif($hasil < 25){
				echo "Normal weight/Normal";
			}elseif($hasil < 27){
				echo "Over weight/Kegemukan";
			}elseif($hasil > 27){
				echo "Obesitas";
			}
		}
	}
?>