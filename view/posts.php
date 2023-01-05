<?php
session_start();
include_once('../controller/dbh.classes.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>news update</title>

</head>
<body>
    <div class="nav-tab">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="create.php">Create new post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="posts.php">View all Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
           
            <li class="nav-item logout">
                <a class="nav-link logout" href="../includes/logout.inc.php">Logout</a>
            </li>

        </ul>
    </div>


<?php
$con = (new Dbh)->connect(); 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . $con->connect_error);
}
// Fetch Data from the database
$stmt = $con->prepare("SELECT * FROM post");
$stmt->execute();
$posts = $stmt->fetchAll();
foreach($posts as $post)
{
    echo "<h4><a href=edit.php?id=".$post['id'].">". $post['title'] . "</a></h4>";    
    echo "<p>". $post['body']."</p>";
	echo "<p><a href=single_post.php>". $post['created_at'] . "</a></p>";
}
 
?>
</body>
</html>