<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
        </tr>
        <?php foreach ($data as $user): ?>
            <tr class="table">
                <th><?= $user['name'] ?></th>
                <th><?= $user['Age'] ?></th>
                <th><?= $user['email'] ?></th>
            </tr>
        <?php endforeach; ?>
    </table>
</comment>
</body>
</html>