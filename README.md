# Cat Image Loader with Loading Screen

Ce projet utilise **AJAX** pour récupérer une image aléatoire de chat via l'API [TheCatAPI](https://api.thecatapi.com/v1/images/search) et afficher l'image sur une page web avec un **loading screen**.

## Description

Ce projet permet de récupérer une image de chat à l'aide de l'API **TheCatAPI** et d'afficher cette image sur une page web. Pendant que l'image est en cours de téléchargement, un écran de chargement est affiché avec une animation de trois points qui sautent. Lorsque l'image est récupérée, l'écran de chargement est masqué et l'image est affichée.

## Fonctionnalités

- Affichage d'un écran de chargement avec une animation de points qui sautent.
- Utilisation d'**AJAX** pour récupérer une image aléatoire depuis l'API TheCatAPI.
- Une fois l'image récupérée, l'écran de chargement disparaît et l'image du chat est affichée.

## Dépendances

- **AJAX** pour les appels réseau.
- **CSS** pour le style de l'écran de chargement et de l'animation.

## Installation

1. Clonez ce repository sur votre machine locale :
    ```bash
    git clone https://github.com/VialsShiny/Loading.git
    ```

2. Ouvrez le fichier `index.html` dans votre navigateur pour voir le projet en action.

## Utilisation

Lorsque vous chargez la page, l'écran de chargement apparaît. L'API **TheCatAPI** est appelée pour récupérer une image aléatoire de chat. L'écran de chargement disparaît une fois que l'image est prête et affichée sur la page.
