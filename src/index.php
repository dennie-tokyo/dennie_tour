<?php
$currentPage = 'index';
$description = 'デニーツアーの内容を説明するサイトです。';
$ogTitle = 'デニーツアーのホームページ';
$ogType = 'website';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

      <div class="base-layout">
        <h1 class="top_title">DENNIE.TOUR</h1>
        <div class="top_comment">
          <p class="top_comment-item"></p>
        </div>
        <div class="top-menu-list">
          <div class="list-group list-group-flush">
            <a href="schedule" class="list-group-item top-menu-list-item">スケジュールについて</a>
            <a href="apartment" class="list-group-item top-menu-list-item">マンションについて</a>
            <a href="room" class="list-group-item top-menu-list-item">部屋について</a>
            <a href="guest_room" class="list-group-item top-menu-list-item">ゲストルームについて</a>
            <a href="price" class="list-group-item top-menu-list-item">料金について</a>
            <a href="meal" class="list-group-item top-menu-list-item">食事について</a>
            <a href="food_and_drink" class="list-group-item top-menu-list-item">飲食物について</a>
            <a href="expenses" class="list-group-item top-menu-list-item">経費について</a>
            <a href="others" class="list-group-item top-menu-list-item">その他</a>
          </div>
        </div>
      </div>

<?php require __DIR__ . '/includes/footer.php'; ?>
