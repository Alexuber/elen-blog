// вешаем функцию на событие
$('.likeBtn').on('click', function (e) {
  console.dir($(this).data('id'));
  $.post(
    // передаем пост запрос
    "/api.php?p=like", // на страницу лайк
    { post_id: $(this).data('id') }, // с параметрами пост_айди и юзер_айд
    function (data) {
      console.log(data);
    },
    "json"
  );
});
