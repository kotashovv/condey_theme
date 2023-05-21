<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Получение данных из формы
  $phone = $_POST["user-phone"];
  $comment = $_POST["quest"];
  if (isset($_POST['need'])) {
    $needs = implode(', ', $_POST['need']);
  }
  
  
  // Параметры отправки письма
  $to = "info@kandeich.ru";
  $subject = "Новая заявка с формы";
  $message = "Телефон: " . $phone . "\n\n";
  $message .= "Комментарий: " . $comment . "\n\n";
  $message .= "Потребности: " . $needs . "\n\n";
  
  // Создание уникального границы для разделения данных
  $boundary = uniqid();
  
  // Определение заголовков письма с указанием типа контента для прикрепленных файлов
  $headers = "From: WordPress Form <info@kandeich.ru>" . "\r\n";
  $headers .= "Reply-To: " . $to . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: multipart/mixed; boundary=" . $boundary . "\r\n";
  
  // Формирование тела письма
  $message_body = "--" . $boundary . "\r\n";
  $message_body .= "Content-Type: text/plain; charset=UTF-8\r\n";
  $message_body .= "\r\n" . $message . "\r\n";
  
  // Обработка прикрепленных файлов
   if (! $_FILES) {
    $files = $_FILES["user-files"];
    
    // Добавление файлов к письму
    foreach ($files["tmp_name"] as $index => $tmp_name) {
      $file_name = $files["name"][$index];
      $file_tmp = $files["tmp_name"][$index];
      $file_type = $files["type"][$index];
      $file_size = $files["size"][$index];
      
      $message_body .= "--" . $boundary . "\r\n";
      $message_body .= "Content-Type: " . $file_type . "; name=" . $file_name . "\r\n";
      $message_body .= "Content-Disposition: attachment; filename=" . $file_name . "\r\n";
      $message_body .= "Content-Transfer-Encoding: base64\r\n";
      $message_body .= "\r\n";
      $message_body .= chunk_split(base64_encode(file_get_contents($file_tmp))) . "\r\n";
    }
  }
  // Завершение тела письма
  $message_body .= "--" . $boundary . "--";
  
  // Отправка письма
  if (mail($to, $subject, $message_body, $headers)) {
    echo "Ваша заявка успешно отправлена.";
  } else {
    echo "При отправке заявки произошла ошибка.";
  }
}
?>
