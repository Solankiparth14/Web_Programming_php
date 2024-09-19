<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Reset some default styles */
body, h1, form, input, textarea {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Set the font and background color for the whole page */
body {
    font-family: Arial, sans-serif;
    background-color: #130f0f;
    display: flex;
    justify-content: center;
    align-items: center;
    /*height: 100vh;*/
}

/* Style the form container */
.form-container {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    margin:12px;
}

/* Style the form elements */
h1 {
    margin-bottom: 20px;
    font-size: 24px;
    text-align: center;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

input[type="text"], input[type="email"], textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    border: 1px solid #200d0d;
    border-radius: 4px;
}

.button {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    border: none;
    border-radius: 4px;
    color: rgb(53, 25, 102);
    font-size: 16px;
    cursor: pointer;
}

.button:hover {
    background-color: #4cae4c;
}

    </style>
<body>
    <div class="form-container">
        <h1>dyname form</h1>
        <form  action="HOMEPAGE.php" method="post" enctype="multipart/form-data">
            <label for="name">About me:</label>
            <input type="text"  name="nm" >
            
            <label for="skill">Skills:</label>
            <input type="text"  name="skll" >
            
            <label for="project">Project:</label>
            <input type="text"  name="pro" >

            <label for="google">google</label>
            <input type="text" name="google">
            
            <label for="blong">Blog</label>
            <input type="text" name="blog">

            <label for="link">link din</label>
            <input type="text" name="link">

            <label for="github">Git hub</label>
            <input type="text" name="git">
            
            <label for="task 1">Task 1</label>
            <input type="text" name="t1">

            <label for="task 2">Task 2</label>
            <input type="text" name="t2">

            <label for="task 3">Task 3</label>
            <input type="text" name="t3">

            <label for="task 4">Task 4</label>
            <input type="text" name="t4">

            <label for="task 5">Task 5</label>
            <input type="text" name="t5">

            <label for="task 6">Minor porject Module </label>
            <input type="text" name="t6">

            <label for="task 7">Database Module</label>
            <input type="text" name="t7">

            <label for="menu 1">menu 1</label>
            <input type="text" name="m1">

            <label for="menu 2">menu 2</label>
            <input type="text" name="m2">

             <label for="menu 3">menu 3</label>
             <input type="text" name="m3">

            <label for="img">Header img</label>
            <input type="file" name="img1">

            <label for="img2">Footer img</label>
            <input type="file" name="img2">

            <input type="submit" name="s" class="button">
        </form>
    </div>
</body>
</html>