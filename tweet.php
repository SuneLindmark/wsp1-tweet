<?php

// tweet.php?id=nummer

//$tweetId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$tweetId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

include 'include/dbinfo.php';
// mysql -u SuneBune -p
// use onsdag;
try {
    $dbh = new PDO(
        'mysql:host=localhost;dbname=' . $database . '',
        $username,
        $password
    );
} catch (PDOExeption $e) {
    print "Error!:" . $e->getMessage() . "<br/>";
    die(); 
}
// select * from tweet;
$sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet
        JOIN users
        ON tweet.user_id = users.id
        WHERE tweet.id =' . $tweetId);

$sth->execute();
$row = $sth->fetch(PDO::FETCH_ASSOC);
//print_r($result);
include 'views/tweet_layout.php';
?>
