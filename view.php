<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Gestione Libreria</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h2>Libri Disponibili</h2>
                <ul class="list-group">
                    <?php foreach ($books as $book) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong><?php echo $book['titolo']; ?></strong> - <?php echo $book['autore']; ?> (<?php echo $book['anno_pubblicazione']; ?>) - <?php echo $book['genere']; ?>
                            </div>
                            <div class="btn-group" role="group" aria-label="Azioni">
                                <form method="post" action="index.php?action=edit">
                                    <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
                                    <button type="submit" class="btn btn-sm btn-primary">Modifica</button>
                                </form>
                                <form method="post" action="index.php?action=delete" onsubmit="return confirm('Sei sicuro di voler eliminare questo libro?');">
                                    <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
                                    <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                                </form>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Aggiungi Nuovo Libro</h2>
                <form method="post" action="index.php?action=add">
                    <div class="form-group">
                        <label for="title">Titolo:</label>
                        <input type="text" id="title" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="author">Autore:</label>
                        <input type="text" id="author" name="author" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="year">Anno di Pubblicazione:</label>
                        <input type="number" id="year" name="year" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="genre">Genere:</label>
                        <input type="text" id="genre" name="genre" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Aggiungi</button>
                </form>
            </div>
            <div class="col-md-6">
                <form method="post" action="index.php?action=edit">
                    <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
                    <div class="form-group">
                        <label for="title">Titolo:</label>
                        <input type="text" id="title" name="title" class="form-control" value="<?php echo $book['titolo']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="author">Autore:</label>
                        <input type="text" id="author" name="author" class="form-control" value="<?php echo $book['autore']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="year">Anno di Pubblicazione:</label>
                        <input type="number" id="year" name="year" class="form-control" value="<?php echo $book['anno_pubblicazione']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="genre">Genere:</label>
                        <input type="text" id="genre" name="genre" class="form-control" value="<?php echo $book['genere']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-success">Salva Modifiche</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>