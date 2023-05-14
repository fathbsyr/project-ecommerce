<?php
include_once "../../template/atas.php";
?>

</nav>

<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col">
				<p class="bread"><span><a href="index.php">Home</a></span> / <span>Contact</span></p>
			</div>
		</div>
	</div>
</div>


<div id="colorlib-contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Contact Information</h3>
				<div class="row contact-info-wrap">
					<div class="col-md-3">
						<p><span><i class="icon-location"></i></span> Perumahan CIbinong City, 16913</p>
					</div>
					<div class="col-md-3">
						<p><span><i class="icon-phone3"></i></span>+628953XXXXXXXX</p>
					</div>
					<div class="col-md-3">
						<p><span><i class="icon-paperplane"></i></span>fatihmubasyir0@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="contact-wrap">
					<h3>Get In Touch</h3>
					<form action="login.html" class="contact-form">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="fname">First Name</label>
									<input type="text" id="fname" class="form-control" placeholder="Your firstname">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lname">Last Name</label>
									<input type="text" id="lname" class="form-control" placeholder="Your lastname">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" id="email" class="form-control" placeholder="Your email address">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="subject">Subject</label>
									<input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="message">Message</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-sm-12">
								<div class="form-group">
									<input type="submit" value="Send Message" class="btn btn-primary">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				<div id="map" class="colorlib-map"></div>
			</div>
		</div>
	</div>
</div>
<?php
include_once "../../template/bawah_2.php"
?>