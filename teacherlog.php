<html>
    <body>
        
        <?php
        $c=0;
        $u=$_POST['u'];
        $p=$_POST['p'];
        $can=mysqli_connect('localhost','root','','teacher');
        $l="select*from teacherdata";
        $rs=mysqli_query($can,$l);
while($row = mysqli_fetch_array($rs))
{
    if($row['MOBILE']==$u && $row['PASSWORD']==$p){
        $c=$c+1;
    }
}
    if($c==1){

        session_start();
        $_SESSION['MOBILE']=$u;
        echo"<script>window.location='teacherdash.php'</script>";
    }
    else{
    echo"<script>window.location='teacherreg.php'</script>";
    }

    ?>
    </body>
<html>