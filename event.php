
<?php

include '../../includes/header.php';

require_once "../controlador/registration.controller.php";

require_once "../modelos/model.ModelRegistration.php";
 ?>

 <base href="/cas222/final-form/" >
 <link href="template/css/bootstrap.min.css" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
 <link href="template/css/reset.css" rel="stylesheet" type="text/css">
 <link href="template/css/grid.css" rel="stylesheet" type="text/css">
 <link href="template/css/style.css" rel="stylesheet" type="text/css">
 <link href="template/css/navigation.css" rel="stylesheet" type="text/css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
 <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
  
<div class="container">

  <div class="col-md-12">
    <h2>Registration</h2>

    <form method="post">

        <div class="row">
            
            
            


          <div class="colum span_1_of_2 span_2_of_2">

            <div class="form-group">
              <label for="email">name:</label>
              <input type="text" class="form-control"  placeholder="full name" name="newName" required>
            </div>

            <div class="form-group">
              <label for="email">Age:</label>
              <input type="text" class="form-control"  placeholder="Age" name="newAge" required>
            </div>

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control"  placeholder="Email" name="newEmail" >
            </div>

            <div class="form-group">
              <label for="email">Address:</label>
              <input type="text" class="form-control"  placeholder="Address" name="newAddress" required >
            </div>

          </div>

          <div class="colum span_1_of_2 span_2_of_2">
                      <div class="form-group">
                        <label for="pwd">Emegency Name:</label>
                        <input type="text" class="form-control"  placeholder="Emergency name" name="newEmergency">
                      </div>

                      <div class="form-group">
                        <label for="pwd">Emegency phone number:</label>
                        <input type="text" class="form-control"  placeholder="Emergency phone number" name="newEmergencyPhone">
                      </div>

                      <div class="form-group">
                        <label for="pwd">Gender:</label>
                        <select class="" name="newGender">

                          <option value="">--Selection gender--</option>
                          <option value="F">Female</option>
                          <option value="M">Male</option>
                          <option value="O">Other</option>

                        </select>
                      </div>

                     <div class="form-group">
                        <label for="pwd">Event Registration:</label>

                      <select class="event_days" name="newEvent">

                          <option value="">--Select event registration--</option>
                          <option value="Saturday">Saturday</option>
                          <option value="Sunday">Sunday</option>

                        </select>

                      </div>

                      <div class="form-group" id="saturday_radio" >
                        <label for="pwd">Event Registration Day:</label>
                        <br>

                        <input type="radio" name="event" value="Long Course Triathlon"> Long Course Triathlon 7:00 AM $240.00 <br>
                        <input type="radio" name="event" value="Olimpic Triathlon"> Olimpic Triathlon 7:30 AM $100.00 <br>
                        <input type="radio" name="event" value="10 K"> 10 K 7:15 AM $50.00 <br>
                        <input type="radio" name="event" value="Half-Marathon"> Half-Marathon 7:15 AM $75.00 <br>

                      </div>

                      <div class="form-group" id="sunday_radio" >
                        <label for="pwd">Event Registration Day:</label>
                        <br>

                        <input type="radio" name="event" value="Sprint Triathlon"> Sprint Triathlon 8:00 AM $90.00 <br>
                        <input type="radio" name="event" value="Try-a-Tri"> Try-a-Tri 8:20 AM $65.00 <br>

                      </div>
          </div>

        </div>

          <button type="submit" class="btn btn-primary pull-right">Submit</button>

      <?php

        $register = new ControllerRegistration();
        $register->ctrRegistration();

       ?>

    </form>
  </div>

</div>

<?php
include '../../includes/footer.php';

 ?>


<style media="screen">
  #saturday_radio, #sunday_radio {display: none;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">

  $('.event_days').change(function(){

      if(this.value=="Saturday"){

        $('#saturday_radio').show();
        $('#sunday_radio').hide();

      }
      else {
        $('#saturday_radio').hide();
        $('#sunday_radio').show();
      }
  });

</script>

