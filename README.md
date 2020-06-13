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

<img src="https://i.ibb.co/G058VD4/db.png" alt="db" width="790" height="753" data-load="full" style="">

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

http://myresume.loc/oauth/authorize?client_id=3&response_type=code - запрос

code:
def50200a044638e815d11b76df610c3b4491b5d88d4b8fe5134961e4fa47ee4f0a5d1d112fba3f032ac7e562658da4ab2544f69601f90710be945f6cdeea4008fce355e334ac047d38a5362dd8ca85073195c67965eece5af74b1cc7e7c6173116ce6a50b93724ac19f863a5f031f352a834194728bb0ee129fdda6a11b52e9785644d143a8d1d2ff3d5bfb8af684a557636ce64af0408687f7ec26b837f4eeae0560b0982e2573554f86e8d1ca9ed2b013ed0eb2583b2e2875b54c5b96c25bb77023f0306290922ce81ee935eb6da8fc1161a2c5e0ba056a0a1174f10e8361d6dda9d8c5fbd0171e7c5c64b9f6b5ebf0268fe94798af9c88fb0ab4fc2225e83ed79267b8ca57db20ad34d25e450fec8588be5bde2b5d677dabdaeeab215af766aef6855676c875339b731d1b6f81d91d478213be81f1fda6e88ea4a4d8e6



