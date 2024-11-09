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
    </div>
</body>
</html>