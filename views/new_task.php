<div class="div-center">
    <div class="div-title">
        <label for="">New Task</label>
    </div>
    <form id="newTaskForm" action="<?php echo constant('URL') ?>/newTask/createTask" method="POST">
        <div class="div-input">
            <label class="input-label">Task</label>
            <input type="text" id="description_task" name="description_task" placeholder="Please type task description" class="custom-input">
        </div>
        <div class="div-input">
            <label class="input-label">Asignee</label>
            <select id="asignee" name="asignee" class="custom-input">
                <option value="--">--</option>
                <?php
                $users = $this->users;
                if (!empty($users)) {
                    foreach ($users as $key => $user) {
                        echo '<option value="' . $user->id_user . '">' . $user->fullname . '</option>';
                    }
                }
                ?>                
            </select>
        </div>
        <div class="div-input">
            <label class="input-label">Priority</label>
            <select id="priority" name="priority" class="custom-input">
                <option value="--">--</option>
                <?php
                $prioritys = $this->prioritys;
                if (!empty($prioritys)) {
                    foreach ($prioritys as $key => $priority) {
                        echo '<option value="' . $priority->id_priority . '">' . $priority->name . '</option>';
                    }
                }
                ?>  
            </select>
        </div>
    </form>
        <div class="div-input" style="text-align: center;">
            <button onclick="newTask(event)" class="button-success">Create Task</button>
            <a href="<?php echo constant('URL') ?>/task"><button class="button-danger">Cancel</button></a>
        </div>
</div>