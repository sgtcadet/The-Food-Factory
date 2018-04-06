<?php
	define("TITLE", "Contact | The Food Factory");
	include('includes/header.php');
?>

<section id="contacts">
	<div class="contacts-contents">

		<div class="left info">
			<p>Sed ut perspiciatis unde omnis iste natus error 

			sit voluptatem accusantium doloremque 

			laudantium, totam rem aperiam, eaque ipsa 

			quae ab illo inventore veritatis et quasi 

			architecto beatae vitae dicta sunt explicabo. 

			Nemo enim ipsam voluptatem quia voluptas sit 

			aspernatur aut odit aut fugit, sed quia 

			consequuntur magni dolores eos qui ratione 

			voluptatem sequi nesciunt. Neque porro 

			quisquam est, qui dolorem ipsum quia dolor sit</p>
		</div><!--info-->	
		<div class="right form">

			<h1>Get in touch with us!</h1>
			<?php


				function test_input($data){
					//strip whitespace from begining and end of string
					$data = trim($data);

					//removes backslashes
					$data = stripcslashes($data);

					//converts some predefined characters to HTML entities.
					$data = htmlspecialchars($data);
				return $data;	
				}
				//Check for header injection
				function has_header_injection($str)
				{
					return preg_match("/[\r\n]/", $str);
				}

				//Define variables and set to empty values
				$name = $email = $msg = "";

				//if form request method is post 
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					//Collect Form data
					$name 	= test_input($_POST['name']);
					$email 	= test_input($_POST['email']);
					$msg 	= test_input($_POST['message']);

					if(has_header_injection($name) || has_header_injection($email))
					{
						die(); //kill the script
					}

					if(!$name || !$email || !$msg)
					{
						echo '<h4 class="error">All fields are required!</h4><a href="contact.php" class="buttton block">Go back and try again</a>';
						exit;
					}

					//Recipent of  message
				$to = "geovaniluigid@gmail.com";

				$subject = "$name sent you a message via your contact form.\r\n"; //Subject of message

				//Message format
				$message = "Name: $name\r\n";
				$message .= "Email: $email\r\n";
				$message .= "Message:\r\n$msg";

				//$message .= wordwrap($message,72);
				wordwrap($message,72);

				//Setting mail headers into a variable
				$headers 	= "MIME-Version 1.0\r\n";
				$headers 	.= "Content-type: text/plain; charset=iso-8859-1\r\n";
				$headers 	.= "From: $name <$email> \r\n;";
				$headers 	.= "X-Priority: 1\r\n";
				$headers 	.= "X-MSMail-Prior00ity: High\r\n\r\n";


				//Send the email
				mail($to, $subject, $message, $headers);
				//echo ("$subject $message $headers");

				//}

				

			?>

				<!--Show success message after email has been sent-->
		<h5>Thanks for contacting The Food Factory!</h5>
		<p>Please allow 24 hours for a response.</p>
		<p><a href="index.php" class="button block">&laquo;Go to Home Page</a></p>
		

			<?php }else{?>	
			<form method="post" action="">
				<table>
				<tr>
					<td align="right"><label for="name">Name</label></td>
					<td><input type="text" size="25"  name="name" id="name" required></td>
				</tr>
				
				<tr>
					<td align="right"><label for="email">Email</label></td>
					<td><input type="email" size="25"  name="email" id="email" width="100%" required></td>
				</tr>
				
				<tr>
					<td style="vertical-align:top" align="right"><label for="message">Message</label></td>
					<td><textarea name="message" id="message" rows="10" required></textarea></td>
				</tr>
				
				
				<tr>
					<td>
						
					</td>
					<td>
						<input type="submit" class="btn" value="Submit">
						<input type="reset" class="btn" value="Reset">
					</td>
				
				</tr>
				</table>
			</form>
			<?php }?>
		</div><!--form-->
		<div class="cf"></div>
	</div><!--contacts-contents-->
</section><!--contacts-->
	<div style="height:10px"></div>

<section id="con-container">
	<div class="latest-news">
		<p>we know that good food isn't just about how 
				expensive the dish is. We're not pompous, we're proud. We're proud of our work,
				our quality, our environment, and our love for food and family.</p>
	</div>
</section><!--latest-news-->


<?php
	include('includes/footer.php');
?>