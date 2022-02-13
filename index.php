<?php

$conn = new mysqli("172.18.0.2","root","test123","trucorp");
if($conn){
    
}
else{
 echo "Failed Connect To Database!";
 exit;
}

$data=array();
$query ='SELECT * FROM users';
$result = $conn->query($query);
$ctr=0;
while($row=mysqli_fetch_assoc($result)){
    $data[]=$row;
}

foreach($data as $row){
    $ctr+=1;
    echo"<br>";
    echo $row['ID'] . " " . $row['Nama'] . "  " . $row['Alamat'] . "  " . $row['Jabatan'];
    echo "<br>";
}

echo"<br>";
echo "Count = {$ctr}";
?>
