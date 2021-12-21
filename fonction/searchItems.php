<?php
session_start();
// require_once '../base/dao.php';

$dbConnect = mysqli_connect("localhost", "root", "", "bibliotheque_inconnu");
$sql = "SELECT * FROM collection WHERE nom_collection LIKE '%".$_POST['collection']."%'";
$result = mysqli_query($dbConnect, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
		          <td>".$row['nom_collection']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>Aucun résultat trouvé</td></tr>";
}
?>