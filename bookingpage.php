<?php include_once("includes/header.php") ?>
<?php
	session_start();
	if(isset($_POST['save']))
	{
		$sql = "INSERT INTO reservation (country, rooms, checkin, checkout, norooms, noadults, nochildren, firstname, lastname, email, phone)
		VALUES ('".$_POST["country"]."','".$_POST["rooms"]."','".$_POST["checkin"]."', '".$_POST["checkout"]."',
		'".$_POST["norooms"]."', '".$_POST["noadults"]."', '".$_POST["nochildren"]."','".$_POST["firstname"]."', 
		'".$_POST["lastname"]."', '".$_POST["email"]."', '".$_POST["phone"]."')";
		$result = mysqli_query($link,$sql);
	}
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">BrightHotel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="roomspage.php" class="nav-link">Rooms</a></li>
          <li class="nav-item active"><a href="bookingpage.php" class="nav-link">Booking</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
    <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your reservation</h1>
						</div>
						<form method="POST" action="">
							<div class="form-group">
								<input class="form-control" name="country" type="text" placeholder="Country, ZIP, city...">
								<span class="form-label">Destination</span>
                            </div>
                            <div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<select class="form-control" name="rooms" required>
                                            <option value="" selected hidden>Choose Your Room</option>
                                            <option>None</option>
											<option>Bachelor Room</option>
											<option>Family Room</option>
                                            <option>Presidential Room</option>
                                            <option>Double Room</option>
                                            <option>VIP Room</option>
                                            <option>VIP Room 2</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Rooms</span>
									</div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="checkin" type="date" required>
										<span class="form-label">Check In</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="checkout" type="date" required>
										<span class="form-label">Check out</span>
									</div>
								</div>
                            </div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="norooms" required>
											<option value="" selected hidden>no of rooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Rooms</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="noadults" required>
											<option value="" selected hidden>no of adults</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Adults</span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<select class="form-control" name="nochildren" required>
											<option value="" selected hidden>no of children</option>
											<option>0</option>
											<option>1</option>
											<option>2</option>
										</select>
										<span class="select-arrow"></span>
										<span class="form-label">Children</span>
									</div>
								</div>
                            </div>
                            <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="firstname" type="text" placeholder="Enter Your First Name">
										<span class="form-label">First Name</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="lastname" type="text" placeholder="Enter Your Last Name">
										<span class="form-label">Last Name</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="email" type="email" placeholder="Enter Your Email">
										<span class="form-label">Email</span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="phone" type="tel" placeholder="Enter Your Phone">
										<span class="form-label">Phone</span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn" type="submit" name="save">Book Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
    </div>


<?php include_once("includes/footer.php") ?>