
            <div id="layoutSidenav_content">
                <main>
                	<div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Blood Group" value="<?=set_value('blood_group')?>" name="blood_group"  >

	</div>

	<div class="error"><?=form_error('blood_group')?></div>




		




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
              