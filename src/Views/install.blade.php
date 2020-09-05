<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Installation - {{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="/images/default/icon.png">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-size: 90%;
        }

        .layout {
            background-image: url("/images/default/background.jpg");
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        h1, h2, h3, h4, h5, h6 {
            font-weight: normal;
            line-height: 1.5;
        }

        h2 {
            font-size: 22px;
        }

        hr {
            border-top: 1px solid #e9eaec;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .full-height {
            min-height: 100vh;
        }

        .p-15 {
            padding: 15px !important;
        }

        .fa-20 {
            font-size: 20px;
        }

        .m-b-30 {
            margin-bottom: 30px !important;
        }

        .inline-block {
            display: inline-block !important;
        }
    </style>
</head>
<body>
<div class="layout">
    <div class="container">
        <div class="row full-height align-items-center">
            <div class="col-10 mx-auto">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="p-15">
                            <div class="m-b-30 text-center">
                                <img alt="App logo" class="img-fluid inline-block" src="/img/app/icon.png" style="max-height: 45px;">
                                <h2 class="inline-block m-0 align-middle pl-3 text-uppercase">{{ config('app.name', 'Laravel') }} Installation</h2>
                                <hr>
                            </div>
                            @yield('step')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
