<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="SPoRKnz60twdPT77UqFH6OkRz_zgHThVQR7TvX6aAqk" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Personal portfolio of Danish Khan, Junior Analyst and Cybersecurity learner.">

    <meta name="keywords" content="Danish Khan, Portfolio, Cybersecurity, SOC Analyst, HTML, SEO">

    <meta name="author" content="Danish Khan">

    <p>Location: Ahmedabad, India</p>
    <p>Contact: +91 XXXXXXXX</p>

    <meta name="robots" content="index, follow">

    <!-- Open Graph (Social SEO) -->
    <meta property="og:title" content="Danish Khan Portfolio">
    <meta property="og:description" content="Cybersecurity learner and Junior Analyst portfolio">
    <meta property="og:type" content="website">

    <!-- hreflang (multilingual SEO) -->
    <link rel="alternate" hreflang="en" href="http://example.com/en">
    <link rel="alternate" hreflang="hi" href="http://example.com/hi">
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
        <h1>
            <?php echo "My Portfolio"; ?>
        </h1>
        <p>Junior Analyst | Cybersecurity Learner</p>
    </header>
    <nav> <a href="#about">About</a> <a href="#skills">Skills</a> <a href="#projects">Projects</a> <a
            href="#contact">Contact</a> </nav>
    <section id="about">
        <div class="container">
            <div class="card">
                <h2>About Me</h2>
                <p> Hello! My name is Danish Khan. I am learning Cybersecurity and working as a Junior Analyst. I am
                    interested in SOC Analyst and Cybersecurity Engineering. </p>
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

</body>

</html>

<div class="container">
    <div class="card">

        <h2>Contact Form</h2>

        <form method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea><br><br>
            <button type="submit" name="submit">Send Message</button>
        </form>

    </div>
</div>

<section id="faq">
    <div class="container">
        <div class="card">
            <h2>FAQ (Frequently Asked Questions)</h2>

            <h3>What does Danish Khan do?</h3>
            <p>Danish Khan is a Junior Analyst and learning Cybersecurity and SOC Analysis.</p>

            <h3>What skills does Danish Khan have?</h3>
            <p>He has skills in C programming, HTML, CSS, JavaScript, Networking, and Cybersecurity fundamentals.</p>

            <h3>How can I contact Danish Khan?</h3>
            <p>You can contact through the contact form available on this website.</p>

            <h3>What is Danish Khan learning currently?</h3>
            <p>He is learning advanced cybersecurity and working towards becoming a SOC Analyst.</p>
        </div>
    </div>
</section>

<footer>
    <p>© 2026 Personal Portfolio | Designed by Danish Khan</p>
</footer>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What does Danish Khan do?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Danish Khan is a Junior Analyst and Cybersecurity learner."
      }
    },
    {
      "@type": "Question",
      "name": "How can I contact Danish Khan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can contact him using the contact form on his website."
      }
    }
  ]
}
</script>

<?php

// 🔥 ERROR SHOW (IMPORTANT)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 🔥 DATABASE CONNECT
$conn = mysqli_connect("localhost", "root", "", "portfolio_db");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$msg = "";

// 🔥 FORM SUBMIT CHECK
if (isset($_POST['submit'])) {

    // DEBUG
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 🔥 SQL QUERY
    $sql = "INSERT INTO contactus (id, name, email, message) 
            VALUES (NULL, '$name', '$email', '$message')";

    // 🔥 QUERY RUN
    if (mysqli_query($conn, $sql)) {
        $msg = "✅ Data Saved Successfully!";
    } else {
        $msg = "❌ Error: " . mysqli_error($conn);
    }
}
?>

</body>

</html>