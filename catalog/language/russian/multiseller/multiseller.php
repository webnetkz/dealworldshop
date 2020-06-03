<?php

// **********
// * Global *
// **********
$_['ms_viewinstore'] = 'Показать в магазине';
$_['ms_view'] = 'Открыть';
$_['ms_publish'] = 'Выставить на продажу';
$_['ms_unpublish'] = 'Снять с продажи';
$_['ms_edit'] = 'Редактировать';
$_['ms_clone'] = 'Скопировать';
$_['ms_relist'] = 'Опубликовать повторно';
$_['ms_rate'] = 'Оценить';
$_['ms_download'] = 'Скачать';
$_['ms_create_product'] = 'Создать товар';
$_['ms_delete'] = 'Удалить';
$_['ms_update'] = 'Обновить';
$_['ms_type'] = 'Тип';
$_['ms_amount'] = 'Сумма';
$_['ms_status'] = 'Статус';
$_['ms_date_paid'] = 'Дата перевода';
$_['ms_last_message'] = 'Последнее сообщение';
$_['ms_description'] = 'Описание';
$_['ms_id'] = '#';
$_['ms_by'] = ' - ';
$_['ms_action'] = 'Действие';
$_['ms_sender'] = 'От кого';
$_['ms_message'] = 'Сообщение';
$_['ms_date_created'] = 'Дата';
$_['ms_date'] = 'Дата';
$_['ms_button_submit'] = 'Сохранить';
$_['ms_button_add_special'] = 'Определить цену';
$_['ms_button_add_discount'] = 'Определить скидку';
$_['ms_button_generate'] = 'Сгенерировать изображения из PDF файла';
$_['ms_button_submit_request'] = 'Отправить запрос';
$_['ms_button_save'] = 'Сохранить';
$_['ms_button_cancel'] = 'Отменить';
$_['ms_button_select_predefined_avatar'] = 'Выбрать аватар из коллекции';
$_['ms_button_select_image'] = 'Выбрать';
$_['ms_button_select_images'] = 'Загрузить файлы';
$_['ms_button_select_files'] = 'Загрузить файл';
$_['ms_transaction_order'] = 'Продажа: Заказ #%s';
$_['ms_transaction_sale'] = 'Продажа: %s (-%s комиссия)';
$_['ms_transaction_refund'] = 'Возврат: %s';
$_['ms_transaction_listing'] = 'Товар: %s (%s)';
$_['ms_transaction_signup']      = 'Плата за регистрацию в %s';
$_['ms_request_submitted'] = 'Ваш запрос на выплату средств отправлен';
$_['ms_totals_line'] = 'Продавцов: %s Товаров: %s';
$_['ms_text_welcome'] = '<a href="%s">Войти</a> | <a href="%s">Зарегистрироваться</a> | <a href="%s">Аккаунт продавца</a>.';
$_['ms_button_register_seller'] = 'Как продавец';
$_['ms_register_seller_account'] = 'Зарегистрировать аккаунт продавца';

// Mails

// Seller
$_['ms_mail_greeting'] = "Здравствуйте %s,\n\n";
$_['ms_mail_greeting_no_name'] = "Здравствуйте,\n\n";
$_['ms_mail_ending'] = "\n\nС уважением,\n%s";
$_['ms_mail_message'] = "\n\nСообщение:\n%s";
$_['ms_mail_subject_seller_account_created'] = 'Учетная запись продавца создана';
$_['ms_mail_seller_account_created'] = <<<EOT
Ваша учетная запись продавца в магазине %s создана!

Вы можете начинать добавлять товары.
EOT;

$_['ms_mail_subject_seller_account_awaiting_moderation'] = 'Учетная запись продавца ожидает модерации';
$_['ms_mail_seller_account_awaiting_moderation'] = <<<EOT
Ваша учетная запись продавца в магазине %s была создана и ожидает модерации.

Вы получите уведомление по электронной почте как только учетная запись будет проверена и подтверждена.
EOT;

$_['ms_mail_subject_product_awaiting_moderation'] = 'Файл ожидает модерации';
$_['ms_mail_product_awaiting_moderation'] = <<<EOT
Ваш Файл %s в магазине %s ожидает модерации.

Вы получите уведомление по электронной почте как только Файл будет проверен и подтвержден.
EOT;

$_['ms_mail_subject_product_purchased'] = 'Новый заказ';
$_['ms_mail_product_purchased'] = <<<EOT
Ваше дополнение было только что продано на %s.

Покупатель: %s (%s)

Файл:
%s
Сумма: %s
EOT;

$_['ms_mail_product_purchased_no_email'] = <<<EOT
Ваше дополнение было только что продано на %s.

Покупатель: %s

Файл:
%s
Сумма: %s
EOT;

$_['ms_mail_subject_seller_contact'] = 'Новое сообщение от покупателя';
$_['ms_mail_seller_contact'] = <<<EOT
Вы получили новое сообщение от покупателя!

Имя: %s

Email: %s

Файл: %s

Сообщение:
%s
EOT;

$_['ms_mail_seller_contact_no_mail'] = <<<EOT
Вы получили новое сообщение!

Имя: %s

Товар: %s

Сообщение:
%s
EOT;

$_['ms_mail_product_purchased_info'] = <<<EOT
\n
Адрес доставки:

%s %s
%s
%s
%s
%s %s
%s
%s
EOT;

$_['ms_mail_product_purchased_comment'] = 'Комментарий: %s';

$_['ms_mail_subject_withdraw_request_submitted'] = 'Подан запрос о выплате денег';
$_['ms_mail_withdraw_request_submitted'] = <<<EOT
Мы получили Ваш запрос о выплате денег. Вы получите Ваши средства как только заявка будет обработана.
EOT;

