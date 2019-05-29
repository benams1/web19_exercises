<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>phpResult</title>
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Alef&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../includes/style.css">
</head>
<body>
<header>
        <div>

        </div>
        <!--Navbar-->
        <nav class="navbar navbar-light bg-light lighten-4">

        <!-- Navbar brand -->
            <a class="navbar-brand " href="#">
                    <img src="images/logo.png" id="logoIcon" class="img-fluid" alt="">

            </a>
      
        <!-- Collapse button -->
            <button class="navbar-toggler toggler-example float-right btn-lg" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
          aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text "><i
              class="fa fa-bars "></i></span></button>
      
        <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">
      
          <!-- Links -->
            <ul class="navbar-nav mr-auto float-right">
                <li class="nav-item ">
                    <a class="nav-link float-right" href="#">ניהול צמיד<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link float-right" href="#">ניהול תרופות</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link float-right" href="#">היסטוריה רפואית</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  float-right" href="#">המלצות רפואיות</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link float-right" href="#">מידע בחירום</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link float-right" href="#">הגדרות</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link float-right" href="#">התנתק</a>
                </li>
          </ul>
          <!-- Links -->
      
        </div>
        <!-- Collapsible content -->
      
      </nav>
      <!--/.Navbar-->
</header>
    <main>
        <div class="container">
        <?php
        $formType=$_GET['formId'];
        switch ($formType){
            case '1':
                echo ('<h2 id="phpResult">'.'your blood pressure is: '.$_GET['bloodPressureS'].'/'.$_GET['bloodPressureD'].'</h2>');
                break;
            case '2':
                echo ('<h2 id="phpResult">'.$_GET['sugar'].'</h2>');
                break;
            case '3':
                echo ('<h2 id="phpResult">'.'your heart beat is: '.$_GET['heartBeat'].'</h2>');
                break;
            case '4':
                echo ('<h2 id="phpResult">'.'saturation: '.$_GET['saturation'].'</h2>');
                break;
        }
        
    ?>
        </div>

</main>
<footer class="bg-light lighten-4 fixed-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center footerRow">
                <div class="col text-center">
                    <a ref="#" ><img src="images/footerSearch.png" alt=""></a>
                </div>
                <div class="col text-center">
                    <a href="#" ><img  src="images/footerSettings.png" alt=""></a>
                </div>
                <div class="col text-center">
                    <a href="#" ><img src="images/footerEvent.png" alt=""></a>
                </div>
                <div class="col text-center">
                    <a href="index.html" ><img src="images/footerHome.png" alt=""></a>
                </div>
                <div class="col text-center">
                    <a href="#" ><img src="images/footerReturn.png" alt=""></a>
                </div>
            </div>
        </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>