<?php
require_once("config.php");
require_once( ROOT_PATH . "/includes/header.php");
require_once(ROOT_PATH . "/includes/public_function.php");
$row= getPost();
// echo "<pre"; var_dump($row);die;

if(!isset($_SESSION['user_id']))
{
    header("Location: ../view/login.php");
}

include("../includes/navbar.php")
?>

<title>Edit page</title>
<style>
    .id{
        display: none;
    }
</style>
</head>
<body>

<div class="container">
<form action="../includes/post.inc.php?id=<?php echo $row['id'] ?>" method="POST">
    <div class="id">
        <input type="text" name="id" value="<?php echo $row['id'] ?>">
    </div>
    <div class="form-group">
        <label for="">Post Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>">
    </div>

    <div class="form-group">
        <label for="">Post Body</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control"><?php echo $row['body'] ?></textarea>
    </div>

    <div class="form-group">
        <label for="">Publish At</label>
        <input type="date" name="created_at" class="form-control" value="{{date('Y-m-d', strtotime(<?php echo $row['created_at']?>))}}">
    </div>
    
    <button type="submit" name="update" class="btn btn-primary">Submit</button>
    <button type="delete" name="delete" class="btn btn-danger">Delete</button>
</form>
</div>    
</body>
</html>