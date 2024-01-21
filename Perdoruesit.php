<?php
// include "register_form.php";
// include "login_form.php";
class Perdoruesit{

  private $id;
  private $emri;
  private $email;
  private $password;
  private $confirmpassword;

    public function __construct($id,$emri,$email,$password,$confirmpassword){
       // parent::__construct($nrShasise,$prodhuesi,$modeli);
       $this->id = $id;

       $this->emri = $emri;
        $this->email = $email;
        $this->password = $password;
        $this->confirmpassword = $confirmpassword;
    }
    public function getId(){
        return $this->id;
    }
    public function getEmri(){
        return $this->emri;
    }
    public function getEmail(){
        return $this->email;
    } 
    public function getPassword(){
        return $this->password;
    } 
    public function getConfirmpassword(){
        return $this->confirmpassword;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function __toString(){
        return" - perduruesi:".$this->$id ." : ".$this->$emri." : ".$this->$email." : ".$this->$password." : ".$this->$confirmpassword;
    }

}


?>