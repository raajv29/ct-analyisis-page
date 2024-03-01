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
<body style="color:rgb(78, 154, 78); background-color:black;">
        
<form action="savect.php" method="POST" enctype="multipart/form-data">

    <table style="margin-left:550px;margin-top:150px;">
        <tr><td class="a1" colspan="2"><h1>ADD STUDENT MARKS</h1><td><tr></td>
        <?php
        $c=0;
        $b=$_POST['b'];
        $sem=$_POST['sem'];
        $can=mysqli_connect('localhost','root','','teacher');
        $l="select*from studentdata where branch='$b' and semester='$sem'";
        $rs=mysqli_query($can,$l);
        echo"<td>ROLLNO.</td><td><select name='rollno'>";
        while($row = mysqli_fetch_array($rs))
        {
        echo"<option>$row[rollno]</option>";
        }
        echo"</select></td></tr>";

        ?></td></tr>
        <tr><td class="a2">SUBJECT</td><td><input class="a3" type="text" name="t1"></td></tr>
        <tr><td class="a2">MARKS</td><td><input class="a3" type="text" name="t2"></td></tr>
        <tr><td class="a2">OUT OF</td><td><input class="a3" type="text" name="d"></td></tr>
        
        <tr><td colspan=2 class="submit2"> <input class="submit3" type="submit" value="SAVE"></td></tr>
        
      
</table>
</form>


</body>
</html>


