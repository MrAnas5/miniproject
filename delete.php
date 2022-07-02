<?php
$dbc= mysqli_connect('localhost','root','','anas');
$db =mysqli_select_db($dbc,'anas');
$id=$_GET['id'];
$sql = "DELETE FROM `categorie` WHERE id = '$id'"; 
$sq2 = "DELETE FROM `article` WHERE id = '$id'"; 
$sq3 = "DELETE FROM `option` WHERE id = '$id'"; 
if ($dbc->query($sql) === TRUE) {
echo "  successfully deleted ";
} else {
echo "Error deleting record: " . $dbc->error;
}
if ($dbc->query($sq2) === TRUE) {
  echo "  successfully deleted ";
  } else {
  echo "Error deleting record: " . $dbc->error;
  }
  if ($dbc->query($sq3) === TRUE) {
    echo "  successfully deleted ";
    } else {
    echo "Error deleting record: " . $dbc->error;
    }
$dbc->close();
?>
