<?php

class aplikimetpunes{

  private  $id;
  private $emri;
  private $mbiemri;
  private $email;
  private $nenshtetsia;
 
  private $adresa;

    public function __construct($emri,$mbiemri,$email,$nenshtetsia,$adresa){
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->email = $email;
        $this->nenshtetsia = $nenshtetsia;
      
        $this->adresa = $adresa;
    }

    public function getEmri(){
        return $this->emri;
    }
    public function setEmri($e){
        $this->emri = $e;
    }
    public function getMbiemri(){
        return $this->mbiemri;
    }
    public function setMbiemri($mbiemri){
        $this->mbiemri = $mbiemri;
    }
    public function getEmail(){
        return $this->email;
    } 
    public function setEmaili($email){
        $this->emaili = $email;
    }
    public function getNenshtetsia(){
        return $this->nenshtetsia;
    } 
    public function setNenshtetsia($nenshtetsia){
        $this->nenshtetsia = $nenshtetsia;
    }
   
    public function getAdresa(){
        return $this->adresa;
    }
    public function setAdresa($adresa){
        $this->adresa = $adresa;
    }
    public function __toString(){
        return" - perduruesi:".$this->$id ." : ".$this->$emri." : ".$this->$mbiemri." : ".$this->$email." : ".$this->$nenshtetsia." : ".$this->$adresa;
    }

}