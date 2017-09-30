<?php
    if (age>=18 && age<=59){
        echo "Вам еще работать и работать";
    } else if(age>59) {
        echo "Вам пора на пенсию";
    } else if (age>=0 && age <=17){
        echo "Вам еще рано работать";
    } else if (age < 0 || age == null){
        echo "Неизвестный возраст";
    }