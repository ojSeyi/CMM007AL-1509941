<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <link rel="stylesheet" href="Assets/style.css">
    <link rel="stylesheet" href="Assets/unsemantic-grid-responsive-tablet.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu|Montserrat|Passion+One|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <meta name="viewpoint"
          content="width=device-width,
        initial-scale=1,
        minimum-scale=1,
        maximum-scale=1"/>
</head>
<body>
<header>
    <div id="title">
        <h1>myBlog</h1>
        <h2>because the internet needs to know what i think</h2>
    </div>
    <nav>
        <ul>
            <li><a href="blog.php">All Blog Items</a></li>
            <li><a href="blog.php?category=work">Work Items</a></li>
            <li><a href="blog.php?category=university">University Items</a></li>
            <li><a href="blog.php?category=family">Family Items</a></li>
            <li><a href="add.php">Insert a Blog Item</a></li>
        </ul>
    </nav>
</header>

<main>
    <section>
        <div id="blogitem">
            <?php
                include ("db_connection.php");
                if($_GET['category']=="university"){
                    $getblogs = "SELECT * FROM blogView where category like '%university%'";
                    $result = mysqli_query($db, $getblogs);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<h3>". $row['entryTitle'] . " by ". $row['submitter'] ."</h3>";
                        echo "<h4>". $row['category'] . "</h4>";
                        echo "<p>". $row['entrySummary'] . "</p>";
                    }
                }elseif($_GET['category']=="work"){
                    $getblogs = "SELECT * FROM blogView where category like '%work%'";
                    $result = mysqli_query($db, $getblogs);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<h3>". $row['entryTitle'] . " by ". $row['submitter'] ."</h3>";
                        echo "<h4>". $row['category'] . "</h4>";
                        echo "<p>". $row['entrySummary'] . "</p>";
                    }
                }elseif($_GET['category']=="family"){
                    $getblogs = "SELECT * FROM blogView where category like '%family%'";
                    $result = mysqli_query($db, $getblogs);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<h3>". $row['entryTitle'] . " by ". $row['submitter'] ."</h3>";
                        echo "<h4>". $row['category'] . "</h4>";
                        echo "<p>". $row['entrySummary'] . "</p>";
                    }
                }else{
                    $getblogs = "SELECT * FROM blogView";
                    $result = mysqli_query($db, $getblogs);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<h3>". $row['entryTitle'] . " by ". $row['submitter'] ."</h3>";
                        echo "<h4>". $row['category'] . "</h4>";
                        echo "<p>". $row['entrySummary'] . "</p>";
                 }
             }
            ?>

        </div>
    </section>

</main>

<footer>
    <p> Designed by Oluwaseyi Nojimu-Yusuf, 2016</p>
</footer>

</body>
</html>