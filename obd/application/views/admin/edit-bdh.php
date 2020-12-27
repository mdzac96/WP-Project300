
            <div id="layoutSidenav_content">
                <main>

                    <div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post"  enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<select name="user_id" class="form-control">

		<!-- <input type="text" class="form-control" place_nameholder="Enter Your User ID" value="<?php if(set_value('user_id')){ echo set_value('user_id'); }else{ echo $bdh[0]['user_id']; }?>" name="user_id"  > -->

		<?php foreach ($users as $row) {  ?>
			<option <?php if(set_value('user_id')== $row['id']){ echo 'selected';  }else if($bdh[0]['user_id']==$row['id']){ echo 'selected'; }?> value="<?=$row['id']?>"><?=$row['name']?> -- <?=$row['blood_group']?></option>
		<?php } ?>

		</select>

	</div>

	<div class="error"><?=form_error('user_id')?></div>

		<div class="form-group">

		<input type="text" class="form-control" place_nameholder="Enter Your Date" value="<?php if(set_value('date')){ echo set_value('date'); }else{ echo $bdh[0]['date']; }?>" name="date"  >

	</div>

	<div class="error"><?=form_error('date')?></div>





	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Edit data Now" > 
		<a href="<?=base_url()?>admin/view-bdh/"><button type="button" class="btn btn-success">Back To Table</button><a>
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red; } </style>


</main>
              