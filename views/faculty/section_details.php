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
                <div class="navigation-panel">
                    <ul>
                        <li><a href="section_details.php">Student List</a></li>
                        <li><a href="manage_section.php">Manage Section</a></li>
                    </ul>
                </div>
                <div class="student-list">
                    <form method="post">
                        <table width="100%;">
                            <tr>
                                <th scope="colgroup" style="border-bottom:hidden;">Name</th>
                                <th scope="colgroup" style="border-bottom:hidden;">ID</th>
                                <th scope="colgroup" style="border-bottom:hidden;">CGPA</th>
                                <th scope="colgroup" style="border-bottom:hidden;">Credits Completed</th>
                            </tr>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            <tr>
                                <td>Spider Man</td>
                                <td>07-02458-1</td>
                                <td>4.00</td>
                                <td>110</td>
                            </tr>
                        </table>
                        <table width="100%;">
                            <tr>
                                <th colspan="5" scope="colgroup">Mid Term</th>
                                <th colspan="5" scope="colgroup">Final Term</th>
                                <th scope="colgroup" style="border-bottom:hidden;">Update</th>
                            </tr>
                            <tr>
                                <th scope="col">Quiz 1</th>
                                <th scope="col">Quiz 2</th>
                                <th scope="col">Quiz 3</th>
                                <th scope="col">Lab Performance</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Quiz 1</th>
                                <th scope="col">Quiz 2</th>
                                <th scope="col">Quiz 3</th>
                                <th scope="col">Lab Performance</th>
                                <th scope="col">Grade</th>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="text" value="20" style="width:30px;"></td>
                                <td><input type="text" value="19" style="width:30px;"></td>
                                <td><input type="text" value="20" style="width:30px;"></td>
                                <td><input type="text" value="25" style="width:30px;"></td>
                                <td><input type="text" value="A+" style="width:30px;"></td>
                                <td><input type="text" value="18" style="width:30px;"></td>
                                <td><input type="text" value="19" style="width:30px;"></td>
                                <td><input type="text" value="17" style="width:30px;"></td>
                                <td><input type="text" value="25" style="width:30px;"></td>
                                <td><input type="text" value="A+" style="width:30px;"></td>
                                <td><input class="btn-warning" type="submit" name="update" value="Update"></td>
                            </tr>
                        </table>
                    </form>

                </div>
            </div>
        </div>
    </body>
</html>
