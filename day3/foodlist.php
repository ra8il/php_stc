<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Calculator</title>

    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #f2f2f2;
        }

        form{
            width: 70%;
            padding: 30px;
            border-radius: 8px;
            background-color: #33aa33;
            color: white;
        }

        select,
        input{
            padding: 8px;
            margin: 5px;
        }

        select{
            width: 220px;
        }

        h2,h3{
            color: #222;
        }
    </style>

    <script>
        function inputPrice(){

            let food = document.getElementById("food").value;
            let price = document.getElementById("price");

            if(food=="Pizza"){
                price.value = 200;
            }
            else if(food=="Burger"){
                price.value = 150;
            }
            else if(food=="Fries"){
                price.value = 80;
            }
            else if(food=="Sandwich"){
                price.value = 60;
            }
            else{
                price.value = "";
            }

        }
    </script>

</head>
<body>

<h1>Grocery Billing</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <label>Choose an Item:</label><br>

    <select name="food" id="food" onchange="inputPrice()" required>
        <option value="">Select</option>
        <option value="Pizza">Pizza</option>
        <option value="Burger">Burger</option>
        <option value="Fries">Fries</option>
        <option value="Sandwich">Sandwich</option>
    </select>

    <input type="number" name="price" id="price" readonly>

    <br><br>

    <label>Enter Quantity:</label>

    <input type="number" name="quantity" min="1" required>

    <input type="submit" name="submit" value="Order Now">

</form>

<?php

if(isset($_POST['submit'])){

    $food_item = $_POST['food'];
    $quantity = $_POST['quantity'];

    $price = 0;

    if($food_item=="Pizza"){
        $price = 200;
    }
    else if($food_item=="Burger"){
        $price = 150;
    }
    else if($food_item=="Fries"){
        $price = 80;
    }
    else if($food_item=="Sandwich"){
        $price = 60;
    }

    if($price>0){

        $subtotal = $price * $quantity;

        // 10% Discount
        $discount = $subtotal * 0.10;

        // Amount after Discount
        $afterDiscount = $subtotal - $discount;

        // 5% Tax
        $tax = $afterDiscount * 0.05;

        // Final Total
        $finalTotal = $afterDiscount + $tax;

        echo "<br><hr>";

        echo "<h2>Bill Summary</h2>";

        echo "<b>Food Item:</b> $food_item <br>";
        echo "<b>Price:</b> $$price <br>";
        echo "<b>Quantity:</b> $quantity <br><br>";

        echo "<b>Subtotal:</b> $$subtotal <br>";
        echo "<b>Discount (10%):</b> -$$discount <br>";
        echo "<b>Amount After Discount:</b> $$afterDiscount <br>";
        echo "<b>Tax (5%):</b> +$$tax <br>";

        echo "<hr>";
        echo "<h2>Final Bill: $$finalTotal</h2>";

    }
    else{
        echo "<h3>Please select an item.</h3>";
    }

}

?>

</body>
</html>