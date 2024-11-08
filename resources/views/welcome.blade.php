<html>

<head>
  <title>Estetica Sandra Gonzalez</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <style>
@import url("https://fonts.googleapis.com/css2?family=Source+Sans+Pro:300,900&family=Open+Sans&family=Roboto&display=swap");
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
@import url('https://fonts.googleapis.com/css2?family=Acme&family=Fascinate+Inline&display=swap');

* {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block;
}

body {
  line-height: 1;
  z-index: 2
}

ol, ul {
  list-style: none;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after, q:before, q:after {
  content: "";
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

body {
  -webkit-text-size-adjust: none;
}

mark {
  background-color: transparent;
  color: inherit;
}

input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

input, select, textarea {
  -moz-appearance: none;
  -webkit-appearance: none;
  -ms-appearance: none;
  appearance: none;
}

/* Basic */
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body {
  background: #fff;
  overflow: hidden;
}

body.is-preload *, body.is-preload *:before, body.is-preload *:after {
  -moz-animation: none !important;
  -webkit-animation: none !important;
  -ms-animation: none !important;
  animation: none !important;
  -moz-transition: none !important;
  -webkit-transition: none !important;
  -ms-transition: none !important;
  transition: none !important;
}

body, input, select, textarea {
  color: #fff;
  font-family: "Roboto", sans-serif;
  font-size: 15pt;
  font-weight: 200 !important;
  letter-spacing: -0.025em;
  line-height: 1.75em;
}

a {
  -moz-transition: border-color 0.2s ease-in-out;
  -webkit-transition: border-color 0.2s ease-in-out;
  -ms-transition: border-color 0.2s ease-in-out;
  transition: border-color 0.2s ease-in-out;
  border-bottom: dotted 1px;
  color: inherit;
  outline: 0;
  text-decoration: none;
}

a:hover {
  border-color: transparent;
}

/* Icon */
.icon {
  text-decoration: none;
  position: relative;
}

.icon:before {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  text-rendering: auto;
  line-height: 1;
  text-transform: none !important;
  font-family: "Font Awesome 5 Free";
  font-weight: 400;
}

.icon > .label {
  display: none;
}

.icon.solid:before {
  font-weight: 900;
}

.icon.brands:before {
  font-family: "Font Awesome 5 Brands";
}

.github {
  z-index: 10000;
  top: 10px;
  right: 10px;
  position: fixed;
  border-radius: 5px;
  padding: 6px 6px 3px 6px;
  box-shadow: 0.1em 0.1em 0.4em #000;
  line-height: 1;
  font-family: system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial,
    sans-serif;
  text-align: center;
  & a:hover, a:link, a:visited, a:active {
    color: #000;
    text-decoration: none;
  }
  & img {
    height: 20px;
  }
  & #gh-project {
    font-size: 20px;
    padding-left: 5px;
    font-weight: bold;
    vertical-align: bottom;
  }
}

/* Wrapper */
@-moz-keyframes wrapper {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@-webkit-keyframes wrapper {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@-ms-keyframes wrapper {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@keyframes wrapper {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

#wrapper {
  -moz-animation: wrapper 3s forwards;
  -webkit-animation: wrapper 3s forwards;
  -ms-animation: wrapper 3s forwards;
  animation: wrapper 3s forwards;
  height: 100%;
  left: 0;
  opacity: 0;
  position: fixed;
  top: 0;
  width: 100%;
}

/* BG */
#bg {
    -moz-animation: bg 60s linear infinite;
    -webkit-animation: bg 60s linear infinite;
    -ms-animation: bg 60s linear infinite;
    animation: bg 60s linear infinite;
    -moz-backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    /* Set your background with this */
    background: #348cb2 url("{{ asset('img/fondoPrincipal.jpg') }}") bottom left;
    background-repeat: repeat-x;
    height: 100vh; /* Altura completa de la pantalla */
    left: 0;
    opacity: 1;
    position: fixed;
    top: 0;
  }

@-moz-keyframes bg {
  0% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    -moz-transform: translate3d(-2250px, 0, 0);
    -webkit-transform: translate3d(-2250px, 0, 0);
    -ms-transform: translate3d(-2250px, 0, 0);
    transform: translate3d(-2250px, 0, 0);
  }
}

@-webkit-keyframes bg {
  0% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    -moz-transform: translate3d(-2250px, 0, 0);
    -webkit-transform: translate3d(-2250px, 0, 0);
    -ms-transform: translate3d(-2250px, 0, 0);
    transform: translate3d(-2250px, 0, 0);
  }
}

@-ms-keyframes bg {
  0% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    -moz-transform: translate3d(-2250px, 0, 0);
    -webkit-transform: translate3d(-2250px, 0, 0);
    -ms-transform: translate3d(-2250px, 0, 0);
    transform: translate3d(-2250px, 0, 0);
  }
}

