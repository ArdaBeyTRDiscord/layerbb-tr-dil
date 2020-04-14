<?php
//===================================//
// LayerBB Project                   //
//-----------------------------------//
// Website: https://www.layerbb.com  //
// Email: info@layerbb.com           //
// Build Series: 1.1                 //
//===================================//

/*
 * LayerBB Language Entity.
 * Language: Türkçeleştirme ByGold-Arda 
 * Not: Mobilden çeviri Yaptığım İcin Bir Kaç Yer Kaldı Onları Siz Türkçeleştirirsiniz Arkadaşlar.
 * Türkçeleştirmeye Başlanma Tarihi 2019.12.25 
 */

$LANG = array(
    //Main Forum
    'bb' => array(
        'forum' => 'Forum',
        'members' => 'Üyeler',
        'search' => 'Arama',
        'edit_post_in' => 'Edit post in:',
        'new_thread_in' => 'New thread in:',
        'new_reply_in' => 'New reply in:',
        'new_report' => 'Rapor Et',
        'new_thread_breadcrumb' => 'Yeni Konu',
        'edit_post_breadcrumb' => 'Konuyu Düzenle',
        'new_reply_breadcrumb' => 'Yanıtla',
        'already_watched_thread' => 'You are already watching this thread.',
        'already_unwatched_thread' => 'You are already not watching this thread.',
        'watch_thread' => 'You are now watching this thread.',
        'unwatch_thread' => 'You are now not watching this thread.',
        'error_watching' => 'Hata Konu İzlenemiyor.',
        'error_unwatching' => 'Hata Konu İzleme Kaldıralamadı.',
        'none' => 'None',
        'illegal_data' => 'One of your fields contains a character that is not allowed!',
        'form' => array(
            'edit_post' => 'Konuyu Düzenle',
            'report' => 'Rapor',
            'report_reason' => 'Sebep'
        ),
        'conversations' => array(
            'my_conversations' => 'Bildirimlerim', // added by N8boy
            'page_conversations' => 'Bildirimler',
            'page_new' => 'Start Conversation',
            'page_reply' => 'Reply Conversation:',
            'starter' => 'Started by',
            'reciever' => 'sent to',
            'by' => 'By:', // not needed anymore | N8boy
            'for' => 'For:', // not needed anymore | N8boy
            'form_to' => 'To <small>Seperated with a ","</small>',
            'form_send' => 'Send',
            'form_title' => 'Title',
            'form_reply' => 'Reply',
            'no_conversations' => 'No conversations yet.',
            'user_not_exist' => 'User <strong>%username%</strong> does not exist!',
            'message_sent' => 'Your message to <strong>%username%</strong> has been sent!',
            'error_sending' => 'Error sending message to <strong>%username%</strong>.',
            'error_sending_alt' => 'Mesaj Gönderilemedi.'
        ),
        'members' => array(
            'home' => 'Members',
            'activate_account' => 'Aktivasyon Bekliyort',
            'account_activated' => 'Your account has been activated! <a href="' . SITE_URL . '/members.php/cmd/signin">Sign in</a> now.',
            'birthday' => 'Birthday',
            'error_activating' => 'Error activating account. Try again later.',
            'forgot_password' => 'Şifreni Değiştir',
            'reset_password' => 'Şifreni Sıfırla',
            'error_request_password_reset' => 'Failed to create password reset request.',
            'form_reset_password' => 'Şifreni Sıfırla',
            'form_email' => 'Email',
            'form_password' => 'Password',
            'form_confirm_password' => 'Confirm Password',
            'form_username' => 'Kullanıcı Adın',
            'form_register' => 'Kayıt Ol',
            'password_reset_link_sent' => 'A link for the password reset has been sent to your email account.',
            'error_password_reset_token_used' => 'The password reset token has already been used. Please request a new password reset.',
            'error_password_reset_token_expired' => 'The password reset token has expired. Please request a new password reset.',
            'error_password_reset_token_unknown' => 'Unknown password reset token. Please use the URL from the email.',
            'error_password_reset_token_missing' => 'Missing password reset token in URL. Please use the URL from the email.',
            'error_password_reset' => 'Failed to change the password.',
            'password_reset_successful' => 'Your password has been reset.',
            'register' => 'Register',
            'password_different' => 'Password is different!',
            'username_taken' => 'Username is already taken!',
            'space_user' => 'You are not allowed to use spaces in your Username!',
            'error_register' => 'Error registering you, please try again later.',
            'register_successful' => 'Successfully registered! Now logging you in...',
            'register_successful_email' => 'Successfully registered! An email has been sent to be verified.',
            'register_message' => 'By clicking "Register", you agree to abide by the forum rules located <a href="' . SITE_URL . '/members.php/cmd/rules">here</a>.',
            'register_disabled' => 'Registration is currently disabled.',
            'log_in' => 'Sign In',
            'invalid_login' => 'Invalid details!',
            'login_success' => '<strong>Logged In:</strong> You have been successfully logged in.<br />If you are not automatically redirected, <a href="' . SITE_URL . '">click here</a>!',
            'email_not_activated' => 'Your email has not been activated yet.',
            'banned' => 'You are currently banned. Contact staff for details.<br />Unban Date: <b>%unban_date%</b><br />Ban Reason: <b>%ban_reason%</b>',
            'rules' => 'Forum Kuralları',
            'rules_message' => 'All users are to abide by the forum rules.<br />%rules%<br />Breaking the rules may result in your post being removed or edited, repeatedly breaking rules may result in a temporary or permanent ban.',
            'profile_of' => 'Profile of',
            'posted_thread' => 'Posted a new thread <a href="%url%">%title%</a> <small>(%date%)</small><hr size="1" />',
            'replied_to' => 'Replied to the thread <a href="%url%">%title%</a> <small>(%date%)</small><hr size="1" />'
        ),
        'profile' => array(
            'profile' => 'Profil',
            'avatar' => 'Avatar',
            'change_avatar' => 'Change Avatar <small>A maximum of 500x500 Pixels</small>',
            'use_gravatar' => 'Use Gravatar Instead',
            'form_save' => 'Save Changes',
            'error_adding_gravatar' => 'Gravatar Yüklenemedi Tekrar Dene.',
            'successful_adding_gravatar' => 'Gravatar Başarıyla Kayıt Edildi',
            'error_upload_avatar' => 'Avatar Yüklenemedi Tekrar Dene.',
            'about_you' => 'Hakkımda',
            'successful_upload_avatar' => 'Your avatar has been saved, however it will show when you next login.',
            'password' => 'Password',
            'current_password' => 'Current Password',
            'new_password' => 'Yeni Şifre ',
            'error_updaing_password' => 'Şifre Değiştirilemedi Hata!',
            'signature' => 'İmza',
            'timezone' => 'Zaman',
            'location' => 'Lokasyon',
            'error_updating_signature' => 'Error updating signature. Try again later.',
            'personal_details' => 'Personal Details',
            'confirm_password' => 'Confirm Password',
            'change_theme' => 'Tema Değiştir',
            'theme_set' => 'Theme has been set.',
            'theme_error' => 'Tema hata.',
            'theme_not_exist' => 'Theme does not exist.',
            'gender' => 'Belirtmek İstemiyorum',
            'female' => 'Bayan',
            'male' => 'Bay',
            'not_telling' => 'Not telling',
            'usermsg' => 'User Message'
        )
    ),
    //Error Pages
    'error_pages' => array(
        '404' => array(
            'header' => '404',
            'message' => 'Sorry, the resource you are looking for could not be found.'
        )
    ),
    'errors' => array(
        'thread_tracker_insert' => 'An Error accured while creating a thread tracker.',
        'thread_tracker_update' => 'An Error accured while updating a thread tracker.',
        'sig_disabled' => 'User signatures have been disabled by an administrator.'
    ),
    //Global Form Variables
    'global_form_process' => array(
        'all_fields_required' => 'All fields are required!',
        'enter_search_query' => 'Please enter a search query!',
        'error_updating_post' => 'Error updating post. Try again later.',
        'error_creating_thread' => 'Error creating thread. Try again later.',
        'error_replying_thread' => 'Error replying to thread. Try again later.',
        'error_submitting_report' => 'Error submitting report. Try again later.',
        'thread_create_success' => 'Successfully created thread! Redirecting you...',
        'report_create_success' => 'Report has been successfully submitted!',
        'search_no_result' => 'No results.',
        'search_no_user' => 'You did not search for a user.',
        'search_by' => 'By',
        'different_message_previous' => 'Please write a different message from your previous post.',
        'email_not_exist' => 'Email does not exist in our records!',
        'email_used' => 'Email is used, please use a new one.',
        'invalid_email' => 'Email is not valid!',
        'invalid_file_format' => 'Invalid file format!',
        'img_dimension_limit' => 'Image dimension too big!',
        'save_success' => 'Saved!',
        'error_saving' => 'Error saving. Try again later.',
        'invalid_password' => 'Current password is invalid!',
        'captcha_incorrect' => 'Incorrect captcha!'
    ),
    //Email Variables.
    'email' => array(
        'forgot_password' => array(
            'subject' => 'Password Reset',
            'content' => '<p>You have recently requested a password reset on %site_name%.</p><p>To set a new password, please use the following URL: %token_url%</p>'
        ),
        'register' => array(
            'subject' => 'Account Activation',
            'content' => '<p>You have registered on %site_name%</p><p>Click <a href="%activate_url%">here</a> to activate your account.</p>'
        ),
        'notify' => array(
            'more_info' => '<br />Click <a href="%url%">here</a> to find out more.'
        )
    ),
    //Moderator Panel
    'mod' => array(
        'ban' => array(
            'ban' => 'Ban User',
            'ban_success' => 'User has been banned. <a href="%url%">Back to user profile</a>.',
            'ban_error' => 'Error banning user.',
            'already_banned' => 'User is already banned.',
            'unban' => 'Unban User',
            'unban_success' => 'User has been unbanned. <a href="%url%">Back to user profile</a>.',
            'unban_error' => 'Error unbanning user.',
            'already_unbanned' => 'User is already unbanned.',
            'self_ban' => 'You can not ban yourself, that is just silly!',
            'admin_ban' => 'You can not ban a root administrator.',
        ),
        'close' => array(
            'close' => 'Close Thread',
            'close_success' => 'Thread has been closed. <a href="%url%">Back to thread</a>.',
            'close_error' => 'Error closing thread.',
            'already_closed' => 'Thread is already closed.',
            'open' => 'Open Thread',
            'open_success' => 'Thread has been opened. <a href="%url%">Back to thread</a>.',
            'open_error' => 'Error opening thread.',
            'already_opened' => 'Thread is already opened.'
        ),
        'stick' => array(
            'stick' => 'Stick Thread',
            'stick_success' => 'Thread has been stuck. <a href="%url%">Back to thread</a>.',
            'stick_error' => 'Error sticking thread.',
            'already_stuck' => 'Thread is already stuck.',
            'unstick' => 'Unstick Thread',
            'unstick_success' => 'Thread has been unstuck. <a href="%url%">Back to thread</a>.',
            'unstick_error' => 'Error sticking thread.',
            'already_unstuck' => 'Thread is already unstuck.'
        ),
        'reports' => array(
            'reports' => 'Rapor',
            'thread' => 'Konu:',
            'user' => 'Kullanıcı:',
            'reason' => 'Uyarı:',
            'reported_time' => 'Rapor Zamanı:',
            'no_reports' => 'There are no reports at the moment.',
            'delete' => 'Rapor Sil.'
        ),
        'delete' => array(
            'delete' => 'Mesajı Sil',
            'thread_deleted' => 'Thread has been deleted.',
            'error_deleting' => 'Error deleting post.',
            'post_deleted' => 'Post has been deleted.'
        ),
        'move' => array(
            'move' => 'Move Thread',
            'thread_moved' => 'Thread has been moved. <a href="%url%">Back to thread</a>.',
            'error_moving' => 'Error moving thread.'
        ),
        'del_report' => array(
            'delete' => 'Delete Report',
            'report_deleted' => 'Report has been deleted. <a href="%url%">Back</a>.',
            'error_deleting' => 'Error deleting report. <a href="%url%">Back</a>.'
        )
    ),
    'notification' => array(
        'mention' => '%username% have mentioned you in a post!',
        'reply' => '%username% has replied to the thread <strong>%thread_title%</strong>',
        'quoted' => '%username% quoted your post in <strong>%thread_title%</strong>',
        'like' => '%username% has liked your post in <strong>%thread_title%</strong>'
    ),
    'flat' => array(
        'merge_post' => '----------'
    ),
    'time' => array(
        'hours_ago' => '%time% Saat önce',
        'hour_ago' => '%time% Bir saat önce',
        'minutes_ago' => '%time% Dakika önce',
        'minute_ago' => '%time% Dakika önce',
        'just_now' => 'Şimdi'
    ),
    // ISO 3166-1 Country codes
    'location' => array(
        '--' => 'Nothing selected',
        'AD' => 'Andorra',
        'AE' => 'United Arab Emirates',
        'AF' => 'Afghanistan',
        'AG' => 'Antigua and Barbuda',
        'AI' => 'Anguilla',
        'AL' => 'Albania',
        'AM' => 'Armenia',
        'AO' => 'Angola',
        'AQ' => 'Antarctica',
        'AR' => 'Argentina',
        'AS' => 'American Samoa',
        'AT' => 'Austria',
        'AU' => 'Australia',
        'AW' => 'Aruba',
        'AX' => 'Aland Islands',
        'AZ' => 'Azerbaijan',
        'BA' => 'Bosnia and Herzegovina',
        'BB' => 'Barbados',
        'BD' => 'Bangladesh',
        'BE' => 'Belgium',
        'BF' => 'Burkina Faso',
        'BG' => 'Bulgaria',
        'BH' => 'Bahrain',
        'BI' => 'Burundi',
        'BJ' => 'Benin',
        'BL' => 'Saint Barthélemy',
        'BM' => 'Bermuda',
        'BN' => 'Brunei Darussalam',
        'BO' => 'Bolivia',
        'BQ' => 'Bonaire',
        'BR' => 'Brazil',
        'BS' => 'Bahamas',
        'BT' => 'Bhutan',
        'BV' => 'Bouvet Island',
        'BW' => 'Botswana',
        'BY' => 'Belarus',
        'BZ' => 'Belize',
        'CA' => 'Canada',
        'CC' => 'Cocos Islands',
        'CD' => 'Congo (the Democratic Republic)',
        'CF' => 'Central African Republic',
        'CG' => 'Congo',
        'CH' => 'Switzerland',
        'CI' => 'Cote d\'Ivoire',
        'CK' => 'Cook Islands',
        'CL' => 'Chile',
        'CM' => 'Cameroon',
        'CN' => 'China',
        'CO' => 'Colombia',
        'CR' => 'Costa Rica',
        'CU' => 'Cuba',
        'CV' => 'Cabo Verde',
        'CW' => 'Curacao',
        'CX' => 'Christmas Island',
        'CY' => 'Cyprus',
        'CZ' => 'Czech Republic',
        'DE' => 'Germany',
        'DJ' => 'Djibouti',
        'DK' => 'Denmark',
        'DM' => 'Dominica',
        'DO' => 'Dominican Republic',
        'DZ' => 'Algeria',
        'EC' => 'Ecuador',
        'EE' => 'Estonia',
        'EG' => 'Egypt',
        'EH' => 'Western Sahara',
        'ER' => 'Eritrea',
        'ES' => 'Spain',
        'ET' => 'Ethiopia',
        'FI' => 'Finland',
        'FJ' => 'Fiji',
        'FK' => 'Falkland Islands',
        'FM' => 'Micronesia',
        'FO' => 'Faroe Islands',
        'FR' => 'France',
        'GA' => 'Gabon',
        'GB' => 'United Kingdom',
        'GD' => 'Grenada',
        'GE' => 'Georgia',
        'GF' => 'French Guiana',
        'GG' => 'Guernsey',
        'GH' => 'Ghana',
        'GI' => 'Gibraltar',
        'GL' => 'Greenland',
        'GM' => 'Gambia',
        'GN' => 'Guinea',
        'GP' => 'Guadeloupe',
        'GQ' => 'Equatorial Guinea',
        'GR' => 'Greece',
        'GS' => 'South Georgia and the South Sandwich Islands',
        'GT' => 'Guatemala',
        'GU' => 'Guam',
        'GW' => 'Guinea-Bissau',
        'GY' => 'Guyana',
        'HK' => 'Hong Kong',
        'HM' => 'Heard Island and McDonald Islands',
        'HN' => 'Honduras',
        'HR' => 'Croatia',
        'HT' => 'Haiti',
        'HU' => 'Hungary',
        'ID' => 'Indonesia',
        'IE' => 'Ireland',
        'IL' => 'Israel',
        'IM' => 'Isle of Man',
        'IN' => 'India',
        'IO' => 'British Indian Ocean Territory',
        'IQ' => 'Iraq',
        'IR' => 'Iran',
        'IS' => 'Iceland',
        'IT' => 'Italy',
        'JE' => 'Jersey',
        'JM' => 'Jamaica',
        'JO' => 'Jordan',
        'JP' => 'Japan',
        'KE' => 'Kenya',
        'KG' => 'Kyrgyzstan',
        'KH' => 'Cambodia',
        'KI' => 'Kiribati',
        'KM' => 'Comoros',
        'KN' => 'Saint Kitts and Nevis',
        'KP' => 'The Democratic People\'s Republic of Korea',
        'KR' => 'The Republic of Korea',
        'KW' => 'Kuwait',
        'KY' => 'Cayman Islands',
        'KZ' => 'Kazakhstan',
        'LA' => 'Lao People\'s Democratic Republic',
        'LB' => 'Lebanon',
        'LC' => 'Saint Lucia',
        'LI' => 'Liechtenstein',
        'LK' => 'Sri Lanka',
        'LR' => 'Liberia',
        'LS' => 'Lesotho',
        'LT' => 'Lithuania',
        'LU' => 'Luxembourg',
        'LV' => 'Latvia',
        'LY' => 'Libya',
        'MA' => 'Morocco',
        'MC' => 'Monaco',
        'MD' => 'Moldova',
        'ME' => 'Montenegro',
        'MF' => 'Saint Martin',
        'MG' => 'Madagascar',
        'MH' => 'Marshall Islands',
        'MK' => 'Macedonia',
        'ML' => 'Mali',
        'MM' => 'Myanmar',
        'MN' => 'Mongolia',
        'MO' => 'Macao',
        'MP' => 'Northern Mariana Islands',
        'MQ' => 'Martinique',
        'MR' => 'Mauritania',
        'MS' => 'Montserrat',
        'MT' => 'Malta',
        'MU' => 'Mauritius',
        'MV' => 'Maldives',
        'MW' => 'Malawi',
        'MX' => 'Mexico',
        'MY' => 'Malaysia',
        'MZ' => 'Mozambique',
        'NA' => 'Namibia',
        'NC' => 'New Caledonia',
        'NE' => 'Niger',
        'NF' => 'Norfolk Islands',
        'NG' => 'Nigeria',
        'NI' => 'Nicaragua',
        'NL' => 'Netherlands',
        'NO' => 'Norway',
        'NP' => 'Nepal',
        'NR' => 'Nauru',
        'NU' => 'Niue',
        'NZ' => 'New Zealand',
        'OM' => 'Oman',
        'PA' => 'Panama',
        'PE' => 'Peru',
        'PF' => 'French Polynesia',
        'PG' => 'Papua New Guinea',
        'PH' => 'Philippines',
        'PK' => 'Pakistan',
        'PL' => 'Poland',
        'PM' => 'Saint Pierre and Miquelon',
        'PN' => 'Pitcairn',
        'PR' => 'Puerto Rico',
        'PS' => 'Palestine',
        'PT' => 'Portugal',
        'PW' => 'Palau',
        'PY' => 'Paraguay',
        'QA' => 'Qatar',
        'RE' => 'Réunion',
        'RO' => 'Romania',
        'RS' => 'Serbia',
        'RU' => 'Russian Federation',
        'RW' => 'Rwanda',
        'SA' => 'Saudi Arabia',
        'SB' => 'Solomon Islands',
        'SC' => 'Seychelles',
        'SD' => 'Sudan',
        'SE' => 'Sweden',
        'SG' => 'Singapore',
        'SH' => 'Saint Helena',
        'SI' => 'Slovenia',
        'SJ' => 'Svalbard and Jan Mayen',
        'SK' => 'Slovakia',
        'SL' => 'Sierra Leone',
        'SM' => 'San Marino',
        'SN' => 'Senegal',
        'SO' => 'Somalia',
        'SR' => 'Suriname',
        'SS' => 'South Sudan',
        'ST' => 'Sao Tome and Pricipe',
        'SV' => 'El Salvador',
        'SX' => 'Sint Maarten',
        'SY' => 'Syrian Arab Republic',
        'SZ' => 'Swaziland',
        'TC' => 'Turks and Caicos Islands',
        'TD' => 'Chad',
        'TF' => 'French Southern Terrotories',
        'TG' => 'Togo',
        'TH' => 'Thailand',
        'TJ' => 'Tajikistan',
        'TK' => 'Tokelau',
        'TL' => 'Timor-Leste',
        'TM' => 'Turkmenistan',
        'TN' => 'Tunisia',
        'TO' => 'Tonga',
        'TR' => 'Türkiye',
        'TT' => 'Trinidad and Tobago',
        'TV' => 'Tuvalu',
        'TW' => 'Taiwan',
        'TZ' => 'Tanzania',
        'UA' => 'Ukraine',
        'UG' => 'Uganda',
        'UM' => 'United States Minor Outlying Islands',
        'US' => 'United States',
        'UY' => 'Uruguay',
        'UZ' => 'Uzbekistan',
        'VA' => 'Holy See',
        'VC' => 'Venezuela',
        'VG' => 'Virgin Islands (GB)',
        'VI' => 'Virgin Islands (US)',
        'VN' => 'Viet Nam',
        'VU' => 'Vanatu',
        'WF' => 'Wallis and Futuna',
        'WS' => 'Samoa',
        'YE' => 'Yemen',
        'YT' => 'Mayotte',
        'ZA' => 'South Africa',
        'ZM' => 'Zambia',
        'ZW' => 'Zimbabwe'
    ),
    'date' => array(
        'month_1' => 'Ocak',
        'month_2' => 'Şubat',
        'month_3' => 'Mart',
        'month_4' => 'Nisan',
        'month_5' => 'Mayıs',
        'month_6' => 'Haziran',
        'month_7' => 'Temmuz',
        'month_8' => 'Ağustos',
        'month_9' => 'Eylül',
        'month_10' => 'Ekim',
        'month_11' => 'Kasım',
        'month_12' => 'Aralık',
        'day_1' => 'Pazartesi',
        'day_2' => 'Salı',
        'day_3' => 'Çarşamba',
        'day_4' => 'Perşembe',
        'day_5' => 'Cuma',
        'day_6' => 'Cumartesi',
        'day_7' => 'Pazar'
    )
);

?>