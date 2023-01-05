<?php
include "../controller/dbh.classes.php";
include "../controller/post-contr.classes.php";

$con = (new Dbh)->connect();
if($con ===false)
{
    die("ERROR: could not connect. " .$con->connect_error);
} 

if (isset($_POST['submit']))
{
    try 
    {      
        // Grab  data from the form
        $title = $_POST['title'];
        $body = $_POST['body'];
        $created_at = $_POST['created_at'];   
        
        $post = new Post($title, $body, $created_at);

        echo $post->createPost();
        // return 'Saved';
    } catch (\Throwable $th) {
        //throw $th;
        return $th->__toString();
    }    
}

$id=$_POST['id'];
if(isset($_POST['update']))
{    
   try
    {
        $title=$_POST['title'];
        $body=$_POST['body'];
        $created_at= $_POST['created_at'];
     
        $sql = "UPDATE post SET title='".$title."', body='".$body."', created_at= '".$created_at."' WHERE id = $id";
        $affectedrows  = $con->exec($sql);
        if(isset($affectedrows))
        {
         echo "Record has been successfully updated";
        }          
    }
    catch (PDOException $e)
    {
        echo "There is some problem in connection: " . $e->getMessage();
    }
}

if(isset($_POST['delete'])){
    try
    {           
        $sql = "DELETE FROM post WHERE `id` = $id" ;
        $affectedrows  = $con->exec($sql);
    if(isset($affectedrows))
        {
        echo "Record has been successfully deleted";
        }          
    }
    catch (PDOException $e)
    {
    echo "There is some problem in connection: " . $e->getMessage();
    }
}

?>