@keyframes bg {
  0% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  100% {
    -moz-transform: translate3d(-2250px, 0, 0);
    -webkit-transform: translate3d(-2250px, 0, 0);
    -ms-transform: translate3d(-2250px, 0, 0);
    transform: translate3d(-2250px, 0, 0);
  }
}

#bg {
  background-size: 2250px auto;
  width: 6750px;
}

/* Overlay */
@-moz-keyframes overlay {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@-webkit-keyframes overlay {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@-ms-keyframes overlay {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@keyframes overlay {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

#overlay {
  -moz-animation: overlay 1.5s 1.5s forwards;
  -webkit-animation: overlay 1.5s 1.5s forwards;
  -ms-animation: overlay 1.5s 1.5s forwards;
  animation: overlay 1.5s 1.5s forwards;
  background-attachment: fixed, fixed;
  background-image: url("https://tommykho.github.io/assets/images/overlay-pattern.png"),   url("https://tommykho.github.io/assets/images/overlay.svg");
  background-position: top left, center center;
  background-repeat: repeat, no-repeat;
  background-size: auto, cover;
  height: 100%;
  left: 0;
  opacity: 0;
  position: fixed;
  top: 0;
  width: 100%;
}

/* Main */
#main {
  height: 100%;
  left: 0;
  position: fixed;
  text-align: center;
  top: 0;
  width: 100%;
}

#main:before {
  content: "";
  display: inline-block;
  height: 100%;
  margin-right: 0;
  vertical-align: middle;
  width: 1px;
}

/* Header */
@-moz-keyframes header {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0;
  }

  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}

@-webkit-keyframes header {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0;
  }

  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}

@-ms-keyframes header {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0;
  }

  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}

@keyframes header {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0;
  }

  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}

@-moz-keyframes nav-icons {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0;
  }

  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}

@-webkit-keyframes nav-icons {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0;
  }

  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}

@-ms-keyframes nav-icons {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0;
  }

  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}

@keyframes nav-icons {
  0% {
    -moz-transform: translate3d(0, 1em, 0);
    -webkit-transform: translate3d(0, 1em, 0);
    -ms-transform: translate3d(0, 1em, 0);
    transform: translate3d(0, 1em, 0);
    opacity: 0;
  }

  100% {
    -moz-transform: translate3d(0, 0, 0);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    opacity: 1;
  }
}

#header {
  -moz-animation: header 1s 2.25s forwards;
  -webkit-animation: header 1s 2.25s forwards;
  -ms-animation: header 1s 2.25s forwards;
  animation: header 1s 2.25s forwards;
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-transform: translate3d(0, 0, 0);
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  cursor: default;
  display: inline-block;
  opacity: 0;
  position: relative;
  text-align: center;
  top: -1em;
  vertical-align: middle;
  width: 90%;
  color: #432f8a;
}

#header h1 {
  font-size: 4.35em;
  font-weight: 600;
  letter-spacing: -0.035em;
  line-height: 1em;

}

#header p {
  font-size: 1.25em;
  margin: 0.75em 0 0.25em 0;
  opacity: 0.75;
}

#header nav {
  margin: 1.5em 0 0 0;
}

#header nav li {
  -moz-animation: nav-icons 0.5s ease-in-out forwards;
  -webkit-animation: nav-icons 0.5s ease-in-out forwards;
  -ms-animation: nav-icons 0.5s ease-in-out forwards;
  animation: nav-icons 0.5s ease-in-out forwards;
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-transform: translate3d(0, 0, 0);
  -webkit-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  display: inline-block;
  height: 5.35em;
  line-height: 5.885em;
  opacity: 0;
  position: relative;
  top: 0;
  width: 5.35em;
}

