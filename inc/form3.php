		<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<fieldset>
				<p>
					<label for="name">Full Name:</label><?php echo @$name_error; ?>
					<input type="text" id="name" name="name" value="<?php echo @$name ?>" class="required" required/>
				</p>
				<p>
					<label for="phone">Phone Number:</label><?php echo @$message_error; ?>
					<input type="phone" id="phone" name="phone" value="<?php echo @$message ?>" class="required" required/>
				</p>
				<p>
					<label for="email">Email:</label><?php echo @$email_error; ?>
					<input type="email" id="email" name="email" value="<?php echo @$email ?>" class="email required" required/>
				</p>
				<p>
					<label for="address">Date Of Birth:</label><?php echo @$message_error; ?>
					<input type="address" id="address" name="address" value="<?php echo @$message ?>" class="required" required/>
				</p>
				<p>
					<label for="message">Are you: <span class="form-small-style">Man seeking Woman? Woman Seeking Man? Man seeking Man? Woman Seeking Woman?</span></label><?php echo @$message_error; ?>
					
					<textarea cols="45" rows="1" id="message" name="message" class="required" required><?php echo @$message ?></textarea>
				</p>
				<input name="submitted" type="submit" value="Send" />
			</fieldset>
		</form