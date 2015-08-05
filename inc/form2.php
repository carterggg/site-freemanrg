		<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<fieldset>
				<p>
					<label for="name">Full Name:</label><?php echo @$name_error; ?>
						<br>
					<input type="text" id="name" name="name" value="<?php echo @$name ?>" class="required" required/>
				</p>
				<p>
					<label for="email">Email:</label><?php echo @$email_error; ?>
						<br>
					<input type="email" id="email" name="email" value="<?php echo @$email ?>" class="email required" required/>
				</p>
				<p>
					<label for="phone">Phone Number:</label><?php echo @$message_error; ?>
						<br>
					<input type="phone" id="phone" name="phone" value="<?php echo @$message ?>" class="required" required/>
				</p>
				<p>
					<label for="address">Buying or Selling a home:</label><?php echo @$message_error; ?>
						<br>
					<input type="address" id="address" name="address" value="<?php echo @$message ?>" class="required" required/>
				</p>
				<p>
					<label for="message">Message:</label><?php echo @$message_error; ?>
						<br>
					<textarea cols="45" rows="5" id="message" name="message" class="required" required><?php echo @$message ?></textarea>
				</p>
				<input name="submitted" type="submit" value="Send" />
			</fieldset>
		</form