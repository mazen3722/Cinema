<?php 

require_once '../../Models/user.php';
require_once '../../Controllers/DBController.php';
class AuthController
{
    protected $db;

    //1. Open connection.
    //2. Run query & logic.
    //3. Close connection
    public function login(User $user)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="select * from user where email='$user->email' and password ='$user->password'";
            $result=$this->db->select($query);
            if($result===false)
            {
                echo "Error in Query";
                return false;
            }
            else
            {
                if(count($result)==0)//if no elemnts in the array
                {
                    session_start();
                    $_SESSION["errMsg"]="You have entered wrong email or password";
                    $this->db->closeConnection();
                    return false;
                }
                else
                {
                    session_start();
                    $_SESSION["userId"]=$result[0]["id"];//session id equal to id in role table
                    $_SESSION["userName"]=$result[0]["name"];//session name equal to name in role table
                    if($result[0]["roleid"]==1)
                    {
                        $_SESSION["userRole"]="admin";
                    }
                    else
                    {
                        $_SESSION["userRole"]="client";
                    }
                    $this->db->closeConnection();
                    return true;
                }
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;
        }
    }
    public function register(User $user)
    {
        $this->db=new DBController;
        if($this->db->openConnection())
        {
            $query="insert into user values ('','$user->name','$user->email','$user->password',2)";//2 must be global
            $result=$this->db->insert($query);//have id bec i returned id in insert func
            if($result!=false)
            {
                session_start();
                $_SESSION["userId"]=$result;
                $_SESSION["userName"]=$user->name;
                $_SESSION["userRole"]="client";
                $this->db->closeConnection();
                return true;
            }
            else
            {
                $_SESSION["errMsgreg"]="Somthing went wrong... try again later";
                $this->db->closeConnection();
                return false;
            }
        }
        else
        {
            echo "Error in Database Connection";
            return false;
        }
    }
   

 public function show_userid($name)
{
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
        $qry="select id from user where name='$name'";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
}
?>