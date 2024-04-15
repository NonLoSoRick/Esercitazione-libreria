<!DOCTYPE html>
<html>

<head>
    <title>Aggiungi/Modifica un libro</title>
</head>

<body>
    <h1>Aggiungi/Modifica un libro</h1>
    <form method="post" action="index.php?action=<?php echo $form_action; ?>">
        <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
        <label for="title">Titolo:</label><br>
        <input type="text" id="title" name="title" value="<?php echo $book['title']; ?>"><br>
        <label for="author">Autore:</label><br>
        <input type="text" id="author" name="author" value="<?php echo $book['author']; ?>"><br>
        <label for="year">Anno di pubblicazione:</label><br>
        <input type="text" id="year" name="year" value="<?php echo $book['year']; ?>"><br>
        <label for="genre">Genere:</label><br>
        <input type="text" id="genre" name="genre" value="<?php echo $book['genre']; ?>"><br>
        <input type="submit" value="<?php echo $submit_button_label; ?>">
    </form>
</body>

</html>