<?php
$currentPage = 'schedule';
$description = 'デニーツアーのスケジュールを説明します。';
$ogTitle = 'デニーツアーのスケジュール説明ページ';
$ogType = 'article';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

      <div class="base-layout">
        <h1 class="top_title">スケジュールについて</h1>
        <div class="top_comment">
          <span class="top_comment-item">schedule</span>
        </div>

        <p class="intro">
          基本的なスケジュールの説明になります。<br>
        </p>

        <h2 class="sub_titles">大まかなスケジュール</h2>
        <p>
          この限りではなく以下は大まかなスケジュールになるので参考程度にして下さい。<br>
          金曜夜発、日曜に帰る2泊2日となります。
        </p>

        <span>【金曜】</span>
        <ol class="schedule-list-style">
          <li>仕事後出発(ピックアップ)</li>
          <li>途中コンビニ寄る(次の日の朝食や昼食を購入)</li>
          <li>マンション到着</li>
          <li>就寝</li>
        </ol>

        <span>【土曜】</span>
        <ol class="schedule-list-style">
          <li>起床</li>
          <li>朝食</li>
          <li>ゲレンデへ向かう</li>
          <li>湯沢エリアのゲレンデで滑る</li>
          <li>自炊の場合、スーパーやコンビニへ行く(※1)</li>
          <li>マンションへ戻る</li>
          <li>お風呂</li>
          <li>食事や飲み</li>
          <li>就寝</li>
        </ol>
        <p>※1・・・外食の場合、夜ごはんを食べに行き、その後、お酒や朝ごはんの買い出し。</p>

        <span>【日曜】</span>
        <ol class="schedule-list-style">
          <li>起床</li>
          <li>朝食</li>
          <li>ゲレンデへ向かう</li>
          <li>かぐらで滑る</li>
          <li>マンションへ戻る</li>
          <li>お風呂</li>
          <li>帰る準備</li>
          <li>部屋の掃除</li>
          <li>帰宅</li>
        </ol>

        <h2 class="sub_titles">工程の説明</h2>
        <h3 class="sub_titles">ゲレンデについて</h3>
        <p>
          1日目は湯沢エリア、2日目は時間の都合上かぐらとしてますが、湯沢エリアのゲレンデでも大丈夫です。<br>
        </p>

        <h3 class="sub_titles">リフト券について</h3>
        <p>
          早割は用意してないので各自で手配お願いします。<br>
        </p>

        <h3 class="sub_titles">部屋の掃除について</h3>
        <p>
          部屋を利用した方は掃除をお願いします。<br>
          ゲストルームを利用した方は掃除しなくても大丈夫です。なお、ゲストルームの方は先に帰る事も可能です。
        </p>

        <h3 class="sub_titles">ピックアップについて</h3>
        <p>
          ピックアップ時間と場所は各自の住んでる場所を考えて車の運転手と相談になります。
        </p>

        <h2 class="sub_titles">人数について</h2>
        <p>3〜5名の場合、車1台、1部屋。6人以上になる場合、車複数台とゲストルームを利用します。</p>

        <h3 class="sub_titles">部屋割り</h3>
        <p>
          ゲストルームを借りて部屋が複数になる場合、部屋割りは適当に決めるので、要望があったら言って下さい。<br>
        </p>

      </div>

<?php require __DIR__ . '/includes/footer.php'; ?>
