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
                        <h2>Account</h2>
                    </div>
                    <div class="side-panel-control">
                        <form method="post">
                            <ul>
                                <li><a href="index.php">Dashboard</a></li>
                                <li><a href="change_password">Change Password</a></li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="sec-2">
                    <div class="side-panel-title">
                        <h2>Manageing Panel</h2>
                    </div>
                    <div class="side-panel-control">
                        <form method="post">
                            <ul>
                                <li><a href="register_student.php">Register Student</a></li>
                                <li><a href="register_faculty.php">Register Faculty</a></li>
                                <li><a href="manage_students.php">Manage Students</a></li>
                                <li><a href="manage_faculties.php">Manage Faculties</a></li>
                                <li><a href="add_section.php">Add New Section</a></li>
                                <li><a href="remove_section.php">Remove Section</a></li>
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