$_['ms_mail_subject_withdraw_request_completed'] = 'Выплата завершена';
$_['ms_mail_withdraw_request_completed'] = <<<EOT
Ваш запрос о выплате денег был обработан. Ваши средства должны поступить к Вам на счет.
EOT;

$_['ms_mail_subject_withdraw_request_declined'] = 'В выплате отказано';
$_['ms_mail_withdraw_request_declined'] = <<<EOT
Ваш запрос о выплате денег получил отказ. Ваши средства были возвращены на Ваш внутренний счет %s.
EOT;

$_['ms_mail_subject_transaction_performed'] = 'Новая финансовая операция';
$_['ms_mail_transaction_performed'] = <<<EOT
В %s была совершена новая транзакция. Вы можете их увидеть войдя в учетную запись, в разделе Финансовые отчеты.
EOT;

$_['ms_mail_subject_remind_listing'] = 'Срок публикации товара подошел к концу';
$_['ms_mail_seller_remind_listing'] = <<<EOT
Срок публикации %s подошел к концу. Зайдите в учетную запись продавца, если хотите повторно выставить товар(ы) на продажу.
EOT;

// *********
// * Admin *
// *********
$_['ms_mail_admin_subject_seller_account_created'] = 'Создана новая учетная запись продавца';
$_['ms_mail_admin_seller_account_created'] = <<<EOT
В %s создана новая учетная запись продавца.
Имя продавца: %s (%s)
E-mail: %s
EOT;

$_['ms_mail_admin_subject_seller_account_awaiting_moderation'] = 'Новая учетная запись продавца ожидает модерации';
$_['ms_mail_admin_seller_account_awaiting_moderation'] = <<<EOT
В %s создана новая учетная запись продавца и ожидает модерации!
Имя продавца: %s (%s)
E-mail: %s

Вы можете проверить её в Панели управления, меню Marketplace - Продавцы.
EOT;

$_['ms_mail_admin_subject_product_created'] = 'Добавлен новый товар';
$_['ms_mail_admin_product_created'] = <<<EOT
Новый товар %s добавлен в %s.

Вы можете просмотреть его в Панели управления, меню Marketplace - Товары.
EOT;

$_['ms_mail_admin_subject_new_product_awaiting_moderation'] = 'Новый товар ожидает модерации';
$_['ms_mail_admin_new_product_awaiting_moderation'] = <<<EOT
Новый товар %s добавлен в %s и ожидает модерации!

Вы можете проверить его в Панели управления, меню Marketplace - Товары.
EOT;

$_['ms_mail_admin_subject_edit_product_awaiting_moderation'] = 'Товар отредактирован и ожидает модерации';
$_['ms_mail_admin_edit_product_awaiting_moderation'] = <<<EOT
Товар %s был отредактирован в %s и ожидает модерации!

Вы можете проверить его в Панели управления, меню Marketplace - Товары.
EOT;

$_['ms_mail_admin_subject_withdraw_request_submitted'] = 'Запрос о выплате денег ожидает модерации';
$_['ms_mail_admin_withdraw_request_submitted'] = <<<EOT
Подан новый запрос о выплате денег.

Вы можете обработать его в Панели управления, меню Marketplace - Выплаты.
EOT;

// Success
$_['ms_success_product_published'] = 'Товар выставлен на продажу';
$_['ms_success_product_unpublished'] = 'Товар снят с продажи';
$_['ms_success_product_created'] = 'Товар создан';
$_['ms_success_product_updated'] = 'Товар обновлен';
$_['ms_success_product_deleted'] = 'Товар удален';

