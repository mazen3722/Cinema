<?php
require_once '../../Models/user.php';
require_once 'DBController.php';
require_once '../../Models/Movie_data.php';

class MovieC {

   protected $db;

public function show_Movie_data()
{
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
        $qry="select * from movie ";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }

 public function insert_Movie_data(MovieData $c)
{
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
       $Movie_Title=$c->get_MovieTitle();
       $Movie_Desc=$c->get_MovieDesc();
       $Movie_Type=$c->get_MovieType();
        $qry="insert  into movie values('','$Movie_Title',' $Movie_Desc','$Movie_Type')";
        return $this->db->insert($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
 public function delete_Movie_data($num)
{
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
        $qry="delete  from movie where id = $num";
        return $this->db->delete($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
 function searchFilm($Movie_Title) {
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
        $qry="select Movie_Title , Movie_Type , Movie_Desc from movie where Movie_Title like '%search%' OR  description like '%search%'"
        /* $qry=execute(array());
        */
    
    return $this->db->Select($qry);
}else{
    echo "Error in Database Connection";
        return false; 
}

}


 /*function searchFilm($Movie_Title) {
    $this->db=new DBController;
    // Check for errors
     if( $this->db->openConnection())
        die("Connection failed: " . $db->connect_error);
    }

    // Prepare and execute the SQL query
    $stmt = $db->prepare("SELECT * FROM films WHERE name LIKE ?");
    $stmt->bind_param("s", $filmName);
    $stmt->execute();

    // Get the results
    $result = $stmt->get_result();

    // Check if any films were found
    if ($result->num_rows > 0) {
        // Output the results
        while ($row = $result->fetch_assoc()) {
            echo "Film: " . $row["name"] . "\n";
            echo "Year: " . $row["year"] . "\n";
            echo "Director: " . $row["director"] . "\n";
            echo "\n";
        }
    } else {
        echo "No films found.\n";
    }*/

}

?>