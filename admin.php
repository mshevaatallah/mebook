
<?php 

include './config/koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <div class="sidebar-container">
          <div class="sidebar-logo">MeBook</div>
          <div class="sidebar-profile">
            <div class="sidebar-photo"></div>
            <div class="sidebar-name-container">
              <div class="sidebar-name">Prisma Janeera</div>
              <div class="sidebar-job">Admin</div>
            </div>
          </div>

          <div class="sidebar-navs">
            <div class="navs-container">
              <div class="list-nav">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  fill="#c7c7c7"
                  class="bi bi-book"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"
                  />
                </svg>

                <span class="navs-link">Buku</span>
              </div>
              <div class="list-nav">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  fill="#c7c7c7"
                  class="bi bi-people"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"
                  />
                </svg>

                <span class="navs-link">Siswa</span>
              </div>
              <div class="list-nav">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  fill="#c7c7c7"
                  class="bi bi-check-lg"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"
                  />
                </svg>
                <span class="navs-link">Pinjaman</span>
              </div>

              <div class="logout-navs">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  fill="#c7c7c7"
                  class="bi bi-door-open"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"
                  />
                  <path
                    d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"
                  />
                </svg>

                <div class="navs-link">Log Out</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main-content">
        <div class="welcome-container">
          <div class="greeting-text">Hi , Admin ! 👋🏻</div>
          <div class="greeting-desc">
            Selamat datang didalam dashboard admin , disini kamu bisa menghandle
            semua buku , dan kami bisa mendata siswa yang akan meminjam buku
          </div>
          <div class="button-add">
            <div class="button-add-right"><a href="./adminadd.php" style="text-decoration: none;color:#1e419b">ADD</a></div>
          </div>

          <div class="book-list-container">
             <?php  $i= 1; ?>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <div class="book-card-item">
              <div class="book-info">
                <div class="book-frame"></div>
                <div class="book-detail">
                  <div class="title-book"><?= $row["title"] ?></div>
                  <div class="genre-book"><?= $row["genre"] ?></div>
                  <div class="year-book"><?= $row["author"] ?></div>
                </div>
              </div>
              <div class="books-button-container">
                <div class="edit"><a href="./pages/updateform.php?id=<?= $row["id"]; ?>" style="text-decoration:none;color:white">Edit</a></div>
                <div class="delete">
                  <a href="./controller/delete.php?id=<?= $row["id"]; ?>" style="text-decoration:none;color:#1e419b">Delete</a>
                </div>
              </div>
            </div>
             <?php $i++; ?>
    <?php endwhile; ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
