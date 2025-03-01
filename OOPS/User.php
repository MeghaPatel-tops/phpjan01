<?php
class User{
    public $username,$email,$contact;
    //constructor method
    function __construct($username,$email,$contact){
        $this->username = $username;
        $this->email=$email;
        $this->contact=$contact;
    }

    function UserProfile(){
        echo "<h1>UserName:".$this->username."</h1>";
        echo "<h1>Email:".$this->email."</h1>";
        echo "<h1>Conatct:".$this->contact."</h1>";
    }
    

  
}
$user1 = new User("Megha","megha@gmail.com","90099977");
$user1->UserProfile();
?>