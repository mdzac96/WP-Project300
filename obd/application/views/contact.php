<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="container">


					<div class="agileinfo-contact-form-grid">


					<?=$this->session->userdata('message')?>

					<div class="col-md-6 col-md-offset-3">

					<br>
					<br>
					<h1>Contact</h1>

					
					<form action="" method="post">
						<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Name" required="">
						</div>	



						<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email" required="">
						</div>


						<div class="form-group">
						<input type="mobile" name="mobile" class="form-control" placeholder="mobile" required="">
						</div>



						<div class="form-group">
							<textarea name="message"  class="form-control" placeholder="Message" required=""></textarea>
						</div>

						<div class="form-group">
						<button class="btn btn-success" type="submit" name="submit" value="1">Submit</button>
						</div>


						
						
					
						
					</form>

					</div>
				</div>
</div>

