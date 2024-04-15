<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestione_libreria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

function getBooks()
{
    global $conn;
    $sql = "SELECT * FROM libri";
    $result = $conn->query($sql);
    $books = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
    }
    return $books;
}

function addBook($title, $author, $year, $genre)
{
    global $conn;
    $sql = "INSERT INTO libri (titolo, autore, anno_pubblicazione, genere) VALUES ('$title', '$author', '$year', '$genre')";
    $conn->query($sql);
}

function updateBook($id, $title, $author, $year, $genre)
{
    global $conn;
    $sql = "UPDATE libri SET titolo='$title', autore='$author', anno_pubblicazione='$year', genere='$genre' WHERE id='$id'";
    $conn->query($sql);
}

function deleteBook($id)
{
    global $conn;
    $sql = "DELETE FROM libri WHERE id='$id'";
    $conn->query($sql);
}

function getBookById($id)
{
    global $conn;
    $id = mysqli_real_escape_string($conn, $id); // Per evitare SQL injection
    $sql = "SELECT * FROM books WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null; // Ritorna null se il libro non è stato trovato
    }
}
