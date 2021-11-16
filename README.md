## Тестовое задание для фреймворка Laravel

Привет, это простое задание, суть задания оценить ваши навыки в работе с laravel, изучить стилистику написания кода.

Создать 3 миграции в базу данных с помощью Artisan:
## Таблица “Жанры” с полями:
ID
Название жанра
## Таблица Фильмы с полями :
ID
Название фильма
Статус публикации
## Таблица связи фильмы с жанрами
Создать seeds для тестового заполнения вышеуказанных таблиц
Создать модели, контроллеры, для создания, вывода, редактирования и удаления записей.
При создании записи в таблицу фильмы, должна происходить загрузка изображения 
с постером фильма ( если изображение отсутствует, к записи должно прикрепляться дефолтное изображение).
Так же фильм не должен быть опубликован, публикация записи должна быть предусмотрена отдельным методом.
Создать контроллеры REST API для выборки и пагинации данных в формате json :

- жанры - выводит список всех жанров;
- жанры/id - выводит список всех фильмов в данном жанре с разбивкой на страницы;
- фильмы - выводит все фильмы с разбивкой на страницы;
- фильмы/id - выводит определенный фильм по ID;

Фильм всегда в себе должен содержать категории и ссылку на изображение.

Внимание в контроллерах должно быть минимальное количество логики.

## Установка:
## Выполнить команду:
- composer install .
- Переименовать файл .env.example в файл .env и настроить подключение к базе данных и пр.
- php artisan storage:link.
- php artisan migrate --seed.

## Стартовая страница.
- public\index.php.


## Использованы :
- Laravel 8
- php 8
- MySQL 8
- composer
