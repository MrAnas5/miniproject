<?php
$dbc= mysqli_connect('localhost','root','','anas');
$db =mysqli_select_db($dbc,'anas');
$id=$_GET['id'];
$sq = "UPDATE `categorie` SET saison = 'hiver' WHERE id='$id'";
if ($dbc->query($sq) === TRUE) {
echo "  successfully changed ";
} else {
echo "Error in changing: " . $dbc->error;
}
$dbc->close();
?>
