<table>
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
    </thead>
    <tbody>
        <?php 
    foreach($students as $value){
        if($value["status"] == "PHP"){
            echo "<tr style='color:red;'>";
            echo "<td>".$value["name"]. "</td>";
            echo "<td>".$value["email"]. "</td>";
            echo "<td >".$value["status"]. "</td>";
            echo "</tr>";
        }else{
            echo "<tr>";
            echo "<td>".$value["name"]. "</td>";
            echo "<td>".$value["email"]. "</td>";
            echo "<td >".$value["status"]. "</td>";
            echo "</tr>";  
        } 
    }
?>
    </tbody>
</table>