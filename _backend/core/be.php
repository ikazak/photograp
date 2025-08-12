<?php
$transaction_active = false;
if (! function_exists('json_response')) {
    function json_response(array $data, int $status = 200)
    {
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data);
        exit;
    }
}

if (! function_exists('success_response')) {
    function success_response(array $data, int $status = 200)
    {
        $data['be_response'] = "success";
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data);
        exit;
    }
}

if (! function_exists('error_response')) {
    function error_response(array $data, int $status = 200)
    {
        $data['be_response'] = "error";
        header('Content-Type: application/json');
        http_response_code($status);
        echo json_encode($data);
        exit;
    }
}

if (! function_exists("json_reponse_data")) {
    function json_reponse_data(int $code, string $status, string $message, array $data)
    {
        $result = ["code" => $code, "status" => $status, "message" => $message, "data" => $data];
        header('Content-Type: application/json');
        echo json_encode($result);
        exit;
    }
}

if (! function_exists('json_error')) {
    function json_error(array $details = [], string $message = null, int $status = 200)
    {
        json_response([
            "code" => getenv("error_code"),
            "status" => "ERROR",
            "message" => $message ?? "ERROR",
            "details" => $details
        ], $status);
        exit;
    }
}

if (! function_exists('json_success')) {
    function json_success(array $details = [], string $message = null, int $status = 200)
    {
        json_response([
            "code" => getenv("success_code"),
            "status" => "SUCCESS",
            "message" => $message ?? "SUCCESS",
            "details" => $details,
        ], $status);
        exit;
    }
}

if (! function_exists('json_notfound')) {
    function json_notfound(array $details = [], string $message = null, int $status = 200)
    {
        json_response([
            "code" => getenv("notfound_code"),
            "status" => "NOT_FOUND",
            "message" => $message ?? "404 not found",
            "details" => $details,
        ], $status);
        exit;
    }
}

if (! function_exists('json_failed')) {
    function json_failed(array $details = [], string $message = null, int $status = 200)
    {
        json_response([
            "code" => getenv("failed_code"),
            "status" => "FAILED",
            "message" => $message ?? "Request failed",
            "details" => $details,
        ], $status);
        exit;
    }
}

if (! function_exists('json_badrequest')) {
    function json_badrequest(array $details = [], string $message = null, int $status = 200)
    {
        json_response([
            "code" => getenv("badrequest_code"),
            "status" => "BAD_REQUEST",
            "message" => $message ?? "Bad Request",
            "details" => $details,
        ], $status);
        exit;
    }
}

if (! function_exists('json_forbidden')) {
    function json_forbidden(array $details = [], string $message = null, int $status = 200)
    {
        json_response([
            "code" => getenv("forbidden_code"),
            "status" => "ACCESS_FORBIDDEN",
            "message" => $message ?? "Request Forbidden",
            "details" => $details,
        ], $status);
        exit;
    }
}

if (! function_exists('json_unauthorized')) {
    function json_unauthorized(array $details = [], string $message = null, int $status = 200)
    {
        json_response([
            "code" => getenv("unauthorized_code"),
            "status" => "UNAUTHORIZED",
            "message" => $message ?? "Unauthorized Request",
            "details" => $details,
        ], $status);
        exit;
    }
}

if (! function_exists("post")) {
    /** (Any) returns the value of the post */
    function post(string $inputname)
    {
        $post = [];
        if (isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $post = $data;
            } else {
                $post = [];
            }
        } else {
            $post = $_POST;
        }
        return isset($post[$inputname]) ? $post[$inputname] : null;
    }
}

if (! function_exists("postdata")) {
    /** (Any) returns the value of the post */
    function postdata()
    {
        $post = [];
        if (isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $post = $data;
            } else {
                $post = [];
            }
        } else {
            $post = $_POST;
        }
        return $post;
    }
}

if (! function_exists("input")) {
    /** (Any) returns the value of the get */
    function input(string $inputname)
    {
        return post($inputname);
    }
}

