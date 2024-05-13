<?php

require_once '../Framework/DataBase.php';

require_once '../helpers.php';


class AuthController {

    private $db;

    public function __construct()
    {
        $config = require basePath('config/_db.php');

        $this->db=new Database($config);
        
    }

    public function register(){

        require("../App/views/auth/register.view.php");

    }

    public function login(){

        require("../App/views/auth/login.view.php");

    }

    public function logout(){

        session_unset();
        session_destroy();

        $params = session_get_cookie_params();
        setcookie('PHPSESSID', '', time() - 86400, $params['path'], $params['domain']);

        header('Location: /');
        exit;
        
    }

    public function performRegister(){

       

        $username= $_POST['username'] ?? '';
        $email = $_POST['email'];
        $password= $_POST['password'] ?? '';
        $password_confirmation=$_POST['password_confirmation'] ?? '';
        $role=$_POST['role'] ?? 'USER';

        echo $username;
        echo $email;
        echo $password;
        echo $role;
        //validate fields
    
        //save new user
        // INSERT statement with placeholders for title and body
        $sql = "INSERT INTO users (username,email, password, role) VALUES (:username, :email, :password, :role)";
    
        // Params for prepared statement
        $params = [
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => $role
        ];
      
        // Prepare the statement & execute query
        $this->db->query($sql,$params);
    
          
       
    
        header('Location: /login');
        exit;
        
       
    }

    public function performLogin(){

        $username= $_POST['username'] ?? '';
        $password= $_POST['password'] ?? '';

        // SELECT user from database
        $sql = 'SELECT * FROM users WHERE username = :username';

        // Params for prepared statement
        $params = ['username' => $username];

        // Prepare the statement & execute query
        $stmt=$this->db->query($sql,$params);

        // Fetch the post from the database
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$user){
            header('Location: /login');
        exit;
        }

            
        //verify password
        if(password_verify($password,$user['password'])){

        
        
            $_SESSION['user']=[
                'id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role']
            ];
            $_SESSION['loggedIn']=true;
            header('Location: /');
            exit;
        }







    }

}