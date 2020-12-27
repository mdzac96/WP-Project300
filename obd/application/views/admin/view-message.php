<div id="layoutSidenav_content">
	 <main>
	<div id="container">

	<h1><?=$title?></h1>

	 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Message</th>
		<th>Delete</th>
		 
	</tr>



	<?php   

	foreach ($contact as $row) {
		 
	echo '<tr>';
	echo '<td>'.$row['name'].'</td>';
	echo '<td>'.$row['email'].'</td>';
	echo '<td>'.$row['mobile'].'</td>';
	echo '<td>'.$row['message'].'</td>';
	 
	echo '<td><a href="'.base_url().'admin/delete_contact/'.$row['id'].'"><button class="btn btn-danger">Delete</button><a></td>';
	 
	echo '</tr>';
	 

	}

	 


	?>
			</table>	
		</div>
	 </main>
</div>
	              