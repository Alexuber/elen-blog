<?php
if (isset($_POST['post_id']) && isset($_POST['user_id'])) {  // якщо в нас є запити ПОСТ

    echo "Success";
} else {
    echo "Error";
}
