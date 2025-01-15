<?php
// Function to create a cookie
function createUserCookie($username) {
    // Set cookie for 7 days (7 * 24 * 60 * 60 = 604800 seconds)
    setcookie("username", $username, time() + 604800, "/");
    return "Cookie created successfully!";
}

// Function to get cookie value
function getCookieValue() {
    if(isset($_COOKIE["username"])) {
        return "Welcome back, " . htmlspecialchars($_COOKIE["username"]) . "!";
    } else {
        return "No cookie found.";
    }
}

// Function to delete cookie
function deleteCookie() {
    if(isset($_COOKIE["username"])) {
        setcookie("username", "", time() - 3600, "/"); // Set expiration to past
        return "Cookie deleted successfully!";
    }
    return "No cookie to delete.";
}

// Example usage:
// Uncomment the section you want to test

// 1. Create a cookie
// echo createUserCookie("John Doe");

// 2. Retrieve cookie value
// echo getCookieValue();

// 3. Delete cookie
// echo deleteCookie();
?>

<!-- Simple HTML form to test cookie functions -->
<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <input type="text" name="username" placeholder="Enter username">
        <input type="submit" name="create" value="Create Cookie">
        <input type="submit" name="read" value="Read Cookie">
        <input type="submit" name="delete" value="Delete Cookie">
    </form>

    <?php
    if(isset($_POST['create']) && !empty($_POST['username'])) {
        echo createUserCookie($_POST['username']);
    }
    if(isset($_POST['read'])) {
        echo getCookieValue();
    }
    if(isset($_POST['delete'])) {
        echo deleteCookie();
    }
    ?>
</body>
</html>