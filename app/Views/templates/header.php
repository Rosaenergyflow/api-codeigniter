<!doctype html>
<html>
<head>
    <title>CodeIgniter Tutorial</title>
</head>
<body>

    <!-- esc() función global proporcionada por CodeIgniter para ayudar a prevenir ataques XSS -->
    <h1><?= esc($title) ?></h1>