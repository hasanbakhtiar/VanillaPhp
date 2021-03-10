<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSite</title>
    <style>
        body,*{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            background-color:#eee;
        }
        header{
            padding:10px 0;
        }
        #menu{
            display:flex;
            background-color: black;
        }
        #menu li{
            list-style:none;
            padding:15px;
        }
        #menu li a{
            color: #fff;
            text-decoration: none;
        }
        #menu li a:hover{
            color:red;
        }
        .content{
            margin-top:10px;
            padding: 10px;
            background-color: #fff;
            border: 3px solid #ddd;
        }
        footer{
            border-top: 3px solid #ddd;
            margin-top:10px;
            display:flex;
            align-items:center;
            justify-content:center;
        }
    </style>
</head>
<body>
    <header>
    <h1>HasanBakhtar.info</h1>
    <p>Template Test</p>
    </header>
    <ul id="menu">
        <li><a href="basic_temp.php">Ana Səhifə</a></li>
        <li><a href="basic_temp.php?git=haqqimda">Haqqımızda</a></li>
        <li><a href="basic_temp.php?git=portfolyo">İşlərimiz</a></li>
        <li><a href="basic_temp.php?git=elaqe">Bizimlə Əlaqə</a></li>
    </ul>

    <div class="content">
        <?php
            $git = @$_GET["git"];
            switch ($git) {
                case 'haqqimda':
                    include("about.php");
                    break;

                    case 'portfolyo':
                        include("portfolyo.php");
                        break;

                        case 'elaqe':
                            include("contact.php");
                            break;
                
                default:
                   echo '<h1>XOŞ GƏLDİNİZ...</h1>
                   <p>Burada programlaşdırma ilə əlaqəli hər məlumati rahatliqla tapa bilərsiz...</p>';
                    break;
            }

        ?>

    </div>

    <footer>
   <p>©2020 Copyright:Hasan | Bütün Hüquqlar qorunur.</p> 
    </footer>
</body>
</html>