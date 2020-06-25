# myresume.loc

Сервис по созданию резюме.

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

<img src="https://lh3.googleusercontent.com/KEfsrir1YCaaqV8dKrPtiT04kTH2NCotEAkP1244RrjTlNac5BhaUK_NTwcHuViXIyA0g_7AEomCvT7JFrPm6RbX1oO1LdXFXOrUDceRGgQHiw1DLEqEEOUP9OtZX2SlBEburFioquv9PQGlwlenRo5lokjvmJZaGEP-JdqjeIlHqbSo_59L5NWc3Qm3zohLvQaygHFD08MMsLV1k2g3BoQXt35bwvohnn5myddPRCGvLlIRNA5fKbsMdaASLhdDalils3HBl9iQYdgVBC9cBg8rWovyJtP6S5pusdv7geIlmiixYYUPIiUjC1aEbsOSXR1ZxTTc3E3lymn1uFeiHUYFaeL0AKMPcVflyH6xgEO6Zv3Njm82OvagY9Oh--ZNwdDPZSea8zLHCj6_zu96xcn2T-i0t38h8tHR0bwdVWco1n7_HdSagKF7hKLFP6NpYLMlmr9iqWs0bZ3vw9ltP93NqA_GLepVIdW4oA-Z6b4SsZB4YgI0p9dMmVNfs4M9QBr8VCDMsDDyuicFgR5IGHktRMJuJ2PFzdMfg7AXs7Iviyu73gAGsI7TU_iZRUFNyqwdzkXoCoMoKiwVUCOb_LQBQUkYdRs8A8Qq2_vIRX8VFHu7TqKpHgPSwmFm0AfLUxWYFOIpYQSlT_g_Llp6-IMe6krDWsuXpuwlt_MAD5ZztuaqQEJ-cjLpU0n6=w1060-h893-no?authuser=0" alt="db" width="790" data-load="full" style="">

## Некоторые ф-ции:

1. Пункты в меню разделяются по доступности на 3 вида: Guest, User, Admin.
2. Настроен вывод ошибок при создании или редактировании резюме.
3. Настроена подгрузка данных в форму, которые были в форме до ошибки.
4. Валидация полей ввода.
5. При регистрации пользователю ему автоматически присваивается группа User.

## Роуты

<img src="https://lh3.googleusercontent.com/EhOC6RtB0O8xBjp1RmBYpow2MHzzYvzH_f9m8Va-378vby1-WYB5sAbrs1ZCV0Rv8Fjuri9j7S2BpgHAnl4L3ctYKnGOm_Ph-rDcPle8c_oKpDWvy3EtqwrPJJTgV-H_auQN5BOL8Nlpr9-4DlxqoVJ7_CqSvKLobXm0N4pxS_PuJhMZdzT8rtmhQQA3Nl-8R49ZSwGLj74IGRUv-yQ8fQCCAXBWhGhs5_GwLFkzfk-0OzArL8rbPzaM7QUmXSRIWMisAswjMDoxBoBevZK3CnKm7ri-B33VJo2_WoNmVaxUpvhq8De5uCySlnPtwow4LR7Dp7KpGX-_GF69koFRKJDJ2A0HXZr7Sng5pRnZWeFqxBDwGmKrxT3aQTnTEpIt5nszZN5HnHhhHc6Uj8l0FxW4DPgQTVSSkFPuQaQOhJFmlpe9fD3nELU9qS-irG3S1j2iBNnfc0LGzvxbdLoTdQNJNWFEyoMkEZxSu7Pwf5aMBuyaWbyS3fTNboj8Rmg-F9pGYXZZPn7nTI9Az7JJwPF_gtv6kGQtZrL8XMFyODEjsDooxL-MS8kJ6wgtVpdo6gOsJQf2Uet1THlAtdaRplNGx2BPIUvvutl8KflQzuucEm5UR2WhE7mhLKTz-5suDtdThPomoac35gdkX70tC-2KtgVZ5fs0zRp5wQPMTSR_wLw9YlUW20DdwVzb=w1425-h688-no?authuser=0" alt="db" width="790" data-load="full" style="">


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

