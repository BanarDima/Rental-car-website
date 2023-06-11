
<?php

$Con = mysqli_connect('localhost','root','','ecommerce');

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['password'];
    
    
    $Dup_Email = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE Email = '$Email' ");
    $Dup_UserName = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE UserName= '$Name' ");
    $Dup_Number = mysqli_query($Con, "SELECT * FROM `tbluser` WHERE Number= '$Number' ");

if(mysqli_num_rows( $Dup_Email)) {
    echo"
    <script>
    alert('this Email is already taken');
    window.location.href= 'registration.php'
    </script>
    ";

}

if(mysqli_num_rows( $Dup_UserName)) {
    echo"
    <script>
    alert('this Username is already taken');
    window.location.href= 'registration.php'
    </script>
    ";

}

if(mysqli_num_rows( $Dup_Number)) {
    echo"
    <script>
    alert('this Number is already taken');
    window.location.href= 'registration.php'
    </script>
    ";

}

else {
    mysqli_query($Con, " INSERT INTO `tbluser`(`UserName`, `Email`, `Number`, `Password`) 
    VALUES ('$Name','$Email','$Number','$Password') ");

echo"
<script>
alert('Register successfully');
window.location.href= 'login.php'
</script>
";
}

}

?>