<?php

// General
$_['ms_enabled'] = 'Разрешить';
$_['ms_disabled'] = 'Запретить';
$_['ms_apply'] = 'Применить';
$_['ms_type'] = 'Тип';
$_['ms_type_checkbox'] = 'Флажок';
$_['ms_type_date'] = 'Дата';
$_['ms_type_datetime'] = 'Дата &amp; Время';
$_['ms_type_file'] = 'Файл';
$_['ms_type_image'] = 'Изображение';
$_['ms_type_radio'] = 'Переключатель';
$_['ms_type_select'] = 'Список';
$_['ms_type_text'] = 'Текст';
$_['ms_type_textarea'] = 'Текстовая область';
$_['ms_type_time'] = 'Время';
$_['text_image_manager'] = 'Менеджер изображений';
$_['text_browse'] = 'Обзор';
$_['text_clear'] = 'Очистить';
$_['ms_store'] = 'Магазин';
$_['ms_id'] = '#';

$_['ms_error_directory'] = "Внимание: Директория уже существует: %s. Пожалуйста, убедитесь, что она пуста, прежде чем продолжить. <br />";
$_['ms_error_directory_notwritable'] = "Внимание: Директория уже существует и не доступна для записи: %s. Пожалуйста, убедитесь, что она пуста и откройте на сервере доступ для записи. <br />";
$_['ms_error_directory_exists'] = "Внимание: Директория уже существует: %s. Пожалуйста, убедитесь, что она пуста, прежде чем продолжить. <br />";
$_['ms_error_ckeditor'] = "Внимание: Не удалось скопировать CKEditor из %s в %s. Пожалуйста, сделайте это вручную <br />";
$_['ms_notice_ckeditor'] = "Примечание: Если Вы хотите использовать RTE (Rich Text Editor), скопируйте вручную папку CKEditor из %s в %s. <br />";
$_['ms_error_product_publish'] = 'Не удалось опубликовать некоторые из товаров: учетная запись продавца неактивна.';
$_['ms_success_installed'] = 'Модуль успешно установлен';
$_['ms_success_product_status'] = 'Статус товара успешно изменен.';

$_['ms_db_upgrade'] = 'Пожалуйста <a href="%s">нажмите здесь</a> что бы обновить базу данных MultiMerch Marketplace до последней версии.';
$_['ms_db_success'] = 'База данных MultiMerch Marketplace готова!';
$_['ms_db_latest'] = 'База данных MultiMerch Marketplace успешно обновлена!';

$_['heading_title'] = '<b>[MultiMerch]</b> Digital Marketplace';
$_['text_seller_select'] = 'Выбирает продавец';
$_['text_shipping_dependent'] = 'Зависит от доставки';
$_['text_no_results'] = 'Нет результатов';
$_['error_permission'] = 'Внимание: Вы не имеете прав доступа к этому модулю!';

$_['ms_error_withdraw_norequests'] = 'Ошибка: нет выплат для обрабатки';
$_['ms_error_withdraw_response'] = 'Ошибка: нет ответа';
$_['ms_error_withdraw_status'] = 'Ошибка: неудачная сделка';
$_['ms_success'] = 'Выполнено';
$_['ms_success_transactions'] = 'Сделки успешно завершена';
$_['ms_success_payment_deleted'] = 'Платеж удален';
$_['text_success']                 = 'Поздравляем: Вы изменили настройки!';

$_['ms_none'] = 'Нет';
$_['ms_seller'] = 'Продавец';
$_['ms_all_sellers'] = 'Все продавцы';
$_['ms_amount'] = 'Сумма';
$_['ms_product'] = 'Товар';
$_['ms_net_amount'] = 'Сумма';
$_['ms_days'] = ' дней';
$_['ms_from'] = 'От имени';
$_['ms_to'] = 'Для';
$_['ms_paypal'] = 'PayPal';
$_['ms_date_created'] = 'Дата создания';
$_['ms_status'] = 'Статус';
$_['ms_image'] = 'Изображение';
$_['ms_date_modified'] = 'Дата обновления';
$_['ms_date_paid'] = 'Дата платежа';
$_['ms_date'] = 'Дата платежа';
$_['ms_description'] = 'Описание';

$_['ms_commission'] = 'Комиссионные';
$_['ms_commissions_fees'] = 'Комиссионные и сборы';
$_['ms_commission_' . MsCommission::RATE_SALE] = 'Плата с продажи';
$_['ms_commission_' . MsCommission::RATE_LISTING] = 'Плата за публикацию / метод';
$_['ms_commission_' . MsCommission::RATE_SIGNUP] = 'Плата за регистрацию / метод';