// Errors
$_['ms_error_sellerinfo_nickname_empty'] = 'Имя пользователя должно быть заполнено!';
$_['ms_error_sellerinfo_nickname_alphanumeric'] = 'Имя пользователя может содержать только буквы латинского алфавита и числа';
$_['ms_error_sellerinfo_nickname_utf8'] = 'Имя пользователя может содержать только печатные символы кодировки UTF-8';
$_['ms_error_sellerinfo_nickname_latin'] = 'Имя пользователя может содержать только буквы латинского алфавита, числа и буквы с диакритическими знаками';
$_['ms_error_sellerinfo_nickname_length'] = 'Имя пользователя должно быть от 4 до 50 символов';
$_['ms_error_sellerinfo_nickname_taken'] = 'Данное имя пользователя уже занято';
$_['ms_error_sellerinfo_company_length'] = 'Название компании не может быть длиннее 50 символов';
$_['ms_error_sellerinfo_description_length'] = 'Описание не может быть длиннее 1000 символов';
$_['ms_error_sellerinfo_paypal'] = 'Введен некорректный адрес PayPal';
$_['ms_error_sellerinfo_terms'] = 'Вы должны согласиться с условиями %s!';
$_['ms_error_file_extension'] = 'Неправильное расширение файла';
$_['ms_error_file_type'] = 'Неправильный тип файла';
$_['ms_error_file_size'] = 'Файл слишком большой';
$_['ms_error_image_too_small'] = 'Размер изображения слишком маленький. Минимально допустимый размер: %s x %s (Ширина x Высота)';
$_['ms_error_image_too_big'] = 'Размеры изображений слишком большие. Максимально допустимый размер: %s x %s (Ширина x Высота)';
$_['ms_error_file_upload_error'] = 'Ошибка загрузки файла';
$_['ms_error_form_submit_error'] = 'Произошла ошибка при отправлении формы. Пожалуйста, свяжитесь с администрацией магазина для разъяснения.';
$_['ms_error_form_notice'] = 'Пожалуйста, проверьте все поля на наличие ошибок.';
$_['ms_error_product_name_empty'] = 'Имя товара должно быть заполнено';
$_['ms_error_product_name_length'] = 'Имя товара должно быть от %s до %s символов';
$_['ms_error_product_description_empty'] = 'Описание товара не может оставаться пустым';
$_['ms_error_product_description_length'] = 'Описание товара должно быть от %s до %s символов';
$_['ms_error_product_tags_length'] = 'Строка слишком длинная';
$_['ms_error_product_price_empty'] = 'Пожалуйста, укажите цену Вашего товара';
$_['ms_error_product_price_invalid'] = 'Некорректная цена';
$_['ms_error_product_price_low'] = 'Слишком маленькая цена на товар!';
$_['ms_error_product_price_high'] = 'Цена на товар слишком высокая!';
$_['ms_error_product_category_empty'] = 'Пожалуйста, укажите к какой Категории относится Ваш товар';
$_['ms_error_product_model_empty'] = 'Укажите Модель товара';
$_['ms_error_product_model_length'] = 'Модель товара должна быть от %s до %s символов';
$_['ms_error_product_image_count'] = 'Необходимо загрузить хотябы %s изображение для товара';
$_['ms_error_product_download_count'] = 'Необходимо загрузить хотябы %s файл для товара!';
$_['ms_error_product_image_maximum'] = 'Для одного товара разрешено загрузить не более %s изображений';
$_['ms_error_product_download_maximum'] = 'Для одного товара разрешено загрузить не более %s файлов!';
$_['ms_error_invalid_quantity_discount_priority'] = 'Необходимо указать приоритет';
$_['ms_error_invalid_quantity_discount_quantity'] = 'Количество должно быть 2 или более';
$_['ms_error_invalid_quantity_discount_price'] = 'Неверное значение цены со скидкой';
$_['ms_error_invalid_quantity_discount_dates'] = 'Пожалуйста, проверте внимательно - все ли поля заполнены.';
$_['ms_error_invalid_special_price_priority'] = 'Необходимо указать приоритет для этой скидки';
$_['ms_error_invalid_special_price_price'] = 'Необходимо указать цену для этой скидки';
$_['ms_error_invalid_special_price_dates'] = 'Поля даты для скидки должны быть заполнены';
$_['ms_error_seller_product'] = 'Вы не можете купить свой собственный товар';
$_['ms_error_product_message_length'] = 'Сообщение не может быть длиннее 1000 символов';
$_['ms_error_product_invalid_pdf_range'] = 'Пожалуйста, задайте страницы в виде разделенного запятыми (,) списка страниц либо диапозонов страниц, используя дефис (-)';
$_['ms_error_product_attribute_required'] = 'Этот аттрибут обязателен';
$_['ms_error_product_attribute_long'] = 'Это значение не может быть длиннее %s символов';
$_['ms_error_withdraw_amount'] = 'Введено некорректное количество';
$_['ms_error_withdraw_balance'] = 'На Вашем балансе недостаточно средств';
$_['ms_error_withdraw_minimum'] = 'Невозможно выводить меньше средств, чем заданный минимальный предел';
$_['ms_error_contact_email'] = 'Пожалуйста, введите действительный адрес электронной почты';
$_['ms_error_contact_captcha'] = 'Неправильный код с изображения CAPTCHA';
$_['ms_error_contact_text'] = 'Сообщение не может быть длиннее 2000 символов';
$_['ms_error_contact_allfields'] = 'Пожалуйста, заполните все поля';


// Account - General
$_['ms_account_unread_pm'] = 'У вас есть непрочитанные личные сообщение';
$_['ms_account_unread_pms'] = 'У вас есть %s новых личных сообщений';
$_['ms_account_register_new'] = 'Новый продавец';
$_['ms_account_register_seller'] = 'Регистрация';
$_['ms_account_register_seller_note'] = 'Создайте свой аккаунт и начинайте добавлять свои товары!';
$_['ms_account_register_details'] = 'Шаг 1: Ваши детали';
$_['ms_account_register_seller_success_heading'] = 'Профиль продавца успешно зарегистрирован!';
$_['ms_account_register_seller_success_message']  = '<p>Добро пожаловать в %s!</p> <p>Поздравляем! Профиль продавца успешно зарегистрирован!</p> <p>Теперь, Вы можете разместить свои файлы на нашем сайте и пзарабатывать!</p> <p>Если у вас возникли проблемы, <a href="%s">свяжитесь с нами</a>.</p>';
$_['ms_account_register_seller_success_approval'] = '<p>Добро пожаловать в %s!</p> <p>Профиль продавца успешно зарегистрирован и ожидает проверку. Вы будете уведомлены по электронной почте, как только Ваша учетная запись будет активирована.</p><p>Если у вас возникнут проблемы, <a href="%s">свяжитесь с нами</a>.</p>';

$_['ms_seller'] = 'Seller';
$_['ms_seller_forseller'] = 'Для продавца';
$_['ms_account_dashboard'] = 'Панель управления';
$_['ms_account_seller_account'] = 'Профиль продавца';
$_['ms_account_sellerinfo'] = 'Редактировать Профиль';
$_['ms_account_sellerinfo_new'] = 'Регистрация';
$_['ms_account_newproduct'] = 'Добавить новый Товар';
$_['ms_account_products'] = 'Менеджер товаров';
$_['ms_account_transactions'] = 'Финансовые Отчеты';
$_['ms_account_orders'] = 'Все продажи';
$_['ms_account_withdraw'] = 'Запрос на выплату';
$_['ms_account_stats'] = 'Статистика';
$_['ms_account_badges'] = 'Достижения';
$_['ms_account_badges_nobadges'] = 'У Вас пока нет ни одного достижения';

// Account - New product
$_['ms_account_newproduct_heading'] = 'Новый товар';
$_['ms_account_newproduct_breadcrumbs'] = 'Новый товар';

