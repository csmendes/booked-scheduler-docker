<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);

# isset($_ENV['']) ? $_ENV[''] : ''

$conf['settings']['app.title'] = 'Reserva de Salas';
$conf['settings']['default.timezone'] = 'America/Fortaleza';
$conf['settings']['allow.self.registration'] = 'true';
$conf['settings']['admin.email'] = 'reserva.dla@ufca.edu.br';
$conf['settings']['admin.email.name'] = 'reserva';
$conf['settings']['default.page.size'] = '50';
$conf['settings']['enable.email'] = 'true';
$conf['settings']['default.language'] = 'pt_br';
$conf['settings']['script.url'] = 'http://' . isset($_ENV['VIRTUAL_HOST']) ? $_ENV['VIRTUAL_HOST'] : 'localhost' . '/booked/Web';
// $conf['settings']['script.url'] = 'localhost';
$conf['settings']['image.upload.directory'] = 'Web/uploads/images';
$conf['settings']['image.upload.url'] = 'uploads/images';
$conf['settings']['cache.templates'] = 'true';
$conf['settings']['use.local.jquery'] = 'false';
$conf['settings']['registration.captcha.enabled'] = 'false';
$conf['settings']['registration.require.email.activation'] = 'false';
$conf['settings']['registration.auto.subscribe.email'] = 'false';
$conf['settings']['registration.notify.admin'] = 'true';
$conf['settings']['inactivity.timeout'] = '30';
$conf['settings']['name.format'] = '{first} {last}';
$conf['settings']['css.extension.file'] = '';
$conf['settings']['disable.password.reset'] = 'true';
$conf['settings']['home.url'] = '';
$conf['settings']['logout.url'] = '';
$conf['settings']['default.homepage'] = '4';
$conf['settings']['schedule']['use.per.user.colors'] = 'false';
$conf['settings']['schedule']['show.inaccessible.resources'] = 'true';
$conf['settings']['schedule']['reservation.label'] = '{name}';
$conf['settings']['schedule']['hide.blocked.periods'] = 'false';
$conf['settings']['ics']['require.login'] = 'true';
$conf['settings']['ics']['subscription.key'] = '';
$conf['settings']['ics']['import'] = 'false';
$conf['settings']['ics']['import.key'] = '';
$conf['settings']['privacy']['view.schedules'] = 'true';
$conf['settings']['privacy']['view.reservations'] = 'false';
$conf['settings']['privacy']['hide.user.details'] = 'false';
$conf['settings']['privacy']['hide.reservation.details'] = 'false';
$conf['settings']['privacy']['allow.guest.reservations'] = 'false';
$conf['settings']['reservation']['start.time.constraint'] = 'future';
$conf['settings']['reservation']['updates.require.approval'] = 'false';
$conf['settings']['reservation']['prevent.participation'] = 'false';
$conf['settings']['reservation']['prevent.recurrence'] = 'false';
$conf['settings']['reservation']['enable.reminders'] = 'false';
$conf['settings']['reservation']['allow.guest.participation'] = 'false';
$conf['settings']['reservation']['allow.wait.list'] = 'false';
$conf['settings']['reservation']['checkin.minutes.prior'] = '5';
$conf['settings']['reservation.notify']['resource.admin.add'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.update'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['resource.admin.approval'] = 'false';
$conf['settings']['reservation.notify']['application.admin.add'] = 'false';
$conf['settings']['reservation.notify']['application.admin.update'] = 'false';
$conf['settings']['reservation.notify']['application.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['application.admin.approval'] = 'false';
$conf['settings']['reservation.notify']['group.admin.add'] = 'false';
$conf['settings']['reservation.notify']['group.admin.update'] = 'false';
$conf['settings']['reservation.notify']['group.admin.delete'] = 'false';
$conf['settings']['reservation.notify']['group.admin.approval'] = 'false';
$conf['settings']['uploads']['enable.reservation.attachments'] = 'false';
$conf['settings']['uploads']['reservation.attachment.path'] = 'uploads/reservation';
$conf['settings']['uploads']['reservation.attachment.extensions'] = 'txt,jpg,gif,png,doc,docx,pdf,xls,xlsx,ppt,pptx,csv';
$conf['settings']['database']['type'] = 'mysql';
$conf['settings']['database']['user'] = 'reservadesalas';
$conf['settings']['database']['password'] = '';
#$conf['settings']['database']['hostspec'] = 'localhost';
$conf['settings']['database']['hostspec'] = 'db';
$conf['settings']['database']['name'] = 'reservadesalas';
$conf['settings']['phpmailer']['mailer'] = 'mail';
$conf['settings']['phpmailer']['smtp.host'] = '';
$conf['settings']['phpmailer']['smtp.port'] = '25';
$conf['settings']['phpmailer']['smtp.secure'] = '';
$conf['settings']['phpmailer']['smtp.auth'] = 'true';
$conf['settings']['phpmailer']['smtp.username'] = '';
$conf['settings']['phpmailer']['smtp.password'] = '';
$conf['settings']['phpmailer']['sendmail.path'] = '/usr/sbin/sendmail';
$conf['settings']['phpmailer']['smtp.debug'] = 'false';
$conf['settings']['plugins']['Authentication'] = '';
$conf['settings']['plugins']['Authorization'] = '';
$conf['settings']['plugins']['Permission'] = '';
$conf['settings']['plugins']['PostRegistration'] = '';
$conf['settings']['plugins']['PreReservation'] = '';
$conf['settings']['plugins']['PostReservation'] = '';
$conf['settings']['install.password'] = '5898d8de892d3';
$conf['settings']['pages']['enable.configuration'] = 'true';
$conf['settings']['api']['enabled'] = 'true';
$conf['settings']['recaptcha']['enabled'] = 'false';
$conf['settings']['recaptcha']['public.key'] = '';
$conf['settings']['recaptcha']['private.key'] = '';
$conf['settings']['email']['default.from.address'] = '';
$conf['settings']['email']['default.from.name'] = '';
$conf['settings']['reports']['allow.all.users'] = 'false';
$conf['settings']['password']['minimum.letters'] = '6';
$conf['settings']['password']['minimum.numbers'] = '0';
$conf['settings']['password']['upper.and.lower'] = 'false';
$conf['settings']['reservation.labels']['ics.summary'] = '{title}';
$conf['settings']['reservation.labels']['ics.my.summary'] = '{title}';
$conf['settings']['reservation.labels']['rss.description'] = '<div><span>Start</span> {startdate}</div><div><span>End</span> {enddate}</div><div><span>Organizer</span> {name}</div><div><span>Description</span> {description}</div>';
$conf['settings']['reservation.labels']['my.calendar'] = '{resourcename} {title}';
$conf['settings']['reservation.labels']['resource.calendar'] = '{name}';
$conf['settings']['reservation.labels']['reservation.popup'] = '';
$conf['settings']['security']['security.headers'] = 'false';
$conf['settings']['security']['security.strict-transport'] = 'true';
$conf['settings']['security']['security.x-frame'] = 'deny';
$conf['settings']['security']['security.x-xss'] = '1; mode=block';
$conf['settings']['security']['security.x-content-type'] = 'nosniff';
$conf['settings']['security']['security.content-security-policy'] = 'default-src \'self\'';
$conf['settings']['google.analytics']['tracking.id'] = '';
$conf['settings']['authentication']['allow.facebook.login'] = 'true';
$conf['settings']['authentication']['allow.google.login'] = 'true';
$conf['settings']['authentication']['required.email.domains'] = '';
$conf['settings']['credits']['enabled'] = 'false';

# https://git.ufca.edu.br/web-php/booked/reservadesalas/-/snippets/5
$custom_array_merge = function($array_primario, $array_secundario) use (&$custom_array_merge) {
    $array_flag = true;
    $arrays_array_secundario = array_filter($array_secundario, function($v) {return is_array($v);}); 
    $arrays_key_array_secundario = array_keys($arrays_array_secundario);
    $estatico_array_secundario = array_filter($array_secundario, function($v) {return !is_array($v);});

    $array_primario = array_merge($array_primario, $estatico_array_secundario);

    foreach($arrays_key_array_secundario as $key) {
        if(isset($array_primario[$key])) {
            $array_primario[$key] = $custom_array_merge($array_primario[$key], $array_secundario[$key]);
        }
        
    }

    return $array_primario;
};

foreach($_ENV as $env => $value) {
    if (preg_match('/^BOOKED__(.+)/i', $env)) {
        # Normalizando nome das chaves
        $env = preg_replace('/^BOOKED__/i', '', $env);
        $env = preg_replace('/__/i', '+', $env);
        $env = preg_replace('/_/i', '.', $env);

        # Separando as chaves de conf
        $config_key = explode('+', $env);

        # Extraindo última chave que será o valor em si
        $config_last_key = array_pop($config_key);

        # Criando subarray de configurações
        $config_last_array = $value;
        for($i = count($config_key) - 1; $i >= -1; $i--) {
            $config_last_array = array(
                $config_last_key => $config_last_array
            );
            $config_last_key = $config_key[$i];
        }

        $conf = $custom_array_merge($conf, $config_last_array);
    }
}

?>
