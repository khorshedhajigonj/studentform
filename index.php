<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css">
    

</head>
<body>
    <style>
        form {
  background-color: lightgrey;
  width: 400x;
  border: 15px solid green;
  padding: 50px;
  margin: 50px;
   margin-left: 400px;
   margin-right: 400px;
}

        
h1 {
  color: blue;
  font-family: verdana;
  font-size: 300%;
  text-align: center;
  background-color:#fbecd0;
  margin-left: 400px;
  margin-right: 400px;
  
}
body{
    background-image: url(img/1.jpg);
}



    </style>
    <h1>Student registration form</h1>
    <form action="">
     Name of the Applicant:
<input type="text" placeholder="First Name" name="fname">
<input type="text" placeholder="Last Name" name="lname"><br></br>
   Date of time:
   <input type="Date"><br></br>

   Gender:
   <input type="radio" name="gender" value="male">male
   <input type="radio" name="gender" value="female">female
   <input type="radio" name="gender" value="others">others<br></br>
   grade:
   <input type="text"><br></br>
   Language Spoken:
   <input type="text"><br></br>


    Parent's Information:
   
    <table border="1" width="600" cellspacing="0" cellpadding="10">
        <tr>
         <td>Father's Name:</td>
         <td></td>

        </tr>
        <tr>
         <td>Father's Quallification:</td>
         <td></td>

        </tr>
        <tr>
         <td>Father's email:</td>
         <td></td>

        </tr>
        <tr>
         <td>Father's Occupation:</td>
         <td></td>

        </tr>
    </table>
    <table border="1" width="600" cellspacing="0" cellpadding="10">
    <tr>
         <td>mother's Name:</td>
         <td></td>

        </tr>
        <tr>
         <td>mother's Quallification:</td>
         <td></td>

        </tr>
        <tr>
         <td>mother's email:</td>
         <td></td>

        </tr>
        <tr>
         <td>mother's Occupation:</td>
         <td></td>

        </tr>
    </table><br></br>
    <textarea name="" id="" cols="50" rows="5" placeholder="">Your Address</textarea>
    <br></br>
    Payment Details:
    <input type="checkbox" name="payment" value="cash">cash
    <input type="checkbox" name="payment" value="check">check
    <input type="checkbox" name="payment" value="card">card<br></br>
    <input type="submit" value="sign-in">
    
    </form>
</body>
</html>