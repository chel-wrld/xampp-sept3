<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet">
</head>

<body>
<?php
    if(isset($_GET["info"])){
        echo $_GET["info"];
    }
?>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Student Registration Form</h3>
        </div>

        <div class="card-body">

            <form method="POST" action="process_register.php">

                <h1>
                    <?php
                        if(isset($_GET["info"])){
                            echo $_GET["info"];
                        }
                    ?>
                </h1>

                <!-- Student Number -->
                <div class="mb-3">
                    <label for="student_number" class="form-label">
                        Student Number
                    </label>

                    <input 
                        type="text"
                        class="form-control"
                        id="student_number"
                        name="student_no"
                        placeholder="Enter student number">
                </div>

                <!-- Name -->
                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label for="first_name" class="form-label">
                            First Name
                        </label>

                        <input 
                            type="text"
                            class="form-control"
                            id="first_name"
                            name="first_name"
                            placeholder="Enter first name">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="middle_name" class="form-label">
                            Middle Name
                        </label>

                        <input 
                            type="text"
                            class="form-control"
                            id="middle_name"
                            name="middle_name"
                            placeholder="Enter middle name">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="last_name" class="form-label">
                            Last Name
                        </label>

                        <input 
                            type="text"
                            class="form-control"
                            id="last_name"
                            name="last_name"
                            placeholder="Enter last name">
                    </div>

                </div>



                <!-- Course and Year Level -->
                <div class="row">

                    <div class="col-md-8 mb-3">

                        <label for="course" class="form-label">
                            Course
                        </label>

                        <select 
                            class="form-select"
                            id="course"
                            name="course">

                            <option value="">Select Course</option>
                            <option value="ACT">
                                Associate in Computer Technology
                            </option>

                            <option value="CT">
                                Computer Technology
                            </option>

                        </select>

                    </div>

                    <div class="col-md-4 mb-3">

                        <label for="year_level" class="form-label">
                            Year Level
                        </label>

                        <select 
                            class="form-select"
                            id="year_level"
                            name="year_level">

                            <option value="">Select Year</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>

                        </select>

                    </div>

                </div>

                <!-- Submit Button -->
                <div class="d-grid">

                    <button 
                        type="submit"
                        class="btn btn-primary"
                        name="register">

                        Register Student

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>