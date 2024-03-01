<html>
    <body>
        
        <?php
        $c=0;
        $u=$_POST['su'];
        $p=$_POST['sp'];
        $can=mysqli_connect('localhost','root','','teacher');
        $l="select*from studentdata where rollno=$u";
        $rs=mysqli_query($can,$l);
        while($row = mysqli_fetch_array($rs))
        {
            if($row['rollno']==$u && $row['password']==$p){
            $c=$c+1;
            }

        }
        if($c==1){
            session_start();
            $_SESSION['rollno']=$u;
            echo"<script>window.location='studentdash.php'</script>";
        }
        else{
            echo"<script>window.location='studentreg.php'</script>";
        }

    ?>
    </body>
<html>