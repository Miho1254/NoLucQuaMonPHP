<?php
class Database
{
    // Lấy dữ liệu từ file config và chèn vào biến.
    private $host;
    private $username;
    private $password;
    private $database;
    private $port;

    public $connection;

    public function __construct($host, $username, $password, $database, $port)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->port = $port;
    }

    public function connect()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);

        // Kiểm tra kết nối
        if ($this->connection->connect_error) {
            die("Kết nối không thành công: " . $this->connection->connect_error);
        }
    }

    public function disconnect()
    {
        if ($this->connection) {
            $this->connection->close();
        }
    }

    public function get($table, $columns = '*', $condition = '', $params = [])
    {
        $query = "SELECT $columns FROM $table";
        if ($condition !== '') {
            $query .= " WHERE $condition";
        }

        $statement = $this->connection->prepare($query);

        // Binds parameters if any
        if (!empty($params)) {
            $types = str_repeat('s', count($params));
            $statement->bind_param($types, ...$params);
        }

        $statement->execute();
        $result = $statement->get_result();

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $statement->close();
        return $data;
    }

    public function update($table, $data, $condition, $params = [])
    {
        $setValues = [];
        foreach ($data as $key => $value) {
            $setValues[] = "$key = ?";
        }

        $query = "UPDATE $table SET " . implode(', ', $setValues) . " WHERE $condition";
        $statement = $this->connection->prepare($query);

        // Binds parameters
        $types = str_repeat('s', count($params));
        $statement->bind_param($types, ...$params);

        // Bind values from data
        foreach ($data as $key => $value) {
            $statement->bind_param('s', $data[$key]);
        }

        $statement->execute();
        $statement->close();
    }

    public function delete($table, $condition, $params = [])
    {
        $query = "DELETE FROM $table WHERE $condition";
        $statement = $this->connection->prepare($query);

        // Binds parameters
        if (!empty($params)) {
            $types = str_repeat('s', count($params));
            $statement->bind_param($types, ...$params);
        }

        $statement->execute();
        $statement->close();
    }
}
