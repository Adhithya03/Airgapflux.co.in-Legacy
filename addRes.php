<?php
if(isset($_POST['submit'])){
    // $pdo = new PDO('mysql:host=localhost;dbname=eeresources', 'root', '');
    $pdo = new PDO('mysql:host=localhost;dbname=u121593376_eeresources', 'u121593376_adhithya', '63799740710@Adhithya');

    $con = MySQLi_connect("localhost", "u121593376_adhithya", "63799740710@Adhithya", "u121593376_eeresources");

    $stmt = $pdo->prepare("INSERT INTO `resourcesmaster_01`(`Subject`, `Category`, `TopicName`, `Resources`, `Resource Type`, `Notes`, `ConceptualRating`,`LevelOfDifficulty`) VALUES (:subject, :category, :topicname, :resources, :restype, :notes, :rating,:difficulty)");

    $subject    = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $category   = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $name       = filter_input(INPUT_POST, 'topicname', FILTER_SANITIZE_STRING);
    $resources  = filter_input(INPUT_POST, 'resources', FILTER_SANITIZE_URL);
    $restype    = filter_input(INPUT_POST, 'restype', FILTER_SANITIZE_NUMBER_INT);
    $notes      = $_POST['notes'];
    $rating     = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_NUMBER_INT);
    $difficulty     = filter_input(INPUT_POST, 'difficulty', FILTER_SANITIZE_NUMBER_INT);
    
    $stmt->bindParam(':subject', $subject, PDO::PARAM_STR);
    $stmt->bindParam(':category', $category, PDO::PARAM_STR);
    $stmt->bindParam(':topicname', $name, PDO::PARAM_STR);
    $stmt->bindParam(':resources', $resources, PDO::PARAM_STR);
    $stmt->bindParam(':restype', $restype, PDO::PARAM_INT);
    $stmt->bindParam(':notes', $notes, PDO::PARAM_LOB);
    $stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
    $stmt->bindParam(':difficulty', $difficulty, PDO::PARAM_INT);

    $stmt->execute();
    
    // create the link with the provided structure
    $link = 'https://airgapflux.co.in/?search=' . urlencode($name) . '&subject=' . urlencode($subject) . '&restype=' . urlencode($restype) . '';
    
    session_start();
    $_SESSION['link'] = $link;  
    header("Location: inject.php?thanks");
}
