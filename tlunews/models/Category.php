<?php
require_once 'config/connDB.php';
class Category {
    public static function getAllCategories() {
        $db = connDB::getConnection();
        $stmt = $db->query("SELECT * FROM categories");
        return $stmt->fetchAll();
    }
}
?>