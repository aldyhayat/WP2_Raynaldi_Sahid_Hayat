<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Prog II | Merancang Template sederhana dengan 
codeigniter</title>
<link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Template Sederhana Dengan Codeigniter</h3>
            </hgroup>
            <nav>
            <ul>
                <li>
                    <a href=" <?= base_url().'/web' ?>">
                        Home
                    </a>
                </li>
                <li>
                    <a href=" <?= base_url().'/web/about' ?>">
                        About
                    </a>
                </li>

            </ul>
        </nav>
        <div class="clear"></div>
        </header>
       
    
