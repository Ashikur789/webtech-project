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
                <form class="" action="index.html" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <th rowspan="4" scope="rowgroup">Upload Notes</th>
                                <td colspan="4"><input type="file" name="upload" value="Upload"></td>
                            </tr>
                            <tr>
                                <td colspan="4"><input type="file" name="upload" value="Upload"></td>
                            </tr>
                            <tr>
                                <td colspan="4"><input type="file" name="upload" value="Upload"></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <th rowspan="2" scope="rowgroup">Update Notice</th>
                                <td colspan="2"><textarea name="name" rows="8" cols="80" style="max-width:500px;min-width:250px;max-height:150px;min-height:50px;"></textarea></td>
                            </tr>
                            <tr>
                                <td><input class="btn-warning" type="submit" name="update-notice" value="Update"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>
