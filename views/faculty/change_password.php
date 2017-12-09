<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="banner">
                    <div class="logo">
                        <a href="index.php"><img src="../resources/aiub.png" alt="aiub" style="width:70px;height:63px;"></a>
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
                                <a href="logout.php"><img src="../resources/logout.png" alt="logout"></a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div> <!-- end header -->
            <div class="side-panel">
                <div class="sec-1">
                    <div class="side-panel-title">
                        <h2>Managing Panel</h2>
                    </div>
                    <div class="side-panel-control">
                        <form method="post">
                            <ul>
                                <li><a href="change_password.php">Change Password</a></li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div><!-- end side-panel -->
            <div class="main">
                <table>
                    <form method="post">
                        <tr>
                            <th><label for="current-password">Current Password</label></th>
                            <td><input type="password" name="current-password" id="current-password"></td>
                        </tr>
                        <tr>
                            <th><label for="new-password">New Password</label></th>
                            <td><input type="password" name="new-password" id="new-password"></td>
                        </tr>
                        <tr>
                            <th><label for="confirm-password">Confirm Password</label></th>
                            <td><input type="password" name="confirm-password" id="confirm-password"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="btn-warning" type="submit" name="change-password" value="Confirm Change"><a href="#"> Password Policy</a></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </body>
</html>