#header nav li:nth-child(1) {
  -moz-animation-delay: 2.5s;
  -webkit-animation-delay: 2.5s;
  -ms-animation-delay: 2.5s;
  animation-delay: 2.5s;
}

#header nav li:nth-child(2) {
  -moz-animation-delay: 2.75s;
  -webkit-animation-delay: 2.75s;
  -ms-animation-delay: 2.75s;
  animation-delay: 2.75s;
}

#header nav li:nth-child(3) {
  -moz-animation-delay: 3s;
  -webkit-animation-delay: 3s;
  -ms-animation-delay: 3s;
  animation-delay: 3s;
}

#header nav li:nth-child(4) {
  -moz-animation-delay: 3.25s;
  -webkit-animation-delay: 3.25s;
  -ms-animation-delay: 3.25s;
  animation-delay: 3.25s;
}

#header nav li:nth-child(5) {
  -moz-animation-delay: 3.5s;
  -webkit-animation-delay: 3.5s;
  -ms-animation-delay: 3.5s;
  animation-delay: 3.5s;
}

#header nav li:nth-child(6) {
  -moz-animation-delay: 3.75s;
  -webkit-animation-delay: 3.75s;
  -ms-animation-delay: 3.75s;
  animation-delay: 3.75s;
}

#header nav li:nth-child(7) {
  -moz-animation-delay: 4s;
  -webkit-animation-delay: 4s;
  -ms-animation-delay: 4s;
  animation-delay: 4s;
}

#header nav li:nth-child(8) {
  -moz-animation-delay: 4.25s;
  -webkit-animation-delay: 4.25s;
  -ms-animation-delay: 4.25s;
  animation-delay: 4.25s;
}

#header nav li:nth-child(9) {
  -moz-animation-delay: 4.5s;
  -webkit-animation-delay: 4.5s;
  -ms-animation-delay: 4.5s;
  animation-delay: 4.5s;
}

#header nav li:nth-child(10) {
  -moz-animation-delay: 4.75s;
  -webkit-animation-delay: 4.75s;
  -ms-animation-delay: 4.75s;
  animation-delay: 4.75s;
}

#header nav a {
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-touch-callout: none;
  border: 0;
  display: inline-block;
}

#header nav a:before {
  -moz-transition: all 0.2s ease-in-out;
  -webkit-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  border-radius: 100%;
  border: solid 1px #fff;
  display: block;
  font-size: 1.75em;
  height: 2.5em;
  line-height: 2.5em;
  position: relative;
  text-align: center;
  top: 0;
  width: 2.5em;
}

#header nav a:hover {
  font-size: 1.1em;
}

#header nav a:hover:before {
  background-color: rgba(255, 255, 255, 0.175);
  color: #fff;
}

#header nav a:active {
  font-size: 0.95em;
  background: none;
}

#header nav a:active:before {
  background-color: rgba(255, 255, 255, 0.35);
  color: #fff;
}

#header nav a span {
  display: none;
}

/* Footer */
#footer {
  background-image: -moz-linear-gradient(
    top,
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0.5) 75%
  );
  background-image: -webkit-linear-gradient(
    top,
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0.5) 75%
  );
  background-image: -ms-linear-gradient(
    top,
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0.5) 75%
  );
  background-image: linear-gradient(
    top,
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0.5) 75%
  );
  bottom: 0;
  cursor: default;
  height: 6em;
  left: 0;
  line-height: 8em;
  position: absolute;
  text-align: center;
  width: 100%;
}

/* Wide */
@media screen and (max-width: 1680px) {
  /* Basic */
  body,
  input,
  select,
  textarea {
    font-size: 13pt;
  }

  /* BG */
  @-moz-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-1500px, 0, 0);
      -webkit-transform: translate3d(-1500px, 0, 0);
      -ms-transform: translate3d(-1500px, 0, 0);
      transform: translate3d(-1500px, 0, 0);
    }
  }

  @-webkit-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-1500px, 0, 0);
      -webkit-transform: translate3d(-1500px, 0, 0);
      -ms-transform: translate3d(-1500px, 0, 0);
      transform: translate3d(-1500px, 0, 0);
    }
  }

  @-ms-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-1500px, 0, 0);
      -webkit-transform: translate3d(-1500px, 0, 0);
      -ms-transform: translate3d(-1500px, 0, 0);
      transform: translate3d(-1500px, 0, 0);
    }
  }

  @keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-1500px, 0, 0);
      -webkit-transform: translate3d(-1500px, 0, 0);
      -ms-transform: translate3d(-1500px, 0, 0);
      transform: translate3d(-1500px, 0, 0);
    }
  }

  #bg {
    background-size: 1500px auto;
    width: 4500px;
  }
}

