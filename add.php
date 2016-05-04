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
    <div  id="form">
        <form>
            <label>Enter Title:</label>
            <input type="text" name="title" required><br><br>
            <label>Enter Summary:</label>
            <textarea name="summary" rows="4" cols="30" placeholder="Enter text here..." required></textarea><br><br>
            <label>Enter Category:</label>
            <select name="category" size="1" required>
                <option>Work</option>
                <option>University</option>
                <option>Family</option>
            </select><br><br>
            <label>Submitted By:</label>
            <input type="text" name="author" required><br><br>
            <input type="submit" value="submit">
        </form>
    </div>
</main>

<footer>
    <p> Designed by Oluwaseyi Nojimu-Yusuf, 2016</p>
</footer>

</body>
</html>