<div id="layoutSidenav_content">
                <main>
                	<div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		
		<select name="user_id" class="form-control">
		<!-- <input type="text" class="form-control" placeholder="Enter Your User Id" value="<?=set_value('user_id')?>" name="user_id"  > -->

		<?php foreach ($users as $row) {  ?>
			<option value="<?=$row['id']?>"><?=$row['name']?> -- <?=$row['blood_group']?></option>
		<?php } ?>

		</select>

	</div>

	<div class="error"><?=form_error('user_id')?></div>

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Date" value="<?=set_value('date')?>" name="date"  >
		
	</div>

	<div class="error"><?=form_error('date')?></div


	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Add data Now" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red; } </style>

                    


                
                </main>