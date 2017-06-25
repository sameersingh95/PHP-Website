<!DOCTYPE html>
<html>
<head>
<title>Delete multiple users</title>
<link rel="stylesheet" href="style.css"/>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
	
	$('.checkbox').on('click',function(){
		if($('.checkbox:checked').length == $('.checkbox').length){
			$('#select_all').prop('checked',true);
		}else{
			$('#select_all').prop('checked',false);
		}
	});
});
</script>
</head>

<body>
<center><h1><span>Database</span></h1></center>
<?php session_start(); if(!empty($_SESSION['success_msg'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success_msg']; ?></div>
<?php unset($_SESSION['success_msg']); } ?>
<?php
include_once('connect.php');
$query = mysqli_query($conn,"SELECT * FROM users");
?>
<center>
<form name="bulk_action_form" action="action.php" method="post" />
    <table class="bordered">
        <thead>
        <tr>
            <th><input type="checkbox" name="select_all" id="select_all" value=""/></th>        
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
        </tr>
        </thead>
        <?php
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile']; ?></td>
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No records found.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="Delete" value="Delete" />
    <input type="submit" class="btn btn-danger" name="Go Back" value="No" />
</form></center>
</body>

</html> 