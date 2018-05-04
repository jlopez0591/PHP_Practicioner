<?php require 'partials/head.php' ?>

<h1>Our Tasks</h1>

<h1>Submit Your Name</h1>

<form method="POST" action="/names">
    <input name="name">
    <button type="submit">Submit</button>
</form>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <li><?= $task->description ?></li>
    <?php endforeach; ?>
</ul>
<?php require 'partials/footer.php' ?>
