<! Doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
  <title> PHP Registration Form </title>  
<style>  
input[type=radio] { width:20px; }  
input[type=checkbox]{ width:20px; }  
* {  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
}  
body {  
    margin: 50px auto;  
    text-align: center;  
    width: 800px;  
}  
input[type=reset] {  
  border: 3px solid;    
  border-radius: 2px;    
  color: ;    
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    
input[type=reset]::before   
{    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=reset]]:hover {    
  color: #1A33FF;    
}    
input {  
    border: 2px solid #ccc;  
    font-size: 1rem;  
    font-weight: 100;  
    font-family: 'Lato';  
    padding: 10px;  
}  
form {  
    margin: 20px auto;  
    padding: 20px;  
    border: 5px solid #ccc;  
    background: #8bb2eafa;  
}  
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: hotpink;  
    text-transform: uppercase;  
}  
    input[type=submit] {    
  border: 3px solid;    
  border-radius: 2px;    
  color: ;    
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    
input[type=submit]::before   
{    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=submit]:hover {    
  color: #1A33FF;    
}    
</style>  
</head>  
<body>  
<h1> PHP Registration Form  </h1>  
<form method="post" enctype="multipart/form-data" action ="redirect.php">  
<table>  
 <tr>  
    <td colspan="2"> <?php echo @$msg; ?> </td>  
 </tr> 

  <tr>  
    <td width="159">
 <b> Enter your Name </b> </td>  
    <td width="218">
      <select name="title" id="title">
  <option value="Mr.">Mr.</option>
  <option value="Mrs.">Mrs.</option>
  <option value="Ms.">Ms.</option></select>
    <style>
  .required:after {
    content:" *";
    color: red;
  }
</style> 
    <input type="text" placeholder="Enter first name" name = "name" id="name" pattern="[a-z A-Z]*" required /> </td>  
  </tr>  
    <td> <b> Enter Last name </b> </td>  
    <td> <input type="text" placeholder="enter last name" name="ln" id="ln" pattern="[a-z A-Z]*" required /> </td>  
  </tr>  

  <tr>  
   <td><label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday"></td>
  </tr> 
    <tr>  
    <td> <b> Enter your Mobile Number </b> </td>  
    <td> <input type="text" pattern="[0-9]*" name="m" / placeholder=" Enter number" > </td>  
  </tr>  
    <tr>  
    <td> <b> File Upload </b> </td>  
    <td> <input type="file" name="pic"/> </td>  
  </tr> 
  <tr>
    <td>
    <b>E-mail: <input type="text" name="email"><br></b> 
    </td>
  </tr>
  <tr><td>Message:<textarea name="comment" form="usrform">Enter text here...</textarea></td></tr> 
  <tr>  
  <tr>   
  <tr>  
    <td colspan="2" align="center"> 
    <input type ="submit" name="submit" value="SUBMIT"/>  
</a>
    </td>  
  </tr>  
</table>  
</form>  
</body>  
</html>  
  