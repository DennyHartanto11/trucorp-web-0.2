<?php

$conn = new mysqli("172.18.0.2","root","test123","trucorp");
if(!$conn){
    echo "Cannot connect to MySQL";
    exit;
}

$rows=array();
$query ='SELECT * FROM users';
$result = $conn->query($query);
$ctr=0;
while($row=mysqli_fetch_assoc($result)){
    $rows[]=$row;
}

foreach($rows as $row){
    $ctr+=1;
    echo"<br>";
    echo $row['ID'] . " " . $row['Nama'] . "  " . $row['Alamat'] . "  " . $row['Jabatan'];
    echo "<br>";
}

echo"<br>";
echo "Count = {$ctr}";
?>
