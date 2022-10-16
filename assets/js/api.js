// вешаем функцию на событие
$('.likeBtn').on('click', function (e) {
    let that = $(this);
//   console.dir($(this).data('id'));
      
  // передаем пост запрос
  $.post("/api.php?p=like", // на страницу лайк
    {post_id: that.data('id')})
    .done(function(data) {
        
        console.dir(data);

        console.dir(that);

          if(data == 'liked') {
            that.addClass('liked'); 
          } else {
            that.removeClass("liked"); 
          } 
    }); 
})

