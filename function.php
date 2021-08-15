<?php
include("config.php");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $vname=$_POST['vname'];
        $vnumber=$_POST['vnumber'];
        $entry=$_POST['entry'];
        $exit=$_POST['exit'];
        

        $result=mysqli_query($major,"INSERT into major values('','$name','$vname','$vnumber','$entry','$exit')");

        if($result){
            header("location:insert.php");
        }
        else{
            echo "Failed";
        }
    }
?>    