$_['ms_commission_short_' . MsCommission::RATE_SALE] = 'Прод..';
$_['ms_commission_short_' . MsCommission::RATE_LISTING] = 'Публ..';
$_['ms_commission_short_' . MsCommission::RATE_SIGNUP] = 'Рег..';
$_['ms_commission_actual'] = 'Фактические суммы оплаты';

$_['ms_sort_order'] = 'Порядок сортировки';
$_['ms_name'] = 'Имя';
$_['ms_description'] = 'Описание';

$_['ms_enable'] = 'Разрешить';
$_['ms_disable'] = 'Запретить';
$_['ms_edit'] = 'Редактировать';
$_['ms_delete'] = 'Удалить';

$_['ms_button_pay_masspay'] = 'Оплата через MassPay';
$_['ms_button_pay_masspay_all'] = 'Оплатить всё через MassPay';
// Menu
$_['ms_menu_multiseller'] = 'MultiMerch';
$_['ms_menu_sellers'] = 'Продавцы';
$_['ms_menu_seller_groups'] = 'Группы продавцов';
$_['ms_menu_attributes'] = 'Атрибуты';
$_['ms_menu_products'] = 'Товары';
$_['ms_menu_transactions'] = 'Сделки';
$_['ms_menu_payment'] = 'Платежи';
$_['ms_menu_settings'] = 'Настройки';

// Settings
$_['ms_settings_heading'] = 'Настройки';
$_['ms_settings_breadcrumbs'] = 'Настройки';
$_['ms_config_seller_validation'] = 'Активация нового продавца';
$_['ms_config_seller_validation_note'] = 'Модерировать учетные записи продавцов';
$_['ms_config_seller_validation_none'] = 'Без активации';
$_['ms_config_seller_validation_activation'] = 'Активация по электронной почте';
$_['ms_config_seller_validation_approval'] = 'Активировать в ручную';

$_['ms_config_product_validation'] = 'Проверка нового товара';
$_['ms_config_product_validation_note'] = 'Модерировать публикацию новых товаров';
$_['ms_config_product_validation_none'] = 'Без проверки';
$_['ms_config_product_validation_approval'] = 'Проверять в ручную';

$_['ms_config_allow_inactive_seller_products'] = 'Товары неактивных продавцов';
$_['ms_config_allow_inactive_seller_products_note'] = 'Разрешить неактивным продавцам создавать новые товары. После утверждения такого продавца - все его товары будут опубликованы';

$_['ms_config_disable_product_after_quantity_depleted'] = 'Отключать товары если 0 шт.';
$_['ms_config_disable_product_after_quantity_depleted_note'] = 'Отключать товар если он распродан (остаток: 0 шт.)';

$_['ms_config_allow_relisting'] = 'Повторный сбор за публикацию';
$_['ms_config_allow_relisting_note'] = 'Разрешить повторный сбор за публикацию отключенного товара (повторная публикация)';

$_['ms_config_enable_one_page_seller_registration'] = 'Регистрация на одной странице';
$_['ms_config_enable_one_page_seller_registration_note'] = 'Показывать поля регистрация продавца на одной странице с регистрацией покупателя';

$_['ms_config_minmax_product_price'] = 'Регулировать цену за товар';
$_['ms_config_minimum_product_price'] = 'Минимальная ';
$_['ms_config_maximum_product_price'] = 'Максимальная ';
$_['ms_config_minmax_product_price_note'] = 'Минимальная и максимальная цена продукта (0 - без ограничения)';

$_['ms_config_allowed_image_types'] = 'Допустимые расширения фото';
$_['ms_config_allowed_image_types_note'] = 'Какой тип изображения товара могут загружать продавцы';

$_['ms_config_images_limits'] = 'Лимиты изображения товара';
$_['ms_config_images_limits_note'] = 'Минимальное и максимальное количество изображений товара (0 = без ограничений)';

$_['ms_config_downloads_limits'] = 'Файлы для скачивания';
$_['ms_config_downloads_limits_note'] = 'Минимальное и максимальное количество фалов для одного товара (0 = без ограничений)';

$_['ms_config_allowed_download_types'] = 'Допустимые типы файлов';
$_['ms_config_allowed_download_types_note'] = 'Какой тип файлов (или архивов) разрешено загружать продавцам';