if (! function_exists("get")) {
    /** (Any) returns the value of the get */
    function get(string $inputname)
    {
        return isset($_GET[$inputname]) ? $_GET[$inputname] : null;
    }
}
if (! function_exists("getall")) {
    /** (Any) returns the value of the get */
    function getall()
    {
        return $_GET;
    }
}
if (! function_exists("postall")) {
    /** (Any) returns the value of the get */
    function postall()
    {
        return $_POST;
    }
}
if (! function_exists("getallfiles")) {
    /** (Any) returns the value of the get */
    function getallfiles()
    {
        return $_FILES;
    }
}
if (! function_exists("postfile")) {
    /** (Any) returns the value of the get */
    function postfile(string $inputname)
    {
        return isset($_FILES[$inputname]) ? $_FILES[$inputname] : null;
    }
}

if (! function_exists("has_internet_connection")) {
    function has_internet_connection($url = "http://www.google.com")
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        if ($data) {
            curl_close($ch);
            return true;
        } else {
            curl_close($ch);
            return false;
        }
    }
}


if (! function_exists("pdo")) {
    /** (Any) returns the value of the get */
    function pdo($db = null, $no_database = false)
    {
        static $pdo = null;
        try {
            $host = getenv('dbhost');
            $user =  getenv('dbuser');
            $pass = getenv('dbpass');
            $dbname = $db == null ? getenv('database') : $db;
            if ($dbname == "" || $dbname == null) {
                add_sql_log("No database found. please check .env file", "error");
                error_response(["code" => "404", "status" => "notfound", "message" => "No database found. please check .env file"]);
            }
            if ($pdo == null) {
                $dbdriver = getenv("dbdriver") == null ? "mysql" : getenv("dbdriver");
                $ddb = "dbname=$dbname";
                if ($no_database) {
                    $ddb = "";
                }
                $pdo = new PDO("$dbdriver:host=$host;$ddb", "$user", "$pass", [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $pdo;
        } catch (PDOException $e) {
            add_sql_log($e->getMessage(), "error");
            error_response(["code" => getenv("500"), "status" => "PDO exception error", "message" => $e->getMessage()]);
        }
    }
}

if (! function_exists("add_sql_log")) {
    /** (Any) returns the value of the get */
    function add_sql_log(string $string, $type = "info", $intro = "")
    {
        $arr = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
        shuffle($arr);
        $mx = null;
        if (isset($_SESSION['set_sql_batch'])) {
            $mx = $_SESSION['set_sql_batch'];
        } else {
            $mx = $arr[0] . $arr[1] . $arr[2] . $arr[3] . $arr[4];
        }


        if ($type == "info") {
            if (getenv("sql_logs") == "true") {
                $logfile = "_backend/logs/sql_logs/" . date("Y-m-d") . "sql.log"; // Path to your log file
                $timestamp = date('Y-m-d H:i:s');
                $logEntry = "INFO: ($mx) [$timestamp] $string\n";
                file_put_contents($logfile, $logEntry, FILE_APPEND | LOCK_EX);
            }
        }
        if ($type == "error") {
            if (getenv("sql_errors") == "true") {
                $logfile = "_backend/logs/sql_errors/" . date("Y-m-d") . "sql.log"; // Path to your log file
                $timestamp = date('Y-m-d H:i:s');
                $logEntry = "ERROR: ($mx) [$timestamp] $string\n";
                file_put_contents($logfile, $logEntry, FILE_APPEND | LOCK_EX);
            }
        }
        if ($type == "query") {
            if (getenv("query_logs") == "true") {
                $logfile = "_backend/logs/query_logs/" . date("Y-m-d") . "sql.log"; // Path to your log file
                $timestamp = date('Y-m-d H:i:s');
                $logEntry = "$intro: ($mx) [$timestamp] $string\n";
                file_put_contents($logfile, $logEntry, FILE_APPEND | LOCK_EX);
            }
        }

        if ($type == "be_errors") {
            if (getenv("be_errors") == "true") {
                $logfile = "_backend/logs/be_errors/" . date("Y-m-d") . "error.log"; // Path to your log file
                $timestamp = date('Y-m-d H:i:s');
                $logEntry = "$intro: ($mx) [$timestamp] $string\n";
                file_put_contents($logfile, $logEntry, FILE_APPEND | LOCK_EX);
            }
        }
    }
}

if (! function_exists("my_log")) {
    function my_log(string $text, string $intro = "")
    {
        $logfile = "_backend/logs/my_logs/" . date("Y-m-d") . "sql.log"; // Path to your log file
        $timestamp = date('Y-m-d H:i:s');
        $intro = $intro == "" ? "" : $intro . " ";
        $logEntry =  $intro . "[$timestamp] $text\n";
        file_put_contents($logfile, $logEntry, FILE_APPEND | LOCK_EX);
    }
}

if (!function_exists('execute_select')) {
    /**
     * Executes a SELECT query and returns a structured response.
     *Tyrone L Malocon
     * @param string $query   SQL with positional (?) or named (:name) placeholders
     * @param array<int|string, mixed> $params  Values to bind
     * @return array  Structured result with code, status, message, data, rowcount, lastquery
     */
    function execute_select(string $query, array $params = []): array
    {
        $stmt = null;
        try {
            $pdo  = pdo();
            $stmt = $pdo->prepare($query);

            foreach ($params as $key => $value) {
                if (is_array($value)) {
                    return [
                        "code" => getenv('error_code'),
                        "status" => "error",
                        "message" => "Parameter cannot be an array: " . json_encode($value, JSON_UNESCAPED_UNICODE)
                    ];
                }

                $placeholder = is_int($key) ? $key + 1 : $key;
                $stmt->bindValue($placeholder, $value);
            }

            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
            $lastquery = $query;
            $stmt->closeCursor();
            $lastSQL = interpolate_query($lastquery, $params, "success");
            $firstrow = (!empty($results) ? true : false) == true ? $results[0] : [];

            $toret = [
                "code" => getenv('success_code'),
                "status" => "success",
                "message" => "Query executed successfully",
                "data" => $results,
                "isempty" => empty($results) ? true : false,
                "hasresults" => !empty($results) ? true : false,
                "rowcount" => $count,
                "lastquery" => $lastSQL,
                "first_row" => $firstrow,
                "firstrow" => $firstrow
            ];
            add_sql_log("(SUCCESS) " . json_encode($toret), "info");

            return $toret;
        } catch (PDOException $e) {
            $lastSQL = interpolate_query($query, $params, "error");
            $err =  [
                "code" => getenv('error_code'),
                "status" => "error",
                "lastquery" => $lastSQL,
                "message" => "Database error: " . $e->getMessage()
            ];
            add_sql_log("(ERROR) " . json_encode($err), "info");
            add_sql_log("(ERROR) " . $e->getMessage(), "error");
            return $err;
        }
    }
}

if (! function_exists("execute_get")) {
    function execute_get(string $table, array $where = [], $columns = ['*']): array
    {
        $stmt = null;

        try {
            $pdo = pdo(); // your own PDO instance

            // Handle column selection
            if (is_array($columns)) {
                $columnList = implode(', ', $columns);
            } else {
                $columnList = $columns; // allow raw string like '*'
            }

            $query = "SELECT {$columnList} FROM {$table}";

            // Build WHERE clause
            $params = [];
            if (!empty($where)) {
                $whereClause = [];
                foreach ($where as $key => $value) {
                    $paramKey = ":" . $key;
                    $whereClause[] = "{$key} = {$paramKey}";
                    $params[$paramKey] = $value;
                }
                $query .= " WHERE " . implode(" AND ", $whereClause);
            }

            $stmt = $pdo->prepare($query);

            foreach ($params as $key => $value) {
                if (is_array($value)) {
                    $msg = "Parameter cannot be an array: " . json_encode($value, JSON_UNESCAPED_UNICODE);
                    add_sql_log("(ERROR) " . $msg, "error");
                    return [
                        "code" => getenv('error_code'),
                        "status" => "error",
                        "message" => $msg
                    ];
                }
                $stmt->bindValue($key, $value);
            }

            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
            $stmt->closeCursor();

            $lastSQL = interpolate_query($query, $params, "success");
            $firstrow = !empty($results) ? $results[0] : [];

            $toret = [
                "code" => getenv('success_code'),
                "status" => "success",
                "message" => "Query executed successfully",
                "data" => $results,
                "isempty" => empty($results),
                "hasresults" => !empty($results),
                "rowcount" => $count,
                "lastquery" => $lastSQL,
                "first_row" => $firstrow,
                "firstrow" => $firstrow
            ];

            add_sql_log("(SUCCESS) " . json_encode($toret), "info");

            return $toret;
        } catch (PDOException $e) {
            $lastSQL = interpolate_query($query ?? 'INVALID SQL', $params ?? [], "error");
            $err = [
                "code" => getenv('error_code'),
                "status" => "error",
                "lastquery" => $lastSQL,
                "message" => "Database error: " . $e->getMessage()
            ];

            add_sql_log("(ERROR) " . json_encode($err), "info");
            add_sql_log("(ERROR) " . $e->getMessage(), "error");

            return $err;
        }
    }
}

if (! function_exists("execute_insert")) {

    function execute_insert(string $table, array $data): array
    {
        $columns = implode(", ", array_keys($data));
        $placeholders = implode(", ", array_fill(0, count($data), "?"));
        $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $stmt = null;
        try {
            $pdo  = pdo();
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array_values($data));
            $lastInsertId = $pdo->lastInsertId();
            $lastSQL = interpolate_query($sql, $data, "success");

            $rett = [
                "code" => getenv('success_code'),
                "status" => "success",
                "message" => "Data inserted successfully",
                "lastquery" => $lastSQL,
                "id" => $lastInsertId,
                "rowcount" => 1,
                "data" => $data
            ];
            add_sql_log("(SUCCESS) " . json_encode($rett), "info");

            return $rett;
        } catch (PDOException $e) {
            $lastSql = interpolate_query($sql, $data, "error");
            $err = [
                "code" => getenv('error_code'),
                "status" => "error",
                "lastquery" => $lastSql,
                "message" => "Database error: " . $e->getMessage()
            ];
            add_sql_log("(ERROR) " . json_encode($err), "info");
            add_sql_log("(ERROR) " . $e->getMessage(), "error");
            return $err;
        }
    }
}

if (! function_exists("execute_update")) {
    function execute_update(string $table, array $data, array $where): array
    {
        $setClause = implode(", ", array_map(fn($col) => "$col = ?", array_keys($data)));
        $whereClause = implode(" AND ", array_map(fn($col) => "$col = ?", array_keys($where)));
        $sql = "UPDATE $table SET $setClause WHERE $whereClause";
        $params = array_merge(array_values($data), array_values($where));

        try {
            $pdo  = pdo();
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);

            $finalQuery = interpolate_query($sql, $params, "success");

            $rett = [
                "code" => getenv('success_code'),
                "status" => "success",
                "message" => "Data updated successfully",
                "lastquery" => $finalQuery,
                "rowcount" => $stmt->rowCount(),
                "data" => $data
            ];

            add_sql_log("(SUCCESS) " . json_encode($rett), "info");
            return $rett;
        } catch (PDOException $e) {
            $finalQuery = interpolate_query($sql, $params, "error");
            $err = [
                "code" => getenv('error_code'),
                "status" => "error",
                "lastquery" => $finalQuery,
                "message" => "Database error: " . $e->getMessage()
            ];
            add_sql_log("(ERROR) " . json_encode($err), "info");
            add_sql_log("(ERROR) " . $e->getMessage(), "error");

            return $err;
        }
    }
}

if (! function_exists("execute_delete")) {
    function execute_delete(string $table, array $where): array
    {
        $stmt = "";
        $whereClause = implode(" AND ", array_map(fn($col) => "$col = ?", array_keys($where)));
        $sql = "DELETE FROM $table WHERE $whereClause";

        try {
            $pdo  = pdo();
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array_values($where));
            $lastSQL = interpolate_query($sql, $where, "success");

            add_sql_log("(SUCCESS) " . json_encode([
                "code" => getenv('success_code'),
                "status" => "success",
                "message" => "Data deleted successfully",
                "lastquery" => $lastSQL,
                "rowcount" => $stmt->rowCount(),
                "data" => $where
            ]), "info");

            return [
                "code" => getenv('success_code'),
                "status" => "success",
                "message" => "Data deleted successfully",
                "lastquery" => $lastSQL,
                "rowcount" => $stmt->rowCount(),
                "data" => $where
            ];
        } catch (PDOException $e) {
            $finalQuery = interpolate_query($sql, $where, "error");
            $err = [
                "code" => getenv('error_code'),
                "status" => "error",
                "lastquery" => $finalQuery,
                "message" => "Database error: " . $e->getMessage()
            ];
            add_sql_log("(ERROR) " . json_encode($err), "info");
            add_sql_log("(ERROR) " . $e->getMessage(), "error");
            return $err;
        }
    }
}


