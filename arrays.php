 <?php

 $carros = array("BMW", "Veloster", "Hilux");
 $carros[] = "Amarok";
 print_r($carros);
echo"<hr>";
 // para exibir a quanttidade de elemntos que tem em um array, se usa a função "count":
 echo count($carros);
 echo"<hr>";

 // arrays associativos: índices/chaves são strings

 $pessoa = array("nome"=> "Bia", "idade" => 23, "altura"=> 1.65);
 // para atribuir um valor:
 $pessoa["cidade"] = "Recife";
 print_r($pessoa);
echo $pessoa["nome"];
echo"<br>";

foreach($pessoa as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}
echo"<hr>";

// arrays multidimensionais: array que contém um ou mais array

$times = array("cariocas"=> array("vasco", "flamengo", "botafogo"), "paulistas"=> array("santos", "são paulo", "palmeiras"), "pernambucanos"=> array("santa cruz", "sport", "náutico"));
 print_r($times);
 echo $times["paulistas"][1];

 foreach($times["pernambucanos"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
 }