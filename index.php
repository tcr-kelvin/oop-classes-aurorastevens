<?php

class klant
{
    public $id;
    public $auto;
    public $rekeningnummer;
    public $telefoonnummer;
    public $geboortedatum;

    public function __construct($id, $auto, $rekeningnummer, $telefoonnummer, $geboortedatum)
    {
       $this->id = $id;
       $this->auto = $auto;
       $this->rekeningnummer = $rekeningnummer;
       $this->telefoonnummer = $telefoonnummer;
       $this->geboortedatum = $geboortedatum;
    }
}

$klant = new klant(1, 'ford', 123456789, 112, '1 januari 2019' );
echo $klant->id;
echo $klant->telefoonnummer;
echo $klant->geboortedatum;



class auto
{
    public $merk;
    public $model;
    public $klant;
    public $koopdatum;
    public $verkoopprijs;

    public function __construct($merk, $model, $klant, $koopdatum, $verkoopprijs)
    {
        $this->merk = $merk;
        $this->model = $model;
        $this->klant = $klant;
        $this->koopdatum = $koopdatum;
        $this->verkoopprijs = $verkoopprijs;
    }
}
