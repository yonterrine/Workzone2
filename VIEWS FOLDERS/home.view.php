<?php

loadPartial('heads');
loadPartial('navbar');


function formatSalary($salary){
    return '₱' . number_format($salary, 2);
}

$jobs = [
    [
        'title' => 'Junior Web Developer',
        'company' => 'TechNova Solutions',
        'location' => 'Quezon City, PH',
        
        'type' => 'Full-time',
        'salary' => 25000,
        'description' => 'Looking for a junior web developer with knowledge in PHP, HTML, CSS, and basic JavaScript.'
    ],
    [
        'title' => 'IT Support Specialist',
        'company' => 'NetCore Systems',
        'location' => 'Remote',
        'type' => 'Contract',
        'salary' => 30000,
        'description' => 'Provide technical support, troubleshoot issues, and assist users remotely.'
    ],
    [
        'title' => 'Backend Developer (PHP)',
        'company' => 'CodeCraft PH',
        'location' => 'Makati City, PH',
        'type' => 'Full-time',
        'salary' => 35000,
        'description' => 'Develop backend systems using PHP and MySQL. Laravel experience is a plus.'
    ],
    [
        'title' => 'UI/UX Designer',
        'company' => 'PixelLab Studio',
        'location' => 'Remote',
        'type' => 'Part-time',
        'salary' => 55000,
        'description' => 'Design user-friendly interfaces and improve user experience for web applications.'
    ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Job Listings</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Unna:ital,wght@0,400;0,700;1,400;1,700&family=Yrsa:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Yrsa', 'UI-sans-serif', 'System-UI'],
                        display: ['Unna', 'UI-sans-serif'],
                    },
                },
            },
        }
    </script>
</head>
<body class="bg-gray-100 min-h-screen">

    <header class="bg-indigo-600 text-white py-6 shadow">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-3xl font-bold">JOB FINDER</h1>
            <p class="text-sm opacity-90">Find the best tech jobs for IT professionals</p>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 py-10">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            <?php foreach ($jobs as $job): ?>
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-xl transition">
                    <h1 class="text-2xl font-semibold text-indigo-600 mb-1">
                        <?= htmlspecialchars($job['title']) ?>
                    </h1>
                    <p class="text-gray-700 font-large ">
                        <?= htmlspecialchars($job['company']) ?>
                    </p>
                    <p class="text-gray-700 font-large ">
                        <?= formatSalary($job['salary']) ?>
                        
                    </p>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-indigo-100 
                    text-gray border border-blue- 600 text-indigo-800">
                        <?= htmlspecialchars($job['location']) ?> • <?= htmlspecialchars($job['type']) ?>
                    </span>
                    <p class="text-gray-600 text-sm mb-4">
                        <?= htmlspecialchars($job['description']) ?>
                    </p>
                    <button class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
                        Apply Now
                    </button>
                </div>
            <?php endforeach; ?>

        </div>
    </main>

    <footer class="text-center text-gray-500 py-6 text-sm">
        © <?= date('Y') ?> IT Job Board • Built with PHP & Tailwind CSS
    </footer>

</body>
</html>
