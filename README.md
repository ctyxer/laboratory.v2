<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Настройка поекта

Настрока проекта происходит в корневой папке самого проекта() 

## Загрузка зависимостей

Установка зависимостей

    composer upgrade; 
    npm install;

Дать доступ к хранилищю приложения на странице(необходимо для отображения фотографий на странице "Мой блог"). 

    php artisan storage:link


Теперь необходимо создать новый файл для сохранения сообщений пользователей в гостевую книгу. Для этого надо создать файл messages.inc в папке storage/app/messages

    mkdir storage/app/messages;
    echo "[]" > storage/app/messages/messages.inc;

---

## Инициализация проекта

Нужно скопировать файл ".env.example" и переименовать в ".env"

    cp .env.example .env

Далее нужно создать ключ приложения

    php artisan key:generate

Подключить СУБД можно в файле ".env", изменив следующие поля(Используется MySQL и значение порта по умолчанию)

    DB_DATABASE={Название базы данных}
    DB_USERNAME={Логин пользователя СУБД}
    DB_PASSWORD={Пароль пользователя СУБД(если пароля нет, то оставить пустым)}

Запустить миграции и сидер базы данных, для заполнения БД таблицами и значениями этих таблиц

    php artisan migrate --seed

Подготовить дополнительные файлы(.css, .js) для использования на странице

    npm run dev

Запустить в ещё одном терминале приложение 

    php artisan serve 

---
## Администрирование

Чтобы зайти на панель администратора, надо в первую очередь войти в аккаунт администратора

    login: kapystochka
    password: admin

Далее перейти по следующему маршруту. На панели управления предоставлены все необходимые ссылки

    /admin/index