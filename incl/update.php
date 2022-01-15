
 <?php 
 require('../config/conn.php');
if (isset($_POST["sortable"])){
   $sort = $_POST["sortable"];
   $sort2 = array_keys($sort);
   $sort3 = str_replace("\"", "", $sort2[0]);
   $sort4 = array_map('intval', explode(',', $sort3));


   foreach($sort4 as $key => $value){
        mysqli_query($conn, "UPDATE sites SET ordering = '$key' WHERE id = '$value'");
   }
}
?>