### Вывод всех резюме:
<img src="https://lh3.googleusercontent.com/g6ZagCXDQi2UMXvsgFGwKBz6QyElwcMITBSgwyUrROXKkEk6Hp6Ivd4UkUGwAgS0iytgFXy0XItgb6TGFSZuYOTAFpMgct6QmsUmLAyxeGPgnNmjDKzddbnp1ByKyurcQUDBdxDG211ntS1MpYWazEBW_zTuJTs-9oo06blVygzAWTKb2yVCOFyd8E16H85jT1RPIzsKRKvuVk7DfIJ9BZq60BzQBAUSBGCYZZjvmBVSkG7vk-mkQj_s_WwZuAftING3KqFGqne7FRhvPSwSi8fZWEO8dBPJ5UPi1A5xjqnXHydk-QAV54aeXP2apixVlmfIiEAHpt4Eiuyel28RIeut8VgMPt98zo6bvxqFh7rjzUTelj0ssyXH9Aj6n45CqliJvwhOUUb2qD8gUYVWGfhykkCmewXSrfoGKU21xU8AuJtk1QGk3CQx8YelUPZIGLcLWT5ruEW6etzB2Gdi_QX4E4lPUp_j91oDVP_0mdL9l-coODr7HGCEqa2hdifAw4KacCowNYhDS-Mm7JHn1560a5bHL4furJelZLDjEawdEEdcB1cObCoq4wDGLnw-Bx6fsXSS8GhuvgkzI-PImDTbwEbCy97GLo5_JyQnic3bArFsiQG16wLdXJcMym_f3FtzpAr89wex96pz1b35U6u3RS5dR2umzpCJMlpM902VsPZ3v2OIYyUr_pMOTNtjTfytXg=s1301-w1301-h912-no?authuser=0" alt="Вывод всех резюме" width="790" data-load="full" style="">


### Вывод одного резюме:
<img src="https://lh3.googleusercontent.com/Cyo0Xan2I4s4cVX7NThxEQYi1QH6nyHUbTJDp7PpZnpc1hAI4GuPpToVgEgmvbDCK7gsffpGY4o4E8YA5ucOngvIqxSuyMzn7eaa8NnWwpROt1c0DB_zP5ByUjdf56f1b2SousHMkTLjNAJ5Sirj-a-d7U3Bxd7qG-BMKy42AXlUX-Dt85hFTmtWfzU3a5_9DvbOkHu5hJK5MO4KI9zPDs8sEsG31F8h21Nn_1N4eyjZ3Pq2uEwdbqwYj4_TSCrSUE1yLHsrSYOgzEFqHPjPo1iypv1VHgBuCPP4rlxIxcMcaXDtNq6DK2xGT8cChS-01wsX1u0eyGd5HmO3nXhb9j0mWeldpS5dkQvlTX_kSHU7Y_lLhXuZYXkQzTlo-KbGv7EuoSMU8kDYi6PMnspZIiaz5_vsgtHu7x2FVbgPPXQu8BUvYZamxu12nnC4WiyQVGdAie5RHzGxgnr9KZ9rVkrxdxG6eanRXjuf1-b2OokKQmGiTYPyOe9Xl0qurTku32JxRxW6JHwJFFwxD-Qn9_O7h_fviFn9PGvXm8GC-yjQ7mCe751EEE0ZPyYmyMgqcZQ0fK5oi3EG34FR97tAO9vcGxgpQ2iZEK56rhvMQp5XcpDmkWN2ktAuyIsQLrBpbcCqHDxyM5_M1qYmm6xFzwYTQ34-4LR56bELVJWeqrh5FPlyL9KjKfcihoiU=w1020-h883-no?authuser=0" alt="db" width="790" data-load="full" style="">

### Удаление резюме
<p><img src="https://lh3.googleusercontent.com/nBZ8dYtgvMaAEeChytoahohzAiA1gSb6BNK5ZHhUEhIarDC9Zx51PjylB6tqALOMjyAGjVsmyajK4eWwdbONg6qm3Spfs6N_1ThRSBiHz0l1SpeSJ8Dol8mfwWCDObwrBsgQbhYDrl5B9ufqpTjvR5RyucPRdDU-uauymKGXYkyYMZnILwY1CgyzOxy8QsX8DPXfHolEqR2qbLQAL8cDiZlkq576reO-XtiihZ4AK93sx1pYx31JsEGBmlKZnpGtVQn2-knABO13J01JYSHq1fL82JeyrYYEGWRqpsn1Kd77dc8hxvnI74QBl_rZbvNXkF3WEKCI1GPCDWNekN7pMprE4zspJdeWELo7lFVkbJ6WSL7Rqp7dE58gVj1ip34nR07cP1Qfx8of1wnddKBusWRn08i_voxqrZUFbzEuJwUov9ZTTZGnwPwsaEJokgl_O2sN7vMUDS0C-vPlFn0FZUUcoILIQODy6wkNgsmdS4bEX8DcTxzN8BVE-NVKqEjaHtAMKKahKxAjkYZsGw_tb0o3z4nfClZsp0bdGm_cOUi-MCPofOf5l378l1W7pPIO-vnLtzHu9eYvJCnfGSrfmrhU4jnsfSJUBOCkj0hjM4u_ZIfQjTa7_hVBmi1EpPztHYj1K2qS0w9Uo3tfWhfOeJQwUn5Fm7U6IcwShACrEkD4xR70hvgEQEXp1o6a=w1425-h785-no?authuser=0" alt="Удаление резюме" width="790" data-load="full" style=""></p>


![Image alt](https://github.com/AlexanderBeS/myresume.loc/blob/master/screenshots/apiget1resume.PNG)
![image alt](https://github.com/AlexanderBeS/myresume.loc/raw/master/screenshots/apiget1resume.PNG)
