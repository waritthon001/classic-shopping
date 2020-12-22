<?php
require_once('config.php');
require_once(ROOT_PATH . '/includes/head_section.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            overflow: hidden;
            height: 100%;
            font-family: 'Comic Sans MS', sans-serif;
            background: #fcf1f1;
        }

        .strip{
            position: absolute;
            height: 100vh;
            background: #fff;
            width: 0.0625rem;
            opacity: .3;
        }

        .one{
            left: 25%;
        }

        .two{
            left: 50%;
        }

        .three{
            left: 75%;
        }

        .container{
            align-items: flex-start;
            display: flex;
            justify-content: center;
            padding: 16.875rem 1.5rem;
        }

        .card-grid{
            display: grid;
            grid-column-gap: 1.5rem;
            max-width: 75rem;
            width: 100%;
        }

        @media(min-width: 75rem){
            .card-grid{
                grid-template-columns: repeat(5, 1fr);
            }
        }

        .card{
            position: relative;
        }

        .card::before{
            content: '';
            display: block;
            padding-bottom: 150%;
        }

        .card-background{
            background-size: cover;
            background-position: center;
            border-radius: 0.9375rem;
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transition: filter .2s linear, transform 200ms linear;
        }

        .card:hover .card-background{
            transform: scale(1.25) translateZ(0);
        }

        .card-grid:hover > .card:not(:hover) .card-background{
            filter: brightness(1) saturate(0) contrast(1) blur(1.25rem);
        }

        .card-content{
            padding: 14.375rem 1.25rem;
            position: absolute;
            top: 0;
        }

        .card-category{
            color:#30475e;
            font-size: .9rem;
            text-transform: uppercase;
        }

        .card-heading{
            color: rgba(61, 184 ,184, .9);
            font-size: 1.9rem;
            text-shadow: 0.125rem 0.125rem 1.25rem rgba(0 , 0, 0, .2);
        }
        p{
            margin-top: -1.875rem;
        }
    </style>
</head>
<body>
<div class="navbar">
		<div class="logo_div">
			<a href="index.php"><h1>Classic Shopping</h1></a>
		</div>
		<ul>
	  		<li><a class="active" href="index.php">Home</a></li>
	  		<li><a href="contact.php">Contact</a></li>
	  		<li><a href="About.php">About</a></li>
		</ul>
	</div>
    <div>
        <div class="strip one"></div>
        <div class="strip two"></div>
        <div class="strip three"></div>
    </div>

    <section class="container">
        <div class="card-grid">
            <a href="" class="card">
                <div class="card-background" style="background-image: url(571.jpg);"></div>
                <span class="card-content">
                    <h3 style="margin-top:100px" class="card-heading">610610571</h3>
                    <br>
                    <br>
                    <p class="card-category">

                    </p>
                </span>
            </a>

            <a href="" class="card">
                <div class="card-background" style="background-image: url(578.jpeg);"></div>
                <span class="card-content">
                    <h3 style="margin-top:100px"class="card-heading">610610578</h3>
                    <p class="card-category">

                    </p>
                </span>
            </a>

            <a href="" class="card">
                <div class="card-background" style="background-image: url(612.jpg);"></div>
                <span class="card-content">
                    <h3 style="margin-top:100px"class="card-heading">610610612</h3>
                    <p class="card-category">

                    </p>
                </span>
            </a>

            <a href="" class="card">
                <div class="card-background" style="background-image: url(613.jpg);"></div>
                <span class="card-content">
                    <h3 style="margin-top:100px" class="card-heading">610610613</h3>
                    <p class="card-category">

                    </p>
                </span>
            </a>



            <a href="" class="card">
                <div class="card-background" style="background-image: url(615.jpg);"></div>
                <span class="card-content">
                    <h3 style="margin-top:100px "class="card-heading">610610615</h3>
                    <p class="card-category">

                    </p>
                </span>
            </a>
        </div>
    </section>
</body>
</html>
