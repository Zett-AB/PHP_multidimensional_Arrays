<?php
    $nickname = " Alexander";
    $hello = "Привет";
    $hellow = "Продолжаем изучение - Многомерные массивы."
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Многомерные массивы. Спосбы создания.</title>
    <link rel="stylesheet" type="text/css" href="style.css"></link>
</head>
<body>
    <header class="">
        <?php
            echo $hello.$nickname."<br>";
            echo $hellow
        ?>
        <h2 class="title">Многомерные массивы. Способы создания.</h2>
        <p>
            Массив может содеражть и представлять из себя не только список ключей и значений, но каждый элемент массива может содержать в качестве значения другой массив, который в свою очередь может содержать также массив и так далее.  
        </p>
        <p>
            Есть двухмерные и трехмерные массивы. 
        </p>
    </header>    
    <div class="text_code">
        <h3 class="subtitle">Двухмерные массивы.</h3>
        <p>
            Двухмерные массивы - это массив, который хранит в себе другие массивы.<br>
            Пример создания двухмерного массива:<br>
            <ul>
                <li>Создаем массив flowers:</li>
                <li> $flowers = array(</li>
                <li>array("розы", 100, 15),</li>
                <li>array("тюльпаны", 60, 25),</li>
                <li>array("орхидеи", 120, 7)</li>
                <li>);</li>
            </ul> 
            Видим, что наш массив flowers содержит три массива.<br>
            Для доступа к каждому элементу массива надо указывать два ключа для каждого элемента, т.е. первый для выбора строки, а второй ждя выбора столбца.<br>
            Пример:<br>
            <ul>
                <li> $flowers = array(</li>
                <li>array("розы", 100, 15),</li>
                <li>array("тюльпаны", 60, 25),</li>
                <li>array("орхидеи", 120, 7)</li>
                <li>);</li>
                <li>echo "h1>Ручной доступ к элементам/h1>";</li>
                <li>echo $flowers [0][0]. "цена".$flowers[0][1]."количество".$flowers[0][2]."br>";</li>
                <li>echo $flowers [1][0]. "цена".$flowers[0][1]."количество".$flowers[0][2]."br>";</li>
                <li>echo $flowers [2][0]. "цена".$flowers[0][1]."количество".$flowers[0][2]."br>";</li>
            </ul>
            Смотрим как выглядит данный код:
            <div class="code_php">
                <?php
                  
                    $flowers = array(
                        array("розы", 100, 15),
                        array("тюльпаны", 60, 25),
                        array("орхидеи", 120, 7)
                        );
                        echo "<h4>Ручной доступ к элементам</h4>";
                        echo $flowers [0][0]." цена - ".$flowers[0][1].", количество: ".$flowers[0][2]."<br>";
                        echo $flowers [1][0]." цена - ".$flowers[0][1].", количество: ".$flowers[0][2]."<br>";
                        echo $flowers [2][0]." цена - ".$flowers[0][1].", количество: ".$flowers[0][2]."<br>"; 
                ?>
            </div>
        </p>
        <p>
            Также есть другой вариант написания двухмерного массива:<br>
            Пример:<br>
            <ul>
                <li>Создаем массив $camera:</li>
                <li>$camera ["row1"][0] = "продукты";</li>
                <li>$camera ["row1"][1] = "сумка";</li>
                <li>$camera ["row2"][0] = "фотоаппарат";</li>
                <li>$camera ["row2"][1] = "телефон";</li>
                <li>$camera ["row2"][2] = "апельсин";</li>
                <li>теперь выводим в браузер и опять два варианта вывода А и B;</li>
                <li>Вариант А:</li>
                <li>echo "pre>";</li>
                <li>print_r($camera);</li>
                <li>echo "/pre>"</li>
                <li>Вариант В - это когда использует foreach.</li>
                <li><i> <span style="color:orange;">ВАЖНО - НЕЗАБЫВАЕМ ПРО ВЫШЕУКАЗАННОЕ НАМИ ПРАВИЛО ДОСТУПА К МНОГОМЕРНОМУ МАССИВУ</span></i> </li>
                <li>foreach($camera as $key=>$value){</li>
                <li>foreach($value as $key1=>$value1)</li>
                <li>echo $value1;</li>
                <li>}</li>
                <li>В данном выводе снова наше правило доступа - $value в первом цикле, становится массивом и поэтому мы уже его указываем во втором цикле foreach, соответственно у нас $key1 и $value1 изменяются, чтобы не пересекаться с аналогичными переменными выводящими данные в другом массиве</li>
                <li>При этом видеим, что с функцией foreach наш массив выводится в одну строку слитно.</li>
                <li>Однако добавив всего лишь тег br у нас уже будет столбик - echo $value1."br>";</li>
            </ul> 
            <b>
                <span style="color: red;">ВАЖНО:</span><br>
                Тег pre> используется для включения в HTML-документ предварительно отформатированного текста. Во вложенном в тег тексте сохраняются все пробелы и разрывы строк (как известно, браузеры по умолчанию любое количество идущих подряд пробелов показывают как один).
            </b>
            Смотрим как выглядит код:
            <div class="code_php">
                <?php
                    $camera ['row1'][0] = 'продукты';
                    $camera ['row1'][1] = 'сумка';
                    $camera ['row2'][0] = 'фотоаппарат';
                    $camera ['row2'][1] = 'телефон';
                    $camera ['row2'][2] = 'апельсин';
                                       
                        echo "<h5>Вариант А:</h5>"."<br>";
                            echo "<pre>";
                            print_r($camera);
                            echo "</pre>";
                        echo "<br>"."<h5>Вариант В - это когда используем цикл foreach:</h5>"."<br>";
                        echo "<i> <span style='color:orange;'>ВАЖНО - НЕЗАБЫВАЕМ ПРО ВЫШЕУКАЗАННОЕ НАМИ ПРАВИЛО ДОСТУПА К МНОГОМЕРНОМУ МАССИВУ.</span></i>"."</br>";
                        foreach($camera as $key => $massive){
                            foreach($massive as $key2 => $value){
                                echo $value.'; ';
                            }
                        }
                        foreach($camera as $key => $massive){
                            foreach($massive as $key2 => $value){
                                echo $value.'; '."<br>";
                            }
                        }
                        foreach($camera as $key => $massive){
                            foreach($massive as $key2 => $value){
                                echo "[$key][$key2]=$value"."<br>";
                            }
                        }
                ?>

            </div>
        </p>
    </div>
    <div class="text_code">
        <h3 class="subtitle">Трехиерные массивы.</h3>
        <p>
            Трехмерные массивы - это массивы элементы которых содержат массивы, а эти массивы содержат новые массивы.<br>
            Трехмерные массивы характеризуют <i>ширину, высоту и глубину</i>.<br> 
            Пример создания трехмерного массива:<br>
            <ul>
                <li>Создаем массив flowers:</li>
                <li> $flowers = array(</li>
                <li>array(</li>
                <li>array("розы", 100, 15),</li>
                <li>array("тюльпаны", 60, 25),</li>
                <li>array("орхидеи", 120, 7)</li>
                <li>);</li>
                <li>array(</li>
                <li>array("розы", 100, 15),</li>
                <li>array("тюльпаны", 60, 25),</li>
                <li>array("орхидеи", 120, 7)</li>
                <li>);
            </ul> 
            Видим, что наш массив flowers содержит два массива по три массива каждый.<br>
            Для доступа к каждому элементу массива надо указывать два ключа для каждого элемента, т.е. первый для выбора строки, а второй ждя выбора столбца.<br>
            Пример:<br>
            <ul>
                <li> $flowers = array(</li>
                <li>array(</li>
                <li>array("розы", 100, 15),</li>
                <li>array("тюльпаны", 60, 25),</li>
                <li>array("орхидеи", 120, 7)</li>
                <li>);</li>
                <li>array(</li>
                <li>array("розы", 100, 15),</li>
                <li>array("тюльпаны", 60, 25),</li>
                <li>array("орхидеи", 120, 7)</li>
                <li>);
                <li>echo "h4>Выводим массив в браузер/h4>";</li>
                <li>echo "pre>";</li>
                <li>print_r($flowers);</li>
                <li>echo "/pre>";</li>
                
            </ul>
            Смотрим как выглядит данный код:
            <div class="code_php">
                <?php
                  
                    $flowers = array(
                        array(
                            array("розы", 100, 15),
                            array("тюльпаны", 60, 25),
                            array("орхидеи", 120, 7)
                            ),
                        array(
                            array("розы", 100, 15),
                            array("тюльпаны", 60, 25),
                            array("орхидеи", 120, 7)
                            )
                        );
                        echo "<h4>Выводим массив в браузер</h4>";
                            echo "<pre>";
                            print_r($flowers);
                            echo "</pre>";
                        
                ?>
            </div>
        </p>
        <p>
            Рассмотрим другой вариант написания трехмерного массива более коротким синтаксисом, с помощью квадратных скобок"[]":<br>
            <span style="color:#006400;">Пример:</span><br>
            <ul>
                <li>Создаем массив $storeFlowers:</li>
                    <ul>
                        <li>$storeFlowers = [ "Отделы"=> [ "Цветы" =>[ "розы", 100, 25],</li>
                        <li> ["тюльпаны", 200, 10],</li>
                        <li>["орхидеи", 50, 201] ],</li>
                        <li>["Букеты"=> ["Букет роз", 10, 350],</li>
                        <li>["Букет тюльпанов", 50, 150],</li>
                        <li>["Букет орхидей", 5, 450] ],</li>
                        <li>["Подарки" => ["Ленточки цветные", 10, 350],</li>
                        <li>["Надувные шарики", 50, 150],</li>
                        <li>["Новогодние шарики", 100, 130] ] ];</li>
                    </ul>
            </ul>    
            <i>Теперь выводим в браузер и опять есть несколько вариантов, покажем два варианта вывода - А и B;</i>
            <ul>
                <li>Вариант А - массив в виде структуры записи:</li>
                <ul>
                    <li>echo "pre>";</li>
                    <li>print_r($storeFlowers);</li>
                    <li>echo "/pre>"</li>
                </ul>
            </ul>
            <b style="color:#006400;">Смотрим код в действиии:</b><br>
            <div class="code_php">
            <?php
                $storeFlowers = [ "<b>Отделы</b>"=>[ "<b>Цветы</b>" =>
                                        ["розы", 100, 25],
                                        ["тюльпаны", 200, 10],
                                        ["орхидеи", 50, 201] 
                                    ],
                                  [  "<b>Букеты</b>"=>  
                                        ["Букет роз", 10, 350],
                                        ["Букет тюльпанов", 50, 150],
                                        ["Букет орхидей", 5, 450] 
                                    ],
                                  [ "<b>Подарки</b>"=>
                                        ["Ленточки цветные", 10, 350],
                                        ["Надувные шарики", 50, 150],
                                        ["Новогодние шарики", 100, 130] 
                                  ] 
                                ];
                echo "<h4>Выводим массив  с кратким написанием в браузер</h4>";
                echo "<pre>";
                print_r($storeFlowers);
                echo "</pre>";                    
            ?>
            </div>
            <ul>
                <li><b style="color:blue;">Вариант В - используем цикл for.</b></li>
                    <ul>
                        <li><b>Создаем массив $storeFlowers, не указывая индексы/названия массивов, их укажем при выводе:</b></li>
                            <ul>
                                <li>$storeFlowers = [ [ [ "розы", 100, 25],</li>
                                <li>["тюльпаны", 200, 10],</li>
                                <li>["орхидеи", 50, 201] ],</li>
                                <li>[ ["Букет роз", 10, 350],</li>
                                <li>["Букет тюльпанов", 50, 150],</li>
                                <li>["Букет орхидей", 5, 450] ],</li>
                                <li>[ ["Ленточки цветные", 10, 350],</li>
                                <li>["Надувные шарики", 50, 150],</li>
                                <li>["Новогодние шарики", 100, 130] ] ];</li>
                            </ul>
                    <ul>
            </ul>    
            <i style="color:#1E90FF;">Выводим массив в браузер:</i>
            <ul>   
                <li><span style="color:#CD5C5C;">echo</span> "ul>"</li>
                <li><span style="color:#9400D3;">for</span>($layer = 0; $layer < 3; $layer++){</li>
                    <ul>
                        <li><span style="color:#CD5C5C;">echo</span> "li> Отдел $layer";</li>
                        <li><span style="color:#CD5C5C;">echo</span> "ul>";</li>
                            <ul>
                                <li><span style="color:#9400D3;">for</span> ($row = 0; $row < 3; $row++){</li>
                                    <ul>
                                        <li><span style="color:#CD5C5C;">echo</span> "li> Отдел $row";</li>
                                        <li><span style="color:#CD5C5C;">echo</span> "ul>";</li>
                                            <ul>
                                                <li><span style="color:#9400D3;">for</span> ($col = 0; $col < 3; $col++){</li>
                                                <li><span style="color:#CD5C5C;">echo</span> "li>".$storeFlowers[$layer][$row][$col]."/li>";</li>
                                                <li>}</li>
                                            </ul> 
                                        <li><span style="color:#CD5C5C;">echo</span> "/ul>";</li>
                                        <li><span style="color:#CD5C5C;">echo</span> "/li>";</li>
                                    </ul>    
                                <li>}</li>
                            </ul>
                        <li><span style="color:#CD5C5C;">echo</span> "/ul>";</li>
                        <li><span style="color:#CD5C5C;">echo</span> "/li>";</li>
                    </ul>
                <li>}</li>
                <li><span style="color:#CD5C5C;">echo</span> "/ul>";</li>
            </ul><br> 
            
            <b style="color:#000080;">Смотрим как выглядит код:</b><br>
            <div class="code_php">
                <?php
                    $storeFlowers = [  [ 
                                            ["розы", 100, 25],
                                            ["тюльпаны", 200, 10],
                                            ["орхидеи", 50, 201] 
                                        ],
                                        [   
                                            ["Букет роз", 10, 350],
                                            ["Букет тюльпанов", 50, 150],
                                            ["Букет орхидей", 5, 450] 
                                        ],
                                        [ 
                                            ["Ленточки цветные", 10, 350],
                                            ["Надувные шарики", 50, 150],
                                            ["Новогодние шарики", 100, 130] 
                                        ] 
                                    ];
                    echo "<ul>";
                        for($layer = 0; $layer < 3; $layer++){
                            echo "<li> Отдел $layer";
                            echo "<ul>";
                                for ($row = 0; $row < 3; $row++){
                                        echo "<li> Товары отдела: $row";
                                        echo "<ul>";
                                            for ($col = 0; $col < 3; $col++){
                                                    echo "<li>".$storeFlowers[$layer][$row][$col]."</li>";
                                                }
                                        echo "</ul>";
                                        echo "</li>";
                                    }
                            echo "</ul>";
                            echo "</li>";
                            }
                    echo "</ul>";
                ?> 
            </div>
        </p>
    </div>

</body>
</html>