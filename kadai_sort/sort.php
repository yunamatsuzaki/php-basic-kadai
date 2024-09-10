<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
      function sort_2way($order) {
          // ソートする配列
          $nums = [15, 4, 18, 23, 10];

          if ($order) {
              echo '昇順にソートします。<br>';

              // 昇順にソート
              sort($nums);
              foreach ($nums as $num) {
                  echo $num . '<br>';
              }
          } else {
              echo '降順にソートします。<br>';

              // 降順にソート
              rsort($nums);
              foreach ($nums as $num) {
                  echo $num . '<br>';
              }
          }
      }

      // 関数の呼び出し
      sort_2way(TRUE);
      sort_2way(FALSE);
    ?>
     </p>
</body>

</html>