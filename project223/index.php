<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <div class="col-md-6 offset-md-3 mt-5">
    <h1 class="text-center py-4 my-4">ToDo'S List App</h1>

        <h3 class="text-center">To Do List App</h3>
        <hr style="border-top:1px dotted #ccc;" />

        <form method="post" action="add_query.php">
            <div class="input-group">
                <input type="text" class="form-control" name="task" required />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary form-control" name="add">Add Task</button>
                </div>
            </div>
        </form>


        <table class="table mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 require 'conn.php';
                $query = $conn->query("SELECT * FROM `task` ORDER BY `task_id` ASC");
                $count = 1;
                while ($fetch = $query->fetch_array()) 
                {
                ?>
                    <tr>
                        <td><?php echo $count++ ?></td>
                        <td><?php echo $fetch['task'] ?></td>
                        <td><?php echo $fetch['status'] ?></td>
                        <td colspan="2">
                            <div>
                                <?php
                                if ($fetch['status'] != "Done") 
                                {
                                    echo'<a href="update_task.php?task_id=' . $fetch['task_id'] . '" class="btn btn-success">Done</span></a>|';
                                }
                                ?>
                                <a href="delete_query.php?task_id=<?php echo $fetch['task_id'] ?>" class="btn btn-danger">Delete</span></a>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>