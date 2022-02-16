<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        .from{
            width: 50%;
            margin: auto;
        }
    </style>



    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html validate form</title>
</head>
<body>

    <form class="from">

        Frist Name : <input type="text" name="fname" required><br><br>

        Last Name : <input type="text" name="lname" required><br><br>

        E-mail : <input type="email" name="email" required><br><br>

        Password : <input type="password" name="password" required><br><br>

        Confirm Passwordc: <input type="password" name="cpassword" required><br><br>

        Gender : <input type="radio" name="male" required> Male
                <input type="radio" name="female" required> Female
                <input type="radio" name="other" required> Other <br><br>

        Submit : <input type="submit" name="submit" value="Submit" required>

    </form>
</body>
</html>