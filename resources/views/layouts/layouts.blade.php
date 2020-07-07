<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/cropped.png">
    <title>Stiff Rowlands - Law Blog</title>

    <link rel="stylesheet" href="/css/new.css" type="text/css">
    <link rel="stylesheet" href="/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="bg box-layout">
    <div class="container-fluid header-box">
        <header class="header-box1">
            <div class="top-bar">
                <div class="container-fluid overflow">
                    <div class="search-btn call">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="search-display dis">
                        <form action="" class="search-form">
                            <input type="text" placeholder="Write and hit enter">
                            <button type="submit" class="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="social"></div>
                </div>
            </div>
            <div class="container-fluid logo-box">
                <div class="logo">
                    <h1 class="title">
                        <a href="/">
                            <img src="/img/1.gif" alt="">
                        </a>
                    </h1>
                    <h2 class="line">Law Blog</h2>
                </div>
            </div>
        </header>


@yield('content')
    
    </div>

    <footer>
        <div class="foot">
            <div class="footer">
                <div class="row1">
                    <div class="col-sm-6">
                        <p>
                        Copyright 2017 CleanBlog | Theme by 
                        <a class="same"href="">AirThemes</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        $('.call').click(function(){ 
                $('.dis').slideToggle();
            });
    </script>
</body>
</html>