//General Tab
$_['ms_account_product_tab_general'] = 'Главная';
$_['ms_account_product_tab_specials'] = 'Специальные цены';
$_['ms_account_product_tab_discounts'] = 'Количественные скидки';
$_['ms_account_product_name_description'] = 'Название и описание';
$_['ms_account_product_name'] = 'Название';
$_['ms_account_product_name_note'] = 'Введите название Вашего товара';
$_['ms_account_product_description'] = 'Описание';
$_['ms_account_product_description_note'] = 'Опишите Ваш товар как можно подробнее';
$_['ms_account_product_meta_description'] = 'Описание Мета-тегов';
$_['ms_account_product_meta_description_note'] = 'Укажите описание для Мета-тегов Вашего товара';
$_['ms_account_product_meta_keyword'] = 'Ключевые слова Мета-тегов';
$_['ms_account_product_meta_keyword_note'] = 'Определите ключевые слова Мета-тегов Вашего товара';
$_['ms_account_product_tags'] = 'Tags';
$_['ms_account_product_tags_note'] = 'Задайте теги для Вашего продукта';
$_['ms_account_product_price_attributes'] = 'Цена и атрибуты';
$_['ms_account_product_price'] = 'Цена';
$_['ms_account_product_price_note'] = 'Определите цену. Оставьте пустое поле, если товар бесплатный';
$_['ms_account_product_listing_flat'] = 'Оплата за размещение Вашего товара составит <span>%s</span>';
$_['ms_account_product_listing_percent'] = 'Цена за публикацию товара зависит от его цены. Текущая цена за публикацию: <span>%s</span>.';
$_['ms_account_product_listing_balance'] = 'Эта сумма будет списана с Вашего Внутреннего счета.';
$_['ms_account_product_listing_paypal'] = 'Вы будете перенаправлены на страницу PayPal для оплаты.';
$_['ms_account_product_listing_itemname'] = 'Плата за размещение %s';
$_['ms_account_product_listing_until'] = 'Товар не будет в списке, пока %s';
$_['ms_account_product_category'] = 'Категория';
$_['ms_account_product_category_note'] = 'Укажите Категорию для Вашего товара';
$_['ms_account_product_enable_shipping'] = 'Разрешить доставку';
$_['ms_account_product_enable_shipping_note'] = 'Укажите, требуется ли для этого товара доставка';
$_['ms_account_product_quantity'] = 'Колличество';
$_['ms_account_product_quantity_note']    = 'Укажите количество товара';
$_['ms_account_product_files'] = 'Файлы';
$_['ms_account_product_download'] = 'Архив';
$_['ms_account_product_download_note'] = 'Загрузить файлы. Расширения: %s';
$_['ms_account_product_push'] = 'Уведомить покупателей об обновлении товара';
$_['ms_account_product_push_note'] = 'Недавно добавленные или обновленные товары будут доступны клиентам для скачивания';
$_['ms_account_product_image'] = 'Изображения';
$_['ms_account_product_image_note'] = 'Первое изображение будет использоваться как главное. Измените их порядок - перетаскивая. (Расширения файлов: %s )';
$_['ms_account_product_message_reviewer'] = 'Примечание для модератора';
$_['ms_account_product_message'] = 'Примечание';
$_['ms_account_product_message_note'] = 'Один из модераторов, проверяя Ваш файл прочтёт это сообщение';

//Data Tab
$_['ms_account_product_tab_data'] = 'Данные';
$_['ms_account_product_model'] = 'Модель';
$_['ms_account_product_sku'] = 'SKU';
$_['ms_account_product_sku_note'] = 'Артикул';
$_['ms_account_product_upc']  = 'UPC';
$_['ms_account_product_upc_note'] = 'Универсальный код товара';
$_['ms_account_product_ean'] = 'EAN';
$_['ms_account_product_ean_note'] = 'Европейский артикул';
$_['ms_account_product_jan'] = 'JAN';
$_['ms_account_product_jan_note'] = 'Японский артикул';
$_['ms_account_product_isbn'] = 'ISBN';
$_['ms_account_product_isbn_note'] = 'Международный стандартный';
$_['ms_account_product_mpn'] = 'MPN';
$_['ms_account_product_mpn_note'] = 'Код Производителя';
$_['ms_account_product_manufacturer'] = 'Производитель';
$_['ms_account_product_manufacturer_note'] = '(Autocomplete)';
$_['ms_account_product_tax_class'] = 'Налоговый класс';
$_['ms_account_product_date_available'] = 'Дата поступления';
$_['ms_account_product_stock_status'] = 'Статус "Нет на стладе"';
$_['ms_account_product_stock_status_note'] = 'Показывать статус когда товара нет в наличии';
$_['ms_account_product_subtract'] = 'Вычитать со склада';

// Options
$_['ms_account_product_tab_options'] = 'Опции';
$_['ms_options_add'] = '+ Добавить Опцию';
$_['ms_options_add_value'] = '+ Добавить вариант';
$_['ms_options_required'] = 'Сделать Опцию необходимой';
$_['ms_options_price_prefix'] = 'Изменить значение цены';
$_['ms_options_price'] = 'Цена...';
$_['ms_options_quantity'] = 'Колличество...';

$_['ms_account_product_manufacturer'] = 'Производитель';
$_['ms_account_product_manufacturer_note'] = '(Автозавершение)';
$_['ms_account_product_tax_class'] = 'Налоговый класс';
$_['ms_account_product_date_available'] = 'Дата поступления';
$_['ms_account_product_stock_status'] = 'Статус \'Нет в ниличии\'';
$_['ms_account_product_stock_status_note'] = 'Будет показано когда товара не будет в наличии';
$_['ms_account_product_subtract'] = 'Вычитать со склада';
$_['ms_account_product_priority'] = 'Приоритет';
$_['ms_account_product_date_start'] = 'Дата начала';
$_['ms_account_product_date_end'] = 'Дата окончания';
$_['ms_account_product_sandbox'] = 'Внимание: Система оплаты находится в тестовом режиме (\'Sandbox Mode\'). Деньги с вашего счета не будут взиматься.';

