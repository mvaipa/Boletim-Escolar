<?php 
 // Dados Necessários Para o Sorteio...
 $nump='40';        // Numero de Participantes
 $qpar='20';        // Quantidade de Participantes por grupo
 $i='1';            // Iniciar Contagem...
 $numg=$nump/$qpar; // Quantidade de Grupos...

function random($nNumeros, $nQuant) 
 { 
  $aRand = array(); 
  for ($i=1; $i<=$nQuant; $i++) { 
  $aRand[$i] = $rand = rand(1, $nNumeros); 
  
  while (count($aRand) < $nNumeros) 
	if (!in_array($rand, $aRand)) 
				$aRand[] = $rand; 
			else 
				$rand = rand(1, $nNumeros); 
	} 

	return $aRand; 
} 

 $sorteio=random($nump,1); 

 for ($b=1;$b<=$numg;$b++)
  {
   if($b<10) { echo"<b> Grupo 0$b : </b>"; }  else { echo"<b> Grupo $b : </b>"; }
     
   for ($c=1;$c<=$qpar;$c++)
    {
	 echo"$sorteio[$i]";

     if($c<$qpar) { echo" - "; } 

     $i++;
	}
   echo"<br>";
  }
 
 echo"<b> Sobraram: </b>";
 
 for($d=$i;$d<=$nump;$d++)
  {
   echo"$sorteio[$i]";

   if($d<$nump) { echo" - "; } 

   $i++;
  } 
