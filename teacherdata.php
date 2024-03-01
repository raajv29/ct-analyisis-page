<html>
    <body>
    <?php
        $n=$_POST['t1'];
        $m=$_POST['t2'];
        $d=$_POST['d'];
        $e=$_POST['e'];
        

        $can=mysqli_connect('localhost','root','','teacher');
        $j="insert into teacherdata value('$n',$m,'$d','$e')";
        $rs=mysqli_query($can,$j);
        if($rs) {
            echo"<script>window.location='teacherlogin.php'</script>";
            } else
            echo"error";
        ?>

</body>
</html>