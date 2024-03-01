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
        
    <table style="margin-left:550px;margin-top:150px;">
        <tr><td class="a1" colspan="2"><h1></h1><td><tr></td>
        <?php

        $r=$_POST['rollno'];
        $c=$_POST['t1'];
        $m=$_POST['t2'];
        $o=$_POST['d'];
        session_start();
        $mob=$_SESSION['MOBILE'];
        $_SESSION['subject']=$c;
        $can=mysqli_connect('localhost','root','','teacher');
        $l="insert into ct value ($r,'$c',$m,$o,$mob)";
        $rs=mysqli_query($can,$l);
        if($rs){
        
            echo"<script>window.location='savedone.php'</script>";
        }
        else{
            echo"error";
        }
?>


</body>
</html>


