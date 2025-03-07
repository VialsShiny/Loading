<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loading Page Done</title>
  <style>
    .loading-screen {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #000;
      /* Optionnel, pour un fond sombre */
    }

    .loading-screen::before,
    .loading-screen::after,
    .loading-screen span {
      content: '';
      width: 10px;
      height: 10px;
      background-color: white;
      border-radius: 50%;
      margin: 0 5px;
      animation: jump 0.6s ease-in-out infinite;
    }

    .loading-screen::before {
      animation-delay: 0s;
    }

    .loading-screen span {
      animation-delay: 0.2s;
    }

    .loading-screen::after {
      animation-delay: 0.4s;
    }

    @keyframes jump {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-15px);
      }
    }
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-black to-purple-600">
  <div class="loading-screen"><span></span></div>
  <div class="content h-screen flex flex-col items-center justify-center">
    <h1 class="text-white text-4xl font-bold mb-8">
      Loading Page Done
    </h1>

    <div id="imageContainer"></div>
  </div>

  <script src="loading.js"></script>
</body>

</html>