$_['ms_config_credit_order_statuses'] = 'Статусы зачисления денег';
$_['ms_config_credit_order_statuses_note'] = 'Баланс продавца будет пополняться за заказы со статусами зачисления денег';

$_['ms_config_debit_order_statuses'] = 'Статусы снятия денег';
$_['ms_config_debit_order_statuses_note'] = 'С баланса продавца будут сниматься средства за заказы со статусами снятия денег';

$_['ms_config_minimum_withdrawal'] = 'Минимальная сумма выплаты';
$_['ms_config_minimum_withdrawal_note'] = 'Минимальная сумма баланса, требуемая для запроса о выплате средств со счета';

$_['ms_config_allow_partial_withdrawal'] = 'Разрешить частичные выплаты';
$_['ms_config_allow_partial_withdrawal_note'] = 'Разрешить продавцам запрашивать частичные выплаты';

$_['ms_config_allow_withdrawal_requests'] = 'Разрешить запросы на выплату';
$_['ms_config_allow_withdrawal_requests_note'] = 'Разрешить продавцам самим подавать запрос о выплате';

$_['ms_config_paypal_sandbox'] = 'PayPal в режиме тестирования';
$_['ms_config_paypal_sandbox_note'] = 'Использовать PayPal в режиме "Песочница" (Sandbox mode)';

$_['ms_config_paypal_address'] = 'PayPal адрес';
$_['ms_config_paypal_address_note'] = 'Ваш PayPal адрес для перечисления за регистрацию продавцов и публикацию товара';

$_['ms_config_notification_email'] = 'Email для уведомлений';
$_['ms_config_notification_email_note'] = 'На этот email будут приходить письма о новых продажах, товарах, продавцах и запросах на выплату средств со счета';

$_['ms_config_allow_free_products'] = 'Разрешить бесплатные товары';
$_['ms_config_allow_free_products_note'] = 'Разрешить продавцам публиковать бесплатные товары';

$_['ms_config_allow_multiple_categories'] = 'Разрешить несколько категорий';
$_['ms_config_allow_multiple_categories_note'] = 'Разрешить продавцам публиковать товар сразу в нескольких категориях';

$_['ms_config_additional_category_restrictions'] = 'Запрещенные категории';
$_['ms_config_additional_category_restrictions_note'] = 'Массово <u>запретить</u> продавцам публиковать товары в категориях';
$_['ms_topmost_categories'] = 'Во всех главных';
$_['ms_parent_categories'] = 'Все главные у которых есть подгруппы';

$_['ms_config_restrict_categories'] = 'Запретить категории';
$_['ms_config_restrict_categories_note'] = '<u>Запретить</u> продавцам публиковать товары в этих категориях';

$_['ms_config_product_included_fields'] = 'Добавить поля на страницу товара';
$_['ms_config_product_included_fields_note'] = 'Указывать на странице товара дополнительные поля';

$_['ms_config_provide_buyerinfo'] = 'Показывать E-Mail покупателя';
$_['ms_config_provide_buyerinfo_note'] = 'Включить email покупателя в отчет о продаже товара';

$_['ms_config_enable_shipping'] = 'Разрешить доставку товара';
$_['ms_config_enable_shipping_note'] = 'Разрешить доставку по почте';

$_['ms_config_enable_quantities'] = 'Разрешить указывать количество';
$_['ms_config_enable_quantities_note'] = 'Разрешить продавцам указывать для товара количество';

$_['ms_config_seller_terms_page'] = 'Условия для нового продавца';
$_['ms_config_seller_terms_page_note'] = 'Новый продавец должен дать согласие на условия прочитав:';

$_['ms_config_allow_specials'] = 'Разрешить товары со скидкой';
$_['ms_config_allow_specials_note'] = 'Продавцам резрешено публиковать товары и указывать временную скидку';

$_['ms_config_allow_discounts'] = 'Разрешить оптовые скидки';
$_['ms_config_allow_discounts_note'] = 'Разрешить продавцам определять оптовые скидки';
 
$_['ms_config_withdrawal_waiting_period'] = 'Срок ожидания выплаты';
$_['ms_config_withdrawal_waiting_period_note'] = 'Баланс продавца, новее, чем это значение не будет доступен для запросов на выплату. После получения средств должно пройти данное количество времени - чтобы баланс был доступен для выплаты';

