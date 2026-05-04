<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$name = "Romar Paulo M. Lising";
$role = "BSIT Student";
$email = "rmlising@fit.edu.ph";
$phone = "(+63) 921 581 2877";
$location = "Cainta, Philippines";

$summary = "A dedicated BSIT student with strong interest in web development and programming. Passionate about learning new technologies and building useful systems.";

$careerObjective = "To gain hands-on experience in web development while continuously improving my technical and problem-solving skills.";

$education = [
    "degree" => "Bachelor of Science in Information Technology",
    "school" => "FEU Institute of Technology",
    "year" => "2024 – Present"
];

$skills = [
    "HTML & CSS",
    "PHP (Basic)",
    "Java Programming",
    "MySQL (Basic)",
    "Problem Solving",
    "Team Collaboration"
];

$projects = [
    "Personal Resume Website using PHP",
    "Simple Login System (PHP & MySQL)",
    "Java Console Applications"
];

$certifications = [
    "Cisco Certified - Java Programming",
    "Cisco Certified - JavaScript",
    "Cisco Certified - Python Programming"
];

$languages = ["English", "Filipino"];
$interests = ["Web Development", "UI Design", "Learning New Technologies", "Gaming"];
?>

<div class="resume">

    <!-- HEADER -->
    <header class="header">
        <h1><?= $name ?></h1>
        <p class="role"><?= $role ?></p>
        <p><?= $email ?> | <?= $phone ?> | <?= $location ?></p>
    </header>

    <!-- LEFT COLUMN -->
    <div class="column left-column">

        <section>
            <h2>Profile Summary</h2>
            <p><?= $summary ?></p>
        </section>

        <section>
            <h2>Career Objective</h2>
            <p><?= $careerObjective ?></p>
        </section>

        <section>
            <h2>Education</h2>
            <p class="strong"><?= $education["degree"] ?></p>
            <p><?= $education["school"] ?></p>
            <p class="muted"><?= $education["year"] ?></p>
        </section>

        <section>
            <h2>Skills</h2>
            <ul>
                <?php foreach ($skills as $skill): ?>
                    <li><?= $skill ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

    </div>

    <!-- RIGHT COLUMN -->
    <div class="column right-column">

        <section>
            <h2>Projects</h2>
            <ul>
                <?php foreach ($projects as $project): ?>
                    <li><?= $project ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section>
            <h2>Certifications</h2>
            <ul>
                <?php foreach ($certifications as $cert): ?>
                    <li><?= $cert ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section>
            <h2>Languages</h2>
            <ul>
                <?php foreach ($languages as $lang): ?>
                    <li><?= $lang ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section>
            <h2>Interests</h2>
            <ul>
                <?php foreach ($interests as $interest): ?>
                    <li><?= $interest ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

    </div>
</div>

</body>
</html>