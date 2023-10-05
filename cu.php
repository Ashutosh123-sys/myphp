<?php

$conn = mysqli_connect("localhost", "root", "Welcome@27356", "data");

?>

<!DOCTYPE html>

 

<html lang="en">

<head>

 

    <meta charset="UTF-8">

 

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

 

    <title>Document</title>

 

</head>

 

 

 

<body>

 

 

 

    <form method="post">

 

        <h2>Enter Amount</h2>

 

        <input type="number" name="amount" required />

 

        <label>

 

            <p>From</p>

 

 

 

            <select name="base" required>

 

                <option value="">Select One …</option>

                <option value="USD">USD</option>

                <option value="AED">AED</option>

                <option value="ARS">ARS</option>

                <option value="AUD">AUD</option>

                <option value="BGN">BGN</option>

                <option value="BRL">BRL</option>

                <option value="BSD">BSD</option>

                <option value="CAD">CAD</option>

                <option value="CHF">CHF</option>

                <option value="CLP">CLP</option>

                <option value="CNY">CNY</option>

                <option value="COP">COP</option>

                <option value="CZK">CZK</option>

                <option value="DKK">DKK</option>

                <option value="DOP">DOP</option>

                <option value="EGP">EGP</option>

                <option value="EUR">EUR</option>

                <option value="FJD">FJD</option>

                <option value="GBP">GBP</option>

                <option value="GTQ">GTQ</option>

                <option value="HKD">HKD</option>

                <option value="HRK">HRK</option>

                <option value="HUF">HUF</option>

                <option value="IDR">IDR</option>

                <option value="ILS">ILS</option>

                <option value="INR">INR</option>

                <option value="ISK">ISK</option>

                <option value="JPY">JPY</option>

                <option value="KRW">KRW</option>

                <option value="KZT">KZT</option>

                <option value="MVR">MVR</option>

                <option value="MXN">MXN</option>

                <option value="MYR">MYR</option>

                <option value="NOK">NOK</option>

                <option value="NZD">NZD</option>

                <option value="PAB">PAB</option>

                <option value="PEN">PEN</option>

                <option value="PHP">PHP</option>

                <option value="PKR">PKR</option>

                <option value="PLN">PLN</option>

                <option value="PYG">PYG</option>

                <option value="RON">RON</option>

                <option value="RUB">RUB</option>

                <option value="SAR">SAR</option>

                <option value="SEK">SEK</option>

                <option value="SGD">SGD</option>

                <option value="THB">THB</option>

                <option value="TRY">TRY</option>

                <option value="TWD">TWD</option>

                <option value="UAH">UAH</option>

                <option value="UYU">UYU</option>

                <option value="ZAR">ZAR</option>

 

            </select>

 

        </label>

 

        <br />

 

        <br />

 

        <label>

 

            <p>To</p>

 

            <select name="output" required id="">

 

                <option value="">Select One …</option>

                <option value="USD">USD</option>

                <option value="AED">AED</option>

                <option value="ARS">ARS</option>

                <option value="AUD">AUD</option>

                <option value="BGN">BGN</option>

                <option value="BRL">BRL</option>

                <option value="BSD">BSD</option>

                <option value="CAD">CAD</option>

                <option value="CHF">CHF</option>

                <option value="CLP">CLP</option>

                <option value="CNY">CNY</option>

                <option value="COP">COP</option>

                <option value="CZK">CZK</option>

                <option value="DKK">DKK</option>

                <option value="DOP">DOP</option>

                <option value="EGP">EGP</option>

                <option value="EUR">EUR</option>

                <option value="FJD">FJD</option>

                <option value="GBP">GBP</option>

                <option value="GTQ">GTQ</option>

                <option value="HKD">HKD</option>

                <option value="HRK">HRK</option>

                <option value="HUF">HUF</option>

                <option value="IDR">IDR</option>

                <option value="ILS">ILS</option>

                <option value="INR">INR</option>

                <option value="ISK">ISK</option>

                <option value="JPY">JPY</option>

                <option value="KRW">KRW</option>

                <option value="KZT">KZT</option>

                <option value="MVR">MVR</option>

                <option value="MXN">MXN</option>

                <option value="MYR">MYR</option>

                <option value="NOK">NOK</option>

                <option value="NZD">NZD</option>

                <option value="PAB">PAB</option>

                <option value="PEN">PEN</option>

                <option value="PHP">PHP</option>

                <option value="PKR">PKR</option>

                <option value="PLN">PLN</option>

                <option value="PYG">PYG</option>

                <option value="RON">RON</option>

                <option value="RUB">RUB</option>

                <option value="SAR">SAR</option>

                <option value="SEK">SEK</option>

                <option value="SGD">SGD</option>

                <option value="THB">THB</option>

                <option value="TRY">TRY</option>

                <option value="TWD">TWD</option>

                <option value="UAH">UAH</option>

                <option value="UYU">UYU</option>

                <option value="ZAR">ZAR</option>

 

            </select>

 

        </label>

 

        <input type="submit" name="submit" />

        <?php

 

        if (isset($_POST['submit'])) {

            // $fromCur = $_POST['fromCur'];

 

            $fromCurrency = $_POST['base'];

            $toCurrency = $_POST['output'];

            $amount = $_POST['amount'];

 

            // $url = "http://api.exchangeratesapi.io/v1/latest?access_key=8e960f2e2927f5396f518a105187f03b&format=1&base=$base&symbols=$output";

            $url = "https://v6.exchangerate-api.com/v6/272cb4f40380e548bb73eb29/pair/$fromCurrency/$toCurrency/$amount";

            $ch = curl_init();

 

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

 

            curl_setopt($ch, CURLOPT_URL, $url);

 

            $result = curl_exec($ch);

 

            curl_close($ch);

 

            $result = json_decode($result, true);

            // print_r($result);

 

            $final_amt = $result['conversion_result'];

            // echo "<br/>";

            // echo "<br/>";

            // echo  $final_amt;

            // echo "<br/>";

 

            // echo "Currency : " . $toCur . " Value : " . $final_amt;

            $exchange = $amount * $final_amt;

            // echo $exchange;

            // echo $fromCurrency;

            // $fromCur = $_POST['fromCur'];

 

            $query = "INSERT INTO DB1.api_data VALUES('$amount','$fromCurrency','$toCurrency','$exchange')";

            mysqli_query($conn, $query);

            echo "<script> alert('Data Inserted');</script>";

            // echo "<pre>";

 

            // print_r($result);

 

            // print_r($final_amt);

 

            // echo $amt;

 

            // echo $toCur;

        }

 

        ?>

</body>

</html>