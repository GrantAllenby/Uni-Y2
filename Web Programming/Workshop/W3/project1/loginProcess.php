<?php
ini_set("session.save_path", "/home/unn_w18013678/sessionData");
session_start();
require_once('functions.php');
echo makePageStart('Login process', 'style.css');
echo makeHeader('Login process');
echo makeNavMenu('Links', array("loginForm.php" => "login", "logout.php" => "log out"));

list($input, $errors) = validate_logon();
if ($errors) {
    echo show_errors($errors);
}
else {
    if (isset($input['username']) && isset($input['password'])) {
        set_session('logged-in', 'true');
        echo "<p>Logon successful.</p>";
        header("Location: restricted.php");
    }
}

function validate_logon()
{
    $input = array();
    $errors = array();

    $input['username'] = filter_has_var(INPUT_POST, 'username') ? $_POST['username'] : null;
    $input['username'] = trim($input['username']);

    $input['password'] = filter_has_var(INPUT_POST, 'password') ? $_POST['password'] : null;
    $input['password'] = trim($input['password']);


    if (empty($input['username'] || empty($input['password']))) {
        echo "<p>You need to provide a username and a password. Please try
          <a href='loginForm.php'>again</a>.</p>\n";
    } else {
        try {
            unset($_SESSION['username']);
            unset($_SESSION['logged-in']);
            require_once('functions.php');
            $dbConn = getConnection();

            $querySQL = "SELECT passwordHash FROM users WHERE username = :username";
            $stmt = $dbConn->prepare($querySQL);
            $stmt->execute(array(':username' => $input['username']));
            $user = $stmt->fetchObject();

            if ($user) {
                $passwordHash = $user->passwordHash;
                if (password_verify($input['password'], $passwordHash)) {
                    $_SESSION['username'] = $input['username'];
                } else {
                    $errors[] = "Username or password incorrect.";
                }
            } else {
                $errors[] = "Username or password incorrect.";
            }
        } catch (Exception $e) {
            $errors[] = "Record not found: " . $e->getMessage();
        }
    }
    return array($input, $errors);
}

function show_errors($errors) {
    $errString = "You have the following errors:<br>";
    foreach ($errors as $output) {
        $errString .= $output . "<br>";
    }
    return $errString;
}

?>
</body>
</html>