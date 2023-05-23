<?php
$arr=[
    [1,"Jeevan", "CSE"],
    [2,"Jyoti", "IT"],
    [3,"Shyam","ME"],
    [4,"Abay","EC"]
];
echo "<table border = 2px cellpadding=4px>";
echo "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Department</th>
</tr>";
foreach($arr as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2  </td>";
    }
    echo "<br>";
    echo "</tr>";
}
echo "</table>";
?>