<?php
include('include/config.php');
if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
 $stmt = $conn->prepare("SELECT * FROM subcategory WHERE categoryid=$id");
 $stmt->execute();
?>
<option value="">Select Subcategory</option>
<?php
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {
  ?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['subcategory']); ?></option>
  <?php
 }
}
?>