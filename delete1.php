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

<form action="delete2.php" method="POST" enctype="multipart/form-data">

<body style="background-color:black;color:rgb(78, 154, 78);">
    <table style="margin-top:150px;margin-left:400px">
        <tr><td class="b1" colspan="6"><h1>CONFIRM DELETE STUDENT MARKS</h1></td></tr>
        <tr class="b1"><td class="b2" colspan="6">ROLL NO.</td></tr>
        <?php
        session_start();
        $mob=$_SESSION['MOBILE'];
        $r=$_SESSION['rollno'];
        $can=mysqli_connect('localhost','root','','teacher');
        $l="select*from ct where submittedby=$mob and rollno=$r";
        $rs=mysqli_query($can,$l);
        while($row = mysqli_fetch_array($rs))
        {
        echo"<tr class='b1'><td colspan='6'>$row[rollno]</td></tr>
        <tr><td class='a2 b1'>SUBJECT</td><td><input class='a3' type='text' name='s' value='$row[subject]'></td></tr>
        <tr><td class='a2 b1'>MARKS</td><td><input class='a3' type='text' name='m' value='$row[marks]'></td></tr>
        <tr><td class='a2 b1'>OUT OF</td><td><input class='a3' type='text' name='t3' value='$row[outof]'></td></tr>";
        
        }
        ?>
        
        <tr><td colspan=2 class="submit2 b1"> <input class="submit3" type="submit" value="DELETE "></td></tr>
       
        
</table>
    </form>

</body>
</html>