if (!function_exists('execute_query')) {
    /**
     * Execute any SQL statement with bound parameters.
     * Tyrone L Malocon
     * @param string                   $sql     SQL with positional (?) or named (:name) placeholders
     * @param array<int|string,mixed>  $params  Values to bind
     *
     * @return mixed  SELECT => array rows,
     *                INSERT => ['lastInsertId' => int|string, 'rowCount' => int],
     *                UPDATE/DELETE => int rowCount,
     *                other => bool|int (driver‑dependent)
     *
     * @throws PDOException|InvalidArgumentException
     */
    if (!function_exists('execute_query')) {
        /**
         * Execute any SQL command with parameters and structured response.
         */
        function execute_query(string $sql, array $params = [])
        {
            $stmt = null;
            try {
                $pdo  = pdo(); // Your own PDO helper
                $stmt = $pdo->prepare($sql);

                foreach ($params as $key => $value) {
                    if (is_array($value)) {
                        return [
                            "code" => getenv('error_code'),
                            "status" => "error",
                            "message" => "Parameter cannot be an array: " . json_encode($value, JSON_UNESCAPED_UNICODE)
                        ];
                    }
                    $placeholder = is_int($key) ? $key + 1 : $key;
                    $stmt->bindValue($placeholder, $value);
                }

                $stmt->execute();

                $verb = strtoupper(strtok(ltrim($sql), " \n\t("));
                $rett = [];
                switch ($verb) {
                    case 'SELECT':
                    case 'SHOW':
                    case 'DESCRIBE':
                    case 'PRAGMA':
                        $rett =  [
                            "code" => getenv('success_code'),
                            "status" => "success",
                            "message" => "Query executed successfully",
                            "rowcount" => $stmt->rowCount(),
                            "lastquery" => interpolate_query($sql, $params, "success"),
                            "hasresults" => $stmt->rowCount() > 0 ? true : false,
                            "isempty" => $stmt->rowCount() == 0 ? true : false,
                            "data" => $stmt->fetchAll(PDO::FETCH_ASSOC)
                        ];
                        break;

                    case 'INSERT':
                        $rett = [
                            'code' => getenv('success_code'),
                            'status' => 'success',
                            'message' => 'Data inserted successfully',
                            "lastquery" => interpolate_query($sql, $params, "success"),
                            'id' => $pdo->lastInsertId(),
                            'rowcount' => $stmt->rowCount(),
                            'data' => $params
                        ];
                        break;

                    case 'UPDATE':
                        $rett = [
                            'code' => getenv('success_code'),
                            'status' => 'success',
                            'message' => 'Data updated successfully',
                            "lastquery" => interpolate_query($sql, $params, "success"),
                            'rowcount' => $stmt->rowCount(),
                            'msg' => $stmt->rowCount() == 0 ? "Success but no data affected" : "Data Updated Successfully",
                        ];
                        break;

                    case 'DELETE':
                        $rett = [
                            'code' => getenv('success_code'),
                            'status' => 'success',
                            'message' => 'Data deleted successfully',
                            'lastquery' => interpolate_query($sql, $params, "success"),
                            'rowcount' => $stmt->rowCount(),
                            'msg' => $stmt->rowCount() == 0 ? "Success but no data affected" : "Data Deleted Successfully",
                        ];
                        break;

                    default: // CREATE, DROP, etc.
                        $rett = [
                            'code' => getenv('success_code'),
                            'status' => 'success',
                            'message' => "$verb command executed",
                            "lastquery" => interpolate_query($sql, $params, "success"),
                            'rowcount' => $stmt->rowCount()
                        ];
                }

                $stmt->closeCursor();
                $stmt = null;
                $toret = json_encode($rett);
                add_sql_log("(SUCCESS) " . $toret, "info");
                return $rett;
            } catch (PDOException $e) {
                $lastSQL = interpolate_query($sql, $params, "error");
                $rett = [
                    "code" => getenv('error_code'),
                    "status" => "error",
                    "lastquery" => $lastSQL,
                    "message" => "Database error: " . $e->getMessage(),

                ];
                add_sql_log("(ERROR) " . json_encode($rett), "info");
                add_sql_log("(ERROR) " . $e->getMessage(), "error");
                return $rett;
            }
        }
    }
}

