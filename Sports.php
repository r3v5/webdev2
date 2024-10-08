<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Club Feedback Form</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --background-color: #ecf0f1;
            --text-color: #333;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--background-color);
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            font-size: 28px;
            color: var(--primary-color);
            margin-bottom: 20px;
            text-align: center;
        }
        
        p {
            margin-bottom: 20px;
        }
        
        form {
            display: grid;
            gap: 20px;
        }
        
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .checkbox-group,
        .radio-group {
            display: grid;
            gap: 10px;
        }
        
        .checkbox-item,
        .radio-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        input[type="checkbox"],
        input[type="radio"] {
            width: 20px;
            height: 20px;
        }
        
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        .button-group {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }
        
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        
        button[type="submit"] {
            background-color: var(--primary-color);
            color: #fff;
        }
        
        button[type="reset"] {
            background-color: var(--secondary-color);
            color: #fff;
        }
        
        button:hover {
            opacity: 0.9;
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            .button-group {
                flex-direction: column;
            }
            
            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<?php
    $text = "I love PHP";
    $name = "Ian";
    $text_length = strlen($text);
    $php_position = strpos($text, "PHP");


    echo "<p>My name is $name, I have to say that $text.</p>";
    echo "<p>Total characters in $text: $text_length</p>";
    echo "<p>The position of 'PHP' in the text: $php_position</p>";
?>
    <div class="container">
        <h1>Sport Club Feedback Form</h1>
        <p>Please fill out this form to let us know what you think of the club so that we can improve it.</p>
        <form action="#" method="post">
            <div>
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" placeholder="name@example.com">
            </div>

            <div>
                <label>Which sports do you enjoy most?:</label>
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <input type="checkbox" id="swimming" name="sports" value="swimming">
                        <label for="swimming">Swimming</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="football" name="sports" value="football">
                        <label for="football">Football</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="tennis" name="sports" value="tennis">
                        <label for="tennis">Tennis</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="snooker" name="sports" value="snooker">
                        <label for="snooker">Snooker</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="golf" name="sports" value="golf">
                        <label for="golf">Golf</label>
                    </div>
                </div>
            </div>

            <div>
                <label>How long have you been a member of the club?</label>
                <div class="radio-group">
                    <div class="radio-item">
                        <input type="radio" id="lessThanOne" name="membership" value="lessThanOne" checked>
                        <label for="lessThanOne">Less than one year</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" id="oneToTwo" name="membership" value="oneToTwo">
                        <label for="oneToTwo">One to two years</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" id="moreThanTwo" name="membership" value="moreThanTwo">
                        <label for="moreThanTwo">More than two years</label>
                    </div>
                </div>
            </div>

            <div>
                <label for="comments">Please give us any additional feedback that you may have:</label>
                <textarea id="comments" name="comments" rows="4"></textarea>
            </div>

            <div class="button-group">
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>
