

<?php

function getAll($table, $join = null, $join_condition = null, $where)
{

    include 'db.php';

    if ($where) {
        $where_sql = ' WHERE ' . $where;
    } else {
        $where_sql = '';
    }

    if ($join) {
        $sql = "SELECT * FROM " . $table . " INNER JOIN " . $join . " ON " . $join_condition . $where_sql;
    } else {
        $sql = "SELECT * FROM " . $table . $where_sql;
    }

    $statement = $conn->prepare($sql);

    $statement->execute();

    if ($statement->errorCode() == 0) {
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        return $statement->fetchAll();
    } else {
        $errors = $statement->errorInfo();
        echo $errors[2];
    }

}

function getOne($table, $id)
{
    include 'db.php';

    $sql = "SELECT * FROM " . $table . " WHERE id =" . $id;
    $statement = $conn->prepare($sql);

    $statement->execute();

    if ($statement->errorCode() == 0) {
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        return $statement->fetch();
    } else {
        $errors = $statement->errorInfo();
        echo $errors[2];
    }

}
