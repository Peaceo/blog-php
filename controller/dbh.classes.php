<?php

class Dbh{
    public function connect(){
         try 
         {
           $username = "root";
           $password = "";
           $dbh = new PDO('mysql:host=localhost;dbname=phpblog', $username, $password);
           return $dbh;
         } 
         catch (PDOException $e) 
         {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
         }
    }

}

 
 
 
 
 
 
 
 
 
 
 
 
 
/* 
//Data Insertion Function
	public function insert($title, $body, $created_at)
	{
	$ret=mysqli_query($this->dbh,"insert into post(title,body,created_at) values('$title','$body','$created_at')");
	return $ret;
	}
//Data read Function
public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from post");
	return $result;
	}
//Data one record read Function
public function fetchonerecord($userid)
	{
	$oneresult=mysqli_query($this->dbh,"select * from post where id=$userid");
	return $oneresult;
	}
//Data updation Function
public function update($userid,$title,$body)
	{
	$updaterecord=mysqli_query($this->dbh,"update  post set Title='$title',Body='$body' where id='$userid'");
	return $updaterecord;
	}
//Data Deletion function Function
public function delete($userid)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from post where id=$userid");
	return $deleterecord;
	}
}
 */


/* session_start();
include_once ("../controller/dbh.classes.php");  

$con = (new Dbh)->connect();
if($con ===false)
{
    die("ERROR: could not connect. " .$con->connect_error);
} 

$id=$_GET['id'];
$stmt=$con->prepare("SELECT * FROM post WHERE id= $id");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC); */


