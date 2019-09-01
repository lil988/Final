<?php

require_once 'connections.php';


class ModelRegistration{


public static function mdlEnter($table, $data){


  $stmt = Connectt::conectar()->prepare("INSERT INTO $table(name, age, email, address, emergency_name, emergency_phone_number,
                                                                  gender, event_registration, event_day)
                                          VALUES(:name, :age, :email, :address, :emergency_name, :emergency_phone_number,
                                                  :gender, :event_registration, :event_day)");



  $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
  $stmt->bindParam(":age", $data["age"], PDO::PARAM_STR);
  $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
  $stmt->bindParam(":address", $data["address"], PDO::PARAM_STR);
  $stmt->bindParam(":emergency_name", $data["emergency_name"], PDO::PARAM_STR);
  $stmt->bindParam(":emergency_phone_number", $data["emergency_phone_number"], PDO::PARAM_STR);
  $stmt->bindParam(":gender", $data["gender"], PDO::PARAM_STR);
  $stmt->bindParam(":event_registration", $data["event_registration"], PDO::PARAM_STR);
  $stmt->bindParam(":event_day", $data["event_day"], PDO::PARAM_STR);


  if ($stmt->execute()) {

      return "ok";
  }


  else {

    return "error";
  }

      $stmt->close();
  		$stmt = null;
} // key function


} // key class
