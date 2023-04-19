<?php

  class Database extends Connection {

    public $storeMarkData = [];

    public function addToList($itemValue) {
      $post = "INSERT INTO todolist (listItem) VALUES('$itemValue')";
      if($this->conn->query($post)) {
        return true;
      }
      else {
        return false;
      }
    }

    public function getData() {
      $read = "SELECT * FROM todolist";
      $result = $this->conn->query($read);
      $i = 0;
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $storeMarkData[$i]['listId'] = $row['listId'];
          $storeMarkData[$i]['listItem'] = $row['listItem'];
          $i++;
        }
        return $storeMarkData;
      }
      else {
        return null;
      }
    }

    public function deleteData($id) {
      $delete = "DELETE FROM todolist WHERE listId = '$id'";
      if ($this->conn->query($delete)) {
        $this->getData();
        return true;
      }
      else {
        return false;
      }
    }

    public function addedList($itemValue) {
      $post = "INSERT INTO addedlist (listItem) VALUES('$itemValue')";
      if($this->conn->query($post)) {
        return true;
      }
      else {
        return false;
      }
    }

    public function getMarkData() {
      $read = "SELECT * FROM addedlist";
      $result = $this->conn->query($read);
      $i = 0;
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $storeMarkData[$i]['listId'] = $row['listId'];
          $storeMarkData[$i]['listItem'] = $row['listItem'];
          $i++;
        }
        return $storeMarkData;
      }
      else {
        return null;
      }
    }

    public function deleteMarkedData($id) {
      $delete = "DELETE FROM addedlist WHERE listId = '$id'";
      if ($this->conn->query($delete)) {
        $this->getData();
        return true;
      }
      else {
        return false;
      }
    }

    public function editData($itemId, $editValue) {
      $update = "UPDATE todolist SET listItem = '$editValue' WHERE listId = '$itemId'";
      if($this->conn->query($update)) {
        return true;
      }
      else {
        return false;
      }
    }
  }

?>
