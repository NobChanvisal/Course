<?php
// Database connection
function getConnection() {
    $host = "localhost";
    $dbname = "pos_db";
    $username = "root";
    $password = "Visal#123";
    $port = 3308;

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("DB Connection failed: " . $e->getMessage());
    }
}

// SELECT
function dbSelect($table, $columns = "*", $criteria = "", $clause = "", $singleRow = false) {
    $pdo = getConnection();
    $sql = "SELECT $columns FROM $table";
    if (!empty($criteria)) $sql .= " WHERE $criteria";
    if (!empty($clause)) $sql .= " $clause";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $singleRow ? $stmt->fetch(PDO::FETCH_ASSOC) : $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// dbSelect("users", "*", "id = 1");
// dbSelect("users", "username, email", "id = 1", "ORDER BY username DESC");

// INSERT
function dbInsert($table, $data = array()) {
    $pdo = getConnection();
    $columns = implode(", ", array_keys($data));
    $placeholders = ":" . implode(", :", array_keys($data));

    $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
    $stmt = $pdo->prepare($sql);

    foreach ($data as $key => $value) {
        $stmt->bindValue(":$key", $value);
    }
    return $stmt->execute();
}
//dbInsert("users", ["username" => "john", "email" => "john@example.com"]);

// UPDATE
function dbUpdate($table, $data = array(), $criteria = "") {
    $pdo = getConnection();
    $setClause = "";
    foreach ($data as $key => $value) {
        $setClause .= "$key = :$key, ";
    }
    $setClause = rtrim($setClause, ", ");

    $sql = "UPDATE $table SET $setClause";
    if (!empty($criteria)) $sql .= " WHERE $criteria";

    $stmt = $pdo->prepare($sql);
    foreach ($data as $key => $value) {
        $stmt->bindValue(":$key", $value);
    }
    return $stmt->execute();
}
//dbUpdate("users", ["email" => "newjohn@example.com"], "id=1");

// DELETE
function dbDelete($table, $criteria= "") {
    $pdo = getConnection();
    
    $sql = "DELETE FROM $table";
    if (!empty($criteria)) {
        $sql .= " WHERE $criteria";
    }
    $stmt = $pdo->prepare($sql);
    return $stmt->execute();
}
//dbDelete("users", "id=1");

function dbSum($table, $columns,$criteria = ""){
    $pdo = getConnection();
    $sql = "SELECT SUM($columns) AS total FROM $table";
    if(!empty($criteria)){
        $sql .= "WHERE $criteria";
    }
    $stmt = $pdo-> prepare($sql);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['total'] ?? 0;
}