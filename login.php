<?php
session_start();
include 'db.php'; //since na connect na db sa code  i-include sya para ma access nitong file na ito

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //stored ng username at pass
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query based on username kung nag eexist sa db yung username na ila-log in
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    // kapag nag eexist sa database dito na iveverify yung password ng username kung tama para maka log in
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // dito titignan kung employee or user acc. yung ni log in mo
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            //kapag user dito sa user side mapupunta pag employee sa employee side naman
            if ($user['role'] == 'user') {
                header("Location: user/user.php");
            } elseif ($user['role'] == 'employee') {
                header("Location: employee/employee.php");
            }
        } else {
            // pag mali pass ito lalabas 
            $error = "Invalid username or password.";
        }
    } else {
        // pag di nag eexist yung username ito lalabas
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <?php require 'links.php'; ?>
</head>
<body>
    <div id="loginForm" class="login-form text-center rounded shadow overflow-hidden">
        <form action="" method="POST">
            <div class="form-header px-1">
                <h4 class="text-white py-3">
                    <i class="bi bi-person-circle fs-3 me-2"></i>SIGN IN FORM
                </h4>
            </div>
            <div class="form-body p-4">
                <div class="mb-3">
                    <input name="username" type="text" class="form-control shadow-none text-center" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input name="password" type="password" class="form-control shadow-none text-center" placeholder="Password" required>
                </div>
                <div id="loginbtn" class="loginbtn text-center rounded">
                    <button name="login" type="submit" class="btn text-white shadow-none" value="Login">LOGIN</button>
                </div>
            </div>
            <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
        </form>
    </div>
</body>
</html>
