<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],

        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>

    <h3>Contact Form</h3>

    <div class="container"style="width: 40%">

        <form action="insertcontactus" method="post">
            @csrf
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Your name..">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email..">

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

            <input type="submit" value="submit" name="submit">
        </form>


    </div>
</body>

</html>
