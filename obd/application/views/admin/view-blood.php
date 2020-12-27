<div id="layoutSidenav_content">
	 <main>
	<div id="container">

	<h1><?=$title?></h1>

	 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

	<tr>
		<th>Blood Group</th>
		<th>Edit</th>
		<th>Delete</th>
		 
	</tr>



	<?php   

	foreach ($blood as $row) {
		 
	echo '<tr>';
	echo '<td>'.$row['blood_group'].'</td>';
	


	echo '<td><a href="'.base_url().'admin/edit_blood/'.$row['b_id'].'"><button class="btn btn-success">Edit</button><a></td>';
	echo '<td><a href="'.base_url().'admin/delete_blood/'.$row['b_id'].'"><button class="btn btn-danger">Delete</button><a></td>';
	 
	echo '</tr>';
	 

	}

	 


	?>
			</table>	
		</div>
	 </main>
</div>
	              