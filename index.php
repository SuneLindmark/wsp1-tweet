<?php 
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
$sth = $dbh->prepare('SELECT * FROM tweet
        JOIN users
        ON tweet.user_id = users.id');
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>" . print_r($result,1) . "</pre>";
include 'views/index_layout.php';
?>        