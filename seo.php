<?php

$conn = mysqli_connect("localhost", "root", "", "portfolio_db");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>

    <style>
        /* Body */
        body {
            font-family: Arial;
            margin: 0;
            background: #f4f4f4;
        }

        /* Header */
        header {
            background: #222;
            color: white;
            text-align: center;
            padding: 30px;
        }

        /* Navbar */
        nav {
            background: #444;
            text-align: center;
            padding: 12px;
        }

        nav a {
            color: white;
            margin: 15px;
            text-decoration: none;
            font-size: 18px;
            transition: 0.3s;
        }

        nav a:hover {
            color: yellow;
        }

        /* Section */
        section {
            padding: 40px;
        }

        .container {
            width: 80%;
            margin: auto;
        }

        /* Cards */
        .card {
            background: white;
            padding: 25px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
        }

        /* Skills List */
        ul li {
            margin: 8px 0;
        }

        /* Button */
        .btn {
            display: inline-block;
            background: #333;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: #ff9800;
        }

        /* Form */
        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Message */
        .msg {
            color: green;
            font-weight: bold;
        }

        .error {
            color: red;
            font-weight: bold;
        }

        /* Footer */
        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>

</head>

<body>

    <header>
        <h1><?php echo "Danish Khan"; ?></h1>
        <p>Junior Analyst | Cybersecurity Learner</p>
    </header>

    <nav>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>

    <section id="about">
        <div class="container">
            <div class="card">
                <h2>About Me</h2>
                <p>
                    Hello! My name is Danish Khan. I am learning Cybersecurity and working as a Junior Analyst.
                    I am interested in SOC Analyst and Cybersecurity Engineering.
                </p>
            </div>
        </div>
    </section>

    <section id="skills">
        <div class="container">
            <div class="card">
                <h2>My Skills</h2>
                <ul>
                    <li>C Programming</li>
                    <li>HTML & CSS</li>
                    <li>JavaScript Basics</li>
                    <li>Cybersecurity Fundamentals</li>
                    <li>Networking Basics</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <div class="card">
                <h2>Projects</h2>
                <ul>
                    <li>SEO Website</li>
                    <li>Portfolio Website</li>
                    <li>Basic Networking Study</li>
                    <li>Cybersecurity Practice Labs</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="card">
                <h2>Contact Me</h2>

                <form method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit" name="submit" class="btn">Send Message</button>
                </form>

            </div>
        </div>
    </section>

    <footer>
        <p>© 2026 Personal Portfolio | Designed by Danish Khan</p>
    </footer>


    <?php

    $conn = mysqli_connect("localhost", "root", "", "portfolio_db");

    $msg = "";

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contacts (name, email, message) 
            VALUES ('$name', '$email', '$message')";

        if (mysqli_query($conn, $sql)) {
            $msg = "Data Saved Successfully!";
        } else {
            $msg = "Error: " . mysqli_error($conn);
        }
    }

    ?>


</body>

</html>