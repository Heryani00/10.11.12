<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="assets/web-icon.png">
    <title>Heryani</title>
    <style>
    @keyframes heartbeat {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.1);
        }

        100% {
            transform: scale(1);
        }
    }

    .heartBeat {
        animation: heartbeat 1s infinite;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand d-flex" href="#">
                <img class="mt-1 " src="assets/web-icon.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                <p class="ms-2 ">SayangYani</p>
            </a>
        </div>
    </nav>

    <div class="hero d-flex flex-column mt-5">
        <img class="w-25 m-auto heartBeat" src="assets/web-icon.png" alt="">
        <h1 class="text-center mt-3 heartBeat">I Love You</h1>
    </div>

    <?php
  echo 'test';
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>