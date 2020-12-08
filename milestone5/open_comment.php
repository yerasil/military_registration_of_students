<!DOCTYPE html>
<?php
require_once "db/connection.php";
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Администратор</title>



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
<body>
<nav class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
    <img src="image/vsrk.png" style="width: 60px; height: 60px;">
    <a href="index.php " style="text-decoration: none; color: black" >
        <h5 class="display-4 pl-2 pt-2 " style="font-family: Arial; font-weight: bold  ">Военный учет студентов</h5></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="index.php">Sign out</a>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse"  >
            <div class="sidebar-sticky pt-3" ">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="adminpage.php" style="color: white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        Список студентов
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="admin_spr.php" style="color: white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                        Справки
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ref_issues.php" style="color: white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                        Выданные справки
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="udo.php" style="color: white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        УДО
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="comments.php" style="color: white">
                        <svg width="33" height="33" viewBox="0 0 24 10" class="bi bi-chat-left-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v11.586l2-2A2 2 0 0 1 4.414 11H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        Комментарии пользователей

                        <?php
                        require_once "db/connection.php";
                        $g_row =  $pdo_conn->query("SELECT * FROM comment ") ;
                        $count=0;
                        foreach($g_row as $row)
                        {
                            if ($row['prosmotr']==0){
                                $count=$count+1;
                            }
                        }
                        if ($count!=0){
                            ?>
                            <span class="btn-sm bg-danger float-right" >+<?=$count?></span>
                            <?php
                        }
                        ?>
                    </a>
                </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Выдаваемые справки</span>
                <a class="d-flex align-items-center text-muted" href="ref_issues.php" aria-label="Add a new report">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </a>
            </h6>
            <?php

            $g_row12 = $pdo_conn->query("Select * from reference");
            foreach($g_row12 as $row12){

                ?>
                <ul class="nav flex-column mb-2">
                    <form method="post" action="ref_selector.php">
                        <li class="nav-item">
                            <button type="submit" name="ssss" class="form-control btn-outline-dark mt-3 text-light bg-dark">
                                <input type="hidden" name="idforref" value="<?=$row12['id']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <?=$row12['name1']?>
                            </button>
                        </li>
                    </form>
                </ul>
                <?php
            }
            ?>
    </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" >
        <div class="chartjs-size-monitor" style=" position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                <div style=" background: rgba(209,179,102,0.53) ;position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                </div>
            </div>
            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                <div style="background: rgba(209,179,102,0.53); position:absolute;width:200%;height:200%;left:0; top:0">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between pl-2 flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="background: rgba(209,179,102,0.53);">
            <h1 class="h2">Воинский учет</h1>
        </div>
        <h2 class="pl-2"  style="background: rgba(209,179,102,0.53);">Список отзывов</h2>
        <div class="table-responsive" style="background: rgba(209,179,102,0.53);">
            <div class="form-group pl-2 pr-2">
                <?php
                $id=$_POST['idd'];

                require_once 'db/update_comment.php';
                $g_row =  $pdo_conn->query("SELECT *
                 FROM comment");
                foreach($g_row as $row)
                {
                    if ($row['id']==$id){
                        $com=$row;
                    }
                }

                ?>
                <h3 >Пользователь  <?=$com['email']?>  </h3>
                <div class="form-group h-250 border border-dark rounded p-4 bg-dark text-light ">
                <p>
                    <?=$com['review']?>
                </p>
                </div>
                <span><?=$com['time_com']?></span>
                <br>

                <h4>Ответить</h4>
                <form action="send_mess.php" method="post">
                    <input type="hidden" name="email" value="<?=$com['email']?>">
                    <textarea type="text"  name="mess" class="form-control "></textarea>
                    <button type="submit" class="btn btn-dark btn-outline-light float-right mt-2 mb-5" >Отправить</button>
                </form>
            </div>
        </div>
    </main>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="dashboard.js"></script>

</body>
</html>