$_['ms_config_graphical_sellermenu'] = 'Меню продавца в виде иконок';
$_['ms_config_graphical_sellermenu_note'] = 'Меню продавца в виде иконок';

$_['ms_config_productform'] = 'Товары';
$_['ms_config_finances'] = 'Финансы';
$_['ms_config_miscellaneous'] = 'Дополнительно';

$_['ms_config_module'] = 'Модули';
$_['ms_config_status'] = 'Статус';
$_['ms_config_top'] = 'Вверху страницы';
$_['ms_config_bottom'] = 'Внизу страницы';
$_['ms_config_column_left'] = 'Левая колонка';
$_['ms_config_column_right'] = 'Правая колонка';
$_['ms_config_limit'] = 'Лимит:';
$_['ms_config_scroll'] = 'Scroll:';
$_['ms_config_image'] = 'Изображение (Ш x В):';
$_['ms_config_layout'] = 'Схема:';
$_['ms_config_position'] = 'Расположение:';
$_['ms_config_sort_order'] = 'Сортировка:';

$_['ms_config_enable_rte'] = 'Разрешить CKEditor в описаниях';
$_['ms_config_enable_rte_note'] = 'Разрешить текстовый редактор для описания товара и описание профиля продавца. Для этого скопируйте папку CKEditor из папки (admin/view/javascript) в папку (catalog/view/javascript/multimerch)';

$_['ms_config_rte_whitelist'] = 'Допустимые Теги';
$_['ms_config_rte_whitelist_note'] = 'Разрешенные теги в CKEditor (пусто = разрешить все Теги)';

$_['ms_config_image_sizes'] = 'Размер изображения';
$_['ms_config_seller_avatar_image_size'] = 'Аватар продавца';
$_['ms_config_seller_avatar_image_size_seller_profile'] = 'При просмотре профиля';
$_['ms_config_seller_avatar_image_size_seller_list'] = 'В списоке продавцов';
$_['ms_config_seller_avatar_image_size_product_page'] = 'На странице с товаром';
$_['ms_config_seller_avatar_image_size_seller_dashboard'] = 'В панели управления';

$_['ms_config_image_preview_size'] = 'Предварительный просмотр';
$_['ms_config_image_preview_size_seller_avatar'] = 'Аватар продавца на старнице загрузке';
$_['ms_config_image_preview_size_product_image'] = 'Изображение товара на старнице загрузке';

$_['ms_config_product_image_size'] = 'Изображение товара';
$_['ms_config_product_image_size_seller_profile'] = 'При просмотре профиля';
$_['ms_config_product_image_size_seller_products_list'] = 'На странице "Все товаровы от продавца"';
$_['ms_config_product_image_size_seller_products_list_account'] = 'В профиле на странице "Менеджер товаров"';

$_['ms_config_minimum_uploaded_image_size'] = 'Минимальный размер фото';
$_['ms_config_minimum_uploaded_image_size_note'] = 'Установить минимальный размер загруженного изображения для товара (0 = без ограничения) (Ширина х Высота)';
$_['ms_config_maximum_uploaded_image_size'] = 'Максимальный размер фото';
$_['ms_config_maximum_uploaded_image_size_note'] = 'Установить максимальный размер загруженного изображения для товара (0 = без ограничения) (Ширина х Высота)';

$_['ms_config_seo'] = 'SEO';
$_['ms_config_enable_seo_urls_seller'] = 'SEO ссылки для новых продавцов';
$_['ms_config_enable_seo_urls_seller_note'] = 'Эта опция позволяет для всех новых продавцов генерировать ссылки оптимизированные для поисковых систем. Что бы эта опция работала - включите SEO в настройках OpenCart';
$_['ms_config_enable_seo_urls_product'] = 'SEO ссылки для новых товаров';
$_['ms_config_enable_seo_urls_product_note'] = 'Эта опция позволяет для всех новых товаров генерировать ссылки оптимизированные для поисковых систем. Что бы эта опция работала - включите SEO в настройках OpenCart. (Экспериментально!)';
$_['ms_config_enable_update_seo_urls'] = 'SEO для обновленных товаров';
$_['ms_config_enable_update_seo_urls_note'] = 'Генерировать новые SEO URL-адреса, при обновлении товара.';
$_['ms_config_enable_non_alphanumeric_seo'] = 'Разрешить в SEO кодировку UTF8';
$_['ms_config_enable_non_alphanumeric_seo_note'] = 'Эта опция позволяет не удалять символы кодировки UTF8 из SEO ссылок. (Экспериментально!)';
$_['ms_config_sellers_slug'] = 'SEO для списка продавцов';
$_['ms_config_sellers_slug_note'] = 'Список продавцов в SEO (Что бы эта опция работала - включите SEO в настройках OpenCart.)';

