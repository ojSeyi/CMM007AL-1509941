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
            <li><a href="blog.html">All Blog Items</a></li>
            <li><a href="blog.html">Work Items</a></li>
            <li><a href="blog.html">University Items</a></li>
            <li><a href="blog.html">Family Items</a></li>
            <li><a href="add.html">Insert a Blog Item</a></li>
        </ul>
    </nav>
</header>

<main>
    <section>
        <div id="blogitem">
            <?php
                include ("db_connection.php");
                if($_GET['category']=="university"){
                    $getbugs = "SELECT * FROM blogView where category like '%university%'";
                    $result = mysqli_query($db, $getbugs);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<h3>". $row['entryTitle'] . "by". $row['submitter'] ."</h3>";
                        echo "<h5>". $row['category'] . "</h5>";
                        echo "<p>". $row['entrySummary'] . "</p>";
                    }
                }elseif($_GET['category']=="work"){
                    $getbugs = "SELECT * FROM blogView where category like '%work%'";
                    $result = mysqli_query($db, $getbugs);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<h3>". $row['entryTitle'] . "by". $row['submitter'] ."</h3>";
                        echo "<h5>". $row['category'] . "</h5>";
                        echo "<p>". $row['entrySummary'] . "</p>";
                    }
                }elseif($_GET['category']=="family"){
                    $getbugs = "SELECT * FROM blogView where category like '%family%'";
                    $result = mysqli_query($db, $getbugs);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<h3>". $row['entryTitle'] . "by". $row['submitter'] ."</h3>";
                        echo "<h5>". $row['category'] . "</h5>";
                        echo "<p>". $row['entrySummary'] . "</p>";
                    }
                }else{
                    $getbugs = "SELECT * FROM blogView";
                    $result = mysqli_query($db, $getbugs);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<h3>". $row['entryTitle'] . "by". $row['submitter'] ."</h3>";
                        echo "<h5>". $row['category'] . "</h5>";
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