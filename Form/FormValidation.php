<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
<?php

$errors = [];

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name']);
    $age = trim($_POST['age']);
    $description = trim($_POST['description']);

    // Validate Name
    if (strlen($name) < 4) {
        $errors['name'] = "Name must be at least 4 characters long.";
    }

    // Validate Age
    if ($age < 18) {
        $errors['age'] = "Age must be at least 18 years old.";
    }

    // Validate Description
    if (empty($description)) {
        $errors['description'] = "Description is required.";
    }

   
}
?>

    <h2>Form Validation</h2>
    <form id="myForm" method = "POST">
        <label>Name: <input type="text" id="name" name="name"></label>
        <span class="error" id="nameError"></span>
        <br><br>
        
        <label>Age: <input type="number" id="age" name="age"></label>
        <span class="error" id="ageError"></span>
        <br><br>
        
        <label>Description: <textarea id="description" name="description"></textarea></label>
        <span class="error" id="descError"></span>
        <br><br>
        
        <button type="submit">Submit</button>
    </form>

    <script>
   document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission initially

    let valid = true;

    // Name validation
    const name = document.getElementById('name').value.trim();
    if (name.length < 4) {
        document.getElementById('nameError').textContent = "Name must be at least 4 characters long.";
        valid = false;
    } else {
        document.getElementById('nameError').textContent = "";
    }

    // Age validation
    const age = document.getElementById('age').value;
    if (age === "" || age < 18) {
        document.getElementById('ageError').textContent = "Age must be at least 18 years old.";
        valid = false;
    } else {
        document.getElementById('ageError').textContent = "";
    }

    // Description validation
    const description = document.getElementById('description').value.trim();
    if (description === "") {
        document.getElementById('descError').textContent = "Description is required.";
        valid = false;
    } else {
        document.getElementById('descError').textContent = "";
    }

    if (valid) {
        alert("Form submitted successfully!");
        this.submit(); // Allow natural form submission
    }
});

</script>

</body>
</html>
