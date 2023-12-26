<?php
require_once"function/DBConnectionHandler.php";

$serverName = "140.127.74.201:9001";
$userName = "root";
$password = "root";
$db = 'bigdata';

DBConnectionHandler::setConnection(
        $serverName,
        $userName,
        $password,
        $db
);
$connection = DBConnectionHandler::getConnection();

// 1-1

/*$sql = "SELECT COUNT(DISTINCT dp001_review_sn) AS result FROM edu_bigdata_imp1 WHERE PseudoID=:ID";
$stmt = $connection->prepare($sql);
$stmt->bindValue(':ID', 39);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);*/

//1-2

/*$sql = "SELECT COUNT(DISTINCT dp001_review_sn) AS result FROM edu_bigdata_imp1 WHERE PseudoID=:ID AND dp001_question_sn != :VAL;";
$stmt = $connection->prepare($sql);
$stmt->bindValue(':ID', 39);
$stmt->bindValue(':VAL','NA');
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);*/

//2-1

/*$sql = "SELECT DISTINCT dp001_review_sn, dp001_indicator FROM edu_bigdata_imp1 WHERE PseudoID = :ID";
$stmt = $connection->prepare($sql);
$stmt->bindValue(':ID', 281);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);*/

// 2-2
/*$sql = "SELECT COUNT(*) AS correct_count FROM edu_bigdata_imp1 WHERE PseudoID = :ID AND dp001_prac_score_rate = 100";
$stmt = $connection->prepare($sql);
$stmt->bindValue(':ID', 281);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($result);*/

// 3-1
/*$sql = "SELECT COUNT(*) AS pause_count FROM edu_bigdata_imp1 WHERE PseudoID = :ID AND dp001_record_plus_view_action = '暫停'";
$stmt = $connection->prepare($sql);
$stmt->bindValue(':ID', 71);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($result);*/

// 3-2
/*$sql = "SELECT DISTINCT DATE(dp001_review_start_time) AS review_date FROM edu_bigdata_imp1 WHERE PseudoID = :ID";
$stmt = $connection->prepare($sql);
$stmt->bindValue(':ID', 71);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);*/

//4-1

/*$sql = "SELECT dp001_review_sn, COUNT(dp001_review_sn) AS view_count FROM edu_bigdata_imp1 GROUP BY dp001_review_sn ORDER BY view_count DESC LIMIT 1";
$stmt = $connection->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($result['dp001_review_sn']);
print_r($result['view_count']);*/

// 4-2
/*$sql = "SELECT COUNT(*) AS count_dp002 FROM edu_bigdata_imp2 WHERE dp002_extensions_alignment = '十二年國民基本教育類'";
$stmt = $connection->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($result['count_dp002']);*/

// 4-3
/*$sql = "SELECT dp002_verb_display_zh_TW, COUNT(dp002_verb_display_zh_TW) AS count_verb FROM edu_bigdata_imp2 GROUP BY dp002_verb_display_zh_TW ORDER BY count_verb DESC LIMIT 3";
$stmt = $connection->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    print_r($row['dp002_verb_display_zh_TW']);
}*/

// 4-4
/*$sql = "SELECT COUNT(*) AS count_safety FROM edu_bigdata_imp2 WHERE dp002_extensions_alignment = '校園職業安全'";
$stmt = $connection->prepare($sql);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($result['count_safety']);*/

?>