<!DOCTYPE html>
<html>

<style>
.submit{
    padding-top:60px;
    padding-left:120px;
    padding-bottom:60px;
}
.submit1{
    background-color:black;
    font-weight:bold;
    text-decoration:none;
    color:rgb(78, 154, 78);
} 
.b1{
    text-align:center;
}

</style>
<form action="studentlog.php" method="POST" enctype="multipart/form-data">
<body style="background-color:black;color:rgb(78, 154, 78);">
    <table style="margin-top:150px;margin-left:550px">
        <tr><td class="b1" colspan="2"><h1>Student log in </h1></td></tr>
        <tr><td class="b2">Roll no</td><td><input class="b3" type="text" placeholder="Enter roll number" name="su"></td></tr>
        <tr><td class="b2">Password</td><td><input class="b3" type="text" placeholder="Password" name="sp"></td></tr>
        <tr><td colspan=2 class="submit"> <input class="submit1" type="submit" value="LOG IN"></td></tr>
        <tr><td colspan=2 > <a class="submit1" href="studentreg.php" style="padding-right:60px;padding-left:110px;">REGISTER</a></td></tr>
 
        
</table>
</form>

</body>
</html>

