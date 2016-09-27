# Skeleton
Skeleton - каркас для php-приложения. Структура во многом похожа на структуру фреймворка Laravel, да и практически ей идентична за небольшим исключением. Основное отличие - в laravel весь код самого фреймворка находится в пакетах, тут же программисту предполагается писать код самому и помещать в директории `app\System`, где уже располагаются базовые файлы классов.
### Установка
`composer create-project --prefer-dist hunternnm/skeleton `
### Структура приложения
Root-директорией является папка `public`. В ней из всего кода должен лежать только файл `index.php`, который запускает всё приложение. Весь файл - это подключение `autoload.php`, генерируемого composer'ом. Кроме `index.php` - изображения, стили, скрипты, шрифты и другие файлы для отдачи пользователю. Никакой логики здесь быть не должно.
Весь код для бекэнда следует размещать в папке `app`. В ней располагаются директории для контроллеров, моделей и папка с кодом самого приложения. При необходимости добавлять репозитории директорию следует создавать руками.
В директории `app\System` располагаются пустые классы, необходимые для работы приложения. Всю логику следует писать исходя из необходимости проекта.
В папке `config` следует хранить настройки приложения, настройки подключения к базе данных и иные данные(ключи к API сервисом и пр).
При необходимости создавать миграции либо хранить sql-файлы для заполнения БД их следует хранить в папке `database` 
В папке `routes` находится файл `web.php`, в который следует помещать роуты приложения. При необходимости можно размещать в директории и другие файлы роутов, если в логике приложения добавить такую возможность.
В папку `tests` следует помещать тесты приложения.
Папка `views` должна содержать в себе только файлы шаблонов приложения. При необходимости к приложению можно подключить любой шаблонизатор.
### Внимание
Данный проект - моё личное видение структуры приложения. Я не претендую на правильность подхода, расположения файлов и других вещей. Но, как показывает практика - для начала это вполне рабочий вариант.