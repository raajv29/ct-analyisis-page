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
<form action="addmarks.php" method="POST" enctype="multipart/form-data">
<body style="background-color:black;color:rgb(78, 154, 78);">
    <table style="margin-top:150px;margin-left:550px">
    <tr><td class="a1" colspan="2"><h1>SEARCH STUDENT</h1><td><tr></td>
        
        <tr><td class="b1" colspan="2"><h1> </h1></td></tr>
        <tr><td class="b2">Branch</td><td><input class="b3" type="text" placeholder="" name="b"></td></tr>
        <tr><td class="b2">SEMESTER</td><td><select name="sem"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option></td></tr>
        <tr><td colspan=2 class="submit"> <input class="submit1" type="submit" value="GO"></td></tr>
        
        
</table>
</form>

</body>
</html>

