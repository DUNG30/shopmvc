<?php
require_once __DIR__ . '/../../Core/database.php';
class OrderModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }
    public function getAllOrders()
    {
        $stmt = $this->db->prepare("SELECT * FROM orders ORDER BY id ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}
