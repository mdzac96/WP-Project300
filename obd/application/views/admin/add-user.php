<div id="layoutSidenav_content">
    <main>
                	<div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post" enctype="multipart/form-data" >


	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Name" value="<?=set_value('name')?>" name="name"  >

	</div>

	<div class="error"><?=form_error('name')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Email" value="<?=set_value('email')?>"  name="email"  >

	</div>

	<div class="error"><?=form_error('email')?></div>

	<div class="error"><?=form_error('password')?></div>


			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter password" value="<?=set_value('password')?>"  name="password"   >

	</div>

		<div class="error"><?=form_error('password')?></div>


	<div class="error"><?=form_error('password')?></div>


			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter Confirm password" value="<?=set_value('c_password')?>"  name="c_password"   >

	</div>

		<div class="error"><?=form_error('c_password')?></div>


			<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Mobile" value="<?=set_value('mobile')?>"  name="mobile"   >

	</div>

		<div class="error"><?=form_error('mobile')?></div>


			<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Date of Birth" value="<?=set_value('date_of_birth')?>"  name="date_of_birth"   >

	</div>

		<div class="error"><?=form_error('date_of_birth')?></div>




	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Blood Group" value="<?=set_value('blood_group')?>"  name="blood_group" >

	</div>

	<div class="error"><?=form_error('blood_group')?></div>

	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your weight" value="<?=set_value('weight')?>"  name="weight" >

	</div>

	<div class="error"><?=form_error('weight')?></div>


	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your address" value="<?=set_value('address')?>"  name="address" >

	</div>

	<div class="error"><?=form_error('address')?></div>



	<div class="form-group">

		
		<input type="text" class="form-control" placeholder="Enter Your Place Id" value="<?=set_value('place_id')?>"  name="place_id"   >

	</div>

		<div class="error"><?=form_error('place_id')?></div>



		




	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Add data Now" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>

</div>
	
</div>

<style> .error{ color:red;} </style>

                    


                
                </main>