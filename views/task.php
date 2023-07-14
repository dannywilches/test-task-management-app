<div class="div-center">
    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Creator</th>
                <th>Asignee</th>
                <th>Priority</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $tasks = $this->data;
            if (!empty($tasks)) {
                foreach ($tasks as $key => $task) {
                    echo "
                        <tr>
                            <td>" . $task->description_task . "</td>
                            <td>" . $task->getCreator->fullname . "</td>
                            <td>" . $task->getAsignee->fullname . "</td>
                            <td>" . $task->getPriority->name . "</td>
                            <td><a href='" . constant('URL') . "/newTask?edit=" . $task->id_task . "'><button class='button-info'>Edit Task</button></a></td>
                        </tr>
                        ";
                }
            }
            else {
                echo "<tr><td colspan='4' class='no-register'>Sin registros</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <div class="div-input" style="text-align: center;">
        <a href="<?php echo constant('URL') ?>/newTask"><button class="button-info">Add New Task</button></a>
    </div>
</div>