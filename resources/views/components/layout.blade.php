<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <x-css></x-css>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <x-navbar></x-navbar>
        <x-sidebar></x-sidebar>
        <div class="content-wrapper">
            {{ $slot }}
        </div>
    </div>
</body>
<x-js></x-js>
</html>