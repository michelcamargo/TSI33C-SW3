<?php

function alert($msg) {
  echo "<script type='text/javascript'>alert('$msg');</script>";
}

if (isset($_GET['action']) && $_GET['action'] == 'add_customer') {
    $inputFlag = verifyInputData($_POST["name"], $_POST["born"], $_POST["phone"], $_POST["email"]);

    if($inputFlag == 0){
        insertCustomer($_POST["name"], $_POST["born"], $_POST["phone"], $_POST["email"]);
        return $inputFlag;

    } else {
        return $inputFlag;
    }

}

if (isset($_GET['action']) && $_GET['action'] == 'remove_customer') {
  removeCustomer(($_POST["email"]));

}

// ABRE O BANCO DE DADOS
function openDB() {
    $conn = new mysqli("localhost", "root", "", "formulario1");
    return $conn;
}

// VERIFICA A ENTRADA DE DADOS
function verifyInputData($in_name, $in_born, $in_email, $in_phone) {
    if(!($in_name && $in_born && $in_email && $in_phone)) {
      return 2;

    } else if(customerAlreadyExists($in_email)) {
      // born não alterável
      updateCustomer($in_name, $in_email, $in_phone);
      return 3;
    }

    else { return 0; }
}

// INSERE CLIENTE
function insertCustomer($name, $born, $phone, $email) {
    $database = openDB();

    $sql = "INSERT INTO cliente(c_name, c_born, c_phone, c_email)"
        . "VALUES ('{$name}', '{$born}', '{$phone}', '{$email}')";

    $database->query($sql);
    $database->close();
    returnToIndex(0);

}

function customerAlreadyExists($match_email) {
    $database = openDB();

    $sql = "SELECT * FROM cliente WHERE c_email = '{$match_email}'";

    $result = $database->query($sql);

    while($reg = mysqli_fetch_array($result)) {
        $arrayData[] = $reg;
    }

    $database->close();

    if($arrayData) return true;
    else return false;
}

function returnToIndex($error_code){
  if($error_code == 0) {
//        alert("Cadastrado com sucesso.");
      header("location:index.php");

  } else if($error_code == 1) {
      alert("Deu pau na database");
      header("location:index.php");

  } else if($error_code == 2) {
      alert("Input inválido");
      header("location:index.php");

  } else if($error_code == 3) {
      alert("Cliente já existente");
      header("location:index.php");

  } else {
      header("location:index.php");
  }
}

function updateCustomer($toUpdate_name, $in_email, $toUpdate_phone) {
  $database = openDB();
  $sql = "UPDATE cliente SET c_name='{$toUpdate_name}', c_phone='{$toUpdate_phone}', WHERE c_email = '{$in_email}'";

  $result = $database->query($sql);
  $database->close();

  if($result) return 0;
  else return 1;

}

function removeCustomer($toRemove_email){
  $database = openDB();
  $sql = "DELETE COUNT(1) FROM cliente WHERE c_email = '{$toRemove_email}'";

  $result = $database->query($sql);
  $database->close();
  if($result) return 0;
  else return 1;
}

function listCustomers() {
  $database = openDB();
  $sql = "SELECT * FROM cliente ORDER BY c_name";
  $result = $database->query($sql);

  while($reg = mysqli_fetch_array($result)) {
    $arrayData[] = $reg;
  }

  $database->close();
  return $arrayData;
}