function db_start()
{ //Previous name: start_transaction
    global $transaction_active;
    $pdo = pdo();
    if (!$pdo->inTransaction()) {
        $pdo->beginTransaction();
        $transaction_active = true;
    }
}


function db_commit()
{ // Previous name: commit_transaction
    global $transaction_active;
    if ($transaction_active) {
        $pdo = pdo();
        $pdo->commit();
        $transaction_active = false;
    }
}

function db_rollback()
{ // rollback_transaction
    global $transaction_active;
    if ($transaction_active) {
        $pdo = pdo();
        $pdo->rollBack();
        $transaction_active = false;
    }
}

if (! function_exists("hash_password")) {
    function hash_password(string $password): string
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }
}

if (! function_exists("verify_password")) {
    function verify_password(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }
}
if (! function_exists("generate_token")) {
    function generate_token(int $length = 32): string
    {
        return bin2hex(random_bytes($length / 2));
    }
}
if (! function_exists("generate_random_string")) {
    function generate_random_string(int $length = 32): string
    {
        return bin2hex(random_bytes($length / 2));
    }
}
if (! function_exists("generate_random_number")) {
    function generate_random_number(int $length = 32): string
    {
        return bin2hex(random_bytes($length / 2));
    }
}
if (! function_exists("generate_random_string")) {
    function generate_random_string(int $length = 32): string
    {
        return bin2hex(random_bytes($length / 2));
    }
}

