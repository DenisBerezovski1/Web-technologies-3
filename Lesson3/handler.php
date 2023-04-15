<? header('Content-Type: text/html; charset=utf-8');
 
if( isset($_POST['name'],$_POST['email'],$_POST['text']) ){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $text = trim($_POST['text']);
    if(empty($name) || empty($email) || empty($text)) {
        echo 'Вы заполнили не все поля!';
    }
    else{ //все поля заполнены, отправляем
        $mailto = 'k33@ya.ru';
        $subject = 'Тема письма';
        //формируем текст сообщения
        $message  = 'Сообщение от пользователя <b>'.$name.'</b>';
        $message .= 'E-mail пользователя: <a href="mailto:' . $email . '">' . $email . '</a><br />';
        $message .= 'Текст сообщения:<br />' . $text;
        mail($mailto, $subject, $message, $headers);
        echo 'Ваше письмо успешно отправлено!';
    }
}
 
?>