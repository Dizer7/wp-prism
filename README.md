# wp-prism
Подключение Prism в WordPress. Syntax Highlighting: PHP, HTML, CSS, JS, C and other.<br>
Скрипт согласно функции работает только на страницах записей с тегом code.

## Подключение:
1.Загрузить папку в корень дочерней темы.<br>
2.Вставить функцию.

## Использование:
1.Вставить на страницу блок Код.<br>
2.Вставить сам код.<br>
3.Указать для записи тег code.<br>
4.В параметрах блока - Дополнительно - Дополнительные классы CSS указываем язык кода. Например: language-html, language-css, language-php или language-js.

## Примечание
В функции вместо проверки на наличие тега has_tag('code')

``php
<?php echo $111; ?>