if (! function_exists("use_model")) {
    function use_model(string $model)
    {
        $modelFile = substr($model, -4) === ".php" ? $model : $model . ".php";
        include "_backend/model/" . $modelFile;

        $className = basename($model, ".php");
        return new $className();
    }
}


if (! function_exists("use_base")) {
    function use_base(string $base)
    {
        $model = $base;
        $modelFile = substr($model, -4) == ".php" ? $model : $model . ".php";
        include "_backend/base/" . $modelFile;

        $className = basename($model, ".php");
        return new $className();
    }
}

if (! function_exists("use_middleware")) {
    function use_middleware(string $model)
    {
        $model = substr($model, -4) == ".php" ? $model : $model . ".php";
        include "_backend/middleware/" . $model;
    }
}

if (! function_exists("use_library")) {
    function use_library(string $library)
    {
        $modelFile = substr($library, -4) == ".php" ? $library : $library . ".php";
        include "_backend/core/library/" . $modelFile;

        $className = basename($library, ".php");
        return new $className();
    }
}

if (! function_exists("use_class")) {
    function use_class(string $class)
    {
        $library = $class;
        $modelFile = substr($library, -4) == ".php" ? $library : $library . ".php";
        include "_backend/core/class/" . $modelFile;

        $className = basename($library, ".php");
        return new $className();
    }
}

