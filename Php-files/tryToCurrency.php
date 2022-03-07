<?php
//Other currency to TRY php driver code

//TURKISH Central Bank Currency Api connection
$connect = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
$takenCurrency=$connect->Currency;

//Decleration of currency choice and amount of the money
if(isset($_POST["chosenCurrency"]) && isset($_POST["amountTry"]))
{
$chosenCurrency=$_POST["chosenCurrency"];
$amountTry=$_POST["amountTry"];

}

//Handling Currency Convension
switch ($chosenCurrency) {
    case "0":
        $result =  $amountTry." Turkish Lira = American Dollar: ".($amountTry/$takenCurrency[0]->ForexSelling);
         break;
    case "1":
        $result =  $amountTry." Turkish Lira = Australian Dollar: ".($amountTry/$takenCurrency[1]->ForexSelling);
        break;
    case "2":
        $result =  $amountTry." Turkish Lira = Danish Krone: ".($amountTry/$takenCurrency[2]->ForexSelling);
        break;
    case "3":
        $result =  $amountTry." Turkish Lira = Euro: ".($amountTry/$takenCurrency[3]->ForexSelling);
        break;
    case "4":
        $result =  $amountTry." Turkish Lira = British Pound: ".($amountTry/$takenCurrency[4]->ForexSelling);
        break; 
    case "5":
        $result =  $amountTry." Turkish Lira = Swiss Frank: ".($amountTry/$takenCurrency[5]->ForexSelling);
        break;
    case "6":
        $result =  $amountTry." Turkish Lira = Swedish Krona: ".($amountTry/$takenCurrency[6]->ForexSelling);
        break;
    case "7":
        $result =  $amountTry." Turkish Lira = Canadian Dollar: ".($amountTry/$takenCurrency[7]->ForexSelling);
        break;           
    default:
        $result =  "You have chosen invalid option. Please report it or try again";
  }
?>
<!-- Result Page-->
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">  
    <title>Currency Converter</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3 text-center">
            <div class="position-absolute top-50 start-50 translate-middle"><p class="text-danger" style="font-family: 'Syne Mono', monospace; text-align:justify; font-size:30px" ><?php echo $result ; ?></p></div>
            </div>
        </div>
    </div>
</body>
</html>