// Account - Edit product
$_['ms_account_editproduct_heading'] = 'Редактировать товар';
$_['ms_account_editproduct_breadcrumbs'] = 'Редактировать';

// Account - Clone product
$_['ms_account_cloneproduct_heading'] = 'Скопировать товар';
$_['ms_account_cloneproduct_breadcrumbs'] = 'Скопировать';

// Account - Relist product
$_['ms_account_relist_product_heading'] = 'Повторная публикация';
$_['ms_account_relist_product_breadcrumbs'] = 'Опубликовать повторно';

// Account - Seller
$_['ms_account_sellerinfo_heading'] = 'Регистрация продавца';
$_['ms_account_sellerinfo_breadcrumbs'] = 'Регистрация';
$_['ms_account_sellerinfo_nickname'] = 'Имя Продавца';
$_['ms_account_sellerinfo_nickname_note'] = 'Определите имя/название Продавца, под которым он будет известен в магазине';
$_['ms_account_sellerinfo_description'] = 'Описание';
$_['ms_account_sellerinfo_description_note'] = 'Расскажите о себе или о Вашем сайте. (Максимум 1000 символов)';
$_['ms_account_sellerinfo_company'] = 'Компания';
$_['ms_account_sellerinfo_company_note'] = 'Ваша Компания или вебсайт (опционально)';
$_['ms_account_sellerinfo_country'] = 'Страна';
$_['ms_account_sellerinfo_country_dont_display'] = 'Здесь нет моей страны';
$_['ms_account_sellerinfo_country_note'] = 'Укажите из какой Вы страны.';
$_['ms_account_sellerinfo_zone'] = 'Регион';
$_['ms_account_sellerinfo_zone_select'] = 'Укажите из какого Вы Региона/Области/Края';
$_['ms_account_sellerinfo_zone_not_selected'] = 'Вы не указали в каком Регионе/Области/Крае Вы проживаете';
$_['ms_account_sellerinfo_zone_note'] = 'Укажите в каком Регионе/Области/Крае Вы проживаете';
$_['ms_account_sellerinfo_avatar'] = 'Аватар профиля';
$_['ms_account_sellerinfo_avatar_note'] = '</br>Выберите Аватар для своего профиля из предложенной коллекции';
$_['ms_account_sellerinfo_paypal'] = 'Paypal';
$_['ms_account_sellerinfo_paypal_note'] = 'Введите Ваш PayPal адрес';
$_['ms_account_sellerinfo_banner'] = 'Баннер';
$_['ms_account_sellerinfo_banner_note'] = 'Выгрузите баннер для вашего аккаунта';
$_['ms_account_sellerinfo_reviewer_message'] = 'Примечание';
$_['ms_account_sellerinfo_reviewer_message_note'] = 'Один из модераторов, проверяя Вашу заявку прочтёт это сообщение';
$_['ms_account_sellerinfo_terms'] = 'Правила';
$_['ms_account_sellerinfo_terms_note'] = 'Я соглашаюсь с условиями <a class="colorbox" href="%s" alt="%s"><b>%s</b></a>';
$_['ms_account_sellerinfo_fee_flat'] = 'Необходимо внести первоначальный взнос в размере %s для вступления в группу продавцов на <span>%s</span>.';
$_['ms_account_sellerinfo_fee_balance'] = '</br>Эта сумма будет <span>списана с Вашего Внутреннего счета</span> (в счет будущих продаж).';
$_['ms_account_sellerinfo_fee_paypal'] = '</br>После сохранения формы Вы будете перенаправлены на страницу оплаты PayPal.';
$_['ms_account_sellerinfo_signup_itemname'] = 'Регистрация учетной записи продавца в %s';
$_['ms_account_sellerinfo_saved'] = 'Данные профиля сохранены.';
$_['ms_account_status'] = 'Ваш статус продавца: ';
$_['ms_account_status_tobeapproved'] = '<br />Вы сможете использовать аккаунт продавца, как только данные будут проверены модератором.';
$_['ms_account_status_please_fill_in'] = 'Для создания аккаунт продавца ВНИМАТЕЛЬНО заполните следующую форму.';

$_['ms_seller_status_' . MsSeller::STATUS_ACTIVE] = 'Опубликован';
$_['ms_seller_status_' . MsSeller::STATUS_INACTIVE] = 'Ожидает проверку';
$_['ms_seller_status_' . MsSeller::STATUS_DISABLED] = 'Отключен';
$_['ms_seller_status_' . MsSeller::STATUS_DELETED] = 'Удален';
$_['ms_seller_status_' . MsSeller::STATUS_UNPAID] = 'Ожидает оплату';

$_['ms_withdrawal_status_info'] = 'Выплаты производятся по запросу (один раз в месяц)';

// Account - Products
$_['ms_account_products_heading'] = 'Менеджер товаров';
$_['ms_account_products_breadcrumbs'] = 'Менеджер товаров';
$_['ms_account_products_image'] = 'Фото';
$_['ms_account_products_product'] = 'Товар';
$_['ms_account_products_sales'] = 'Продаж';
$_['ms_account_products_earnings'] = 'Доход';
$_['ms_account_products_status'] = 'Статус';
$_['ms_account_products_date'] = 'Создан';
$_['ms_account_products_listing_until'] = 'Каталог';
$_['ms_account_products_action'] = 'Действие';
$_['ms_account_products_noproducts'] = 'У Вас пока нет ни одного товара';
$_['ms_account_products_confirmdelete'] = 'Вы уверены что хотите удалить товар?';

$_['ms_not_defined'] = 'Не определен';