/* Normal */
@media screen and (max-width: 1280px) {
  /* Basic */
  body,
  input,
  select,
  textarea {
    font-size: 12pt;
  }

  /* BG */
  @-moz-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-750px, 0, 0);
      -webkit-transform: translate3d(-750px, 0, 0);
      -ms-transform: translate3d(-750px, 0, 0);
      transform: translate3d(-750px, 0, 0);
    }
  }

  @-webkit-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-750px, 0, 0);
      -webkit-transform: translate3d(-750px, 0, 0);
      -ms-transform: translate3d(-750px, 0, 0);
      transform: translate3d(-750px, 0, 0);
    }
  }

  @-ms-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-750px, 0, 0);
      -webkit-transform: translate3d(-750px, 0, 0);
      -ms-transform: translate3d(-750px, 0, 0);
      transform: translate3d(-750px, 0, 0);
    }
  }

  @keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-750px, 0, 0);
      -webkit-transform: translate3d(-750px, 0, 0);
      -ms-transform: translate3d(-750px, 0, 0);
      transform: translate3d(-750px, 0, 0);
    }
  }

  #bg {
    background-size: 750px auto;
    width: 2250px;
  }
}

/* Mobile */
@media screen and (max-width: 736px) {
  /* Basic */
  body {
    min-width: 320px;
  }

  body,
  input,
  select,
  textarea {
    font-size: 11pt;
  }

  /* BG */
  @-moz-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-300px, 0, 0);
      -webkit-transform: translate3d(-300px, 0, 0);
      -ms-transform: translate3d(-300px, 0, 0);
      transform: translate3d(-300px, 0, 0);
    }
  }

  @-webkit-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-300px, 0, 0);
      -webkit-transform: translate3d(-300px, 0, 0);
      -ms-transform: translate3d(-300px, 0, 0);
      transform: translate3d(-300px, 0, 0);
    }
  }

  @-ms-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-300px, 0, 0);
      -webkit-transform: translate3d(-300px, 0, 0);
      -ms-transform: translate3d(-300px, 0, 0);
      transform: translate3d(-300px, 0, 0);
    }
  }

  @keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-300px, 0, 0);
      -webkit-transform: translate3d(-300px, 0, 0);
      -ms-transform: translate3d(-300px, 0, 0);
      transform: translate3d(-300px, 0, 0);
    }
  }

  #bg {
    background-size: 300px auto;
    width: 900px;
  }

  /* Header */
  #header h1 {
    font-size: 2.5em;
  }

  #header p {
    font-size: 1em;
  }

  #header nav {
    font-size: 1em;
  }

  #header nav a:hover {
    font-size: 1em;
  }

  #header nav a:active {
    font-size: 1em;
  }
}

/* Mobile (Portrait) */
@media screen and (max-width: 480px) {
  /* BG */
  @-moz-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-412.5px, 0, 0);
      -webkit-transform: translate3d(-412.5px, 0, 0);
      -ms-transform: translate3d(-412.5px, 0, 0);
      transform: translate3d(-412.5px, 0, 0);
    }
  }

  @-webkit-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-412.5px, 0, 0);
      -webkit-transform: translate3d(-412.5px, 0, 0);
      -ms-transform: translate3d(-412.5px, 0, 0);
      transform: translate3d(-412.5px, 0, 0);
    }
  }

  @-ms-keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-412.5px, 0, 0);
      -webkit-transform: translate3d(-412.5px, 0, 0);
      -ms-transform: translate3d(-412.5px, 0, 0);
      transform: translate3d(-412.5px, 0, 0);
    }
  }

  @keyframes bg {
    0% {
      -moz-transform: translate3d(0, 0, 0);
      -webkit-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    100% {
      -moz-transform: translate3d(-412.5px, 0, 0);
      -webkit-transform: translate3d(-412.5px, 0, 0);
      -ms-transform: translate3d(-412.5px, 0, 0);
      transform: translate3d(-412.5px, 0, 0);
    }
  }

  #bg {
    background-size: 412.5px auto;
    width: 1237.5px;
  }

  /* Header */
  #header nav {
    padding: 0 1em;
  }
}

