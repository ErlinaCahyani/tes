<?php
	function cek($n){
			$count=0;
			if($n>0){
				for ($i=1; $i <=$n ; $i++) { 
					if($i%3==0 && $i%5==0){
						if($count<5){
							echo "<b>Marlin Booking</b></br>";
							$count++;
						}else{
							break;
						}
					}elseif($i%3==0){
						if($count<2){
							echo $i." - Marlin</br>";
						}else{
							echo $i." - Booking</br>";
						}
					}elseif($i%5==0){
						if($count<2){
							echo $i." - Booking</br>";
						}else{
							echo $i." - Marlin</br>";
						}
					}
				}
			}else{
				echo "Masukan Salah. <a href='tes1.php'>Kembali</a>";
			}	
		}

	if($_SERVER['REQUEST_METHOD']=='POST')
           {
               cek($_POST['n']);
           }
	?>