<?php

function _db_connect() {
    $servername = db_get_config('database.server');
    $username = db_get_config('database.username');
    $password = db_get_config('database.password');
    $dbname = db_get_config('database.dbname');

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connnection Failed" . mysqli_error());
    }
    // echo "Connection Successfully";
    return $conn;
}

function _db_get_all(string $table_name) {
    $conn = _db_connect();

    // sql statement = 'SELECT * FROM students'
    $sql = 'SELECT * FROM ' . $table_name;
    $result = mysqli_query($conn, $sql);
    // $r_val = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($r_val);
    // die();
    mysqli_close($conn);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function _db_get_byId (string $table_name, int $id) {
    $conn = _db_connect();

    // sql statement = "SELECT * FROM students WHERE id = 3"
    $sql = 'SELECT * FROM ' . $table_name . ' WHERE id = ' . $id;
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    return mysqli_fetch_assoc($result);

}

function _db_insert (string $table_name, array $data) {
    $conn = _db_connect();
    $keys = array_keys($data);
    $col_names = implode(", ", $keys);
    $array_values = array_values($data);
    $values = "";
    foreach ($array_values as $value) {
        $values .= "'" . $value . "', ";
    }
    $r_val = rtrim($values,", ");
    // var_dump($r_val);
    // die();
    // sql statement = "INSERT INTO students (name, address) values ('naung naung', 'yangon')"
    $sql = 'INSERT INTO ' . $table_name . '(' . $col_names . ') ' . 'values' . '(' . $r_val . ')';
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
}

function _db_deleteById (string $table_name, int $id) {
    $conn = _db_connect();

    $sql = 'DELETE FROM ' . $table_name . ' WHERE id = ' . $id;

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return $result;

}

function _db_update (string $table_name, int $id, array $data) {

    $conn = _db_connect();

    $update_data = "";
    foreach ($data as $key => $value) {
        $update_data .= $key;
        if (gettype($value) == "string") {
            $update_data .= " = '" . $value . "', ";
        }
        else {
            $update_data .= $value;
        }
    }
    $update_text = rtrim($update_data, ", ");
    // var_dump($update_text);
    // die();
    // sql statement = "UPDATE students SET name = '.....', address = '.....' WHERE id = "
    $sql = 'UPDATE ' . $table_name . ' SET ' . $update_text . ' WHERE id = ' . $id;
    // var_dump($sql);
    // die();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
}


?>