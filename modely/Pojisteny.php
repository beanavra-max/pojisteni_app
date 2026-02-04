<?php
class Pojisteny
{
public $jmeno;
public $prijmeni;
public $vek;
public $telefon;

public function __construct($jmeno, $prijmeni, $vek, $telefon)
{
$this->jmeno = $jmeno;
$this->prijmeni = $prijmeni;
$this->vek = $vek;
$this->telefon = $telefon;
}

public function __toString()
{
return $this->jmeno . " " . $this->prijmeni;
}
}
