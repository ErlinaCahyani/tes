<?php
	class app{
		function cek($n){
			$count=0;
			$string1="Marlin";
			$string2="Booking";
			if($n>0){
				for ($i=1; $i <=$n ; $i++) { 
					if($i%3==0 && $i%5==0){
						if($count<5){
							echo "<b>".$string1." ".$string2."</b></br>";
							$count++;
						}else{
							break;
						}
					}elseif($i%3==0){
						if($count<2){
							echo $i." - ".$string1."</br>";
						}else{
							echo $i." - ".$string2."</br>";
						}
					}elseif($i%5==0){
						if($count<2){
							echo $i." - ".$string2."</br>";
						}else{
							echo $i." - ".$string1."</br>";
						}
					}
				}
			}else{
				echo "Masukan Salah. <a href='tes1.php'>Kembali</a>";
			}	
		}
	}

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$app = new app;
		$app->cek($_POST['n']);
    }
	?>