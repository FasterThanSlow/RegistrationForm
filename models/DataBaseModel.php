<?php

/**
 * Description of DataBaseModel
 *
 * @author Vadim
 * @package DataBaseModel
 */
class DataBaseModel {

    private $dbHost;
    private $dbUser;
    private $dbPassword;
    private $dbName;
    private $databaseLink;

    function __construct($dbHost, $dbUser, $dbPassword, $dbName) {
        $this->dbHost = $dbHost;
        $this->dbUser = $dbUser;
        $this->dbPassword = $dbPassword;
        $this->dbName = $dbName;
        $this->databaseLink = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
        $this->databaseLink->query("SET NAMES 'utf8'");
    }

    public function select($tableName, $fields, $where = NULL, $orderBy = NULL, $desc = FALSE, $groupBy = NULL, $having = NULL) {
        $query = "";
        if (!empty($tableName)) {
            $query .= "SELECT ";
            if (is_array($fields)) {
                $fieldsCount = count($fields);
                for ($i = 0; $i < $fieldsCount - 1; $i++) {
                    $query .= "`" . addslashes($fields[$i]) . "`,";
                }
                $query .= "`" . $fields[$fieldsCount - 1] . "`";
            } else {
                $query .= $fields;
            }
            $query .= " FROM `" . $tableName . "`";
            if (isset($where)) {
                $query .= " WHERE " . $where;
                if (isset($groupBy)) {
                    $query .= " GROUP BY " . $groupBy;
                    if (isset($having)) {
                        $query .= " HAVING " . $having;
                    }
                }
            }
            if (isset($orderBy)) {
                $query .= " ORDER BY " . $orderBy;
                if ($desc) {
                    $query .= " DESC";
                }
            }
            if ($result = @mysqli_query($this->databaseLink, $query)) {
                return $result;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function insert($tableName, $columnNames, $values) {
        $query = "";
        if (!empty($tableName) && !empty($values) && !empty($columnNames)) {
            $query .= "INSERT INTO `" . $tableName . "`";
            $query .= " (";
            if (is_array($columnNames)) {

                for ($i = 0; $i < count($columnNames) - 1; $i++) {
                    $query .= "`" . addslashes($columnNames[$i]) . "`,";
                }
                $query .= "`" . $columnNames[count($columnNames) - 1] . "`";
            } else {
                $query .= $columnNames;
            }
            $query .= ") VALUES (";
            if (is_array($values)) {
                for ($i = 0; $i < count($values) - 1; $i++) {
                    $query .= "'" . addslashes($values[$i]) . "',";
                }
                $query .= "'" . addslashes($values[count($values) - 1]) . "')";
            } else {
                $query .= addslashes($values);
            }
            if ($result = @mysqli_query($this->databaseLink, $query)) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {

            return FALSE;
        }
    }

    public function delete_record($tableName, $where) {
        if (!empty($tableName) && !empty($where)) {
            $query = "DELETE FROM `" . $tableName . "` WHERE " . $where;
            if (@mysqli_query($this->databaseLink, $query)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function __destruct() {
        mysqli_close($this->databaseLink);
    }

}
