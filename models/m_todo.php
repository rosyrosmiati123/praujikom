<?php
include_once '../controllers/c_koneksi.php';
class Task {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllTasks() {
        $result = $this->db->query("SELECT * FROM tb_task ORDER BY CASE WHEN status = 'belum selesai' THEN 0 ELSE 1 END, deadline ASC");
        $tasks = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $tasks[] = $row;
        }
        return $tasks;
    }

    public function addTask($task, $deadline, $status) {
        $task = $this->db->escape($task);
        $deadline = $this->db->escape($deadline);
        $status = $this->db->escape($status);
        return $this->db->query("INSERT INTO tb_task (task, deadline, status) VALUES ('$task', '$deadline', '$status')");
    }

    public function deleteTask($id) {
        $id = intval($id);
        return $this->db->query("DELETE FROM tb_task WHERE id = $id");
    }

    public function updateStatus($id, $status) {
        $id = intval($id);
        $status = $this->db->escape($status);
        return $this->db->query("UPDATE tb_task SET status = '$status' WHERE id = $id");
    }
}
