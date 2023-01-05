<?php

class SignupContr{

    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    protected $signUpClass;

    protected $result = true;

    public function __construct($uid, $pwd, $pwdrepeat, $email){
        $this->signUpClass = new Signup($uid, $email, $pwd);
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;

    }

    public function signupUser()
    {
        if ($this->emptyInput()==false)
        {   
            // echo empty input         
            header("location: ../view/index.php?error=emptyinput");
            exit();            
        }
        if ($this->invalidUid()==false)
        {   
            // Invalid username         
            header("location: ../view/index.php?error=username");
            exit();            
        }
        if ($this->invalidEmail()==false)
        {     
            // echo invalid email       
            header("location: ../view/index.php?error=email");
            exit();            
        }
        if ($this->pwdMatch()==false)
        { 
            // echo password unmatch           
            header("location: ../view/index.php?error=passwordmatch");
            exit();            
        }
        if ($this->uidTakencheck()==false)
        {  
            // echo username or email taken          
            header("location: ../view/index.php?error=useroremailtaken");
            exit();            
        }

        $this->signUpClass->setUser();
        
    }

    private function emptyInput()
    {
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) 
        {
            $this->result = false;
        }

        return $this->result;
    }

    private function invalidUid()
    {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) 
        {
            $this->result = false;
        }
       
        return $this->result;
    }

    private function invalidEmail() {

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $this->result = false;
        }
        
        return $this->result;
    }

    private function pwdMatch() 
    {
        if($this->pwd !== $this->pwdrepeat)
        {
            $this->result = false;
        }
        
        return $this->result;
    }

    private function uidTakencheck() 
    {
        if(!$this->signUpClass->checkUser())
        {
            $this->result = false;
        }
        return $this->result;
    }
}
