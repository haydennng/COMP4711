<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');
        $students = array();
        
        foreach($students as $student)
            echo $student ->tostring();
        
        $first = new Student();
        $first->surname = "Ng";
        $first->first_name = "Hayden";
        $first->add_email('home','haydenIsBoss@gmail.com');
        $first->add_email('work','haydenBoss@boss.com');
        $first->add_grade(98);
        $first->add_grade(96);
        $first->add_grade(100);
        $students['h123'] = $first;
        
        $second = new Student();
        $second->surname = "Wong";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(20);
        $second->add_grade(30);
        $second->add_grade(50);
        $students['a456'] = $second;
        ?>
    </body>
</html>
