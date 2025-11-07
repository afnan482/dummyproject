<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>InstaDummy</title>

  <!-- Materialize CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    body { background-color: #fafafa; margin-bottom: 70px; }
    nav { box-shadow: none; border-bottom: 1px solid #ddd; }
    .insta-card { max-width: 640px; margin: 25px auto; border-radius: 10px; overflow: hidden; }
    .avatar { width: 42px; height: 42px; border-radius: 50%; margin-right: 10px; }
    .username { font-weight: 600; font-size: 15px; }
    .card-image img { width: 100%; cursor: pointer; }
    .card-content { padding: 10px 16px 0 16px; }
    .action-icons i { margin-right: 10px; cursor: pointer; }
    .bottom-nav {
      position: fixed; bottom: 0; left: 0; right: 0;
      background: #fff; border-top: 1px solid #ddd;
      display: flex; justify-content: space-around; align-items: center;
      height: 60px; z-index: 999;
    }
    .bottom-nav i { color: #444; cursor: pointer; }
    .bottom-nav .active { color: #2196f3; }
  </style>
</head>
<body>

<nav class="white">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo black-text" style="font-family: monospace;">InstaDummy</a>
      <ul class="right">
        <li>
          <a href="#!" id="share-btn">
            <i class="material-icons black-text">share</i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
