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
    <table border=4 style="margin-top:150px;margin-left:570px">
        <tr><td class="b1" colspan="6"><h1>CT   MARKS</h1></td></tr>
        <tr class="b1"><td class="b2">ROLL NO.</td><td class='a2'>SUBJECT</td><td class='a2'>MARKS</td><td class='a2'>OUT OF</td></tr>
        <?php
        session_start();
        $u=$_SESSION['rollno'];
        $can=mysqli_connect('localhost','root','','teacher');
        $l="select*from ct where rollno=$u";
        $rs=mysqli_query($can,$l);
        while($row = mysqli_fetch_array($rs))
        {
        echo"<td class='b1'>$row[rollno]</td>
        <td class='b1'>$row[subject]</td>
        <td class='b1'>$row[marks]</td>
        <td class='b1'>$row[outof]</td></tr>";
        
        }
        ?>
            
    
       
        
</table>
    </form>

</body>
</html>

