(function(){let newTaskFormEl=$('#modNewTaskForm');if(newTaskFormEl){let newTaskBtn=newTaskFormEl.find('input[name="modTasksSave"]');let newTaskTitle=newTaskFormEl.find('input[name="modTasksTitle"]');newTaskBtn.addClass('disabled');newTaskTitle.on('input',function(){if(newTaskTitle.val().length>=3){newTaskBtn.removeClass('disabled')}else{newTaskBtn.addClass('disabled')}});newTaskFormEl.on('submit',function(){return newTaskTitle.val().length>=3})}})()