      <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white nav-style-de">
          <div class="container-fluid">
            <a class="navbar-brand" href="https://dennie.tokyo">DENNIE.TOKYO</a>
            <button class="navbar-toggler nav-toggle-style" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item<?= $currentPage === 'index' ? ' active' : '' ?>">
                  <a class="nav-link"<?= $currentPage === 'index' ? ' aria-current="page"' : '' ?> href="./">Home</a>
                </li>
                <li class="nav-item<?= $currentPage === 'schedule' ? ' active' : '' ?>">
                  <a class="nav-link"<?= $currentPage === 'schedule' ? ' aria-current="page"' : '' ?> href="schedule">スケジュール</a>
                </li>
                <li class="nav-item<?= $currentPage === 'apartment' ? ' active' : '' ?>">
                  <a class="nav-link"<?= $currentPage === 'apartment' ? ' aria-current="page"' : '' ?> href="apartment">マンション</a>
                </li>
                <li class="nav-item<?= $currentPage === 'room' ? ' active' : '' ?>">
                  <a class="nav-link"<?= $currentPage === 'room' ? ' aria-current="page"' : '' ?> href="room">部屋</a>
                </li>
                <li class="nav-item<?= $currentPage === 'guest_room' ? ' active' : '' ?>">
                  <a class="nav-link"<?= $currentPage === 'guest_room' ? ' aria-current="page"' : '' ?> href="guest_room">ゲストルーム</a>
                </li>
                <li class="nav-item<?= $currentPage === 'price' ? ' active' : '' ?>">
                  <a class="nav-link"<?= $currentPage === 'price' ? ' aria-current="page"' : '' ?> href="price">料金</a>
                </li>
                <li class="nav-item<?= $currentPage === 'meal' ? ' active' : '' ?>">
                  <a class="nav-link"<?= $currentPage === 'meal' ? ' aria-current="page"' : '' ?> href="meal">食事</a>
                </li>
                <li class="nav-item<?= $currentPage === 'food_and_drink' ? ' active' : '' ?>">
                  <a class="nav-link"<?= $currentPage === 'food_and_drink' ? ' aria-current="page"' : '' ?> href="food_and_drink">飲食物</a>
                </li>
                <li class="nav-item<?= $currentPage === 'expenses' ? ' active' : '' ?>">
                  <a class="nav-link"<?= $currentPage === 'expenses' ? ' aria-current="page"' : '' ?> href="expenses">経費</a>
                </li>
                <li class="nav-item<?= $currentPage === 'others' ? ' active' : '' ?>">
                  <a class="nav-link"<?= $currentPage === 'others' ? ' aria-current="page"' : '' ?> href="others">その他</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
