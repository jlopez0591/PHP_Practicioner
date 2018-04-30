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
<h1>Task for the Day</h1>
<ul>

    <li>
        <strong>Name: </strong><?= $task['title'] ?>
    </li>
    <li>
        <strong>Due Date: </strong><?= ucwords($task['due']) ?>
    </li>
    <li>
        <strong>Person Responsible: </strong><?= $task['assigned_to'] ?>
    </li>
    <li>
        <strong>Status: </strong>
        <?php if ($task['completed']) : ?>
            <span class="icon">'&#9989'</span>
        <?php else: ?>
            <span class="icon">Incomplete</span>
        <?php endif; ?>
    </li>

</ul>
</body>
</html>