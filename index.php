<?php

$conn = new mysqli("172.18.0.2","root","test123","trucorp");
if($conn){
}
else{
 echo "Failed Connect To Database!";
 exit;
}

$query ='SELECT * FROM users';
$result = $conn->query($query);
$ctr=0;
while($row->fetch_assoc($result)){
    $datas=$row;
}

foreach($datas as $data){
    $ctr+=1;
    echo"<br>";
    echo $row['ID'] . " " . $row['Nama'] . "  " . $row['Alamat'] . "  " . $row['Jabatan'];
    echo "<br>";
}

echo"<br>";
echo "Count = {$ctr}";
?>
