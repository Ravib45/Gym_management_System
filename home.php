<?php
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gym Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background: url(bg1.jpg) no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }
        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
        }
        .box-container {
            background-color: rgba(0, 0, 0, 0.6);
            border: 1px solid #fff;
            padding: 20px;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }
        .navbar-brand, .nav-link, .dropdown-item {
            color: #fff !important;
        }
        .dropdown-menu {
            background-color: rgba(0, 0, 0, 0.8);
        }
        .navbar-toggler-icon {
            filter: invert(1);
        }
        .nav-link:hover, .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><i class="fas fa-dumbbell"></i> GYM MANAGEMENT SYSTEM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="gymDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-building"></i> GYM
                        </a>
                        <div class="dropdown-menu" aria-labelledby="gymDropdown">
                            <a class="dropdown-item" href="home.php?info=add_gym"><i class="fas fa-plus-circle"></i> ADD GYM</a>
                            <a class="dropdown-item" href="home.php?info=manage_gym"><i class="fas fa-tasks"></i> VIEW GYMS</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="paymentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-money-bill-alt"></i> PAYMENT DEPARTMENT
                        </a>
                        <div class="dropdown-menu" aria-labelledby="paymentDropdown">
                            <a class="dropdown-item" href="home.php?info=add_payment"><i class="fas fa-plus-circle"></i> ADD PAYMENT AREA</a>
                            <a class="dropdown-item" href="home.php?info=manage_payment"><i class="fas fa-tasks"></i> VIEW PAYMENT AREAS</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="membersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-users"></i> MEMBERS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="membersDropdown">
                            <a class="dropdown-item" href="home.php?info=add_member"><i class="fas fa-user-plus"></i> ADD MEMBER</a>
                            <a class="dropdown-item" href="home.php?info=manage_member"><i class="fas fa-tasks"></i> VIEW MEMBERS</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="trainersDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-chalkboard-teacher"></i> TRAINERS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="trainersDropdown">
                            <a class="dropdown-item" href="home.php?info=add_trainer"><i class="fas fa-user-plus"></i> ADD TRAINER</a>
                            <a class="dropdown-item" href="home.php?info=manage_trainer"><i class="fas fa-tasks"></i> VIEW TRAINERS</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> LOG OUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3 box-container">
        <?php
        $info = $_GET['info'] ?? '';
        if ($info !== "") {
            switch ($info) {
                case "add_gym":
                    include('add_gym.php');
                    break;
                case "add_payment":
                    include('add_payment.php');
                    break;
                case "manage_payment":
                    include('manage_payment.php');
                    break;
                case "add_member":
                    include('add_member.php');
                    break;
                case "manage_member":
                    include('manage_member.php');
                    break;
                case "add_trainer":
                    include('add_trainer.php');
                    break;
                case "manage_trainer":
                    include('manage_trainer.php');
                    break;
                case "manage_gym":
                    include('manage_gym.php');
                    break;
                case "update_payment":
                    include('update_payment.php');
                    break;
                case "delete_payment":
                    include('delete_payment.php');
                    break;
                case "update_gym":
                    include('update_gym.php');
                    break;
                case "delete_gym":
                    include('delete_gym.php');
                    break;
                case "update_member":
                    include('update_member.php');
                    break;
                case "delete_member":
                    include('delete_member.php');
                    break;
                case "update_trainer":
                    include('update_trainer.php');
                    break;
                case "delete_trainer":
                    include('delete_trainer.php');
                    break;
                case "change_password":
                    include('change_password.php');
                    break;
                case "gym_search":
                    include('gym_search.php');
                    break;
                case "member_search":
                    include('member_search.php');
                    break;
                case "payment_search":
                    include('payment_search.php');
                    break;
                case "trainer_search":
                    include('trainer_search.php');
                    break;
                default:
                    echo "<h2>Welcome to the Gym Management System!</h2><p>Use the navigation bar to manage the gym, payment areas, members, and trainers.</p>";
            }
        } else {
            echo "<h2>Welcome to the Gym Management System!</h2><p>Use the navigation bar to manage the gym, payment areas, members, and trainers.</p>";
        }
        ?>
    </div>
</body>
</html>