$_['ms_product_status_' . MsProduct::STATUS_ACTIVE] = 'Опубликован';
$_['ms_product_status_' . MsProduct::STATUS_INACTIVE] = 'Не опубликован';
$_['ms_product_status_' . MsProduct::STATUS_DISABLED] = 'Отклонён';
$_['ms_product_status_' . MsProduct::STATUS_DELETED] = 'Удален';
$_['ms_product_status_' . MsProduct::STATUS_UNPAID] = 'Ожидает оплату';

// Account - ratings
$_['ms_seller_ratings'] = 'Оцените товар: ';
$_['ms_seller_rate_title'] = 'Рейтинг продавца';
$_['ms_seller_rating_communication'] = 'Цена: ';
$_['ms_seller_rating_honesty'] = 'Качество: ';
$_['ms_seller_rating_overall'] = 'Установка: ';
$_['ms_seller_rate_comment_text'] = 'Комментарий';
$_['entry_bad'] = 'Плохо';
$_['entry_good'] = 'Хорошо';
$_['ms_seller_rate_success'] = 'Ваша оценка продавца была засчитана. Спасибо!';
$_['ms_error_rate_comment_length'] = 'Текст комментария слишком длинный. Всего разрешено до 300 символов.';
$_['ms_error_rate_no_comment'] = 'Введите текст комментария.';
$_['ms_error_rate_no_rating'] = 'Все рейтинги должны быть определены!';

// Account - Conversations and Messages
$_['ms_account_conversations'] = 'Сообщения';
$_['ms_account_messages'] = 'Сообщения';
$_['ms_account_conversations_heading'] = 'Личные сообщения';
$_['ms_account_conversations_breadcrumbs'] = 'Сообщения';
$_['ms_account_conversations_status'] = 'Статус';
$_['ms_account_conversations_date_created'] = 'Дата';
$_['ms_account_conversations_with'] = 'Переписка с';
$_['ms_account_conversations_title'] = 'Заголовок';
$_['ms_conversation_title_product'] = 'Вопрос о товаре: %s';
$_['ms_conversation_title'] = 'Сообщение для %s';
$_['ms_account_conversations_read'] = 'Прочитано';
$_['ms_account_conversations_unread'] = 'Новое';
$_['ms_account_messages_heading'] = 'Сообщения от покупателей';
$_['ms_account_messages_breadcrumbs'] = 'Сообщения';
$_['ms_message_text'] = 'Сообщение';
$_['ms_post_message'] = 'Отправить сообщение';
$_['ms_customer_does_not_exist'] = 'Акаунт пользователя удалён';
$_['ms_error_empty_message'] = 'Сообщение не может быть пустым';
$_['ms_mail_subject_private_message'] = 'Получено новое личное сообщение';
$_['ms_mail_private_message'] = <<<EOT
Вы получили новое личное сообщение от %s!

%s

%s

Вы можете ответить на это сообщение из своего профиля.
EOT;

$_['ms_mail_subject_seller_vote'] = 'Голосовать за продавца';
$_['ms_mail_seller_vote_message'] = 'Голосовать за продавца';

// Account - Transactions
$_['ms_account_transactions_heading'] = 'Финансовые отчеты';
$_['ms_account_transactions_breadcrumbs'] = 'Финансовые отчеты';
$_['ms_account_transactions_balance'] = 'Текущий баланс:';
$_['ms_account_transactions_earnings'] = 'Ваш доход за день:';
$_['ms_account_transactions_records'] = 'Переводы';
$_['ms_account_transactions_description'] = 'Описание';
$_['ms_account_transactions_amount'] = 'Сумма';
$_['ms_account_transactions_notransactions'] = 'У Вас пока нет ни одной финансовой записи';

// Payments
$_['ms_payment_payments'] = 'Выплаты';
$_['ms_payment_order'] = '#%s';
$_['ms_payment_type_' . MsPayment::TYPE_SIGNUP] = 'Регистрация';
$_['ms_payment_type_' . MsPayment::TYPE_LISTING] = 'Публикация';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT] = 'Выплата';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT_REQUEST] = 'Запрос на выплату';
$_['ms_payment_type_' . MsPayment::TYPE_RECURRING] = 'Платеж';
$_['ms_payment_type_' . MsPayment::TYPE_SALE] = 'Продажа';
$_['ms_payment_status_' . MsPayment::STATUS_UNPAID] = 'Не оплачено';
$_['ms_payment_status_' . MsPayment::STATUS_PAID] = 'Переведено';

// Account - Orders
$_['ms_account_orders_heading'] = 'Ваши продажи';
$_['ms_account_orders_breadcrumbs'] = 'Все продажи';
$_['ms_account_orders_id'] = 'Заказ #';
$_['ms_account_orders_customer'] = 'Покупатель';
$_['ms_account_orders_products'] = 'Товар';
$_['ms_account_orders_total'] = 'Итого';
$_['ms_account_orders_view'] = 'Просмотр';
$_['ms_account_orders_noorders'] = 'Вы пока не продали ни одного товара';
$_['ms_account_orders_change_status']    = 'Изменить статус заказа';

