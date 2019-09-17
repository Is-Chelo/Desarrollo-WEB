<?php 
	class operaciones
	{
		private $n;
		private $cadena;
		private $a;
		private $b;
		private $c;

		public function __construct($n,$cadena,$a,$b,$c)
		{
			$this->n=$n;
			$this->cadena=$cadena;
			$this->a=$a;
			$this->b=$b;
			$this->c=$c;
		}
		public function CalcularFibonaci()
		{
			$ini = 0;    
			$fin = 1; 
			for($i=0;$i<=$this->n;$i++)    
			{    
    			$sum = $ini + $fin;    
   				echo $sum." ";         
    			$ini=$fin;       
    			$fin=$sum;     
			}
		}
		public function CalcularMenor()
		{		
			if(($this->a < $this->b) and ($this->a < $this->c)) 
			{ 
				echo "<br><br>$this->a es el menor <br><br>";
			}
			else 
			{
				if(($this->b<$this->a) and ($this->b<$this->c))
	 				{ 
	 					echo "<br><br>$this->b es el menor<br><br>";
	 				}
				else 
				{
					echo "<br><br>$this->c es el menor<br><br>";
				}
	 		}	
		}
		public function Piramide()
		{
 			$caden=strlen("$this->cadena");
			$mitad=($caden/2);
 			for($j=1;$j<=$caden+1;$j++)
 			{ 
				echo '<center>'.substr("$this->cadena",$mitad,$j),"<br><br>".'</center>';
				if($mitad== -$mitad)
				{
					$mitad=0;
				}
				else
				{
					$mitad=$mitad-1; /*quitamos a la anterior mitad 1 */ 
				}
				$j=$j+1; /*aumentamos 1 para que nos saque los siguientes dos elementos*/
			}
		}
	}
 ?>