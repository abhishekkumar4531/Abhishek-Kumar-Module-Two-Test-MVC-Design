<?php

require '../application/model/database.php';
  class Home extends Framework {

    function testInput($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    public function index() {
      $this->view("dashboard");
    }

    public function addList() {
      $newItem = $_POST['newItem'];
      $newItem = $this->testInput($newItem);
      if($newItem != ""){
        $obj = new Database();
        $addStatus = $obj->addToList($newItem);
        if($addStatus) {
          echo true;
        }
        else {
          echo false;
        }
      }
      else {
        echo false;
      }
    }

    public function getListData() {
      session_start();
      $obj = new Database();
      $get = $obj->getData();
      if($get != null) {
        $_SESSION['unmarkedData'] = $get;
        include "../application/view/components/displayData.php";
      }
      else {
        echo "Currently list is empty!!!";
      }
    }

    public function delete() {
      $itemId = $_POST['itemId'];
      $obj = new Database();
      $delStatus = $obj->deleteData($itemId);
      if($delStatus) {
        echo true;
      }
      else {
        echo false;
      }
    }

    public function edit() {
      $itemId = $_POST['itemId'];
      $editValue = $_POST['editValue'];
      $editValue = $this->testInput($editValue);
      $obj = new Database();
      $editStatus = $obj->editData($itemId, $editValue);
      if($editStatus) {
        echo true;
      }
      else {
        echo false;
      }
    }

    public function markDone() {
      $itemValue = $_POST['itemValue'];
      $obj = new Database();
      $addedStatus = $obj->addedList($itemValue);
      if($addedStatus) {
        echo true;
      }
      else {
        echo false;
      }
    }

    public function getMarkedData() {
      session_start();
      $obj = new Database();
      $get = $obj->getMarkData();
      if($get != null) {
        $_SESSION['markedData'] = $get;
        include "../application/view/components/displayMarkedData.php";
      }
      else {
        echo "Currently list is empty!!!";
      }
    }

    public function deleteMarked() {
      $delId = $_POST['itemId'];
      $obj = new Database();
      $delStatus = $obj->deleteMarkedData($delId);
      if($delStatus) {
        echo true;
      }
      else {
        echo false;
      }
    }

  }
?>