function interpolate_query(string $query, array $params, $type = "undefined"): string
{
    $escapedParams = [];

    foreach ($params as $key => $param) {
        if (is_null($param)) {
            $escapedParams[$key] = 'NULL';
        } elseif (is_bool($param)) {
            $escapedParams[$key] = $param ? '1' : '0';
        } elseif (is_numeric($param)) {
            $escapedParams[$key] = $param;
        } else {
            $escapedParams[$key] = "'" . addslashes($param) . "'";
        }
    }
    foreach ($escapedParams as $key => $value) {
        $placeholder = strpos($key, ':') === 0 ? $key : ':' . $key;
        $query = preg_replace('/' . preg_quote($placeholder, '/') . '\b/', $value, $query);
    }
    add_sql_log($query, "query", $type);
    return $query;
}


if (! function_exists("set_sql_batch")) {
    function set_sql_batch(string $batch = "")
    {
        if ($batch == "" || $batch == null) {
            unset($_SESSION['set_sql_batch']);
        } else {
            $_SESSION['set_sql_batch'] = $batch;
        }
    }
}

if (! function_exists("autoload_php")) {
    function autoload_php(string|array $filename = null)
    {
        if (!$filename) {
            return false;
        }
        if (is_array($filename)) {
            foreach ($filename as $f) {
                $loadpage = substr($f, -4) == ".php" ? $f : $f . ".php";
                include "_backend/auto/php/" . $loadpage;
            }
        } else {
            $loadpage = substr($filename, -4) == ".php" ? $filename : $filename . ".php";
            include "_backend/auto/php/" . $loadpage;
        }
    }
}

