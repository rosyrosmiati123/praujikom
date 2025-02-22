<?php
include_once '../models/m_todo.php';
include_once '../controllers/c_koneksi.php';

$db = new Database();
$taskManager = new Task($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['task'], $_POST['deadline'], $_POST['status'])) {
        $taskManager->addTask($_POST['task'], $_POST['deadline'], $_POST['status']);
        header("Location: todo.php");
        exit();
    } elseif (isset($_POST['delete_id'])) {
        $taskManager->deleteTask($_POST['delete_id']);
        header("Location: todo.php");
        exit();
    } elseif (isset($_POST['update_id'], $_POST['new_status'])) {
        $taskManager->updateStatus($_POST['update_id'], $_POST['new_status']);
        header("Location: todo.php");
        exit();
    }
}

$tasks = $taskManager->getAllTasks();
