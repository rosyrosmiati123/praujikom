<?php
include_once '../models/m_todo.php';
include_once '../controllers/c_todo.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .form-group {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }
        input, select, button {
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border: none;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Task List</h1>
        <form method="POST" class="form-group">
            <input type="text" name="task" placeholder="Task" required>
            <input type="datetime-local" name="deadline" required>
            <input type="hidden" name="status" value="belum selesai">
            <button type="submit">Tambah</button>
        </form>
        <table>
            <tr>
                <th>Task</th>
                <th>Deadline</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($tasks as $t) : ?>
                <tr>
                    <td><?= htmlspecialchars($t['task']) ?></td>
                    <td><?= $t['deadline'] ?></td>
                    <td><?= $t['status'] ?></td>
                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="delete_id" value="<?= $t['id'] ?>">
                            <button type="submit">Hapus</button>
                        </form>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="update_id" value="<?= $t['id'] ?>">
                            <select name="new_status">
                                <option value="belum selesai">Belum Selesai</option>
                                <option value="selesai">Selesai</option>
                            </select>
                            <button type="submit">Update</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
