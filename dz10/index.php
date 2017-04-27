<?php
include_once 'User.php';
//include_once 'edit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table width="100%" border="1" style="text-align:center">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    $user = new User();
    $users = $user->getUsers();
    foreach ($users as $user):
        ?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['age'] ?></td>
            <td><?php echo $user['salary'] ?></td>
            <td><a href="edit.php?id=<?php echo $user['id'] ?>"> Edit</a></td>
            <td><a href="delete.php?id=<?php echo $user['id'] ?>"> Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
