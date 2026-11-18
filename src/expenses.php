<?php
$currentPage = 'expenses';
$description = 'デニーツアーの経費について説明します。';
$ogTitle = 'デニーツアー経費説明ページ';
$ogType = 'article';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

      <div class="base-layout">
        <h1 class="top_title">経費について</h1>
        <div class="top_comment">
          <span class="top_comment-item">expenses</span>
        </div>

        <p class="intro">
        経費の使い道についての説明になります。<br>
        </p>

        <h2 class="sub_titles">経費の使い道</h2>
        <p>
          徴収している利用料金の使い道について、主な使い道は以下の通りです。
        </p>

        <ul class="list-style">
          <li>オフシーズンにマンションへ行く際の交通費(ガス代)</li>
          <li>備品。(お米、コーヒー、コーヒー用紙コップ、掃除用ウエットテイッシュ、キッチンハイター、調味料、サランラップなど)</li>
          <li>布団のクリーニング代</li>
          <li>カメムシ撃退スプレー</li>
          <li>医療品。(ロキソニンテープ)</li>
        </ul>

        <h2 class="sub_titles">料金の変動について</h2>
        <p>
          設備を良くした年は料金を値上げします。<br>
          設備投資をしない年は、料金は現状のままか、安くします。<br>
          設備を良くする例は、寝具の購入。ハンガーラックを増設した。調理器具の買い替えなど。
        </p>

      </div>

<?php require __DIR__ . '/includes/footer.php'; ?>
