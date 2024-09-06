<?php

class UserContr extends User
{

    private $username;
    private $password;
    private $repeatPwd;
    private $email;
    private $userfullname;
    private $token;

    public function __construct($username = "", $password = "", $repeatPwd = "", $email = "", $userfullname = "")
    {
        $this->username = $username;
        $this->password = $password;
        $this->repeatPwd = $repeatPwd;
        $this->email = $email;
        $this->userfullname = $userfullname;
    }

    /**Setters and getters */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setUserfullname($userfullname)
    {
        $this->userfullname = $userfullname;
    }
    public function getUserfullname()
    {
        return $this->userfullname;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setRepeatPwd($repeatPwd)
    {
        $this->repeatPwd = $repeatPwd;
    }
    public function getRepeatPwd()
    {
        return $this->repeatPwd;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }
    public function getToken()
    {
        return $this->token;
    }
    /*** */

    public function signupUser()
    {

        //validation
        if ($this->emptyInput($this->username) == false || $this->emptyInput($this->userfullname) == false || $this->emptyInput($this->password) == false || $this->emptyInput($this->repeatPwd) == false || $this->emptyInput($this->email) == false) {
            header("Location: ../view/register.php?error=emptyInput");
            exit();
        }
        if ($this->invalidUserfullname() == false) {
            header("Location: ../view/register.php?error=invalidufullname");
            exit();
        }
        if ($this->invalidUsername() == false) {
            header("Location: ../view/register.php?error=invaliduid");
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("Location: ../view/register.php?error=invalidemail");
            exit();
        }
        if ($this->invalidPassword() == false) {
            header("Location: ../view/register.php?error=invalidpwd");
            exit();
        }
        if ($this->pwdMatch() == false) {
            header("Location: ../view/register.php?error=pwdmatch");
            exit();
        }
        if ($this->usernameTakenCheck() == 2) {
            header("Location: ../view/register.php?error=UserOrMailTaken");
            exit();
        }
        if ($this->usernameTakenCheck() == 1) {
            header("Location: ../view/register.php?error=FailedStmt");
            exit();
        }

        //setUser to DB
        $token = $this->generateToken();
        if ($this->setUser($this->username, $this->password, $this->email, $this->userfullname, $token)) {

            header("Location: ../view/register.php?error=FailedStmt");
            exit();
        }
        //enviar correo de activacion
        $this->sendEmailActivacio($token);
    }


    public function loginUser()
    {

        //validation
        if ($this->emptyInput($this->username) == false) {
            header("Location: ../view/login.php?error=emptyInputUser");
            exit();
        }
        if ($this->emptyInput($this->password) == false) {
            header("Location: ../view/login.php?error=emptyInputPassword");
            exit();
        }

        //verifyUser in DB
        $res = $this->verifyLoginUser($this->username, $this->password);
        if ($res == 1) {
            header("Location: ../view/login.php?error=FailedStmt");
            exit();
        }
        if ($res == 2) {
            header("Location: ../view/login.php?error=invalidPassUser");
            exit();
        }
    }

    public function forgotPassword()
    {
        if ($this->emptyInput($this->email) == false) {
            header("Location: ../view/forgotpassword.php?error=emptyEmail");
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("Location: ../view/forgotpassword.php?error=invalidemail");
            exit();
        }

        if ($this->checkUserByEmail($this->email) == false) {
            header("Location: ../view/forgotpassword.php?error=emailnotFound");
            exit();
        }

        $token = $this->generateToken();
        if ($this->setTokenUser($token, $this->email)) {
            header("Location: ../view/forgotpassword.php?error=failedStmt");
            exit();
        }

        $this->sendEmail($token);
    }

    public function newPassword()
    {
        if ($this->emptyInput($this->password) == false || $this->emptyInput($this->repeatPwd) == false) {
            header("Location: ../view/newpassword.php?error=emptyInput&token=$this->token");
            exit();
        }
        if ($this->invalidPassword() == false) {
            header("Location: ../view/newpassword.php?error=invalidpwd&token=$this->token");
            exit();
        }
        if ($this->pwdMatch() == false) {
            header("Location: ../view/newpassword.php?error=PasswordNotMatch&token=$this->token");
            exit();
        }
        if ($this->checkToken($this->token) == false) {
            header("Location: ../view/newpassword.php?error=tokenNotExisted");
            exit();
        }
        if ($this->checkTokenExpired($this->token) > 30) {
            header("Location: ../view/newpassword.php?error=tokenExpired");
            exit();
        }
        if ($this->setNewPassword($this->token, $this->password)) {
            header("Location: ../view/newpassword.php?error=failedStmt&token=$this->token");
            exit();
        }
    }

    public function activateAccount()
    {

        if ($this->checkToken($this->token) == false) {
            header("Location: ../includes/activacio.php?error=tokenNotExisted");
            exit();
        }
        if ($this->checkTokenExpired($this->token) > 30) {
            header("Location: ../includes/activacio.php?error=tokenExpired");
            exit();
        }
        if ($this->setStatus($this->token)) {
            header("Location: ../includes/activacio.php?error=failedStmt&token=$this->token");
            exit();
        }
    }

    private function emptyInput($input)
    {
        $result = true;

        if (empty($input)) {
            $result = false;
        }
        return $result;
    }

    private function invalidUsername()
    {
        $result = true;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        }
        return $result;
    }
    private function invalidUserfullname()
    {
        $result = true;
        if (!preg_match("/^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$/", $this->userfullname)) {
            $result = false;
        }
        return $result;
    }

