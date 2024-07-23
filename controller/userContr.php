<?php 

class UserContr extends User{

    private $username;
    private $password;
    private $repeatPwd;
    private $email;

    public function __construct( $username, $password, $repeatPwd=null, $email=null){
        $this->username = $username;
        $this->password = $password;
        $this->repeatPwd = $repeatPwd;
        $this->email = $email;
    }

    /**Setters and getters */
    public function setUsername($username){
         $this->username = $username;
    }
    public function getUsername(){
        return $this->username;
    }
    
    public function setPassword($password){
        $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }
   
    public function setRepeatPwd($repeatPwd){
        $this->repeatPwd = $repeatPwd;
    }
    public function getRepeatPwd(){
        return $this->repeatPwd;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
       return $this->email;
    }
    /*** */

    public function signupUser(){

        //validation
        if($this->emptyInput($this->username) == false || $this->emptyInput($this->password) == false || $this->emptyInput($this->repeatPwd) == false || $this->emptyInput($this->email) == false){
            header("Location: ../view/signup.php?error=emptyInput");
            exit();
        }
        if($this->invalidUsername() == false){
        header("Location: ../view/signup.php?error=invaliduid");
        exit();
        }
        if($this->invalidEmail() == false){
            header("Location: ../view/signup.php?error=invalidemail");
            exit();
        }
        if($this->pwdMatch() == false){
            header("Location: ../view/signup.php?error=pwdmatch");
            exit();
        }
        if($this->usernameTakenChec() == false){
            header("Location: ../view/signup.php?error=usermailtaken");
            exit();
        }

        //setUser to DB
        if($this->setUser($this->username, $this->password, $this->email)){
            
            header("Location: ../view/signup.php?error=FailedStmt");
        }
    }


    public function loginUser(){

        //validation
        if($this->emptyInput($this->username) == false|| $this->emptyInput($this->password) == false){
            header("Location: ../index.php?error=emptyInput");
            exit();
        }

        //verifyUser in DB
        $res = $this->verifyLoginUser($this->username, $this->password);
        if($res==1){
            header("Location: ../index.php?error=FailedStmt");
        }
        if($res==2){
            header("Location: ../index.php?error=invalidPassUser");
        }
    }
    private function emptyInput($input){
        $result = true;

        if(empty($input)){
            $result = false;
        }
        return $result;
    }

    private function invalidUsername(){
        $result = true;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username)){
            $result = false;
        }
        return $result;
    }

    private function invalidEmail(){
        $result = true;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }
        return $result;
    }

    private function pwdMatch(){
        $result = true;
        if($this->password !== $this->repeatPwd){
            $result = false;
        }
        return $result;
    }

    private function usernameTakenChec(){
        $result = true;
        if($this->checkUser($this->username, $this->email)){
            $result = false;
        }
        return $result;
    }

    //traer user id de la base de datos comparando con user de la sessión para poder usuarlo en reservas
     public function idUser(){

         $res = $this->getUser($this->username);
        return $res;
     }

}