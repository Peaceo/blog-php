<?php
require_once("config.php");
require_once( ROOT_PATH . "/includes/header.php");


if(!isset($_SESSION['user_id']))
{
    header("Location: view/login.php");
}
?>


<title>LifeBlog | Create Post</title>
</head>
<body>
    <?php include( ROOT_PATH . "/includes/navbar.php"); ?>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new post</div>

                <div class="card-body">
                    
                    <form action="includes/post.inc.php" method="POST">
                        <div class="form-group">
                            <label for="">Post Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Post Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Publish At</label>
                            <input type="date" name="created_at" class="form-control">
                        </div>
                        
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>