model-viewer {
  width: 500px;
  height: 300px;
}

@media screen and (max-width: 1280px) {
    #bg {
        background-size: 102rem auto;
        width: 2250px;
    }
}

.acme-regular {
    font-family: "Acme", sans-serif;
    font-weight: 400;
    font-style: normal;
  }

  </style>
</head>

<script type="module" src=https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.1/model-viewer.min.js></script>

<body class="is-preload">
  <div id="wrapper">
    <div id="bg"></div>
    <div id="overlay"></div>
    <div id="main">

      <!-- Header -->
      <header id="header">
        <h1 class="acme-regular">Estetica Sandra Gonzalez</h1>
        <p>Tiempo de calidad para tu belleza</p>
        <div style="position: absolute; text-align: center; left: 50%; transform: translateX(-50%);">
          <model-viewer camera-controls touch-action="pan-y" src=" {{  asset('3d/tiffany_cox_idle_animation.glb') }}" ar ar-modes="webxr scene-viewer quick-look" camera-controls shadow-intensity="1.29" exposure="0.4" shadow-softness="0.85" style="background-color: unset;" auto-rotate></model-viewer>
        </div>
        <nav>
          <ul>
            {{--  <li><a href="https://linkedin.com/in/tommyho510" class="icon brands fa-linkedin"><span class="label">Linked In</span></a></li>  --}}
            <li><a href="https://wa.link/u8ucio" class="icon brands fa-whatsapp"><span class="label">Whatsapp</span></a></li>
            <li><a href="https://www.instagram.com/estetica.sandra.gonzalez?igsh=MTFqbzd3MG8zaGpwcQ==" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="https://www.facebook.com/profile.php?id=100076255150874" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            {{--  <li><a href="https://www.youtube.com/c/tommyhosf" class="icon brands fa-youtube"><span class="label">YouTube</span></a></li>  --}}
            {{--  <li><a href="https://github.com/tommykho" class="icon brands fa-github"><span class="label">Github</span></a></li>  --}}
            {{--  <li><a href="https://tommykho.github.io" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>  --}}
            {{--  <li><a href="./model-viewer.html" class="fa-solid fa-vr-cardboard"><span class="label">3D Models</span></a></li>  --}}
            {{--  <li><a href="https://codepen.io/tommyho" class="fa-brands fa-codepen"><span class="label">Codepen</span></a></li>  --}}
          </ul>
        </nav>
      </header>

      <!-- Footer -->
      <footer id="footer">
      @if (Route::has('login'))
      <nav class="-mx-3 flex flex-1 justify-end">
          @auth
              <a href="{{ url('home') }}"
                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
              >
                  Home
              </a>
          @else
              <a href="{{ route('login') }}"
                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
              >
                  Log in
              </a>

              {{--  @if (Route::has('register'))
                  <a
                      href="{{ route('register') }}"
                      class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                  >
                      Register
                  </a>
              @endif  --}}
          @endauth
      </nav>
  @endif
      </footer>

    </div>
  </div>
  {{--  <div class="github">
  <div>
<a class="github-button" href="https://github.com/tommykho" data-color-scheme="no-preference: dark_high_contrast; light: light; dark: dark;" data-size="large" aria-label="Follow @buttons on GitHub">Follow @tommykho</a><br />
    <a class="github-button" href="https://github.com/tommykho/tommykho.github.io" data-color-scheme="no-preference: dark_high_contrast; light: light; dark: dark;" data-icon="octicon-star" data-show-count="true" aria-label="Star buttons/github-buttons on GitHub">Star</a>
    <a class="github-button" href="https://github.com/tommykho/tommykho.github.io/fork" data-icon="octicon-repo-forked" data-color-scheme="no-preference: dark_high_contrast; light: light; dark: dark;" aria-label="Fork buttons/github-buttons on GitHub">Fork</a>
  </div>
</div>  --}}

<script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
  <script href="assets/js/main.js"></script>
  <script>
    window.onload = function() {
      document.body.classList.remove('is-preload');
    }
    window.ontouchmove = function() {
      return false;
    }
    window.onorientationchange = function() {
      document.body.scrollTop = 0;
    }
  </script>
</body>

</html>
