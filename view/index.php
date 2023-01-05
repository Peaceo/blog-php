<?php
include_once('../controller/dbh.classes.php');
include_once("../config.php");
require_once(ROOT_PATH . "/includes/header.php");

// echo "<pre>"; var_dump($_SESSION);die;
?>
<title>news update</title>
<style>
    .logout {
        float: right;
    }
</style>
</head>

<body>
    <?php include(ROOT_PATH . "/includes/navbar.php"); ?>
    <?php include(ROOT_PATH . "/includes/banner.php"); ?>
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
            <?php
            if (isset($_SESSION['id'])) {
                // session_start();
                session_unset();
                session_destroy();
                //Going back to front page
                header("location: ..index.php");
            }
            //<p> Welcome <?php $_SESSION['username'] </p>
            ?>
            <li class="nav-item logout">
                <a class="nav-link logout" href="../includes/logout.inc.php">Logout</a>
            </li>
        </ul>

    </div>


    <?php
    $con = (new Dbh)->connect();
    // Check connection
    if ($con === false) {
        die("ERROR: Could not connect. " . $con->connect_error);
    }

    // Fetch Data from the database
    echo $_SESSION['user_id'];
    die;

    $stmt = $con->prepare("SELECT * FROM post WHERE user_id= '" . $_SESSION["user_id"] . "'");
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>"; print_r($posts);die;

    foreach ($posts as $post) {
        echo "<h4><a href = edit.php?id=" . $post['id'] . ">" . $post['title'] . "</a></h4>";
        echo "<p>" . $post['body'] . "</p>";
        echo "<p>" . $post['created_at'] . "</p>";
    }

    ?>
</body>

</html>