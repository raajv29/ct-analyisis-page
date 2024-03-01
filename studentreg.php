<!DOCTYPE html>
<html>
<style>
.submit3{
    background-color:black;
    font-weight:bold;
    text-decoration:none;
    color:rgb(78, 154, 78);
    padding-top:50px;
}


</style>
<form action="studentdata.php" method="POST" enctype="multipart/form-data">
<body style="color:rgb(78, 154, 78); background-color:black;">
    <table style="margin-left:550px;margin-top:150px;">
        <tr><td class="a1" colspan="2"><h1>Student Register</h1>Create your account</td></tr>
        <tr><td class="a2">Rollno</td><td><input class="a3" type="text" name="r"></td></tr>
    
        <tr><td class="a2">Name</td><td><input class="a3" type="text" name="n"></td></tr>
        <tr><td class="a2">Branch</td><td><input class="a3" type="text" name="b"></td></tr>
        
        <tr><td class="a2">Semester</td><td><input class="a3" type="text" name="s"></td></tr>
        <tr><td class="a2">password</td><td><input class="a3" type="text" name="p"></td></tr>
        <tr><td colspan=2 class="submit2"> <input class="submit3" type="submit" value="Register"></td></tr>
        
      
</table>
</form>


</body>
</html>

