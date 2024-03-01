<html>
    <body>
    <?php
        $r=$_POST['r'];
        $n=$_POST['n'];
        $m=$_POST['b'];
        $d=$_POST['s'];
        $e=$_POST['p'];
        

        $can=mysqli_connect('localhost','root','','teacher');
        $k="insert into studentdata value('$r','$n','$m','$d','$e')";
        $rs=mysqli_query($can,$k);
        if($rs) {
            echo"<script>window.location='studentlogin.php'</script>";
            } else
            echo"error";
        ?>

</body>
</html>