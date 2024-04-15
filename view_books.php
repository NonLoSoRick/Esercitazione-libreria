<!DOCTYPE html>
<html>

<head>
    <title>Lista dei libri</title>
</head>

<body>
    <h1>Lista dei libri</h1>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?php echo $book['titolo']; ?> - <?php echo $book['autore']; ?> (<?php echo $book['anno_pubblicazione']; ?>)</li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?action=add">Aggiungi un libro</a>
</body>

</html>