$_['ms_config_attributes'] = 'Атрибуты';
$_['ms_config_attribute_display'] = 'Стиль атрибутов';
$_['ms_config_attribute_display_note'] = 'Как показывать трибуты на странице товара';
$_['ms_config_attribute_display_mm'] = 'MultiMerch';
$_['ms_config_attribute_display_oc'] = 'OpenCart';
$_['ms_config_attribute_display_both'] = 'Оба';

$_['ms_config_privacy'] = 'Конфиденциальность';
$_['ms_config_enable_private_messaging'] = 'Разрешить связь с продавцами';
$_['ms_config_enable_private_messaging_note'] = 'Разрешить всем пользователям отправлять письма продавцам';

$_['ms_config_hide_customer_email'] = 'Скрывать email покупателя';
$_['ms_config_hide_customer_email_note'] = 'Скрывать email покупателя в списке заказов у продавца';
$_['ms_config_hide_email_in_email'] = 'Скрывать email адреса в письмах';
$_['ms_config_hide_email_in_email_note'] = 'Не отображать email адреса покупателей и продавцов во всех отправляемых письмах';

$_['ms_config_seller'] = 'Продавцы';

// Change Seller Nickname
$_['ms_config_seller_change_nickname'] = 'Разрешить изменять Ник';
$_['ms_config_seller_change_nickname_note'] = 'Разрешить продавцам изменить свой Ник (не рекомендуется)';

// Seller Nickname Rules
$_['ms_config_nickname_rules'] = 'Имена для продавцов';
$_['ms_config_nickname_rules_note'] = 'Используйте UTF-8 если хотите разрешить продавцам использовать имена на русском';
$_['ms_config_nickname_rules_alnum'] = 'Буквы латинского алфавита и числа';
$_['ms_config_nickname_rules_ext'] = 'Расширенный латинский';
$_['ms_config_nickname_rules_utf'] = 'Полная UTF-8 кодировка';

// Seller Avatars
$_['ms_config_avatars_for_sellers'] = 'Аватары для продавцов';
$_['ms_config_avatars_for_sellers_note'] = 'Какие аватарки использовать';
$_['ms_config_avatars_manually'] = 'Разрешить загрузку';
$_['ms_config_avatars_both'] = 'Свой или выбор из установленных';
$_['ms_config_avatars_predefined'] = 'Только установленные';

$_['ms_config_other'] = 'Другое';
$_['ms_config_hide_sellers_product_count'] = 'Спрятать счетчик в header';
$_['ms_config_hide_sellers_product_count_note'] = 'Не показывать строку содержащую количество продавцов и товаров в базе';

// Seller - List
$_['ms_catalog_sellers_heading'] = 'Продавцы';
$_['ms_catalog_sellers_breadcrumbs'] = 'Продавцы';
$_['ms_catalog_sellers_newseller'] = 'Новый продавец';
$_['ms_catalog_sellers_create'] = 'Создать продавца';

$_['ms_catalog_sellers_total_balance'] = 'Общая сумма на всех балансах: <b>%s</b> (активные продавцы: <b>%s</b>)';
$_['ms_catalog_sellers_email'] = 'Электронная почта';
$_['ms_catalog_sellers_total_products'] = 'Товары';
$_['ms_catalog_sellers_total_sales'] = 'Продаж';
$_['ms_catalog_sellers_total_earnings'] = 'Прибыль';
$_['ms_catalog_sellers_current_balance'] = 'Баланс (Всего/Доступно)';
$_['ms_catalog_sellers_status'] = 'Статус профиля';
$_['ms_catalog_sellers_date_created'] = 'Дата создания';
$_['ms_catalog_sellers_balance_paypal'] = 'Выплата баланса на PayPal';

$_['ms_seller_status_' . MsSeller::STATUS_ACTIVE] = 'Активирован';
$_['ms_seller_status_' . MsSeller::STATUS_INACTIVE] = 'Не проверен';
$_['ms_seller_status_' . MsSeller::STATUS_DISABLED] = 'Запрещен';
$_['ms_seller_status_' . MsSeller::STATUS_DELETED] = 'Удален';
$_['ms_seller_status_' . MsSeller::STATUS_UNPAID] = 'Неоплачена регистрация';

