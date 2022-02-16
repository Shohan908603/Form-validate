<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        .main{
            width: 50%;
            margin: auto;
            box-shadow: 0 0 10px 0;
            padding: 40px 0px 30px 30px;
        }
    </style>



    
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Html validate form</title>
</head>
<body>

 <div style="padding-top:50px;">

    <form class="main">

            <h2 style="text-align: center;">Html Validate</h2>

        <div style="padding-left: 120px;">
            <label for="firstname"> First Name: </label>
            <input type="text" name="first_name" pattern="[A-Za-z ]{1,32}" value="" required>
            <label for="lastname"> Last Name: </label>
            <input type="text" name="lastname" id="lastname" pattern="[A-Za-z ]{1,32}" required ><br><br>

            <label for="password"> Password  : </label>
            <input type="password" name="password" id="password" pattern="[A-Za-z0-9]{8,15}"  required autocomplete="off" >
            <label for="Cpassword"> Confirm Password : </label>
            <input type="password" name="Cpassword" id="Cpassword" pattern="[A-Za-z0-9]{8,15}" required ><br><br>

            <label for="email"> E-mail  : </label>
            <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"    required >
            <label for="mobile"> Mobile : </label>
            <input type="number" name="mobile" id="mobile"  pattern="[789][0-9]{9}" required ><br><br>

            <label for="checkbox"> Checkbox  : </label>
            <input type="checkbox" name="checkbox" id="checkbox"   required >I accept  the
        
            <br><br>


            <label for="Comment"> Comment : </label>
            <textarea required ></textarea ><br><br>
            
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button>Submit</button>

        </div>
        
    </form>

    </div> 
        
</body>
</html>