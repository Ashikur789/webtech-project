<?php

if (isset($_POST['submit']))
    header("Location: registration.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="banner">
                    <div class="logo">
                        <a href="index.php"><img src="resources/aiub.png" alt="aiub" style="width:70px;height:63px;"></a>
                    </div>
                    <div class="seperator">

                    </div>
                    <div class="p-title">
                        <h1 class="h-title">CS Registration System</h1>
                    </div>
                </div>
                <div class="nav">
                    <form method="post">
                        <ul>
                            <li>
                                Welcome<a href="profile.php"> AHMED, KAZI TANJIR</a>
                            </li>
                            <li>
                                <a href="logout.php"><img src="resources/logout.png" alt="logout"></a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div> <!-- end header -->

            <div class="registration-notification">
                <div class="profile-pic">
                    <img src="resources/dummy-user.jpg" alt="user-image">
                </div>
                <div class="student-info">
                    <table>
                        <tr>
                            <th>Name</th>
                            <td>Scare Crow</td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <td>08-102504-1</td>
                        </tr>
                        <tr>
                            <th>Department</th>
                            <td>CSE</td>
                        </tr>
                        <tr>
                            <th>CGPA</th>
                            <td>4.00</td>
                        </tr>
                        <tr>
                            <th>Credits Completed</th>
                            <td>130</td>
                        </tr>
                        <tr>
                            <td>You are not allowed to register today.</td>
                            <td>
                                <form method="post">
                                    <input class="btn-warning" type="submit" name="submit" value="Next">
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
