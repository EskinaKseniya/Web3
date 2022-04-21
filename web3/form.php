<!DOCTYPE html>
<html lang = "ru">
    <head>
        <meta charset="UTF-8">
        <meta name = "viewpoint" content = "width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="#" type="image/x-icon">
        <link rel = "stylesheet" href = "style.css">
        <title> Web_Backend3 </title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <p>
                <label> 
                    <strong> Имя: </strong> <br> <br>
                        <input name="name" placeholder = "Введите Ваше имя" type = "text" value = "" >
                </label> 
            </p>
            <p>
                <label> 
                    <strong> E-mail: </strong> <br>  <br>
                        <input name = "email" placeholder = "Введите Ваш E-mail" type = "text" value = "" >
                </label> 
            </p>
            <p>
                <label>
                    <strong > Год рождения </strong> <br> <br>
                        <select name = "year" >
                            <option value=""> Выберите возраст </option>
                            <?php
                                for ( $i = 2004; $i >= 1920; $i-- )
                                {
                                    echo "<option value = '$i'> $i </option>";
                                }
                            ?>
                        </select>
                </label>
            </p>
            <p>
                <label>
                    <strong> Пол </strong> <br> <br>
                        <input type = "radio" name = "sex" value = "male"/> Мужской <br> <br>
                        <input type = "radio" name = "sex" value = "female"/> Женский <br>
                </label>
            </p>
            <p>
                <label>
                    <strong > Количество конечностей </strong> <br> <br>
                        <input type="radio" name="limbs" value="1"> 1
                        <input type="radio" name="limbs" value="2"> 2
                        <input type="radio" name="limbs" value="3"> 3
                        <input type="radio" name="limbs" value="4"> 4
                </label>
            </p>
            <p>
                <strong> Сверхспособности: </strong> <br> <br>
                <select multiple name = "superpowers[]">
                    <option value = "immortal"> Бессмертие </option>
                    <option value = "walls"> Прохождение сквозь стены </option>
                    <option value = "levitaion"> Левитация </option>
                </select>
            </p>
            <p>
                <label>
                    <strong> Биография: </strong> <br> <br>
                            <textarea class="textarea-biography" placeholder="Что у Вас нового?" name = "biography"></textarea>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="agree"> <strong> С контрактом ознакомлен(-а) </strong>
                </label>
            </p>
            <p class = "button">
                <input type="submit" value="Отправить">
            </p>
        </form>              
    </body>
</html>