<html>
    <head>
        <title>Krusty Krab Menu</title>
    </head>
    <body>
        <div>
        <h1>Krusty Krab Menu</h1>
            <form action="menu.php" method="POST">
                
                <div class="menu-item" id="menu-item-1">
                    <label for="patty1">Krabby Patty - $1.25</label>
                    <input type="number" name="patty1" placeholder="0">
                </div>

                <div class="menu-item" id="menu-item-2">
                    <label for="patty2">Double Krabby Patty - $2.00</label>
                    <input type="number" name="patty2" placeholder="0">
                </div>

                <div class="menu-item" id="menu-item-3">
                    <label for="patty3">Triple Krabby Patty - $3.00</label>
                    <input type="number" name="patty3" placeholder="0">
                </div>
                <button type="submit" name="submit">Checkout</button>

            </form>
        
        </div>
    </body>
</html>

<?php
//how many of each item
//cost of each item
//total cost
$patty1Quant = null;
if(isset($_POST["patty1"])) {
    $patty1Quant = (float) $_POST["patty1"];
}

$patty2Quant = null;
if(isset($_POST["patty2"])) {
    $patty2Quant = (float) $_POST["patty2"];
}

$patty3Quant = null;
if(isset($_POST["patty3"])) {
    $patty3Quant = (float) $_POST["patty3"];
}


$patty1Cost = 1.25;
$patty2Cost = 2.00;
$patty3Cost = 3.00;



$patty1Total = $patty1Quant * $patty1Cost;
$patty2Total = $patty2Quant * $patty2Cost;
$patty3Total = $patty3Quant * $patty3Cost;


$total = ($patty1Total + $patty2Total + $patty3Total);

if(isset($_POST["submit"])) {
    echo("<br>Order Summary:<br>");

    if(isset($_POST["patty1"])){
        if($patty1Quant > 1){
            echo($patty1Quant . " Krabby Pattys<br>");
        }
        else{
            echo($patty1Quant . " Krabby Patty<br>");
        }
    }

    if(isset($_POST["patty2"])){
        if($patty2Quant > 1){
            echo($patty2Quant . " Double Krabby Pattys<br>");
        }
        else{
            echo($patty2Quant . " Double Krabby Patty<br>");
        }
    }

    if(isset($_POST["patty3"])){
        if($patty3Quant > 1){
            echo($patty3Quant . " Triple Krabby Pattys<br>");
        }
        else{
            echo($patty3Quant . " Triple Krabby Patty<br>");
        }
    }


    echo("<br>Total:<br>");
    echo($total);
}

?>