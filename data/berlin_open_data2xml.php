<?php

class Plzs{
	var $plz; //Postleitzahlen
	var $value; //Wert zur postleitzahl

	function Plzs(){
		$this->plz = Array();
		$this->value = Array();
	}
	function hasPlz($plz){
		for($i = 0; $i < sizeof($this->plz); $i++){
			if(strval($this->plz[$i]) == strval($plz)){
				return true;
			}
		}
		return false;
	}
	function getPlzNr($plz){
		for($i = 0; $i < sizeof($this->plz); $i++){
			if(strval($this->plz[$i]) == strval($plz)){
				return $i;
			}
		}
	}
	function getPlzLength(){
		$l = 0;
		for($i = 0; $i < sizeof($this->plz); $i++){
			$l++;
		}
		return $l;
	}
}

header('Content-Type: text/xml');
header ('Cache-Control: no-cache');
header ('Cache-Control: no-store' , false);

//Eingaben beziehen
$statement = $_GET["statement"];
//XML beziehen

$xml = simplexml_load_file("http://www.berlin.de/ba-lichtenberg/buergerservice/kitas/index.php/index/all.xml?q=");

//var_dump($xml);
$dataarray = "<?xml version=\"1.0\"?>";
$dataarray .= "<dataSet>";

$plzs = new Plzs();

foreach($xml->index->item as $item){
	if(strlen($statement) != 0){
		if(strval($item->plz) == strval($statement)){
			$dataarray .= "<dataRow>";
			$dataarray .= "<key>";
			$dataarray .= $item->kitaname;
			$dataarray .= "</key>";
			$dataarray .= "<value>";
			$dataarray .= $item->plaetze;
			$dataarray .= "</value>";
			$dataarray .= "</dataRow>";
		}
	}else {
		if($plzs->hasPlz($item->plz)){
			$j = $plzs->getPlzNr($item->plz);
			$plzs->value[$j] = $plzs->value[$j] + $item->plaetze;
		} else {
			$j = $plzs->getPlzLength();
			$plzs->plz[$j] = $item->plz;
			$plzs->value[$j] = $item->plaetze;
		}
	}
}
for($i = 0; $i < sizeof($plzs->plz); $i++){
	$dataarray .= "<dataRow>";
	$dataarray .= "<key>";
	$dataarray .= $plzs->plz[$i];
	$dataarray .= "</key>";
	$dataarray .= "<value>";
	$dataarray .= $plzs->value[$i];
	$dataarray .= "</value>";
	$dataarray .= "</dataRow>";
}
$dataarray .= "</dataSet>";
echo $dataarray;
?>