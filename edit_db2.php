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
            <div class="col-4 d-flex justify-content-end align-items-center">
                <input type="text" class="form-control" name="" >
                <a class="text-dark" href="#" aria-label="Search">

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
                </a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-3 bg-light">
        <nav class="nav d-flex justify-content-between" >
            <a class="p-2 text-dark" href="register.php" style="font-weight: bold">Регистрация военнообьязанных</a><br>
            <a class="p-2 text-dark" href="edit_db.php" style="font-weight: bold">Внесение изменении</a><br>
            <a class="p-2 text-dark " href="#" style="font-weight: bold">Список студентов</a>
            <a class="p-2 text-dark" href="spravka.php" style="font-weight: bold">Оформление справки</a>
            <a class="p-2 text-dark" href="contacts.php" style="font-weight: bold">Контакты</a>
        </nav>
    </div>
</div>
<div class="container mb-5">
    <?php
    require_once "db/connection.php";
    $iin=$_GET['inn2'];
    $g_row =  $pdo_conn->query("SELECT * FROM students ") ;
    foreach($g_row as $row)
    {
        if($iin==$row['iin']){
            $id_db=$row['db_id'];
            break;
        }
    }

    $g_row2 =  $pdo_conn->query("SELECT * FROM db_students") ;
    foreach($g_row2 as $row1)
    {

        if($id_db==$row1['id']){
    ?>
        <form action="db/update_student.php" method="post">
            <div class="row mt-5 justify-content-center">
                <div class="col-6 display-4">
                    <div class="form-group m-0 ">
                        <label for="name" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Имя</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?=$row1['name1']?>"></div>
                    <div class="form-group m-0 ">
                        <label for="surname" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Фамилия</label>
                        <input type="text" name="surname" id="surname" class="form-control" value="<?=$row1['surname']?>">
                    </div>
                    <div class="form-group m-0 ">
                        <label for="lastname" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Отчество</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" value="<?=$row1['lastname']?>">
                    </div>
                    <div class="form-group m-0 ">
                        <label for="birthday" class="btn-outline-dark  font-weight-bold " style="font-size: 22px"> Дата рождения</label>
                        <input type="date" name="birthday" id="birthday" class="form-control" value="<?=$row1['birthday']?>">
                    </div>
                    <div class="form-group m-0 ">
                        <label for="inn" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">ИИН</label>
                        <input type="text" name="inn" id="inn" class="form-control" value="<?=$iin?>"></div>
                    <div class="form-group m-0 ">
                        <label for="place" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Место жительства или временного пребывания</label>
                        <input type="text" name="place" id="place" class="form-control" value="<?=$row1['address']?>"></div>
                    <div class="form-group m-0 ">
                        <label for="wife" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Cемейное положение</label>
                        <input type="text" name="wife" id="wife" class="form-control " value="<?=$row1['marital_status']?>"></div>
                    <div class="form-group m-0 ">
                        <label for="order" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Воинское звание</label>
                        <input type="text" name="order" id="order" class="form-control" value="<?=$row1['rank']?>"></div>

                    <div class="form-group m-0 ">
                        <label for="education" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Образование</label>
                        <input type="text" name="education" id="education" class="form-control" value="<?=$row1['education']?>">
                    </div>
                    <div class="form-group m-0 " >
                        <label for="nation" class="btn-outline-dark  font-weight-bold " style="font-size: 22px"> Национальность</label>
                        <input type="text" name="nation" id="nation" class="form-control" value="<?=$row1['nationality']?>">
                    </div>
                    <div class="form-group m-0 ">
                        <label for="special" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Гражданская специальность</label>
                        <input type="text" name="special" id="special" class="form-control" value="<?=$row1['special']?>">
                    </div>
                    <div class="form-group m-0 ">
                        <label for="military" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Военная подготовка</label>
                        <input type="text" name="military" id="military" class="form-control" value="<?=$row1['military_traning']?>">
                    </div>
                    <div class="form-group m-0 ">
                        <label for="sports_category" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Спортивный разряд</label>
                        <input type="text" name="sports_category" id="sports_category" class="form-control" value="<?=$row1['sport_category']?>">
                    </div>
                    <div class="form-group m-0 ">
                        <label for="postponement" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Отсрочка</label>
                        <input type="text" name="postponement" id="postponement" class="form-control" value="<?=$row1['postpo']?>">
                    </div>
                    <div class="form-group m-0 " >
                        <label for="conviction" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Судимость</label>
                        <input type="text" name="conviction" id="conviction" class="form-control" value="<?=$row1['conviction']?>">
                    </div>
                    <div class="form-group m-0 ">
                        <label for="email" class="btn-outline-dark  font-weight-bold " style="font-size: 22px">Электронная почта или телефон</label>
                        <input type="text" name="email" id="email" class="form-control mb-3" value="<?=$row1['email']?>"><br>
                    </div>

                </div>
                <input type="hidden" name="id" value="<?=$row1['id']?>">
                <input type="submit" class="btn btn-light form-control w-75 ">

            </div>
        </form>
    <?php }
    }
    ?>

</div>
<footer class="page-footer font-small mdb-color lighten-3 bg-light pt-4 mt-5">
    <div class="container">
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

    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://www.viires.kz/">Военно-инженерный институт радиоэлектроники и связи</a>
    </div>
</footer>
</body>
</html>


