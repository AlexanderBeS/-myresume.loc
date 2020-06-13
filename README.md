# -myresume.loc

Сервис создания резюме

## Страницы

1. Аутентификация.
2. Регистрация.
3. Главная страница.
4. Страница просмотра своих резюме.
5. Страница просмотра одного резюме.
6. Страница редактирования резюме.
7. Страница просмотра всех резюме (даже удаленных).

## Роли:

Guest, User, Admin.

## Права и доступ:

### Guest:

1. Просмотр главной страницы.
2. Страница авторизации/регистрации.

### User:

1. Просмотр созданных резюме.
2. Создание резюме.
3. Редактирование резюме.
4. Удаление резюме.
5. Скачать резюме в pdf формате.

### Admin:

1. Просмотр всех резюме (даже удаленных).
2. Редактирование не удаленных резюме.
3. Восстановление удаленного резюме.
4. Полное удаление резюме.
 
## Таблицы в БД:

<img src="https://lh3.googleusercontent.com/I_FMsbyif8jhmdIZTWnz8BzL35Qwxd5QvX6eqDnXJ7oXqfD3b91zd2gRXRPwuPXQ2K7kEBzHT9ONQ2wrcXtOcmWkj-t0w5jkAoZJ5nll8oI19vmDclKAXvVnA1Rue4DHACyte3uIxXk9pv8LWvIw8yUXPKZRZJLLD3DtwhKIDlSOe3Yut7BIiKgQcai13bbLLHd4OOHwkZ2bCJWiU92BtV2dEJA90wyL7tZSwI0r7NA2JuMAsIURIjUKABaoQrbP_3pdBlbb75LnK9GHS61TrSbTr2oYnzX__Xe7hnsJz7NHHUWLWC4ivC4uMv3X5P69PkW9b6Ktw2hv4BxW7DnLJJ3z4V0RulYBsJHWiG9RI-pZ3Y4Oe0OU2F75Tj9ELCWNpuNggoZr4NJAmUbWstPvBW7OJy9F1HJWtB89kDlXEVbtBjfsl_BjPGkaSPPX5viCkuudhoaCl0KFzVqA_V6kP-y-_1NeRzUoe7Z6TJR9xos9D8lxLBbri5SruPr6qfteAmPiGdunOvS-3UqL2CQ8akzobftpUKofg345wYDAkXsZU2-QQxYeccdBHnFBYoUPwHkTnN7q3oc8hTvXxm8H_jMEMyImBQ3G_viC8AnKVX2M9LyOC8y23QwuE2bh570VRJWf15xdpSA2j-fCnGrU8r7tfjwnv23FnDSv-8WVzwQ-zeX5fM_d8_2BKnxP=w1060-h893-no?authuser=0" alt="db" width="790" height="753" data-load="full" style="">

## Некоторые ф-ции:

1. Пункты в меню разделяются по доступности на 3 вида: Guest, User, Admin.
2. Настроен вывод ошибок при создании или редактировании резюме.
3. Настроена подгрузка данных в форму, которые были в форме до ошибки.
4. Валидация полей ввода.
5. При регистрации пользователю ему автоматически присваивается группа User.


## Пример ссылок:

<p>
<br>http://myresume.loc/
<br>http://myresume.loc/login
<br>http://myresume.loc/register
<br>http://myresume.loc/logout
<br>http://myresume.loc/resumes
<br>http://myresume.loc/resumes/1
<br>http://myresume.loc/resumes/1/edit
<br>http://myresume.loc/resumes/create
<br>http://myresume.loc/resumes/admin/all
<br>http://myresume.loc/resumes/download/1
</p>



## Api





