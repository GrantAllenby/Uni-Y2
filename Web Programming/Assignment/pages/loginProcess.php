<?php
//Creates the content for the page including doctype.
require_once('functions.php');
echo makePageStart('Admin', 'style.css', "gridContainer");
echo makeHeader('NorthEvents - Login');
echo makeNavMenu("Links", array("index.php" => "Home", "bookEventsForm.php" => "Book Events", "admin.php" => "Admin", "credits.php" => "Credits"));
echo makeLogin('loginProcess.php', 'logout.php');

//makes a list of inputs and errors and defines them as validate logon.
list($input, $errors) = validate_logon();

//If errors are present, will echo errors from the errors array.
if ($errors) {
    echo startMain();
    echo show_errors($errors);
    echo endMain();
} else {
    //if username and password is set and correct, will set the session to logged in and redirect to home.
    if (isset($input['username']) && isset($input['password'])) {
        $return = $_SERVER['HTTP_REFERER'];
        set_session('logged-in', 'true');
        echo "<p>Logon successful.</p>";
        //This header will redirect the user back to the page they were on when they log in.
        header("location: $return");
    }
}

function validate_logon()
{
    //arrays for storing user details.
    $input = array();
    $errors = array();
    //variables for username and password.
    $input['username'] = filter_has_var(INPUT_POST, 'username') ? $_POST['username'] : null;
    $input['username'] = trim($input['username']);

    $input['password'] = filter_has_var(INPUT_POST, 'password') ? $_POST['password'] : null;
    $input['password'] = trim($input['password']);

//checks if username and password fields are empty. if so prints a message.
    if (empty($input['username'] || empty($input['password']))) {
        echo startMain();
        echo "<p class='error'>You need to provide a username and a password. Please try
          <a href='index.php'>again</a>.</p>\n";
        echo endMain();
    } else {
        try {
            require_once('functions.php');
            $dbConn = getConnection();
            //selects the user details from the database.
            $querySQL = "SELECT passwordHash FROM NE_users WHERE username = :username";
            $stmt = $dbConn->prepare($querySQL);
            $stmt->execute(array(':username' => $input['username']));
            $user = $stmt->fetchObject();
            //if username is correct, checks if the password is verified alongside the hash. If incorrect. Stores
            //an error into the array to be echo by the list above.
            if ($user) {
                $passwordHash = $user->passwordHash;
                if (password_verify($input['password'], $passwordHash)) {
                    $_SESSION['username'] = $input['username'];
                } else {
                    $errors[] = "<p class='error'>Username or password incorrect.</p>";
                }
            } else {
                $errors[] = "<p class='error'>Username or password incorrect.</p>";
            }
        } catch (Exception $e) {
            $errors[] = "<p class='error'>Record not found: " . $e->getMessage() . "</p>";
        }
    }
    return array($input, $errors);
}

//converts the error array into a string for echo.
function show_errors($errors)
{
    $errString = "<h3>You have the following errors:</h3><br>";
    foreach ($errors as $output) {
        $errString .= $output . "<br>";
    }
    return $errString;
}

echo makeFooterStart();
echo makeFooterTag("created by Grant A w18013678");
echo makeFooterEnd();
echo makePageEnd();
?>