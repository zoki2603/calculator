<?php include "callFanc.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #box {

            width: 50%;
            height: 350px;
            background-color: beige;
            margin: 20px auto;
            border-radius: 10px;
        }

        input[type="text"] {
            width: 350px;
            margin: 10px 30px;
            padding: 5px 10px;
            border-radius: 10px;

        }

        #operator {
            margin-top: 50px;
        }

        button[type="submit"] {
            width: 370px;
            padding: 5px 10px;
            font-size: 1.5em;
            margin: 10px 30px;
            border-radius: 10px;
        }

        h1 {
            margin: 10px auto;
            text-align: center;
        }
    </style>
</head>

<body>

    <div>
        <h1>Calculator</h1>
    </div>
    <form action="" method="POST">
        <div id="box">
            <input type="text" value="<?php echo $calc->getName(), " ", $calc->getResult(); ?> "><br><br>
            <input type="text" value="<?php echo $cal1->getName(), " ", $cal1->getResult(); ?> "><br><br>
            <input type="text" name="num1" placeholder="First number">
            <select name="operator" id="operator">
                <option value="">operator</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="num2" placeholder="Secend number"><br>
            <button type="submit" value="submit" name="submit">Calculate</button>
        </div>
    </form>

</body>

</html>