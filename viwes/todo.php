<?php
include_once '../models/m_todo.php';
include_once '../controllers/c_todo.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Roboto Slab", serif;;
            background-color: #e4a9a6;
            margin: 20px;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #ebc2be;
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
            background-color: #ef2f51;
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
            background-color: #f04261;
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
