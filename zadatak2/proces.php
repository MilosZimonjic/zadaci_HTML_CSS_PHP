<?php

$data = [];

if (
  !empty($_POST["name"])
  && !empty($_POST["surname"])
  && !empty($_POST["yearOfBirth"])
  && !empty($_POST["adress"])
  && !empty($_POST["city"])
) {
  $data["response"] = "success";
  $data["content"] = "Hvala na unetim podacima";
} else {
  $data["response"] = "error";
  $data["content"] = "Greska";
}

echo json_encode($data);

?>
