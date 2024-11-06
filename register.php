<?php
// check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // sanitize inputs (important for security)
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // save to a text file
    $file = fopen("users.txt", "a"); 
    if ($file) {
        $data = "Username: " . $username . "\nPassword: " . $password . "\n\n";
        fwrite($file, $data);  // write user data to file
        fclose($file);  // close file
    }

    // show the data directly on the page (or save to a database)
    echo "<h3>Registration Successful!</h3>";
    echo "<p>Username: $username</p>";
    echo "<p>Password: $password</p>";
}
?>
