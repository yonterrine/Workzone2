<?php
// controllers/listings/error.php
// Handles 404 and 403 HTTP errors

$code    = http_response_code();
$allowed = [403, 404];
if (!in_array($code, $allowed)) {
    $code = 404;
}

$messages = [
    403 => [
        'label'    => '403',
        'title'    => 'Access Denied',
        'subtitle' => "You don't have permission to view this page.",
        'icon'     => '🚫',
    ],
    404 => [
        'label'    => '404',
        'title'    => 'Page Not Found',
        'subtitle' => "The page you're looking for drifted into deep space.",
        'icon'     => '🛸',
    ],
];

$msg = $messages[$code];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $msg['label'] ?> — JobFinder</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=Space+Mono:ital@0;1&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: #060612;
            font-family: 'Syne', sans-serif;
            overflow: hidden;
        }
        canvas {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: 0;
            pointer-events: none;
        }
        .error-code {
            font-size: clamp(8rem, 20vw, 16rem);
            font-weight: 800;
            line-height: 1;
            background: linear-gradient(135deg, #818cf8 0%, #c084fc 40%, #38bdf8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            filter: drop-shadow(0 0 60px rgba(129,140,248,0.5));
        }
        .glow-btn {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            box-shadow: 0 0 30px rgba(99,102,241,0.5);
            transition: all 0.3s ease;
        }
        .glow-btn:hover {
            box-shadow: 0 0 50px rgba(99,102,241,0.9);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen text-white">
    <canvas id="stars"></canvas>

    <div class="relative z-10 text-center px-6">
        <div class="text-6xl mb-4"><?= $msg['icon'] ?></div>
        <div class="error-code"><?= $msg['label'] ?></div>
        <h1 class="text-3xl font-bold mt-2 mb-3 tracking-wide"><?= $msg['title'] ?></h1>
        <p class="text-indigo-300 mb-8 max-w-md mx-auto" style="font-family:'Space Mono',monospace;font-size:0.85rem;">
            <?= $msg['subtitle'] ?>
        </p>
        <a href="/" class="glow-btn inline-block text-white font-bold px-8 py-3 rounded-full text-sm tracking-widest uppercase">
            ← Back to Home
        </a>
    </div>

    <script>
        const canvas = document.getElementById('stars');
        const ctx = canvas.getContext('2d');
        let stars = [];

        function resize() {
            canvas.width  = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        function initStars(count = 200) {
            stars = Array.from({ length: count }, () => ({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                r: Math.random() * 1.5 + 0.3,
                a: Math.random(),
                speed: Math.random() * 0.005 + 0.002,
            }));
        }

        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            stars.forEach(s => {
                s.a += s.speed;
                ctx.beginPath();
                ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(200,210,255,${Math.abs(Math.sin(s.a))})`;
                ctx.fill();
            });
            requestAnimationFrame(draw);
        }

        resize();
        initStars();
        draw();
        window.addEventListener('resize', () => { resize(); initStars(); });
    </script>
</body>
</html>
