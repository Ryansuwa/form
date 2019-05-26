<?php
require_once 'connection.php';
require_once 'message.php';
$query="SELECT * FROM students";
$students=mysqli_query($connection,$query);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Student Records</h1>
            <hr>
            <?= message()?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action="insert.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <label for="address" >Address:</label>
                    <input type="text" name="address" id="address" class="form-control">
                    <label for="gender">Gender:</label>
                    <label>
                        <input type="radio" name="rd" value="male" >Male
                    </label>
                    <label>
                        <input type="radio" name="rd" value="female">Female
                    </label>
                </div>
                    <div class="form-group">
                         <label for="language">Language:</label>
                             <label>
                                <input type="checkbox" name="lang[]" value="nepali">Nepali
                            </label>
                                 <label>
                                     <input type="checkbox" name="lang[]" value="english">English
                                 </label>
                        <label>
                            <input type="checkbox" name="lang[]" value="japnese">Japan
                        </label>
                    </div>
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" class="form-control">
                    <label for="subject">Subject:</label>
                    <select name="subject" id="subject" class="form-control">
                        <option select-disable>---select option---</option>
                        <option value="nepali">Nepali</option>
                        <option value="english">English</option>
                        <option value="social">Social</option>
                        <option value="science">Science</option>
                        <option value="math">Math</option>
                    </select>
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" class="form-control">
                    <div class="form-group">
                        <button class="btn btn-success">create Record</button>
                    </div>
            </form>

        </div>
            <div class="col-md-9">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>subject</th>
                        <th>Language</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($students as $key=>$student):?>
                    <tr>
                        <td><?=++$key?></td>
                        <td><?= $student['name']?></td>
                        <td><?=$student['address']?></td>
                        <td><?=$student['gender']?></td>
                        <td><?=$student['email'] ?></td>
                        <td><?= $student['phone']?></td>
                        <td><?=$student['subject']?></td>
                        <td><?=$student['language']?></td>
                        <td>
                            <a href="">Edit</a>
                            <a href="">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
    </div>
</div>





<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
