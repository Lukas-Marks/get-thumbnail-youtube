<!DOCTYPE html>
<html>
<head>
    <title>Pegar Thumbnail - Youtube</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="author" content="Danki Code - Guilherme Grillo">
    <meta name="description" content="Pegar Thumbnail do Youtube - Site fácil de ser utilizado" />
    <meta name="keywords" content="pegar thumbnail, gerar thumbnail" />
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Pegar Thumbnail">
    <meta property="og:site_name" content="Pegar Thumbnail">
    <meta property="og:description" content="Pegar Thumbnail do Youtube - Site fácil de ser utilizado">
    <meta property="og:url" content="">
    <meta property="og:image" content="https://cursos.dankicode.com/og-img.jpg">
    <meta property="og:image:type" content="image/jpeg">

    <style type="text/css">
        .container{
            max-width: 960px;
            margin:10px auto;
            padding:0 2%;
            text-align: center;
        }
        .container h2{
            font-size: 40px;
            margin:30px 0;
        }
        .container p{
            font-size: 19px;
        }
        .container input[type=text]{
            width:100%;
            border-radius:8px;
            height: 30px;
            border: 1px solid #ccc;
        }
        .container input[type=submit]{
            display: block;
            margin:10px 0;
            font-size: 20px;
            color: white;
            width:100%;
            height: 30px;
            cursor: pointer;
            border: 0;
            background-color: #44c78b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pegue Thumbnail de Qualquer Vídeo do Youtube</h2>
        <p>Para pegar a Thumbnail do vídeo do Youtube<br/>
        Basta inserir a URL, no formato abaixo:<br/>
        <b>http://www.youtube.com/watch?v=erLk59H86ww</b></p>

        <form method="post">
            <input type="text" name="url" placeholder="Cole aqui a URL do vídeo">
            <input type="submit" name="acao" value="Pegar Thumb!">
        </form>

        <?php
            if(isset($_POST['acao'])){
                $url = $_POST['url'];

                // Captura o código do vídeo
                parse_str(parse_url($url, PHP_URL_QUERY), $params);
                if(isset($params['v'])){
                    $videoCode = $params['v'];

                echo '<h2>Sua Thumbnail:</h2>';

                echo '<img src="https://img.youtube.com/vi/'.$videoCode.'/default.jpg" alt="Default Thumbnail" /><br/>';
                echo '<img src="https://img.youtube.com/vi/'.$videoCode.'/hqdefault.jpg" alt="HQ Thumbnail" /><br/>';
                echo '<img src="https://img.youtube.com/vi/'.$videoCode.'/mqdefault.jpg" alt="MQ Thumbnail" /><br/>';
                echo '<img src="https://img.youtube.com/vi/'.$videoCode.'/sddefault.jpg" alt="SD Thumbnail" /><br/>';
                echo '<img src="https://img.youtube.com/vi/'.$videoCode.'/maxresdefault.jpg" alt="MaxRes Thumbnail" /><br/>';
                }
            }