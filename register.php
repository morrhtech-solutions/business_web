<!DOCTYPE html>
<html lang="en">
<?php require "includes/header1.php"; ?>

<body>
    <?php require "includes/header2.php"; ?>
    <div class="title">REGISTER</div>
    <div class="main_container">

        <div class="main_body">
            <div class="form_container">
                <form action="./funtions/reg_function.php" method="POST">

                    <?php

                        if(isset($_GET['success']))
                        {
                            echo "<span class='success_message'>Successfully Registered!</span>";
                        }
                        if(isset($_GET['error']))
                        {
                            if($_GET['error'] == "failed")
                            {
                                echo "<span class='error_message'>Registration Failed</span>";
                            }
                            elseif($_GET['error'] == "wrong-password")
                            {
                                echo "<span class='error_message'>password do not match</span>";
                            }
                            elseif($_GET['error'] == "user-exist")
                            {
                                echo "<span class='error_message'>you are already registered</span>";
                            }
                        }
                        ?>


                    <h2>Register</h2>

                    <div class="form_control">
                        <p>FULL NAME :</p>
                        <input type="text" name="full_name" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <p>PHONE NUMBER :</p>
                        <input type="tel" name="phone_number" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <p>EMAIL :</p>
                        <input type="email" name="email" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <p>PASSWORD :</p>
                        <input type="password" name="password" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <p>CONFIRM PASSWORD :</p>
                        <input type="password" name="confirm_password" class="form_input" required>
                    </div>

                    <div class="form_control">
                        <input type="submit" name="register" class="form_button" value="Register">
                    </div>
                </form>
                <br>
                <p>Already registered? <a href="login.php">Login</a></p>
            </div>
        </div><br><br>
    </div>


    <?php include "includes/footer.php"; ?>

</body>

</html>