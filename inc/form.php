	<div class="row">
		<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<fieldset>
				<div class="col-xs-12 col-sm-4">
					
					<label for="name">Name:</label><?php echo @$name_error; ?>
					<input type="text" id="name" name="name" value="<?php echo @$name ?>" class="required" required/>			
				</div>
				<div class="col-xs-12 col-sm-4">
					
					<label for="email">Email:</label><?php echo @$email_error; ?>
					<input type="email" id="email" name="email" value="<?php echo @$email ?>" class="email required" required/>
				</div>
				<div class="col-xs-12 col-sm-4">
									
					<label for="phone">Phone Number:</label><?php echo @$message_error; ?>
					<input type="phone" id="phone" name="phone" value="<?php echo @$message ?>" class="required" required/>
				</div>
					

					<br>
					
				<div class="row">
					<div class="col-xs-12">
						<br><br>
						<label for="message">Message:</label><?php echo @$message_error; ?>
								<br>
							<textarea cols="129" rows="5" id="message" name="message" class="required" required><?php echo @$message ?></textarea>
					</div>
				</div>
					
			
				
				<input name="submitted" type="submit" value="Send" />
			</fieldset>
		</form>
		
	</div>