// Customer-seller form
$_['ms_catalog_sellerinfo_heading'] = 'Продавец';
$_['ms_catalog_sellerinfo_seller_data'] = 'Данные о продавце';

$_['ms_catalog_sellerinfo_customer'] = 'Пользователь';
$_['ms_catalog_sellerinfo_customer_data'] = 'Данные о пользователе';
$_['ms_catalog_sellerinfo_customer_new'] = 'Новый пользователь';
$_['ms_catalog_sellerinfo_customer_existing'] = 'Существующий пользователь';
$_['ms_catalog_sellerinfo_customer_create_new'] = 'Создать нового пользователя';
$_['ms_catalog_sellerinfo_customer_firstname'] = 'Имя';
$_['ms_catalog_sellerinfo_customer_lastname'] = 'Фамилия';
$_['ms_catalog_sellerinfo_customer_email'] = 'Email';
$_['ms_catalog_sellerinfo_customer_password'] = 'Пароль';
$_['ms_catalog_sellerinfo_customer_password_confirm'] = 'Повторить пароль';

$_['ms_catalog_sellerinfo_nickname'] = 'Ник';
$_['ms_catalog_sellerinfo_keyword'] = 'SEO keyword';
$_['ms_catalog_sellerinfo_description'] = 'Описание';
$_['ms_catalog_sellerinfo_company'] = 'Компания';
$_['ms_catalog_sellerinfo_country'] = 'Страна';
$_['ms_catalog_sellerinfo_zone'] = 'Область / Край';
$_['ms_catalog_sellerinfo_zone_select'] = 'Выбрать Область / Край';
$_['ms_catalog_sellerinfo_zone_not_selected'] = 'Область / Край не выбран';
$_['ms_catalog_sellerinfo_zone_note'] = 'Выбрать Область / Край из списка';
$_['ms_catalog_sellerinfo_sellergroup'] = 'Группа продавца';

$_['ms_catalog_sellerinfo_country_dont_display'] = 'Не показывать страну';
$_['ms_catalog_sellerinfo_avatar'] = 'Аватар';
$_['ms_catalog_sellerinfo_paypal'] = 'Paypal';
$_['ms_catalog_sellerinfo_message'] = 'Сообщение';
$_['ms_catalog_sellerinfo_message_note'] = 'Включить этот текст в уведомление на e-mail о редактировании профиля';
$_['ms_catalog_sellerinfo_notify'] = 'Уведомить продавца по электронной почте';
$_['ms_catalog_sellerinfo_product_validation'] = 'Модерация товаров';
$_['ms_catalog_sellerinfo_product_validation_note'] = 'Проверять все публикуемые товары этого продавца';

$_['ms_error_sellerinfo_nickname_empty'] = 'Необходимо указать Ник';
$_['ms_error_sellerinfo_nickname_alphanumeric'] = 'Ник может содержать только буквы латинского алфавита и цифры';
$_['ms_error_sellerinfo_nickname_utf8'] = 'Ник может содержать только печатные символы кодировки UTF-8';
$_['ms_error_sellerinfo_nickname_latin'] = 'Ник может содержать только буквы латинского алфавита, числа и диакритические знаки';
$_['ms_error_sellerinfo_nickname_length'] = 'Ник должен быть от 4 до 50 символов';
$_['ms_error_sellerinfo_nickname_taken'] = 'Этот Ник уже занят!';

// Catalog - Products
$_['ms_catalog_products_heading'] = 'Товары';
$_['ms_catalog_products_breadcrumbs'] = 'Товары';
$_['ms_catalog_products_notify_sellers'] = 'Сообщить продавцу';
$_['ms_catalog_products_bulk'] = '--Массовая смена статуса--';
$_['ms_catalog_products_noseller'] = '--Нет продавца--';

$_['ms_product_status_' . MsProduct::STATUS_ACTIVE] = 'Опубликован';
$_['ms_product_status_' . MsProduct::STATUS_INACTIVE] = 'Не опубликован';
$_['ms_product_status_' . MsProduct::STATUS_DISABLED] = 'Отклонён';
$_['ms_product_status_' . MsProduct::STATUS_DELETED] = 'Удален';
$_['ms_product_status_' . MsProduct::STATUS_UNPAID] = 'Публикация не оплачена';

