<?php
// Memuat semua data konten dari file database.php
$data = require 'database.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | <?= htmlspecialchars($data['profile']['name']) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header class="hero">
        <div class="container">
            <h1 class="hero-name"><?= htmlspecialchars($data['profile']['name']) ?></h1>
            <p class="hero-title"><?= htmlspecialchars($data['profile']['title']) ?></p>
        </div>
    </header>

    <main class="container">
        
        <section id="about" class="content-section">
            <h2><?= htmlspecialchars($data['about']['heading']) ?></h2>
            <p><?= htmlspecialchars($data['about']['intro']) ?></p>
            <p><?= htmlspecialchars($data['about']['passion']) ?></p>
        </section>

        <section id="skills" class="content-section">
            <div class="skills-container">
                <div class="skill-column">
                    <h3><?= htmlspecialchars($data['skills']['hard']['title']) ?></h3>
                    <ul>
                        <?php foreach ($data['skills']['hard']['list'] as $skill): ?>
                            <li><?= htmlspecialchars($skill) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="skill-column">
                    <h3><?= htmlspecialchars($data['skills']['soft']['title']) ?></h3>
                    <ul>
                        <?php foreach ($data['skills']['soft']['list'] as $skill): ?>
                            <li><?= htmlspecialchars($skill) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>
        
        <section id="tools" class="content-section">
            <h2><?= htmlspecialchars($data['tools']['heading']) ?></h2>
            <div class="tools-grid">
                <?php foreach ($data['tools']['list'] as $tool): ?>
                    <span class="tool-item"><?= htmlspecialchars($tool) ?></span>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="projects" class="content-section">
            <h2><?= htmlspecialchars($data['projects']['heading']) ?></h2>
            <div class="projects-grid">
                <?php foreach ($data['projects']['list'] as $project): ?>
                    <div class="project-card">
                        <h3><?= htmlspecialchars($project['title']) ?></h3>
                        <p><?= htmlspecialchars($project['description']) ?></p>
                        <p><strong><?= htmlspecialchars($project['role']) ?></strong></p>
                        <p><small><?= htmlspecialchars($project['tools']) ?></small></p>
                        <p class="project-result"><?= htmlspecialchars($project['result']) ?></p>
                        <a href="<?= htmlspecialchars($project['link']) ?>" class="btn" target="_blank">Lihat Studi Kasus</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <section id="experience" class="content-section">
            <h2><?= htmlspecialchars($data['experience']['heading']) ?></h2>
             <?php foreach ($data['experience']['list'] as $exp): ?>
                <div class="experience-item">
                    <h3><?= htmlspecialchars($exp['role']) ?> at <strong><?= htmlspecialchars($exp['company']) ?></strong></h3>
                    <p class="period"><?= htmlspecialchars($exp['period']) ?></p>
                    <ul>
                        <?php foreach ($exp['tasks'] as $task): ?>
                            <li><?= htmlspecialchars($task) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </section>

        <section id="certification" class="content-section">
             <h2><?= htmlspecialchars($data['certification']['heading']) ?></h2>
             <ul>
                <?php foreach ($data['certification']['list'] as $cert): ?>
                    <li><?= htmlspecialchars($cert) ?></li>
                <?php endforeach; ?>
             </ul>
        </section>
        
    </main>

    <footer id="contact">
        <div class="container">
            <h2><?= htmlspecialchars($data['contact']['heading']) ?></h2>
            <p><?= htmlspecialchars($data['contact']['text']) ?></p>
            <div class="contact-links">
                <a href="mailto:<?= htmlspecialchars($data['profile']['email']) ?>" class="btn"><?= htmlspecialchars($data['profile']['email']) ?></a>
                <a href="https://<?= htmlspecialchars($data['profile']['linkedin']) ?>" class="btn" target="_blank">LinkedIn</a>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>