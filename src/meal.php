<?php
$currentPage = 'meal';
$description = 'デニーツアーの食事について説明します。';
$ogTitle = 'デニーツアーの食事説明ページ';
$ogType = 'article';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

      <div class="base-layout">
        <h1 class="top_title">食事について</h1>
        <div class="top_comment">
          <span class="top_comment-item">meal</span>
        </div>
        <p class="intro">
          自炊したり、スーパーやコンビニでご飯買ったり、外食したりとケースバイケースで決めます。
        </p>

        <h2 class="sub_titles">ご飯について</h2>
        <p>
          自炊の場合、お金は割り勘です。水、お茶、氷も自炊の中に含みます。お米、調味料は無料です。
        </p>

        <h3 class="sub_titles">夜ごはん</h3>
        <p>
          外食したり、みんなでスーパーマーケットで食材を買って自炊したりします。
        </p>

        <h3 class="sub_titles">朝ごはん</h3>
        <p>
          コンビニやスーパーで買います。自炊も可能です。
        </p>

        <h3 class="sub_titles">昼ごはん</h3>
        <p>
          各自に任せます。ゲレ食を食べる。またはリュックを持ってる人にお昼ご飯を入れて貰うとか。
        </p>

        <h2 class="sub_titles">お願い</h2>
        <p>
          <span class="attention">賞味期限が早いものは持って帰って貰います。生肉、生魚、卵、牛乳など。</span><br>
          冷凍できるものは置いて行っても良いです。
        </p>
      </div>

<?php require __DIR__ . '/includes/footer.php'; ?>
