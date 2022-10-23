// вешаем функцию на событие
$('.likeBtn').on('click', function (e) {
    let that = $(this);
//   console.dir($(this).data('id'));
      
  // передаем пост запрос
  $.post("/api.php?p=like", // на страницу лайк
    {post_id: that.data('id')})
    .done(function(data) {
        
       console.dir(data); 
        data = JSON.parse(data);
      

          if(data.status !== 'disliked') {
            that.addClass('liked');
          } 
          else {
            that.removeClass('liked');  
          }
          that.find('b').text(data.count);
    }); 
})


// if(data !== 'liked') {
//   that.toggleClass('disliked');
// } 
// else {
//   that.addClass('disliked');
// }
// console.dir(that);


