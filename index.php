<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loading Page Done</title>
  <style>
    .loading-screen {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
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

    .loading-screen p.alert {
      position: absolute;
      bottom: 15px;
      color: red;
      font-weight: bold;
      animation: jump 5s infinite; /* Optionnelle */
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
  <div class="content h-screen flex flex-col items-center justify-center">
    <h1 class="text-white text-4xl font-bold mb-8">
      Loading Page Done
    </h1>

    <div id="imageContainer">
      <div class="loading-screen w-96 h-96 rounded-[2vw]">
        <span></span>
        <p class="alert"></p>
      </div>
    </div>
  </div>

  <script src="loading.js"></script>
</body>

</html>