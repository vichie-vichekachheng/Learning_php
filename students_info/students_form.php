<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="d-flex text-start shadow-lg rounded w-25 p-4 rounded-5" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="p-2" method="post">
            <h2>Student information</h2>
            <hr>
            <label for="" class="form-label">Student ID : </label>
            <input type="text" class="form-control" name="studentId">
            <label for="" class="form-label">Student's Name : </label>
            <input type="text" class="form-control" name="studentName">
            <label for="" class="form-label">Student's Major : </label>
            <input type="text" class="form-control" name="studentMajor"><br>
            <input type="submit" name="submit" value="submit" class="btn btn-secondary">
        </form>
    </div>
   
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $student_id = filter_input(INPUT_POST, "studentId");
    $student_name = filter_input(INPUT_POST, "studentName");
    $major = filter_input(INPUT_POST, 'studentMajor');
    if(empty($student_id)){
        echo "Student ID is required.";
    }elseif(empty($student_name)){
        echo "Student Name is required.";
    } elseif(empty($major)){
        echo "Student's major is required.";
    } else{
        $sql = "INSERT INTO students_info (student_id, student_name, Major)
                VALUES ($student_id, '$student_name','$major')
        ";
        mysqli_query($conn,$sql);
        echo "Successfully submitted.";
    }
}
mysqli_close($conn);
// $sql = "SELECT * FROM students_info where Major = 'Software Development'";
// $result = mysqli_query($conn, $sql);
// if(mysqli_num_rows($result) >0){
//     while($row = mysqli_fetch_assoc($result)){
//     echo "ID : ". $row['student_id']. " Name : ". $row['student_name']. " Major : ". $row['Major']. "<br>";
//     };
   
// } else{
//     echo "No result has been displayed.";
// }

// mysqli_close($conn);
?>