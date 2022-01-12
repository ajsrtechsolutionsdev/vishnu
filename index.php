<html>
<head>
</head>
<body>
<style>
form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
form-control-range {
    display: block;
    width: 100%;
}
btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
</style>
<form name="form" method="POST">
    <form-control><label for="n">Name</label></form-control>
    <input type="text"  name="n" id="n"></form-control>
    <form-control><label for="p">Phone Number</label></form-control>
    <input type="text" name="p" id="p"></form-control>
    <form-control><label for="m"> Email address </label></form-control>
    <input type="email" name="m" id="m"></form-control>
    <form-control><label for="q"> Qualification </label></form-control>
    <input type="text"  name="q" id="q"></form-control>
    <form-control><label for="c">Comments:</label></form-control>
    <input type="text" name="c" id="c"></form-control>
    <input type="submit" name="sub" value="SUBMIT">
</form-control>
</form>
</body>
</html>
<?php
echo"<body bgcolor=white>";
echo"<font face=Times New Romen color=blue size=4>";
if(isset($_POST[ 'sub']))
{
$name=$_POST['n'];
$phone=$_POST['p'];
$mail=$_POST['m'];
$qualify=$_POST['q'];
$comment=$_POST['c'];
echo "Name : ".$name."";
echo "Phone : ".$phone.""; 
echo "E-Mail : ".$mail."";
echo "Qualification : ".$qualify."";
echo "comment : ".$comment."";
}
?>