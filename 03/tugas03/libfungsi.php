<?php




	function kelulusan($total_nilai){
		
   
			if($total_nilai > 55){
				return "Lulus";
			}

			elseif($total_nilai < 55){
				return "Tidak Lulus";
			}

			

			
		
	}
	
	
	  
		function grade($total_nilai){
   
			if($total_nilai<= 100){
				return "A";
			}

			elseif($total_nilai<= 84){
				return "B";
			}

			elseif($total_nilai<= 69){
				return "C";
			}

			elseif($total_nilai<=55){
				return "C";
			}

			elseif($total_nilai<= 35){
				return "D";
			}

			else{
				return "I";
			}
		}


			function kepuasan($total_nilai){
		
   
				if($total_nilai > 80){
					return "Sangat Memuaskan";
				}
	
				elseif($total_nilai = 80){
					return "Memuaskan";
				}

				elseif($total_nilai < 80){
					return "Tidak Puas";
				}

				else{
					return "Alpha";
				}
	
				
	
				
			
		
	}
?>