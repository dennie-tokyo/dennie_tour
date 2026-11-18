<?php
$currentPage = 'price';
$description = 'デニーツアーの料金について説明します。';
$ogTitle = 'デニーツアーの料金説明ページ';
$ogType = 'article';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

      <div class="base-layout">
        <h1 class="top_title">料金について</h1>
        <div class="top_comment">
          <span class="top_comment-item">price</span>
        </div>

        <p class="intro">
        料金についての説明になります。<br>
        </p>

        <h2 class="sub_titles">部屋の料金について</h2>

        <h3 class="sub_titles">1回の料金</h3>
        <p>
          1回3000円です。連泊しても3000円です。
        </p>

        <h3 class="sub_titles">寝袋持参の場合</h3>
        <p>
          1回2500円です。連泊しても2500円です。<br>
        </p>

        <h3 class="sub_titles">シーズンパス</h3>
        <p>
          シーパス制度はありません。<br>
        </p>

        <h2 id="guest_room" class="sub_titles">ゲストルームの料金について</h2>
        <p>
          <span class="attention">ゲストルームの料金と使用するシーツの数の合計が料金となります。</span>
        </p>

        <h3 class="sub_titles">ゲストルームの料金</h3>
        <p>1部屋1泊4000円になります。</p>

        <h3 id="sheets_price" class="sub_titles">シーツの料金</h3>
        <p>
          1セット880円になります。連泊しても変わりません。<br>
        </p>

        <h2 class="sub_titles">料金計算</h3>
        <p>
          ゲストルームを借りた場合、部屋の料金とゲストルームの料金(シーツ数含む)の合計を参加者全員で割ります。
        </p>

        <h2 class="sub_titles">お風呂のみ利用</h3>
        <p>
          無料です。
        </p>

        <h2 class="sub_titles">交通費</h2>
        <p>各車のメンバーで精算をお願いします。</p>

        <h2 class="sub_titles">キャンセルポリシー</h2>
        <p>当日キャンセルになっても、料金はかかりません。<span class="attention">ただし、ゲストルームはキャンセル料がかかります。</span></p>

      </div>

<?php require __DIR__ . '/includes/footer.php'; ?>
