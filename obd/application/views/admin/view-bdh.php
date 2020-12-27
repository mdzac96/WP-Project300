<div id="layoutSidenav_content">
	 <main>
	<div id="container">

	<h1><?=$title?></h1>



	 <table  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

		<form method="post" action="">

	 	 <div class="col-md-6">

	 	<div class="from-control">

	 	<input type="text" class="form-control" name="mobile">

	 	</div>

	 	</div>

	 	 <div class="col-md-6">

	 	<div class="from-control">

	 	<input type="submit" class="btn btn-success" value="search" name="search">

	 	</div>

	 	

	 	</div>

	 	</form>

	<tr>
		<th>User Name</th>
		<th>Blood Group</th>
		<th>Mobile</th>
		<th>Date</th>
		<th>Edit</th>
		<th>Delete</th>
		 
	</tr>



	<?php   

	foreach ($bdh as $row) {
		 
	echo '<tr>';
	echo '<td>'.$row['name'].'</td>';
	echo '<td>'.$row['blood_group'].'</td>';
	echo '<td>'.$row['mobile'].'</td>';
	echo '<td>'.$row['date'].'</td>';
	


	echo '<td><a href="'.base_url().'admin/edit_bdh/'.$row['b_id'].'"><button class="btn btn-success">Edit</button><a></td>';
	echo '<td><a href="'.base_url().'admin/delete_bdh/'.$row['b_id'].'"><button class="btn btn-danger">Delete</button><a></td>';
	 
	echo '</tr>';
	 

	}

	 


	?>
			</table>	
		</div>
	 </main>
</div>
	              