$_['ms_catalog_products_field_meta_keyword'] 	 = 'Ключевые слова (Meta Tag)';
$_['ms_catalog_products_field_meta_description'] = 'Meta Tag Описания';
$_['ms_catalog_products_field_model']            = 'Модель';
$_['ms_catalog_products_field_sku']              = 'SKU (Артикул)';
$_['ms_catalog_products_field_upc']              = 'UPC (Universal Product Code)';
$_['ms_catalog_products_field_ean']              = 'EAN (European Article Number)';
$_['ms_catalog_products_field_jan']              = 'JAN (Japanese Article Number)';
$_['ms_catalog_products_field_isbn']             = 'ISBN (International Standard)';
$_['ms_catalog_products_field_mpn']              = 'MPN (Manufacturer Part Number)';
$_['ms_catalog_products_field_manufacturer']     = 'Производитель';
$_['ms_catalog_products_field_date_available']   = 'Дата поступления';
$_['ms_catalog_products_field_stock_status']     = 'Статус "Нет в наличии"';
$_['ms_catalog_products_field_tax_class']        = 'Налоговый класс';
$_['ms_catalog_products_field_subtract']         = 'Вычитать со склада';

// Catalog - Seller Groups
$_['ms_catalog_seller_groups_heading'] = 'Группы продавцов';
$_['ms_catalog_seller_groups_breadcrumbs'] = 'Группы продавцов';

$_['ms_seller_groups_column_id'] = 'ID';
$_['ms_seller_groups_column_name'] = 'Имя';
$_['ms_seller_groups_column_action'] = 'Действие';

$_['ms_catalog_insert_seller_group_heading'] = 'Новая группа продавцов';
$_['ms_catalog_edit_seller_group_heading'] = 'Правка группы продавцов';

$_['ms_product_period'] = 'Пориод публикации товара <br />(0 - без лимита)';
$_['ms_product_quantity'] = 'Максимальное кол-во товаров <br />(0 - без лимита)';

$_['ms_error_seller_group_name'] = 'Ошибка: Имя группы продавцов должна быть от 3 до 32 символов!';
$_['ms_error_seller_group_default'] = 'Ошибка: Группа продавцов "по умолчанию" не может быть удалена!';
$_['ms_success_seller_group_created'] = 'Группа продавцов успешно создана';
$_['ms_success_seller_group_updated'] = 'Группа продавцов успешно обновлена';

// Payments
$_['ms_payment_heading'] = 'Платежи';
$_['ms_payment_breadcrumbs'] = 'Платежи';
$_['ms_payment_payout_requests'] = 'Запросы на выплату';
$_['ms_payment_payouts'] = 'Выплачено в ручную';
$_['ms_payment_pending'] = 'В ожидании';
$_['ms_payment_new'] = 'Новый платеж';
$_['ms_payment_paid'] = 'Выплачено';
$_['ms_payment_deduct'] = 'Вычесть из баланса';
$_['ms_payment_payout_paypal'] = 'Выплатить через PayPal';
$_['ms_payment_payout_paypal_invalid'] = 'Адрес PayPal не указан или указан неверно!';
$_['ms_payment_mark'] = 'Отметить как выплачено';
$_['ms_payment_delete'] = 'Удалить запись';

$_['ms_payment_type_' . MsPayment::TYPE_SIGNUP] = 'Регистрация';
$_['ms_payment_type_' . MsPayment::TYPE_LISTING] = 'Публикация';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT] = 'Выплачено в ручную';
$_['ms_payment_type_' . MsPayment::TYPE_PAYOUT_REQUEST] = 'Запросы на выплату';
$_['ms_payment_type_' . MsPayment::TYPE_RECURRING] = 'Переодическая выплата';
$_['ms_payment_type_' . MsPayment::TYPE_SALE] = 'Продажа';

$_['ms_payment_status_' . MsPayment::STATUS_UNPAID] = 'Не выплачен';
$_['ms_payment_status_' . MsPayment::STATUS_PAID] = 'Выплачено';

$_['ms_error_payment_fromto'] = 'Разрешены платежи только между продавцом и магазином (или наоборот) но не между пользователями!';
$_['ms_error_payment_fromstore'] = 'Нельзя заплатить продавцу (от имени Магазина) <u>за регистрацию</u> или <u>публикацию</u> товара - это немылимо!';
$_['ms_error_payment_tostore'] = 'Продавец не может совершать платеж типа "Выплачено в ручную" или "Запросы на выплату" на имя магазина.';
$_['ms_error_payment_amount'] = 'Пожалуйста, укажите сумму платежа';
$_['ms_error_payment_norequests'] = 'Пожалуйста, убедитесь что продавцы имеют достаточно средств на счету и у всех указаны PayPal адреса.';
$_['ms_success_payment_created'] = 'Оплата успешно произведена';

