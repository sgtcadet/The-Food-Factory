<?php
/*** Begin Session ***/
session_start();


/*** Set form token ***/
$form_token = md5(uniqid('auth',true));

/*** Set the session from token ***/
$_SESSION['form_token'] = $form_token;
?>

<?php
	define("TITLE","Home | The Food Factory");
	include('includes/header.php');
?>
<div class="body">
	<span style="cursor:pointer" onclick="showForm();">Log in</span>
<section id="slide-container">
	<div id="slider">
		<img src="img/food1.png" alt="Meal" width="800px">
	</div><!--slider-->
	<div id="slider-content">
		<?php
			foreach ($sliderImagesSmaller as $images) {
		?>
			<img src="img/<?php echo $images['img'];?>.png" alt="">
		<?php
			}
		?>
	<!--	<img src="img/foods_1.png" alt="">
		<img src="img/foods_2.png" alt="">
		<img src="img/foods_3.png" alt="">
		<img src="img/foods_4.png" alt="">
		<img src="img/foods_5.png" alt="">
	-->
	</div><!--slider-content-->
		
</section><!--slide-container-->

<div style="height:10px"></div>
		<script src="scripts/loginform.js"></script>

		

	<div id="loginform-container" >
		<form style="width:272px" name="loginform" method="post" action="loginscript.php" id="loginform">
			<span style="cursor: pointer;position: absolute;right: -1px;top: -1px;" onclick="closeForm()"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
			<p>
				<label for="fdf_username">Username or Email<br/>
				<input type="email" name="fdf_username" id="fdf_username" class="input" maxlength="20" value="" size="20" required ></label>
			</p>

			<p>
				<label for="fdf_password">Password<br/>
				<input type="password" name="pwd" id="fdf_password" class="input" maxlength="11" value="" size="20" required ></label>
			</p>
					<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" />Remember Me</label></p>

			<p class="submit">
				<!--<input type="hidden" name="redirect_to" value="index.php" />
				-->
				<input type="hidden" name="form_token" value="<?php echo $form_token;?>">
				<input type="hidden" name="testcookie" value="1" />
				<input type="submit" name="submit" id="submit" onclick="" class="btn" value="Log In" />

			</p>
		</form>
	</div><!--login-form-container-->

<section id="news-container">

<script>
	$(document).ready(function(){

		});
</script>


	<div class="latest-news">

		<div id="comment_container" style="display:none">
			<h2>See what people are saying about us now!!</h2>

			<div id="poster"></div>
			<h3>USERNAME</h3>
			<p>We know that good food isn't just about how 
					expensive the dish is. We're not pompous, we're proud. We're proud of our work,
					our quality, our environment, and our love for food and family.</p>
		
		
					<script src="scripts/postcomment.js"></script>


			<div id="comment_form_container">
				<form action="" method="post" id="comment_form">
					<table>
						<th align="left"><label>Make a Post</label></th>
					<tr>
						<td>
							<label for="name">Name:</label>
							<input style="" type="text" name="name" id="user" class="user" >
						</td>
						<td></td>
					</tr>
					<tr>
						<td >
							<label style="vertical-align:top" for="message">comment:</label>
							<textarea name="message" id="message" cols="50" rows="10"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<input style="float:left" type="submit" class="btn" onclick="postComment()" value="post comment">
						</td>
						<td></td>
					</tr>
					</table>
				</form>
			</div>
			</div><!--comment end-->
		</div><!--comment_form_container end-->
	
</section><!--latest-news-->



</div><!--body end-->
<?php 
	include('includes/footer.php');
?>