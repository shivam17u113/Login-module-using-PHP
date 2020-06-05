<?php 
Include('../config/connect.php');

$user_id = $_POST['user_id'];
$query = "SELECT * FROM project_group WHERE user_id = $user_id";
$GroupInfo = $mysqli->query($query) or die($query."<br>".$mysqli->error);
$Groupdata = $GroupInfo->fetch_assoc();
$group_id = $Groupdata['group_id'];
$query1 = "SELECT users.* FROM users LEFT JOIN project_group ON  users.id = project_group.user_id WHERE project_group.group_id = $group_id";

$FullGroupInfo = $mysqli->query($query1) or die($query1."<br>".$mysqli->error);
?>
<section class="panel panel-default"> 
<header class="panel-heading font-bold">Group No. <?php echo $Groupdata['group_id'];?></header> 
<div class="panel-body"> 
<table class="table table-striped b-t b-light">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
	</tr>
	<?php while ($FullGroupdata = $FullGroupInfo->fetch_assoc()) {?>
	<tr>
		<td><?php echo $FullGroupdata['firstname']?></td>
		<td><?php echo $FullGroupdata['lastname']?></td>
		<td><?php echo $FullGroupdata['email']?></td>
	</tr>
	<?php }?>

</table>
</div>
</section>