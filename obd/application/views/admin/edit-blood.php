
            <div id="layoutSidenav_content">
                <main>

                    <div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post"  enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" place_nameholder="Enter Your Blood Group" value="<?php if(set_value('blood_group')){ echo set_value('blood_group'); }else{ echo $blood[0]['blood_group']; }?>" name="blood_group"  >

	</div>

	<div class="error"><?=form_error('blood_group')?></div>





	<div class="form-group">

		<input type="submit"  blood_group="submit" class="btn btn-success" value="Edit data Now" > 
		<a href="<?=base_url()?>admin/view-blood/"><button type="button" class="btn btn-success">Back To Table</button><a>
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red; } </style>


</main>
              