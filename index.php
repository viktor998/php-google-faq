<?php 
    include 'dati.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/master.css">
</head>
<body>

    <header class='mr-5 ml-5'>
        <div class="up pt-5 pb-4">
            <div class="logo">
                <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="">
                <span class="ml-1">Privacy e termini</span>
            </div>
            <div class="right-side">
                <svg class="gb_We mr-4" focusable="false" viewBox="0 0 24 24">
                    <path fill= '#5f6368' d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path>
                </svg>
                <div class="account-pic">
                    <h3>V</h3>
                </div>
            </div>
        </div>

        <div class="down">
            <ul>
                <li><a href="#">Introduzione</a></li>
                <li><a href="#">Norme sulla privacy</a></li>
                <li><a href="#">Termini di servizio</a></li>
                <li><a href="#">Tecnologie</a></li>
                <li class='active'><a href="#">Domande frequenti</a></li>
            </ul>
        </div>
        
    </header>
    <hr class='mb-4'>

    <main>
        <div class="container">
            <?php 
                foreach ($paragraphs as $key => $value) {?>
                    
                    <h3 class='pt-16'><?= $value['title'] ?></h3>
                    
                        <?php 
                            for ($i=0; $i < count($value); $i++) { ?>

                                <?php 
                                if (!is_array($value['paragraph-'.$i])) {?>
                                    <p class='pb-5'>
                                        <?= $value['paragraph-'.$i] ?>
                                    </p>
                                    <?php
                                } else{?>
                                <ol class='pl-4'>
                                    <?php
                                    
                                    for ($j=0; $j < count($value['paragraph-'.$i]['ordered-list']) ; $j++) {?>
                                            
                                            <?= '<li class="pb-5 pl-5">' . $value['paragraph-'.$i]['ordered-list'][$j]['title'] . '</li>'?>

                                            <?php
                                                if(array_key_exists('sub-1', $value['paragraph-'.$i]['ordered-list'][$j])){?>
                                                    <ol type='a'>
                                                        <li class="pb-5 pl-4 ml-9"><?=  $value['paragraph-'.$i]['ordered-list'][$j]['sub-1'] ?></li>
                                                        <li class="pb-5 pl-4 ml-9"><?=  $value['paragraph-'.$i]['ordered-list'][$j]['sub-2'] ?></li>
                                                    </ol>
                                                    <?php
                                                }
                                                ?>
                                            
                                            
                                        <?php
                                        
                                    }
                                }
                                ?>
                                </ol>
                                <?php
                         
                            }
                            
                        ?>
                        
                    
                    <?php
                }
            ?>
        </div>
    </main>

    <footer>
        <div class="container">
            <ul>
                <li><a href="#">Google</a></li>
                <li><a href="#">Tutto su Google</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Termini</a></li>
            </ul>


            <div class="select-lang">
            <img src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAABEAAAARCAMAAAAMs7fIAAAABGdBTUEAALGPC/xhBQAAAFpQTFRFAAAAc8b%2BeNj%2BeLL7lt3/YbL4cs/9rNn8p9b7%2Bfn5hdD/a8D/7vD/vOL9itf%2B////3PD%2Byuj9R6348Pb7KZz2UL78MKL3Oqv4Zsz/ndX8qN/%2BI5T0S7X4W8b9mmuivQAAAAF0Uk5TAEDm2GYAAACXSURBVBjTXYqLEsIwCARR%2B27zpCFNxP//TSGOTu3OhDs2wGaPM9bD8hKGMDtnDq130GkxDK/BY/tVc6CtXa21Q72ClFKoqUrINBLAzHP9grKpccxFYmqNIcY4j%2BXDiLJBztmUXCRkGgkgIsZbO1kwEjVDKwYmDriSGt6FPHrnp6x1Bd/vzxP9Bj8mFfBH2K8Gtng1AA95bxQhE7o%2B68UQAAAAAElFTkSuQmCC" alt="">
            <select >
                <option value="af">Afrikaans</option>
                <option value="id">Bahasa Indonesia</option>
                <option value="ms">Bahasa Melayu</option>
                <option value="ca">Català</option>
                <option value="cs">Čeština</option>
                <option value="da">Dansk</option>
                <option value="de">Deutsch</option>
                <option value="et">Eesti</option>
                <option value="en">English</option>
                <option value="en-GB">English (United Kingdom)</option>
                <option value="es">Español</option>
                <option value="es-419">Español (Latinoamérica)</option>
                <option value="eu">Euskara</option>
                <option value="fil">Filipino</option>
                <option value="fr">Français</option>
                <option value="fr-CA">Français (Canada)</option>
                <option value="gl">Galego</option>
                <option value="hr">Hrvatski</option>
                <option value="zu">Isizulu</option>
                <option value="is">Íslenska</option>
                <option selected="" value="it">Italiano</option>
                <option value="sw">Kiswahili</option>
                <option value="lv">Latviešu</option>
                <option value="lt">Lietuvių</option>
                <option value="hu">Magyar</option>
                <option value="nl">Nederlands</option>
                <option value="no">Norsk</option>
                <option value="pl">Polski</option>
                <option value="pt-BR">Português (Brasil)</option>
                <option value="pt-PT">Português (Portugal)</option>
                <option value="ro">Română</option>
                <option value="sk">Slovenčina</option>
                <option value="sl">Slovenščina</option>
                <option value="sr-Latn">Srpski</option>
                <option value="fi">Suomi</option>
                <option value="sv">Svenska</option>
                <option value="vi">Tiếng Việt</option>
                <option value="tr">Türkçe</option>
                <option value="el">Ελληνικά</option>
                <option value="bg">Български</option>
                <option value="ru">Русский</option>
                <option value="sr">Српски</option>
                <option value="uk">Українська</option>
                <option value="iw">‫עברית‬</option>
                <option value="ur">‫اردو‬</option>
                <option value="ar">‫العربية‬</option>
                <option value="fa">‫فارسی‬</option>
                <option value="am">አማርኛ</option>
                <option value="mr">मराठी</option>
                <option value="hi">हिन्दी</option>
                <option value="bn">বাংলা</option>
                <option value="gu">ગુજરાતી</option>
                <option value="ta">தமிழ்</option>
                <option value="te">తెలుగు</option>
                <option value="kn">ಕನ್ನಡ</option>
                <option value="ml">മലയാളം</option>
                <option value="th">ไทย</option>
                <option value="ko">한국어</option>
                <option value="zh-HK">中文 (香港)</option>
                <option value="zh-CN">中文（简体中文）</option>
                <option value="zh-TW">中文（繁體中文）</option>
                <option value="ja">日本語</option>
            </select>
            </div>
        </div>
    </footer>
</body>
</html>

<!-- url('https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg') -->