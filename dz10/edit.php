<?php
include_once 'User.php';
if (!empty($_GET)) {
    $userId = isset($_GET['id']) ? (int) strip_tags(trim($_GET['id'])) : 0;
    
    $userObj = new User();
    $user = $userObj->getUserById($userId);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form>
    Username: <input type="text" name="username" value="<?php echo $user['name'] ?>"><br/>
    Age: <input type="text" name="age" value="<?php echo $user['age'] ?>"><br/>
    Salary: <input type="text" name="salary" value="<?php echo $user['salary'] ?>"><br/>

    <input type="submit" value="Update">
</form>
</body>
</html>

