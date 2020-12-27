
				<div class="col-lg-5 col-md-8 px-lg-3 px-0">
					<div class="banner-form-w3 ml-lg-5">
						<div class="padding">
							<form action="" method="post" enctype="multipart/form-data" >
								<div class="form-style-w3layout">
									

	<?=$this->session->flashdata('message');?>
	
 
	 
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Email" value="<?=set_value('Email')?>"  name="Email"  >

	</div>

	<div class="error"><?=form_error('Email')?></div>
 

			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter Password" value="<?=set_value('Password')?>"  name="Password"   >

	</div>

		<div class="error"><?=form_error('Password')?></div>
 
	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-success" value="Login Now" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>
								</div>
						 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



