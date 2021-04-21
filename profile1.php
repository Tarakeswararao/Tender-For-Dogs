
<div class="container mt-3">
		<h3>Other Insert</h3>
	<div class="row" style="background-color: rgba(186,184,179,0.5); padding: 15px">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">

      <a class="list-group-item list-group-item-action active " id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><b>What is About</b></a>

      <a class="list-group-item list-group-item-action" id="list-doctor-list" data-toggle="list" href="#list-doctor" role="tab" aria-controls="doctor"><b>Doctor</b></a>

      <a class="list-group-item list-group-item-action" id="list-event-list" data-toggle="list" href="#list-event" role="tab" aria-controls="event"><b>Events</b></a>

      <a class="list-group-item list-group-item-action" id="list-train-list" data-toggle="list" href="#list-train" role="tab" aria-controls="train"><b>Trainers</b></a>

      <a class="list-group-item list-group-item-action" id="list-access-list" data-toggle="list" href="#list-access" role="tab" aria-controls="access"><b>Accessories</b></a>
      <br>
      <h2>Insert Your Profession</h2>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active bg-light" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

<!-- doctor insert -->
      <div class="tab-pane fade bg-light" id="list-doctor" role="tabpanel" aria-labelledby="list-doctor-list" >
      	<h3 style="color: black">Doctor Details</h3>
      	<form action="222.php" method="post"  enctype="multipart/form-data">
			    <div class="form-group">
			        <input type="hidden" name="p_id" value="<?php echo $fetch['id']; ?>" >
			        <input type="text" class="form-control" placeholder="Doctor Name" name="name" required>
			    </div>
			    
			    <div class="form-group">
			        <input type="text" class="form-control" placeholder="Clinic Name" name="clinic" required>
			    </div>
			    <div class="form-group">
			        <input type="text" class="form-control" placeholder="Clinic Phone Number" name="phone" required>
			    </div>
			    <div class="form-group">
			           <input type="text" class="form-control" placeholder="Email" name="email" required>
			    </div>
			    <div class="form-group">
			           <input type="text" class="form-control" placeholder="Location" name="location" required>
			    </div>
			    <div class="form-group">
				        <label>Doctor Image </label>
				        <input type="file" name="image" required>
				</div>
			    <div style="text-align: right;">
                    	<input type="submit" value="Submit" name="doctor" class="btn btn-primary">
                </div>
		</form>
      </div>
<!-- event insert -->
     <div class="tab-pane fade bg-light" id="list-event" role="tabpanel" aria-labelledby="list-events-list">
      	<h3 style="color: black">Event Details</h3>
      	<form action="222.php" method="post"  enctype="multipart/form-data">
			    <div class="form-group">
			        <input type="hidden" name="p_id" value="<?php echo $fetch['id']; ?>" >
			        <input type="text" class="form-control" placeholder="Event Name" name="event" required>
			    </div>
			    <div class="form-group">
			        <input type="text" class="form-control" placeholder="Event Discription" name="eventdesc" required>
			    </div>
			    <div class="form-group">
			        <input type="text" class="form-control" placeholder="Location" name="location" required>
			    </div>
			    <div class="form-group">
				        <label>Image </label>
				        <input type="file" name="image" required>
				</div>
			    <div style="text-align: right;">
                    	<input type="submit" value="Submit" name="event" class="btn btn-primary">
                </div>
		</form>
      </div>
  <!-- trainer details -->
      <div class="tab-pane fade bg-light" id="list-train" role="tabpanel" aria-labelledby="list-train-list">
      	<h3 style="color: black">Trainer Details</h3>
      	<form action="222.php" method="post"  enctype="multipart/form-data">
			    <div class="form-group">
			        <input type="hidden" name="p_id" value="<?php echo $fetch['id']; ?>" >
			        <input type="text" class="form-control" placeholder="Trainer Name" name="name" required>
			    </div>
			    <div class="form-group">
			        <input type="text" class="form-control" placeholder="Description" name="desc" required>
			    </div>
			    <div class="form-group">
			           <input type="text" class="form-control" placeholder="Exprence" name="exprence" required>
			    </div>
			    <div class="form-group">
			           <input type="text" class="form-control" placeholder="Phone" name="phone" required>
			    </div>
			
			    <div class="form-group">
			           <input type="text" class="form-control" placeholder="Location" name="location" required>
			    </div>
			    <div class="form-group">
				        <label>Trainer Image </label>
				        <input type="file" name="image" required>
				</div>
			    <div style="text-align: right;">
                    	<input type="submit" value="Submit" name="train" class="btn btn-primary">
                </div>
		</form>
      </div>
<!-- access details -->
		<div class="tab-pane fade bg-light" id="list-access" role="tabpanel" aria-labelledby="list-access-list">
      	<h3 style="color: black">Store Details</h3>
      	<form action="222.php" method="post"  enctype="multipart/form-data">
			    <div class="form-group">
			        <input type="hidden" name="p_id" value="<?php echo $fetch['id']; ?>" >
			        <input type="text" class="form-control" placeholder="Shop Name" name="shop" required>
			    </div>
			    <div class="form-group">
			        <input type="text" class="form-control" placeholder="Description" name="desc" required>
			    </div>
			    <div class="form-group">
			           <input type="text" class="form-control" placeholder="Phone" name="phone" required>
			    </div>
			    <div class="form-group">
			           <input type="text" class="form-control" placeholder="Address" name="address"required>
			    </div>
			    <div class="form-group">
			           <input type="text" class="form-control" placeholder="Location" name="location" required>
			    </div>
			    <div class="form-group">
				        <label>Store Image </label>
				        <input type="file" name="image" required>
				</div>
			    <div style="text-align: right;">
                    	<input type="submit" value="Submit" name="acc" class="btn btn-primary">
                </div>
		</form>
      </div>
    </div>
  </div>
</div>
</div>