if (! function_exists("autoload_routing")) {
    function autoload_routing(string|array $filename)
    {
        if (!$filename) {
            return false;
        }
        if (is_array($filename)) {
            foreach ($filename as $f) {
                $loadpage = substr($f, -4) == ".php" ? $f : $f . ".php";
                include "_backend/auto/routing/" . $loadpage;
            }
        } else {
            $loadpage = substr($filename, -4) == ".php" ? $filename : $filename . ".php";
            include "_backend/auto/routing/" . $loadpage;
        }
    }
}

if (! function_exists("current_be")) {
    function current_be(bool $php_exention = false): string
    {
        $filename =  $_SESSION['basixs_current_be'] ?? "Page not set";
        if (! $php_exention) {
            $filename = substr($filename, -4) === '.php' ? substr($filename, 0, -4) : $filename;
            return $filename;
        }

        return $filename;
    }
}

if (! function_exists("server_headers")) {
    function server_headers(String $searchKey = null)
    {
        $headers = [];
        foreach ($_SERVER as $serverKey => $value) {
            if (strpos($serverKey, 'HTTP_') === 0) {
                $header = str_replace(
                    ' ',
                    '-',
                    ucwords(strtolower(str_replace('_', ' ', substr($serverKey, 5))))
                );
                $headers[$header] = $value;
            }
        }
        if ($searchKey === null) {
            return $headers;
        } else {
            return $headers[$searchKey] ?? null;
        }
    }
}

if (! function_exists("request_method")) {
    function request_method()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        return $method;
    }
}

if (! function_exists("validate_request_method")) {
    function validate_request_method(String $req_method)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        return strtolower($method) == strtolower($req_method);
    }
}

if (! function_exists("set_request_method")) {
    function set_request_method(String $req_method)
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if (strtoupper($req_method) != strtoupper($method)) {
            $errmsg = "Request method should be " . strtoupper($req_method);
            json_badrequest(["error" => $errmsg], $errmsg);
        }
    }
}

if (! function_exists("my_hash")) {
    function my_hash(String $text, $length = 16)
    {
        return substr(md5($text), 0, $length);
    }
}
