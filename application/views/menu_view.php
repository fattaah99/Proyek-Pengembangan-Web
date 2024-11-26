<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        display: inline;
        margin-right: 15px;
    }

    a {
        text-decoration: none;
        color: #000;
    }

    a:hover {
        color: #007BFF;
    }
    </style>
</head>

<body>
    <nav>
        <ul>
            <?php foreach ($menus as $menu): ?>
            <li><a href="<?= $menu['url'] ?>"><?= $menu['title'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <H1>Dashboard Aplikasi Peminjaman Buku</H1>
</body>

</html>