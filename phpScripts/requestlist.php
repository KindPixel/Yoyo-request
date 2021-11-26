<?php
require '../database/singleton.php';
session_start();

if (isset($_POST["action"])) //Check value of $_POST["action"] variable value is set to not
{
    //For Load All Data
    if ($_POST["action"] == "Load") {
        $statement = $pdo->prepare("SELECT * FROM request ORDER BY id DESC");
        $statement->execute();
        $result = $statement->fetchAll();
        $output = '';
        $output .= '
   <table class="table table-bordered">
    <tr>
     <th width="40%">User name</th>
     <th width="40%">Movie</th>
     <th width="10%">Update</th>
     <th width="10%">Delete</th>
    </tr>
  ';
        if ($statement->rowCount() > 0) {
            foreach ($result as $row) {
                $output .= '
    <tr>
     <td>' . $row["name"] . '</td>
     <td>' . $row["request"] . '</td>
     <td><button type="button" id="' . $row["id"] . '" class="btn btn-warning btn-xs update">Update</button></td>
     <td><button type="button" id="' . $row["id"] . '" class="btn btn-danger btn-xs delete">Delete</button></td>
    </tr>
    ';
            }
        } else {
            $output .= '
    <tr>
     <td align="center">Data not Found</td>
    </tr>
   ';
        }
        $output .= '</table>';
        echo $output;
    }

    //This code for Create new Records
    if ($_POST["action"] == "Create") {
        $statement = $pdo->prepare("
   INSERT INTO customers (first_name, last_name) 
   VALUES (:first_name, :last_name)
  ");
        $result = $statement->execute(
            array(
                ':first_name' => $_POST["firstName"],
                ':last_name' => $_POST["lastName"]
            )
        );
        if (!empty($result)) {
            echo 'Data Inserted';
        }
    }

    //This Code is for fetch single customer data for display on Modal
    if ($_POST["action"] == "Select") {
        $output = array();
        $statement = $pdo->prepare(
            "SELECT * FROM customers 
   WHERE id = '" . $_POST["id"] . "' 
   LIMIT 1"
        );
        $statement->execute();
        $result = $statement->fetchAll();
        foreach ($result as $row) {
            $output["first_name"] = $row["first_name"];
            $output["last_name"] = $row["last_name"];
        }
        echo json_encode($output);
    }

    if ($_POST["action"] == "Update") {
        $statement = $pdo->prepare(
            "UPDATE customers 
   SET first_name = :first_name, last_name = :last_name 
   WHERE id = :id
   "
        );
        $result = $statement->execute(
            array(
                ':first_name' => $_POST["firstName"],
                ':last_name' => $_POST["lastName"],
                ':id'   => $_POST["id"]
            )
        );
        if (!empty($result)) {
            echo 'Data Updated';
        }
    }

    if ($_POST["action"] == "Delete") {
        $statement = $pdo->prepare(
            "DELETE FROM customers WHERE id = :id"
        );
        $result = $statement->execute(
            array(
                ':id' => $_POST["id"]
            )
        );
        if (!empty($result)) {
            echo 'Data Deleted';
        }
    }
}
