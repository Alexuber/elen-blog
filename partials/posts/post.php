<?php // выводим данные с таблицы "посты"

$sql = "SELECT * FROM posts"; // запрос к таблице
if ($result = $conn->query($sql)) : // если мы подключились к БД
    foreach ($result as $row) : // перебираем каждую строку БД
        $categorySQL = "SELECT * from categories WHERE id=" . $row['category_id']; // создаем переменную $categorySQL в которую заносим рядок category_id с таблицы
        $categoryResult = $conn->query($categorySQL); // создаем переменную $categoryResult, в которой будут храниться наши category_id с таблицы
        $category = $categoryResult->fetch_assoc(); // создаем переменную $category в которой будет храниться массив с category_id из таблицы
?>

        <!-- 
1. Зробити посилання на лайки (окрема сторінка, на яку ми будемо посилатись за допомогою Аякс)
2. Зробити перевірку,  чи є запис в базі данних з даним постом і користувачем.
        - якщо є  - видаляти лайк і повертати результат, що лайк видалено
        - інакше - додавати запис, і повертати, що запис створено
-->

        <div class="col-md-4">
            <div class="blog-entry ftco-animate">
                <a href="#" class="img img-2" style="background-image: url(<?php echo $row['preview']; ?>);"></a>
                <div class="text text-2 pt-2 mt-3">
                    <span class="category mb-3 d-block"><a href="#"><?php echo $category['title']; ?></a></span>
                    <h3 class="mb-4"><a href="#"><?php echo $row['title']; ?></a></h3>
                    <p class="mb-4"><?php echo $row['description']; ?></p>

                    <div class="author mb-4 d-flex align-items-center">
                        <a href="#" class="img" style="background-image: url(assets/images/person_3.jpg);"></a>
                        <div class="ml-3 info">
                            <span>Written by</span>
                            <h3><a href="#">Dave Lewis</a>, <span>Nov. 28, 2018</span></h3>
                        </div>
                    </div>

                    <div class="meta-wrap align-items-center">
                        <div class="half order-md-last">
                            <p class="meta">
                                <span><i class="icon-heart"></i>3</span>
                                <span><i class="icon-eye"></i>100</span>
                                <span><i class="icon-comment"></i>5</span>
                            </p>
                        </div>
                        <div class="half">
                            <p><a href="#" class="btn py-2">Continue Reading <span class="ion-ios-arrow-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
    endforeach;
endif;
?>