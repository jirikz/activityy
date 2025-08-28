<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0" >pay roll</h4>
        </div>
        <div class="card-body">

            <?php

             if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $days_worked = $_POST["num1"];
                $daily_rate = $_POST["num2"];
                $cash_advance = $_POST["cash"];

                $gross_pay = $days_worked * $daily_rate;
                $tax = $gross_pay * 0.02;
                $sss = $gross_pay * 0.015;
                $pagibig = 50;

                $total_deductions = $tax + $sss + $pagibig + $num3;
                $net_pay = $gross_pay - $total_deductions;
             }

              
            ?>
       
            <p class="lead">Here are the details you submitted:</p>
           
            <ul class="list-group">
                <li class="list-group-item"><strong>Full Name:</strong> <?=$fullname ?> </li>
                <li class="list-group-item"><strong>total days of work</strong> <?=$days_worked ?> </li>
                <li class="list-group-item"><strong>daily rate:</strong> <?=$daily_rate ?> </li>
                <hr>
                <li class="list-group-item"><strong>gross pay</strong> <?=$gross_pay ?> </li>
                <li class="list-group-item"><strong>tax</strong> <?=$tax ?> </li>
                <li class="list-group-item"><strong>sss</strong> <? =$sss ?> </li>
                <li class="list-group-item"><strong>pag-ibig</strong> <? =$pagibig ?> </li>
                <li class="list-group-item"><strong>cash advance</strong> <? =$cash_advance ?> </li>
                <hr>
                 <li class="list-group-item"><strong>total deduction</strong> <? =$total_deductions ?> </li>
                 <li class="list-group-item"><strong>net pay</strong> <? =$net_pay ?> </li>
            </ul>

            <div class="mt-4">
                <a href="index.php" class="btn btn-primary">Register Another Student</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>