<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Изменения данных</title>

    <!-- Bootstrap core CSS -->
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Favicons -->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/bootstrap.css" rel="stylesheet" >
    <link href="css/blog.css" rel="stylesheet" >


    <!-- Favicons -->

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>
<body style="background:#8b7f5596">
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center bg-light" style="border-bottom-right-radius: 9px; border-bottom-left-radius: 9px;">
            <div class="col-8 d-flex   align-items-center">
                <img src="image/vsrk.png" style="width: 60px; height: 60px;">
                <a href="index.php " style="text-decoration: none; color: black" >
                    <h1 class="display-4 pl-2 pt-2 " style="font-family: Arial; font-weight: bold  ">Военный учет студентов</h1></a>
            </div>
            <div class="col-4 ">
                <form action="search.php" method="post" class="d-flex ">
                    <input type="text" class="form-control border-dark" name="search_area" >
                    <button class="btn btn-outline-dark" style="width: 50px" type="submit" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-0" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
                    </button>
                </form>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-3 bg-light">
        <nav class="nav d-flex justify-content-between" >
            <a class="p-2 text-dark" href="register.php" style="font-weight: bold">Регистрация военнообьязанных</a><br>
            <a class="p-2 text-dark" href="edit_db.php" style="font-weight: bold">Внесение изменении</a><br>
            <a class="p-2 text-dark " href="students_list.php" style="font-weight: bold">Список студентов</a>
            <a class="p-2 text-dark" href="spravka.php" style="font-weight: bold">Оформление справки</a>
            <a class="p-2 text-dark" href="contacts.php" style="font-weight: bold">Контакты</a>
        </nav>
    </div>

<div class="container mb-5">
    <div class="form-group">
        <form action="edit_db2.php" method="get">
            <label for="name" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">ИИН студента</label>
            <input type="text" name="inn2" class="form-control" value=" ">
            <button class="btn btn-outline-light mt-3" >Изменить</button>
        </form>
        </div>
    </div>
</div>
<footer class="page-footer font-small mdb-color lighten-3 bg-light pt-4 mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-12 mb-4">
                <div class="view overlay z-depth-1-half">
                    <img src="https://static.zakon.kz/uploads/posts/2016-08/1472212519_2-1.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="view overlay z-depth-1-half">
                    <img src="https://inbusiness.kz/ru/images/original/26/images/1aAddaHN.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://i1.wp.com/otyrar.kz/wp-content/uploads/2016/03/img_417.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-12 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://www.inform.kz/radmin/news/2019/11/25/191125195632294a3588611i.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://ehonews.kz/wp-content/uploads/2018/12/Screenshot_20181202-135430_zakonkz.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>

            <div class="col-lg-2 col-md-6 mb-4">

                <div class="view overlay z-depth-1-half">
                    <img src="https://www.inform.kz/fotoarticles/20190405093932.jpg" class="img-fluid"
                         alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">
        © 2020 Copyright:
        <a href="https://www.viires.kz/">Военно-инженерный институт радиоэлектроники и связи</a>
    </div>
</footer>
</body>
</html>