// Finances - Transactions
$_['ms_transactions_heading'] = 'Сделки';
$_['ms_transactions_breadcrumbs'] = 'Сделки';
$_['ms_transactions_new'] = 'Новая сделка';

$_['ms_error_transaction_fromto'] = 'Необходимо указать от чьего имени сделка';
$_['ms_error_transaction_fromto_same'] = 'Нельзя указывать одно и тоже лицо';
$_['ms_error_transaction_amount'] = 'Пожалуйста, укажите сумму';
$_['ms_success_transaction_created'] = 'Сделка успешно совершена!';

$_['button_cancel'] = 'Отменить';
$_['button_save'] = 'Сохранить';
$_['ms_action'] = 'Действие';

// Attributes
$_['ms_attribute_heading'] = 'Атрибуты';
$_['ms_attribute_breadcrumbs'] = 'Атрибуты';
$_['ms_attribute_create'] = 'Новый атрибут';
$_['ms_attribute_edit'] = 'Правка атрибута';
$_['ms_attribute_group'] = 'Группы атрибутов';
$_['ms_attribute_value'] = 'Значение';
$_['ms_attribute_text_type'] = 'Ввод текста';
$_['ms_attribute_normal'] = 'Общий текст';
$_['ms_attribute_multilang'] = 'Language-specific text';
$_['ms_attribute_number'] = 'Номер';
$_['ms_attribute_required'] = 'Обязателен';
$_['ms_attribute_tab_display'] = 'Показывать как вкладку товара';
$_['ms_add_attribute_value'] = 'Добавить значение';
$_['ms_error_attribute_name'] = 'Имя атрибута должно быть от 1 до 128 знаков';
$_['ms_error_attribute_type'] = 'Этому типу атрибута требуется добавить значение';
$_['ms_error_attribute_value_name'] = 'Значение атрибута должно быть от 1 до 128 знаков';
$_['ms_success_attribute_created'] = 'Атрибут успешно создан';
$_['ms_success_attribute_updated'] = 'Атрибут успешно обновлен';

$_['button_cancel'] = 'Отменить';
$_['button_save'] = 'Сохранить';
$_['ms_action'] = 'Действие';

// Mails
$_['ms_mail_greeting'] = "Здравствуйте %s,\n\n";
$_['ms_mail_greeting_no_name'] = "Здравствуйте,\n\n";
$_['ms_mail_ending'] = "\n\nС уважением,\n%s";
$_['ms_mail_message'] = "\n\nСообщение:\n%s";

$_['ms_mail_subject_seller_account_modified'] = 'Изменения в учетной записи';
$_['ms_mail_seller_account_modified'] = <<<EOT
Ваш акаунт продавца на %s был отредактирован администрацией.

Статус акаунта: %s
EOT;

$_['ms_mail_subject_product_modified'] = 'Товар отредактирован';
$_['ms_mail_product_modified'] = <<<EOT
Ваш товар %s на %s был отредактирован администрацией.

Статус товара: %s
EOT;

$_['ms_mail_subject_product_purchased'] = 'Новый заказ';
$_['ms_mail_product_purchased'] = <<<EOT
Ваш товар был только что продан на %s.

Покупатель: %s (%s)

Товар(ы):
%s
Всего: %s
EOT;

$_['ms_mail_product_purchased_no_email'] = <<<EOT
Ваш товар был только что продан на %s.

Покупатель: %s

Товар(ы):
%s
Всего: %s
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

// Sales - Mail
$_['ms_transaction_order'] = 'Продажа: Id Заказа #%s';
$_['ms_transaction_sale'] = 'Продажа: %s (-%s комиссия)';
$_['ms_transaction_refund'] = 'Возмещение: %s';
$_['ms_payment_method'] = 'Метод платежа';
$_['ms_payment_method_balance'] = 'Со счета продавца';
$_['ms_payment_method_paypal'] = 'PayPal';
$_['ms_payment_method_inherit'] = 'Наследовать';
$_['ms_payment_royalty_payout'] = 'Выплата на имя %s от %s';
$_['ms_payment_generic'] = 'Выплата по запросу для #%s от %s';
$_['ms_payment_completed'] = 'Платеж завершен';

?>
