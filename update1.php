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

<form action="update2.php" method="POST" enctype="multipart/form-data">

<body style="background-color:black;color:rgb(78, 154, 78);">
    <table style="margin-top:150px;margin-left:520px">
        <tr><td class="b1" colspan="6"><h1>EDIT STUDENT MARKS</h1></td></tr>
        <tr class="b1"><td class="b2">ROLL NO.</td></tr>
        <?php
        $r=$_GET['id'];
        $s=$_GET['s'];
        session_start();
        $mob=$_SESSION['MOBILE'];
        $_SESSION['rollno']=$r;
        $can=mysqli_connect('localhost','root','','teacher');
        $l="select*from ct where submittedby=$mob and rollno=$r and subject='$s'";
        $rs=mysqli_query($can,$l);
        while($row = mysqli_fetch_array($rs))
        {
        echo"<tr class='b1'><td>$row[rollno]</td></tr>
        <tr><td class='a2'>SUBJECT</td><td><input class='a3' type='text' name='s' value='$row[subject]'></td></tr>
        <tr><td class='a2'>MARKS</td><td><input class='a3' type='text' name='m' value='$row[marks]'></td></tr>
        <tr><td class='a2'>OUT OF</td><td><input class='a3' type='text' name='t3' value='$row[outof]'></td></tr>";
        }
        ?>
        
        <tr><td colspan=2 class="submit2"> <input class="submit3" type="submit" value="SAVE"></td></tr>
       
        
</table>
    </form>

</body>
</html>

