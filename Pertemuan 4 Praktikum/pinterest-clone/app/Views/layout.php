<!-- File: app/Views/layout.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest Clone</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background: linear-gradient(to right, #a8c0ff, #3f2b96); */
            color: #ffffff;
            background-image: url('/images/forest.jpg');
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: center;
            min-height: 100vh;
            margin: 0;
            height: 100vh;
        }

        nav {
            background-color: rgba(0, 0, 0, 0.4);
            color: #edf4fa;
        }

        h1 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container,
        .gallery-item {
            backdrop-filter: blur(10px) saturate(150%);
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
        }

        .form-container {
            max-width: 400px;
            margin: auto;
            text-align: center;
        }

        .gallery {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            cursor: pointer;
        }

        .gallery-item {
            position: relative;
            width: 250px;
            height: 350px;
            background-size: cover;
            background-position: center;
            margin: 10px;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.4);
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background: #eddb72;
            color: #ffffff;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.8s ease;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .action-buttons a {
            margin: 5px;
            padding: 5px 10px;
            background: rgba(255, 255, 255, 0.3);
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .action-buttons a:nth-child(1):hover {
            background: green;
        }

        /* Hover background red for Delete */
        .action-buttons a:nth-child(2):hover {
            background: red;
        }

        .preview-image {
            width: 100%;
            height: auto;
            border-radius: 15px;
            margin-bottom: 10px;
        }

        form textarea {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            resize: none;
            font-size: 1rem;
        }

        button {
            padding: 10px 20px;
            border: none;
            background: #3f2b96;
            color: white;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: background 0.3s;
        }

        button:hover {
            background: #5c3eda;
        }
    </style>
</head>

<body>
    <?= $this->renderSection('content') ?>
</body>

</html>