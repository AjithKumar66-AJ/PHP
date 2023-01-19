<?php

 

$conn = mysqli_connect("127.0.0.1", "root" , "Prodapt@1", "test");
$sql = "SELECT url FROM videosurl where id='1' ";
$result = mysqli_query($conn, $sql);

 

if($result)
{   

 

    while ($row = mysqli_fetch_assoc($result)){
        echo "".$row["url"];
    }
}
else
{

 


    echo "Error!";
}
?> 