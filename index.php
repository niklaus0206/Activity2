<?php
include_once 'config.php'; 
?>

<!DOCTYPE html>  
 <html> 
      <head> 
           <title> APAS and Friends PDO</title>  
           <link rel="stylesheet" type="text/css" href="newstyle.css">
      </head> 
      <body>  <br><br><br><br><br>
<form action="index.php" method="post">
<center>
<h3>PDO CHU CHU</h3>

	<input type="text" name="entrynum" placeholder="ID to search">
	<input type="text" name="fname" placeholder="First Name">
	<input type="text" name="mname" placeholder="Midle Name">
	<input type="text" name="lname" placeholder="Last Name">
 <br>
 <br>
 
	<input type="submit" name="search" value="search">
	<input type="submit" name="add" value="Add"> 
	<input type="submit" name="delete" value="Delete">   
 
	<input type="submit" name="update" value="Update"> 
 
	</center>
</form>
</body>
</html>
      <?php  
      
		if (isset($_POST['search'])) {
		 
			$ai = $_POST['entrynum'];
			$getUsers = $DB->query("SELECT * FROM tbl_sam WHERE entrynum=?", array($ai)); 
			foreach($getUsers as $result) {
				$ai = $result['entrynum']; 
		        $lname = $result['lastname']; 
		        $fname = $result['fname']; 
		        $mname = $result['midname'];  
		       	echo " Record Number: ".$ai." Last Name: ".$lname." First Name".$fname." Middle Name".$mname." <br>";
			}

			}
		
		if (isset($_POST['add'])) { 
 		 try {

				$fname = $_POST['fname'];
				$mname = $_POST['mname'];
				$lname = $_POST['lname'];
				
				$getUsers = $DB->query("INSERT INTO tbl_sam(lastname,fname,midname) VALUES(?,?,?)", array($lname,$mname,$fname));
				echo "Added!";
			 } catch (Exception $e) {
				echo $getUsers . "<br>" . $e->getMessage();
			 }
		}
		if (isset($_POST['delete'])) {
 
			try {
				$ai = $_POST['entrynum'];
				$getUsers = $DB->query("DELETE FROM tbl_sam WHERE entrynum = ?", array($ai)); 
				echo "Success";
			} catch (Exception $e) {
				echo $getUsers . "<br>" . $e->getMessage();
			}
			 
		}
?>
 