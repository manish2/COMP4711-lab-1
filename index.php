<!DOCTYPE html>
<!--
Author: Manish Mallavarapu 
Latest change: September/08/2016 
The index file that displays all the students to the webpage
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            include('student.php');
            //our array to store students 
            $students = array();
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home','john@doe.com');
            $first->add_email('work','jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home','albert@braniacs.com');
            $second->add_email('work1','a_einstein@bcit.ca');
            $second->add_email('work2','albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            $third = new Student(); 
            $third ->surname = "Mallavarapu"; 
            $third -> first_name = "Manish"; 
            $third->add_email('home','m.mallavarapu@my.bcit.ca');
            $third->add_email('work1','manish@gmail.com');
            $third->add_email('work2','manish101096@hotmail.com');
            $third->add_grade(100);
            $third->add_grade(100);
            $third->add_grade(100);
            $students['z457'] = $third;
            ksort($students); 
            foreach($students as $student)
                echo $student->toString();
           
        ?>
    </body>
</html>
