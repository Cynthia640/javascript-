<html>

<head>

<h1>Registration Form</h2>

<script>function validateForm() { var n = document.forms["myForm"]["fname"].value; var e= document.forms["myForm"]["ename"].value; var g= document.forms["myForm"]["gender"].value; var a= document.forms["myForm"]["aname"].value; var na= document.forms["myForm"]["naname"].value; 

if (n == "") { 
alert("Name must be filled out"); 
return false;
 } 
if (e == "") {
 alert("Email must be filled out");
  return false;
   }
 if (g == "") { 
 alert("Gender must be filled out");
  return false; 
  } 
  if (a == "") {
   alert("Address must be filled out"); 
   return false; 
   }
    if (na == "") { alert("Nationality must be filled out"); 
    return false;
     }
      }
      </script>
      
      </head>
      <body>
       <form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post"> <table style="width:20%"> <tr>
        <td>Name:</td>
         <td><input type="text" name="fname"> </td> </tr> <tr> 
         <td>Email:</td> 
         <td><input type="text" name="ename"> </td> </tr> <tr>
          <td>Gender:</td> <td> <input type="radio" id="male" name="gender" value="male"> <label for="male">Male</label><br>
           <input type="radio" id="female" name="gender" value="female"> <label  . for="female">Female</label><br> <input type="radio" id="other" name="gender" value="other"> <label
            for="other">Other</label> </td> </tr> <tr> <td>Address:</td> <td><input type="text" name="aname"> </td> </tr><tr>
             <td> Nationality: </td> <td><input type="text" name="naname"> </td> </tr> <tr> <td> Religion:</td> <td><select> <option value="Islam">Islam</option> <option value="Hindu">Hindu</option> <option value="Christan">Christan</option> </select></td> </tr> <tr> <td> <input type="submit" value="Submit"> </td> </tr>
              </table>
               </form>
               </body>
               </html>