// Account - Dashboard
$_['ms_account_dashboard_heading'] = 'Панель управления';
$_['ms_account_dashboard_breadcrumbs'] = 'Панель управления';
$_['ms_account_dashboard_orders'] = 'Последние продажи';
$_['ms_account_dashboard_comments'] = 'Комментарии к товарам';
$_['ms_account_dashboard_overview'] = 'Аватар';
$_['ms_account_dashboard_seller_group'] = 'Группа';
$_['ms_account_dashboard_listing'] = 'Плата за размещение';
$_['ms_account_dashboard_sale'] = 'Комиссионные';
$_['ms_account_dashboard_stats'] = 'Статистика';
$_['ms_account_dashboard_royalty'] = 'Гонорар с продаж';
$_['ms_account_dashboard_balance'] = 'Текущий баланс';
$_['ms_account_dashboard_total_sales'] = 'Всего продаж';
$_['ms_account_dashboard_total_earnings'] = 'Общая прибыль';
$_['ms_account_dashboard_sales_month'] = 'Продажи за месяц';
$_['ms_account_dashboard_earnings_month'] = 'Прибыль за месяц';
$_['ms_account_dashboard_nav'] = 'Навигация';
$_['ms_account_dashboard_nav_profile'] = 'Редактировать Профиль';
$_['ms_account_dashboard_nav_product'] = 'Добавить новый Товар';
$_['ms_account_dashboard_nav_products'] = 'Менеджер товаров';
$_['ms_account_dashboard_nav_orders'] = 'Все продажи';
$_['ms_account_dashboard_nav_balance'] = 'Финансовые отчеты';
$_['ms_account_dashboard_nav_payout'] = 'Запрос на выплату';

// Account - Comments
$_['ms_account_comments_name'] = 'Покупатель';
$_['ms_account_comments_product'] = 'Товар';
$_['ms_account_comments_comment'] = 'Комментарий';
$_['ms_account_comments_nocomments'] = 'Ваши товары пока никто не комментировал';

// Account - Request withdrawal
$_['ms_account_withdraw_heading'] = 'Заявка на вывод средств';
$_['ms_account_withdraw_breadcrumbs'] = 'Запрос на выплату';
$_['ms_account_withdraw_balance'] = 'Текущий баланс:';
$_['ms_account_withdraw_balance_available'] = 'Доступно для выплаты:';
$_['ms_account_withdraw_minimum'] = 'Минимальная сумма выплаты:';
$_['ms_account_balance_reserved_formatted'] = 'В ожидании выплаты: %s';
$_['ms_account_balance_waiting_formatted'] = 'Сумма в ожидании выплаты -%s';
$_['ms_account_withdraw_description'] = 'Выплата на имя %s (%s) от %s';
$_['ms_account_withdraw_amount'] = 'Сумма:';
$_['ms_account_withdraw_amount_note'] = 'Пожалуйста, укажите сумму выплаты';
$_['ms_account_withdraw_method'] = 'Перевод на:';
$_['ms_account_withdraw_method_note'] = 'Пожалуйста, укажите куда вывести указанную сумму';
$_['ms_account_withdraw_method_paypal'] = 'PayPal';
$_['ms_account_withdraw_all'] = 'Все доступные средства';
$_['ms_account_withdraw_minimum_not_reached'] = 'Ваш текущий баланс меньше, чем минимальная сумма для выплаты!';
$_['ms_account_withdraw_no_funds'] = 'На Вашем счете недостаточно средств для выплаты.';
$_['ms_account_withdraw_no_paypal'] = 'Пожалуйста <a href="index.php?route=seller/account-profile">укажите Ваш PayPal адрес</a>!';

// Account - Stats
$_['ms_account_stats_heading'] = 'Статистика';
$_['ms_account_stats_breadcrumbs'] = 'Статистика';
$_['ms_account_stats_tab_summary'] = 'Общая';
$_['ms_account_stats_tab_by_product'] = 'По товарам';
$_['ms_account_stats_tab_by_year'] = 'За год';
$_['ms_account_stats_summary_comment'] = 'Ниже приводится краткая информация о ваших продаж';
$_['ms_account_stats_sales_data'] = 'Данные о продажах';
$_['ms_account_stats_number_of_orders'] = 'Количество заказов';
$_['ms_account_stats_total_revenue'] = 'Общая выручка';
$_['ms_account_stats_average_order'] = 'Средний заказ';
$_['ms_account_stats_statistics'] = 'Статистика';
$_['ms_account_stats_grand_total'] = 'Общий итог продаж';
$_['ms_account_stats_product'] = 'Товар';
$_['ms_account_stats_sold'] = 'Продаж';
$_['ms_account_stats_total'] = 'Всего';
$_['ms_account_stats_this_year'] = 'Текущий год';
$_['ms_account_stats_year_comment'] = 'Колличество продаж за указанный период: <span id="sales_num">%s</span>';
$_['ms_account_stats_show_orders'] = 'Показать: ';
$_['ms_account_stats_month'] = 'Месяц';
$_['ms_account_stats_num_of_orders'] = 'Количество заказов';
$_['ms_account_stats_total_r'] = 'Общая выручка';
$_['ms_account_stats_average_order'] = 'Средний заказ';
$_['ms_account_stats_today'] = 'Сегодня, ';
$_['ms_account_stats_yesterday'] = 'Вчера, ';
$_['ms_account_stats_daily_average'] = 'Среднесуточная за ';
$_['ms_account_stats_date_month_format'] = 'F Y';
$_['ms_account_stats_projected_totals'] = 'Прогнозируемые итоги за ';
$_['ms_account_stats_grand_total_sales'] = 'Общий итог продаж';

// Product page - Seller information
$_['ms_catalog_product_sellerinfo'] = 'Информация о продавце';
$_['ms_catalog_product_contact'] = 'Связаться с продавцом';
$_['ms_footer'] = '<br>MultiMerch Marketplace by <a href="http://multimerch.com/">multimerch.com</a>';

