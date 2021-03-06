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
                <option value="ca">Catal??</option>
                <option value="cs">??e??tina</option>
                <option value="da">Dansk</option>
                <option value="de">Deutsch</option>
                <option value="et">Eesti</option>
                <option value="en">English</option>
                <option value="en-GB">English (United Kingdom)</option>
                <option value="es">Espa??ol</option>
                <option value="es-419">Espa??ol (Latinoam??rica)</option>
                <option value="eu">Euskara</option>
                <option value="fil">Filipino</option>
                <option value="fr">Fran??ais</option>
                <option value="fr-CA">Fran??ais (Canada)</option>
                <option value="gl">Galego</option>
                <option value="hr">Hrvatski</option>
                <option value="zu">Isizulu</option>
                <option value="is">??slenska</option>
                <option selected="" value="it">Italiano</option>
                <option value="sw">Kiswahili</option>
                <option value="lv">Latvie??u</option>
                <option value="lt">Lietuvi??</option>
                <option value="hu">Magyar</option>
                <option value="nl">Nederlands</option>
                <option value="no">Norsk</option>
                <option value="pl">Polski</option>
                <option value="pt-BR">Portugu??s (Brasil)</option>
                <option value="pt-PT">Portugu??s (Portugal)</option>
                <option value="ro">Rom??n??</option>
                <option value="sk">Sloven??ina</option>
                <option value="sl">Sloven????ina</option>
                <option value="sr-Latn">Srpski</option>
                <option value="fi">Suomi</option>
                <option value="sv">Svenska</option>
                <option value="vi">Ti???ng Vi???t</option>
                <option value="tr">T??rk??e</option>
                <option value="el">????????????????</option>
                <option value="bg">??????????????????</option>
                <option value="ru">??????????????</option>
                <option value="sr">????????????</option>
                <option value="uk">????????????????????</option>
                <option value="iw">????????????????</option>
                <option value="ur">??????????????</option>
                <option value="ar">????????????????????</option>
                <option value="fa">????????????????</option>
                <option value="am">????????????</option>
                <option value="mr">???????????????</option>
                <option value="hi">??????????????????</option>
                <option value="bn">???????????????</option>
                <option value="gu">?????????????????????</option>
                <option value="ta">???????????????</option>
                <option value="te">??????????????????</option>
                <option value="kn">???????????????</option>
                <option value="ml">??????????????????</option>
                <option value="th">?????????</option>
                <option value="ko">?????????</option>
                <option value="zh-HK">?????? (??????)</option>
                <option value="zh-CN">????????????????????????</option>
                <option value="zh-TW">????????????????????????</option>
                <option value="ja">?????????</option>
            </select>
            </div>
        </div>
    </footer>
</body>
</html>

<!-- url('https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg') -->