<?php
    $showGradesForm = isset($_POST['btnStudent']);
    $showStudentDetails = isset($_POST['btnGrades']);

    if ($showGradesForm || $showStudentDetails) {
        $studentData = [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'age' => $_POST['age'],
            'gender' => $_POST['gender'],
            'course' => $_POST['course'],
            'email' => $_POST['email']
        ];
    }

    if ($showStudentDetails) {
        $gradesData = [
            'prelim' => $_POST['prelim'],
            'midterm' => $_POST['midterm'],
            'final' => $_POST['final']
        ];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Prelims</title>
</head>
<body>
    <br><h1 style="text-align: center;">Student Enrollment and Grade Processing System</h1><br>
        <div class="container">
        <?php if (!$showGradesForm): ?>
            <p style="font-weight: bold;">Student Enrollment Form</p>
            <form method="post">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required>
                
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required>

                <label for="age">Age</label>
                <input type="number" name="age" id="age" class="form-control" required>

                <label for="gender">Gender</label><br>
                <input type="radio" id="male" name="gender" value="male" required checked>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" required>
                <label for="female">Female</label>

                <br>
                <label for="course">Course</label>
                <select name="course" id="course" class="form-select" required>
                    <option value="BSIT" selected>BSIT</option>
                    <option value="BSHRM">BSHRM</option>
                    <option value="BSBA">BSBA</option>
                </select>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required><br>
                <button class="btn btn-primary" type="submit" name='btnStudent'>Submit Student Information</button>
            </form>
        
        <?php elseif ($showGradesForm): ?>
            <p style="font-weight: bold;">Enter Grades for</p>
            <form method="post">
                <label for="prelim">Prelim</label>
                <input type="number" name="prelim" id="prelim" class="form-control" required>

                <label for="midterm">Midterm</label>
                <input type="number" name="midterm" id="midterm" class="form-control" required>

                <label for="final">Final</label>
                <input type="number" name="final" id="final" class="form-control" required>

                <br>
                <button class="btn btn-success" type="submit" name="btnGrades">Submit Grades</button>

                <input type="hidden" name="first_name" value="<?php echo $studentData['first_name']; ?>">
                <input type="hidden" name="last_name" value="<?php echo $studentData['last_name']; ?>">
                <input type="hidden" name="age" value="<?php echo $studentData['age']; ?>">
                <input type="hidden" name="gender" value="<?php echo $studentData['gender']; ?>">
                <input type="hidden" name="course" value="<?php echo $studentData['course']; ?>">
                <input type="hidden" name="email" value="<?php echo $studentData['email']; ?>">
            </form>
        <?php endif; ?>

        <?php if ($showStudentDetails): ?>
            <br>
            <p style="font-size: 28px;">Student Details</p>
            
            <p><strong>First Name:</strong> <span style="font-weight: normal;"><?php echo $studentData['first_name']; ?></span></p>
            <p><strong>Last Name:</strong> <span style="font-weight: normal;"><?php echo $studentData['last_name']; ?></span></p>
            <p><strong>Age:</strong> <span style="font-weight: normal;"><?php echo $studentData['age']; ?></span></p>
            <p><strong>Gender:</strong> <span style="font-weight: normal;"><?php echo $studentData['gender']; ?></span></p>
            <p><strong>Email:</strong> <span style="font-weight: normal;"><?php echo $studentData['email']; ?></span></p>

            <p style="font-size: 22px;">Grades</p>
            <p><strong>Prelim:</strong> <span style="font-weight: normal;"><?php echo $gradesData['prelim']; ?></span></p>
            <p><strong>Midterm:</strong> <span style="font-weight: normal;"><?php echo $gradesData['midterm']; ?></span></p>
            <p><strong>Final:</strong> <span style="font-weight: normal;"><?php echo $gradesData['final']; ?></span></p>

            <p style="font-size: 22px;">Average Grade:</p>
            <?php 
                $average = ($gradesData['prelim'] + $gradesData['midterm'] + $gradesData['final']) / 3;
                $averageFormatted = number_format($average, 2);
                if ($average > 74.99) {
                    echo "<p>$averageFormatted - <span class='text-success'>Passed</span></p>"; 
                } else {
                    echo "<p>$averageFormatted - <span class='text-danger'>Failed</span></p>"; 
                }
            ?>
        <?php endif; ?>
    </div>
</body>
</html>