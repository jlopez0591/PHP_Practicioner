<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach($person as $feature => $value) : ?>
            <li><strong><?= $feature; ?></strong><?= $value; ?></li>
    <?php endforeach; ?>
    </ul>
</body>
</body>
</html>