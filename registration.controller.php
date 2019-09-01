<?php


class ControllerRegistration{

static public function ctrRegistration(){

  if (isset($_POST["newName"])) {

           if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["newName"])){


            $table = "regist_form";

            $data = array("name" => $_POST["newName"],
                           "age" => $_POST["newAge"],
                           "email"=> $_POST["newEmail"],
                           "address" => $_POST["newAddress"],
                           "emergency_name" => $_POST["newEmergency"],
                           "emergency_phone_number" => $_POST["newEmergencyPhone"],
                           "gender" => $_POST["newGender"],
                           "event_registration" => $_POST["newEvent"],
                           "event_day" => $_POST["event"]

                         );

            $requestt = ModelRegistration::mdlEnter($table, $data);

            if ($requestt == "ok") {

             echo "<script>
                         alert('success ');
                
                             window.location= '/cas222/final-form/template/Form01/views/event.php';
                 </script>";
             }


//   window.location= '/cas222/form/Form01/index.php';

  else {

      echo " Error the registered";
  }


  }
} // key if


} // key function

}// key class
