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
     <th width="10%">Delete</th>
    </tr>
  ';
        if ($statement->rowCount() > 0) {
            foreach ($result as $row) {
                $output .= '
    <tr>
     <td>' . $row["name"] . '</td>
     <td>' . $row["request"] . '</td>
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

    if ($_POST["action"] == "Delete") {
        $statement = $pdo->prepare(
            "DELETE FROM request WHERE id = :id"
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
