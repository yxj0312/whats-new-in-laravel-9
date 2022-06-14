<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/base.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        body {
            background-color: #212332;
            min-height: 100vh;

            display: grid;
            grid-template-columns: 14rem 1fr;
        }

        section {
            padding: 1.5rem;
        }

        section.left {
            background-color: #2a2d3e;
        }

        nav {
            position: fixed;
            inset: 0;
            padding: 1.5rem;
        }

        .container {
            margin-top: 1.2rem;

            display: grid;
            grid-template-columns: repeat(8, 1fr);
            gap: 1.5rem;
        }

         .block {
            background-color: #2a2d3e;
            padding: 1.5rem;
            border-radius: 0.5rem;
         }

        .block1 {
            height: 9rem;
        }

        .block2 {
            height: 16rem;


        }

        .block3 {
            height: 16rem;


        }

        .block4 {
            height: 12rem;


        }

        .block5 {
            height: 12rem;


        }

        h3 {
            font-weight: bold;
        }

        p {
            font-size: 0.8rem;
            color: #767676;
        }

        span {
            font-size: 0.8rem;
            color: #24cb24;

            align-self: end;
        }

        .fa-ellipsis {
            justify-self: end;
        }
    </style>
</head>

<body>
    <section class="left">
        <nav>
            <div>
                <img src="{{asset('/images/logo.svg')}}" alt="Logo" height="40" />
            </div>
        </nav>
    </section>
    <section class="main">
        <h3>Dashboard</h3>
        <div class="container">
            <div class="block block1">
                <i class="fa-solid fa-money-bill-wave"></i>
                <i class="fa-solid fa-ellipsis"></i>
                <div>
                    <h3>$12,766</h3>
                    <p>Today's Revenue</p>
                </div>
                <span> + 13% </span>
            </div>
            <div class="block block1">
                <p>Block 1</p>
            </div>
            <div class="block block1">
                <p>Block 1</p>
            </div>
            <div class="block block1">
                <p>Block 1</p>
            </div>
            <div class="block block2">
                <p>Block 2</p>
            </div>
            <div class="block block3">
                <p>Block 3</p>
            </div>
            <div class="block block4">
                <p>Block 4</p>
            </div>
            <div class="block block5">
                <p>Block 5</p>
            </div>
        </div>
    </section>
</body>

</html>