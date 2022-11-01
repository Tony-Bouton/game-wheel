<?php 

class User {


   private string $userName ;
   private string $password ;
   private string $mail ;



  public function __construct($userName,$password,$mail) 
  
  {
       $this->userName = $userName ;
       $this->password = $password ;
       $this->mail = $mail ;
  }

  public function getName(){

    $userName = $this->userName ;

    return $userName ;

  }

    public function getPassword()
    
    {

        $userPassword = $this->password;

        return $userPassword;
    }

    public function getMail()

    {

        $userMail = $this->Mail;

        return $userMail;
    }

    

}



