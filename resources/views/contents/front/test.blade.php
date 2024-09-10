<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Language Dropdown</title>

    <!-- MDBootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        .flag {
            width: 16px;
            height: 16px;
            margin-right: 8px;
        }

        .dropdown-item .fa-check {
            visibility: hidden;
        }

        .dropdown-item.active .fa-check {
            visibility: visible;
        }
    </style>
</head>
<body>

<div class="dropdown">
    <a data-mdb-dropdown-init class="dropdown-toggle" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
        <i class="flag-united-kingdom flag m-0"></i>
    </a>

    <ul class="dropdown-menu" aria-labelledby="Dropdown">
        <li>
            <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
        </li>
        <li><hr class="dropdown-divider" /></li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
        </li>
        <li>
            <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
        </li>
    </ul>
</div>

<!-- MDBootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

</body>
</html>