    private function invalidEmail()
    {
        $result = true;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        return $result;
    }
    private function invalidPassword()
    {
        $result = true;
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $this->password)) {
            $result = false;
        }
        return $result;
    }

    private function pwdMatch()
    {
        $result = true;
        if ($this->password !== $this->repeatPwd) {
            $result = false;
        }
        return $result;
    }

    private function usernameTakenCheck()
    {
        $result = $this->checkUser($this->username, $this->email);

        return $result;
    }

    //traer user id de la base de datos comparando con user de la sessión para poder usuarlo en mis pedidos
    public function idUser()
    {

        $res = $this->getUser($this->username, $this->email, $this->userfullname);
        return $res;
    }

    private function generateToken()
    {
        return $token = bin2hex(random_bytes(32));
    }

    private function sendEmail($token)
    {

        require '../lib/PHPMailer/src/Exception.php';
        require '../lib/PHPMailer/src/PHPMailer.php';
        require '../lib/PHPMailer/src/SMTP.php';

        //Create a new PHPMailer instance
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

        //Set the SMTP port number:
        $mail->Port = 465;

        //Set the encryption mechanism to use:
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'foap408@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'dyrv alyq ojiq acyd';

        //Set who the message is to be sent to
        $mail->addAddress($this->email);

        //Set the subject line
        $mail->Subject = 'New Password';
        //echo env::HOSTPATH;
        //Replace the plain text body with one created manually
        $mail->msgHTML("<a href=" . env::HOSTPATH . "view/newpassword.php?token=$token'>link para crear nueva contraseña</a>");


        //send the message, check for errors
        if (!$mail->send()) {
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
            header("Location: ../view/forgotpassword.php?error=Mailer Error");
            exit();
        } else {
            header("Location: ../view/forgotpassword.php?msg=Messagesent!");
            exit();
        }
    }

    private function sendEmailActivacio($token)
    {

        require '../lib/PHPMailer/src/Exception.php';
        require '../lib/PHPMailer/src/PHPMailer.php';
        require '../lib/PHPMailer/src/SMTP.php';

        //Create a new PHPMailer instance
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

        //Set the SMTP port number:
        $mail->Port = 465;

        //Set the encryption mechanism to use:
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;

        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;

        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'foap408@gmail.com';

        //Password to use for SMTP authentication
        $mail->Password = 'dyrv alyq ojiq acyd';

        //Set who the message is to be sent to
        $mail->addAddress($this->email);

        //Set the subject line
        $mail->Subject = 'New Password';

        //Replace the plain text body with one created manually 
        // !!!!!!!!!!!!!!!! Remplazar localhost por uno que funcione, el 8888 es del mac
        $mail->msgHTML("<h2>Bienvenido/a</h2>
<p>Para continuar con el proceso de resgistro se tiene de activar la cuenta. A continuación te dejamos el enlace.</p><a href=" . env::HOSTPATH . "includes/activacio.php?token=$token'>activa Tu cuenta</a>");


        //send the message, check for errors
        if (!$mail->send()) {
            // echo 'Mailer Error: ' . $mail->ErrorInfo;
            header("Location: ../view/register.html?error=Mailer Error");
            exit();
        } else {
            //TODO: mostrar mensaje conforme el usuario tiene que activar la cuenta para que pueda hacer login
            //header("Location: ../includes/activacio.php?msg=Message sent!");
            //exit();

        }
    }

    //modificar los datos del usuario desde el perfil
    public function updateNickname($userId)
    {
        //validation
        if ($this->emptyInput($this->username) == false) {
            header("Location: ../view/profile.php?error=emptyInput");
            exit();
        }
        if ($this->invalidUsername() == false) {
            header("Location: ../view/profile.php?error=invaliduid");
            exit();
        }
        if ($this->usernameTakenCheck() == 2) {
            header("Location: ../view/profile.php?error=UserTaken");
            exit();
        }
        if ($this->usernameTakenCheck() == 1) {
            header("Location: ../view/profile.php?error=FailedStmt");
            exit();
        }
        //añadir a db
        if ($this->setNewNickname($this->username, $userId)) {

            header("Location: ../view/profile.php?error=FailedStmt");
            exit();
        }
    }

    //modificar los datos del usuario desde el perfil
    public function updateEmail($userId)
    {
        //validation
        if ($this->emptyInput($this->email) == false) {
            header("Location: ../view/profile.php?error=emptyInput");
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("Location: ../view/profile.php?error=invalidemail");
            exit();
        }
        if ($this->usernameTakenCheck() == 2) {
            header("Location: ../view/profile.php?error=MailTaken");
            exit();
        }
        if ($this->usernameTakenCheck() == 1) {
            header("Location: ../view/profile.php?error=FailedStmt");
            exit();
        }
        //añadir a db
        if ($this->setNewEmail($this->email, $userId)) {

            header("Location: ../view/profile.php?error=FailedStmt");
            exit();
        }
    }

    //modificar los datos del usuario desde el perfil
    public function updateFullname($userId)
    {
        //validation
        if ($this->emptyInput($this->userfullname) == false) {
            header("Location: ../view/profile.php?error=emptyInput");
            exit();
        }
        if ($this->invalidUserfullname() == false) {
            header("Location: ../view/profile.php?error=invalidufullname");
            exit();
        }
        //añadir a db
        if ($this->setNewFullname($this->userfullname, $userId)) {

            header("Location: ../view/profile.php?error=FailedStmt");
            exit();
        }
    }
}
