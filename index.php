<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="home.php" method="POST">
        username:<input type="text" name="username"></br><br/>

        Password:<input type="password" name="pass"><br/>
        
        Select your Gender:
        Male<input type="radio" name="rad1" value="male">
        Female<input type="radio" name="rad1" value="female"><br/>

        Select your stream: 
        Chemical<input type="checkbox" name="chk1" value="chemical">
        Electrical<input type="checkbox" name="chk2" value="electrical">
        Computer<input type="checkbox" name="chk3" value="computer">
        Information<input type="checkbox" name="chk4" value="Information"><br/>

        <input type="submit" value="Submit">
    </form>
</body>
</html>


