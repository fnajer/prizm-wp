<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Webpack Template</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet"></head>
<body>
  <!-- main wrapper -->
  <div class="wrapper">
    <header class="header">
      <div class="header__container container">
        <span class="logo">prizmbot.<span class="logo_second-part">space</span></span>
        <ul class="header__menu menu">
            <li>Home</li>
            <li>Prizm</li>
            <li>Paramining</li>
            <li>Buy / Sell PZM</li>
            <li>Guides</li>
        </ul>
        <div class="wrapper-dropdown wrapperDropdown" tabindex="1">
          <div class="dropdown-head">
            <img class="language__img" src="assets/img/lng-en.png" alt="english language"/>
            <span class="language__name">EN</span>
          </div>
          <ul class="dropdown dropdownList">
            <li data-lang="en"><img src="assets/img/lng-en.png" alt="english language"/><span>EN</span></li>
            <li data-lang="ru"><img src="assets/img/lng-ru.svg" alt="russian language"/><span>RU</span></li>
            <li data-lang="ch"><img src="assets/img/lng-ch.svg" alt="china language"/><span>CH</span></li>
          </ul>
        </div>
        <button class="button button_theme_purple button_mr_none">Get in Touch</button>
        <div class="mobile-header">
          <div class="mobile-header__body">
            <ul class="mobile-menu">
              <li>
                <span>
                  Home
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M-9 18V-6h24v24z"/>
                      <path fill="#E0E0FF" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
                  </g>
                </svg>
              </li>
              <li>
                <span>
                  Prizm
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M-9 18V-6h24v24z"/>
                      <path fill="#E0E0FF" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
                  </g>
                </svg>
              </li>
              <li>
                <span>
                  Paramining
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M-9 18V-6h24v24z"/>
                      <path fill="#E0E0FF" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
                  </g>
                </svg>
              </li>
              <li>
                <span>
                  Buy / Sell PZM
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M-9 18V-6h24v24z"/>
                      <path fill="#E0E0FF" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
                  </g>
                </svg>
              </li>
              <li>
                <span>
                  Guides
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M-9 18V-6h24v24z"/>
                      <path fill="#E0E0FF" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
                  </g>
                </svg>
              </li>
            </ul>
            <div class="language-view wrapperMobileDropdown">
              <div class="language-view__left-col">
                <img class="language__img" src="assets/img/lng-en.png" alt="english language"/>
                Language
              </div>
              <div class="language-view__current">
                <span class="language__name">EN</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M-9 18V-6h24v24z"/>
                      <path fill="#E0E0FF" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
                  </g>
                </svg>
              </div>
            </div>
            <button class="button button_theme_purple button_mr_none">Get in Touch</button>
          </div>
          <div class="mobile-header__language">
            <div class="language__head">
              <div class="language__back">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M16-6v24H-8V-6z"/>
                      <path fill="#9c42f5" fill-rule="nonzero" d="M6.71 2.12L2.83 6l3.88 3.88a.996.996 0 1 1-1.41 1.41L.71 6.7a.996.996 0 0 1 0-1.41L5.3.7a.996.996 0 0 1 1.41 0c.38.39.39 1.03 0 1.42z"/>
                  </g>
               </svg>
               Menu
              </div>
              <span>Language</span>
            </div>
            <ul class="language__list dropdownList">
              <li class="lang-active" data-lang="en"><img src="assets/img/lng-en.png" alt="english language"/><span>English</span></li>
              <li data-lang="ru"><img src="assets/img/lng-ru.svg" alt="russian language"/><span>Русский</span></li>
              <li data-lang="ch"><img src="assets/img/lng-ch.svg" alt="china language"/><span>China</span></li>
            </ul>
          </div>
        </div>
        <div class="burger-btn"></div>
      </div>
    </header>
