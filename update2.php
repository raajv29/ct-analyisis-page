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
    session_start();
        $r=$_SESSION['rollno'];
        $c=$_POST['s'];
        $m=$_POST['m'];
        $o=$_POST['t3'];
        
        $mob=$_SESSION['MOBILE'];
        $can=mysqli_connect('localhost','root','','teacher');
        $l="update ct  set subject='$c',marks='$m',outof='$o' where rollno=$r";
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


