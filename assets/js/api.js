$.post(
  "/api.php?p=like",
  { post_id: 1, user_id: 1 },
  function (data) {
    console.log(data); // 2pm
  },
  "json"
);
