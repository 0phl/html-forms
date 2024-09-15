<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <style>
        * {
          padding: 0;
          margin: 0;  
        }

        body {
            background-color: #f8f7ff;
            height: 100%;
            padding-block: 5%;
            
        }

        main {
            margin: auto;
            height: 30rem;
            width: 60%; 
            background-color: #b8b8ff;
            border-radius: 1rem;
            padding-block: 2rem;
        }

        h1 {
            text-align: center; 
            color: #4a34c8; 
            padding-block: 2rem;
            font-size: 2.5rem;
        }

        .form-title {
            margin: auto;
        }
        
        input[type="radio"]{
            color: white;
        }

        .flex-field {
            display: grid;
            grid-template-columns: 25% 75%;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
            padding-inline: 1.3rem;
            margin-bottom: 2rem;
            
        }

        .grid-input {
            flex-grow: 1;
            font-size: 12px;
            padding-block: 6px;
            padding-inline: 4px;
            box-sizing: border-box;
            border-color: beige;
            background-color: transparent;
            border-color: transparent transparent black transparent;
            

        }

        .grid-label {
            text-align: right;
            
        }

        .grid-select {
            font-size: 12px;
            padding-block: 6px 4px;
            line-height: 4px;    
        }

        .checkbox-form {
            padding-inline: 4rem;
            margin-bottom: 2.5rem;
        }
        
        .form-button {
            background-color: #f8f7ff;
            color: #9381ff;
            border: 0px;
            border-radius: 4px;
            padding: 1rem 2.4rem
        }
    </style>
</head>

<body>


    <main> 

        <form action="submit.php" method = "post" > 
        <input type="text" name="first_name" placeholder="First Name" id="" class="grid-input" required>
        <input type="text" name="last_name" placeholder="Last Name" id="" class="grid-input" required>
        <input type="email" name="user_email" placeholder="Email" id="" class="grid-input" required>
        <input type="password" name="user_password" placeholder="Password" id="" class="grid-input" required>

        <?php

         $currentDate = date('Y-m-d');
        ?>

        <input type="date" name="date" required min="<?php echo $currentDate; ?>">

        <input type="reset" value = "Reset Button">

        <input type="checkbox" name="checkbox" id="" value=""><label for="checkbox"> Java </label>
        <input type="checkbox" name="checkbox" id="" value=""><label for="checkbox"> Phyton </label>
        <input type="checkbox" name="checkbox" id="" value=""><label for="checkbox"> .NET </label>

        <input type="radio" name="year-level" id="" value="1" required><label for="year-level"> 1 </label>
        <input type="radio" name="year-level" id="" value="2" required><label for="year-level"> 2 </label>
        <input type="radio" name="year-level" id="" value="3" required><label for="year-level"> 3 </label>
       




        <input type="submit" value="Click Me"> 

        </form>
    </main>
    
</body>

</html> 