// Product page - Comments
$_['ms_comments_post_comment'] = 'Добавить Комментарий';
$_['ms_comments_name'] = 'Имя';
$_['ms_comments_note'] = '<span style="color: #FF0000;">Примечание:</span> HTML и BBCode отключены!';
$_['ms_comments_email'] = 'E-mail';
$_['ms_comments_comment'] = 'Комментарий';
$_['ms_comments_wait'] = 'Пожалуйста, подождите!';
$_['ms_comments_login_register'] = 'Пожалуйста, <a href="%s">войдите на сайт</a> или <a href="%s">зарегистрируйтесь</a> что бы оставить комментарий.';
$_['ms_comments_error_name'] = 'Пожалуйста, укажите имя от %s до %s символов';
$_['ms_comments_error_email'] = 'Пожалуйста, укажите корректный адрес Вашей электронной почты';
$_['ms_comments_error_comment_short'] = 'Комментарий не может быть менее %s символов';
$_['ms_comments_error_comment_long'] = 'Комментарий не может быть больше %s символов';
$_['ms_comments_error_captcha'] = 'Неправильный код с изображения CAPTCHA';
$_['ms_comments_success'] = 'Спасибо за Ваш комментарий.';
$_['ms_comments_captcha'] = 'Введите код, указанный на картинке:';
$_['ms_comments_no_comments_yet'] = 'Нет комментариев';
$_['ms_comments_tab_comments'] = 'Комментарии (%s)';
$_['ms_footer'] = '<br>Marketplace <a href="http://multimerch.com/">www.multimerch.com</a>';

// Catalog - Sellers list
$_['ms_catalog_sellers_heading'] = 'Продавцы';
$_['ms_catalog_sellers_country'] = 'Страна:';
$_['ms_catalog_sellers_website'] = 'Вебсайт:';
$_['ms_catalog_sellers_company'] = 'Компания:';
$_['ms_catalog_sellers_totalsales'] = 'Продаж:';
$_['ms_catalog_sellers_totalproducts'] = 'Товаров:';
$_['ms_sort_country_desc'] = 'Стране (Z - A)';
$_['ms_sort_country_asc'] = 'Стране (A - Z)';
$_['ms_sort_nickname_desc'] = 'Имени (Z - A)';
$_['ms_sort_nickname_asc'] = 'Имени (A - Z)';

// Catalog - Seller profile page
$_['ms_catalog_sellers'] = 'Продавцы';
$_['ms_catalog_sellers_empty'] = 'У нас пока нет ни одного продавца';
$_['ms_catalog_seller_profile'] = 'Профиль';
$_['ms_catalog_seller_profile_heading'] = 'Профиль \'%s\'';
$_['ms_catalog_seller_profile_breadcrumbs'] = 'Профиль \'%s\'';
$_['ms_catalog_seller_profile_about_seller'] = 'Информация о продавце';
$_['ms_catalog_seller_profile_products'] = 'Некоторые товары продавцов';
$_['ms_catalog_seller_profile_tab_products'] = 'Товары';
$_['ms_catalog_seller_profile_tab_comments'] = 'Комментарии';
$_['ms_catalog_seller_profile_country'] = 'Страна:';
$_['ms_catalog_seller_profile_zone'] = 'Регион:';
$_['ms_catalog_seller_profile_website'] = 'Вебсайт:';
$_['ms_catalog_seller_profile_company'] = 'Компания:';
$_['ms_catalog_seller_profile_totalsales'] = 'Всего продаж:';
$_['ms_catalog_seller_profile_totalproducts'] = 'Всего товаров:';
$_['ms_catalog_seller_profile_view'] = 'Смотреть все товары от продавца %s';
$_['ms_catalog_seller_profile_view_products'] = 'Товары продавца';

// Ratings
$_['ms_catalog_seller_profile_rating'] = 'Рейтинг продавца:';
$_['ms_catalog_seller_profile_ratings_singular'] = 'рейтинг';
$_['ms_catalog_seller_profile_ratings_plural'] = 'проголосовало';
$_['ms_catalog_seller_profile_rating_overall'] = 'Простота установки:';
$_['ms_catalog_seller_profile_rating_communication'] = 'Адекватность цены:';
$_['ms_catalog_seller_profile_rating_honesty'] = 'Качество исполнения:';
$_['ms_catalog_seller_profile_rating_not_defined'] = 'Рейтинг не определен';

// Catalog - Seller's products list
$_['ms_catalog_seller_products_heading'] = 'Все товары от продавца %s';
$_['ms_catalog_seller_products_breadcrumbs'] = 'Все товары от продавца %s';
$_['ms_catalog_seller_products_empty'] = 'У этого продавца пока нет ни одного товара';

// Catalog - Carousel
$_['ms_carousel_sellers'] = 'Наши продавцы';
$_['ms_carousel_view'] = 'Просмотреть всех';

// Catalog - Top sellers
$_['ms_topsellers_sellers'] = 'Лидеры среди продавцов';
$_['ms_topsellers_view'] = 'Просмотреть всех';

// Catalog - New sellers
$_['ms_newsellers_sellers'] = 'Новые продавцы';
$_['ms_newsellers_view'] = 'Просмотреть всех';

// Catalog - Seller dropdown
$_['ms_sellerdropdown_sellers'] = 'Наши продавцы';
$_['ms_sellerdropdown_select'] = '-- Выберите автора --';

// Catalog - Seller contact dialog
$_['ms_sellercontact_title'] = 'Связаться с продавцом';
$_['ms_sellercontact_name'] = 'Ваше имя';
$_['ms_sellercontact_email'] = 'Ваш email';
$_['ms_sellercontact_text'] = 'Ваше сообщение';
$_['ms_sellercontact_captcha'] = 'Captcha';
$_['ms_sellercontact_sendmessage'] = 'Сообщение для %s';
$_['ms_sellercontact_success'] = 'Ваше сообщение было успешно отпавлено';

// Account - PDF generator dialog
$_['ms_pdfgen_title'] = 'Генерация изображения в PDF';
$_['ms_pdfgen_pages'] = 'Страниц';
$_['ms_pdfgen_note'] = 'Выберите страницы для создания изображения. Новые изображения будут добавлены в список изображений на странице товара';
$_['ms_pdfgen_file'] = 'Файл';
?>
