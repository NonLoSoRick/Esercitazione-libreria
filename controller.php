<?php
require_once 'model.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    case 'add':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $year = $_POST['year'];
            $genre = $_POST['genre'];
            addBook($title, $author, $year, $genre);
            header("Location: index.php");
        }
        break;
    case 'edit':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $author = $_POST['author'];
            $year = $_POST['year'];
            $genre = $_POST['genre'];
            updateBook($id, $title, $author, $year, $genre);
            header("Location: index.php");
        }
        break;
    case 'delete':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            deleteBook($id);
            header("Location: index.php");
        }
        break;
    default:
        $books = getBooks();
        include 'view.php';
}
