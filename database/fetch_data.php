<style>
    table{
        width: 600px;
        margin: 10% auto;
    }
    th{
        background-color: #333;
        color: #fff;
    }
</style>
<?php

include_once "./connection_with_db.php";
$sql ="SELECT * FROM users";
$result = $conn->query($sql);
if($result){
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    echo "<table border='2'>";
    echo "<thead>
    <th>S/N</th>
    <th>Name</th>
    <th>Email</th>
    </thead>";
   if(count($rows)>0){
       foreach($rows as $index=>$row) {
           echo "<tr>";
           echo "<td>". ($index + 1) . "</td>";
           echo "<td>". $row["name"]. "</td>";
           echo "<td>". $row["email"]. "</td>";
           echo "</tr>";
       }
       
    }else{
        echo "<tr>";
        echo "<td colspan='3'> No Data found </td>";
        echo "</tr>";
    }
    echo "</table>";
}else{
    echo "Data not found";
}