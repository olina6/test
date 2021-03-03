<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="myScript.js"></script>

</head>
<body>
<h1 id="demo">PHP Form Validation Example</h1>
<button type="button" onclick="myFunction()">click it</button>
<h2 id="demo2"></h2>
<p style="color: #ff0000">* required field</p>
<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Name:<input type="text" name="name"><br>
    Email:<input type="text" name="email"><br>
    Website:<input type="text" name="website"><br>
    Comment:<textarea name="comment" rows="5" cols="40"></textarea><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]=="GET"){
    $name = $_REQUEST["name"];
    if (!empty($name)){
        echo $name;
    }
}
?>

</body>
</html>
