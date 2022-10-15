<?php
if(isset($_POST['post_id'])) {  // якщо в нас є запити ПОСТ
    
//     if(isset($_COOKIE['user'])) {

//         $userSQL = 'SELECT * FROM users WHERE id = ' . $_COOKIE['user'];
//         $userResult = $conn->query($userSQL);
//         if($userResult) {
//             $user = $userResult->fetch_assoc();

//             $sql = "SELECT * FROM users_post_likes WHERE user_id=" . $user['id'] .
//                 " AND post_id=" . $_POST['post_id'];

//             $result = $conn->query($sql);

//             if($result->num_rows > 0) {
//                 // перевіряємо якщо є записи
//                 $sql = "DELETE FROM users_post_likes WHERE user_id=" . $user['id'] . " AND post_id=" . $_POST['post_id'];
//                 $conn->query($sql);

//                 echo 'disliked';
//             } else {

//                 $sql = "INSERT INTO `users_post_likes` (`post_id`, `user_id`) VALUES ('" . $_POST['post_id'] . "', '" . $user['id'] . "');";                            // если пользователь авторизован - делаем добавление в БД               
//                 if ($result = $conn->query($sql)) {
//                     echo 'liked';
//                 }
//             }
//         } else {
//             echo 'no login';
//         }
//     }
// } else {
//     echo 'Error';
print_r($_COOKIE);
}

// куки не передаются в 4-й строке!!!!!!!!
