<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1>Going abroad?</h1>
<h2>Find out how much you're actually spending!</h2>
    <form method="POST">
        <label for="currenyInput">Fill in the amount: €</label>
        <br>
        <input type="number" name="euro" placeholder="Amount in Euros">
        <label for="EUR">
        <br>
        <br>
            Select desired currency:
        </label>
        <br>
        <select id="currency" name="currency">
        <option value="none"></option>
            <option name="NOK" value="NorskeKroner">NOK</option>
            <option name="USD" value="USDollar">USD</option>
           
        </select>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php

//Exchange rates:
//1 EUR = 10.3821 NOK
//1 NOK = 0.0963198 EUR

    if (isset($_POST['submit'])){ //the POST form has been submitted
echo "You have submitted the form";

        $euro = $_POST['euro'];
        $kroner = $_POST['NOK'];
    }
?>
</body>

</html>