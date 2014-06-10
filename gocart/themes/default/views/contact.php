
 <div class="jumbotron">
      <div class="container">
        <h1>Contact</h1>
        <p> Thanks for your interest in our services. Please fill out the email form, submit and we will get back to you soon.</p>       
      </div>
    </div>
	
	<?php if ($this->session->flashdata('message')):?>
	<div class="alert alert-info">
			<a class="close" data-dismiss="alert">×</a>
			<?php echo $this->session->flashdata('message');?>
		</div>
	<?php endif;?>

	<?php if ($this->session->flashdata('error')):?>
		<div class="alert alert-error">
			<a class="close" data-dismiss="alert">×</a>
			<?php echo $this->session->flashdata('error');?>
		</div>
	<?php endif;?>

	<?php if (!empty($error)):?>
		<div class="alert alert-error">
			<a class="close" data-dismiss="alert">×</a>
			<?php echo $error;?>
		</div>
	<?php endif;?>	

    <div class="container">
      <!-- Example row of columns -->
	  
      <div class="row">
        
		<div class="col-lg-12">
			<h1>Comments? Questions? Need help?</h1>
		</div>
		
		<?php echo form_open('cart/contact_us'); ?>	
			<div class="col-lg-12">
				<input type="text" name="name" id="name" class="form-control" placeholder="Name" required autofocus value="<?php echo set_value('name')?>">
			</div>
			<div class="col-lg-12">
				<input type="text" name="email" id="email" class="form-control" placeholder="Email" required value="<?php echo set_value('email')?>">
			</div>
			<div class="col-lg-12">
				<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required value="<?php echo set_value('subject')?>">
			</div>		
			<div class="col-lg-12">
				<textarea name="message" id="styled" placeholder="Message" setbg('#e5fff3');" required onblur="setbg('white')"> <?php echo set_value('message')?> </textarea>
			</div>
			
			<div class="col-lg-12">				
				<input type="submit" value="Send" name="send" class="btn btn-default"/>
			</div>
			
			<input type="hidden" value="submitted" name="submitted"/>	
		</form>	
		
      </div>
	
	

