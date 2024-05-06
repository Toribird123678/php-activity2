<?php
    //pricelist
    $Gucci = 300;
    $kikiam = 40;
    $corndog = 50;
    if (empty($_POST["quantity"]) || empty($_POST["cash"])) {
    } else {
        //Invalidation if ever they typed a string
        if (is_numeric($_POST["quantity"]) && is_numeric($_POST["cash"])) {
            if ($_POST["order"] == "Gucci") {
                $_POST["order"] = $Gucci;
            } elseif ($_POST["order"] == "Kikiam") {
                $_POST["order"] = $kikiam;
            } elseif ($_POST["order"] == "Corndog") {
                $_POST["order"] = $corndog;
            }
            $order = $_POST["order"];
            $quantity = ($_POST["quantity"]);
            $cash = ($_POST["cash"]);
            $total_cost = $order * $quantity;
            $change = $cash - $total_cost;
            if ($quantity <= 0) {
                echo"<br>Invalid";
            } elseif ($total_cost <= $cash) {
                echo"<strong><br> The total cost is {$total_cost} <br>";
                echo"Your change is {$change}<br><br></strong>";
                echo"Thanks for the order!";
            } else {
                echo "<strong><br>You don't have enough money</strong>  ";
            }
        } else {
            echo "<br>Invalid Input";
        }
    }
?>