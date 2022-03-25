<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niddah_form to store data</title>
    <style>
    body{
        background-image: url("images/fellow.jpg");
        /* background-color: gray; */
        font:bold;
        font-family: serif;
        color:white;

    }
    </style>
</head>
<body>
    <center>
    <h1>Storing the form data in the Database</h1>
    <form action="insert.php" method = "post">

    <p>
    <label for="firstName">First Name:</label>
    <input type="text" name="first_name" id="firstname" placeholder="John" maxlength="20">
    </p>

    <p>
    <label for="lastName">Last Name:</label>
    <input type="text" name="last_name" id="lastname" placeholder="Doe" maxlength="20">
    </p>

    <p>
    <label for="Gender">Gender:</label>
    <input type="text" name="gender" id="Gender" placeholder="Male"maxlength="6">
    </p>

    <p>
    <label for="Address">Address:</label>
    <input type="Address" name="address" id="Address" placeholder="12345-3099 Nairobi" maxlength="20">
    </p>

    <p>
    <label for="emailAddress">Email Address:</label>
    <input type="email" name="email" id="emailAddress" placeholder="Johndoe@gmail.com" maxlength="30">
    </p>
    
    <input type="submit" value="Submit">
    </form>
    </center>
</body>
</html>