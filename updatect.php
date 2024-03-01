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

<body style="background-color:black;color:rgb(78, 154, 78);">
    <table style="margin-top:150px;margin-left:520px">
        <tr><td class="b1" colspan="6"><h1>UPDATE STUDENT MARKS </h1></td></tr>
        <tr class="b1"><td class="b2">ROLL NO.</td><td>SUBJECT</td><td>MARKS</td><td>OUT OF</td></tr>
        <?php
        session_start();
        $mob=$_SESSION['MOBILE'];
        $can=mysqli_connect('localhost','root','','teacher');
        $l="select*from ct where submittedby=$mob order by rollno";
        $rs=mysqli_query($can,$l);
        while($row = mysqli_fetch_array($rs))
        {
        echo"<tr class='b1'><td>$row[rollno]</td></td><td>$row[subject]</td><td>$row[marks]</td><td>$row[outof]</td>
        <td><a href='update1.php?id=$row[rollno]& s=$row[subject]'>EDIT</a></td><td><a href='delete1.php'>DELETE</a></tr>";
        }
        ?>
    </table>    

</body>
</html>

