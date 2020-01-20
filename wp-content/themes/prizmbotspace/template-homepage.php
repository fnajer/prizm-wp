<?php
/**
 * Template name: Главная Страница
 */

get_header();
?>
<!-- only content wrapper -->
    <main class="content-wrapper">

      <div class="promo-bg">
        <section class="promo container container_indent">
          <div class="promo__container">
            <h2 class="heading"><?php pll_e('promo_title'); ?></h2>
            <p class="text"><?php format_paragraph(pll__('promo_paragraph')); ?></p>
            <button class="button button_theme_purple button_with-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <g fill="none" fill-rule="evenodd">
                    <path d="M-2-2h24v24H-2z"/>
                    <path fill="#FFF" fill-rule="nonzero" d="M10 0c5.523 0 10 4.477 10 10s-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0zm4.979 6.545c-.073-.614-.817-.479-1.23-.34-2.128.809-4.234 1.678-6.332 2.563-1.219.54-2.524 1.077-3.693 1.721-.57.417.399.693 1.06.966.736.227 1.595.573 2.332.168 1.443-.83 2.778-1.83 4.147-2.773.249-.16 1.004-.68.749-.062-.948 1.036-2.008 1.873-3.008 2.858-.35.285-.714.858-.322 1.257 1.198.838 2.422 1.65 3.635 2.47.505.404 1.295.077 1.406-.553.322-1.892.653-3.783.939-5.681.112-.863.277-1.726.316-2.594z"/>
                </g>
              </svg>
              <?php pll_e('try_now'); ?>
            </button>
            <button class="button button_theme_dark"><?php pll_e('promo_btn'); ?></button>
          </div>
        
        </section>
      </div>

      <section class="projects container container_indent">
        <div class="projects__left-container">
          <div class="project project_prizmbot">
            <div class="project__container">
              <img class="project__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/prizmbot.png" width="128" height="128" alt="Logo of prizmbot.space site" />
              <span class="project__note">ALREADY WORKING</span>
              <span class="project__name">PrizmBot.Space</span>
            </div>
          </div>
          <div class="project project_minter">
            <div class="project__container">
              <img class="project__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/minter.png" width="128" height="128" alt="Logo of minter site" />
              <span class="project__note">COMING SOON</span>
              <span class="project__name">Minter</span>
            </div>
          </div>
          <div class="project project_coin">
            <div class="project__container">
              <div class="project__img project__img_circle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/coin-name.png" width="46" height="66" alt="Logo of coin name site" />
              </div>
              <span class="project__note">CHOOSE NEXT</span>
              <span class="project__name">Coin Name</span>
            </div>
          </div>
        </div>
        <div class="projects__right-container">
          <h3 class="subtitle"><?php pll_e('projects_subtitle'); ?></h3>
          <h2 class="heading"><?php pll_e('projects_title'); ?></h2>
          <p class="text"><?php format_paragraph(pll__('projects_paragraph')); ?></p>
          <button class="button button_theme_purple button_with-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <g fill="none" fill-rule="evenodd">
                  <path d="M-2-2h24v24H-2z"/>
                  <path fill="#FFF" fill-rule="nonzero" d="M10 0c5.523 0 10 4.477 10 10s-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0zm4.979 6.545c-.073-.614-.817-.479-1.23-.34-2.128.809-4.234 1.678-6.332 2.563-1.219.54-2.524 1.077-3.693 1.721-.57.417.399.693 1.06.966.736.227 1.595.573 2.332.168 1.443-.83 2.778-1.83 4.147-2.773.249-.16 1.004-.68.749-.062-.948 1.036-2.008 1.873-3.008 2.858-.35.285-.714.858-.322 1.257 1.198.838 2.422 1.65 3.635 2.47.505.404 1.295.077 1.406-.553.322-1.892.653-3.783.939-5.681.112-.863.277-1.726.316-2.594z"/>
              </g>
            </svg>
            <?php pll_e('try_now'); ?>
          </button>
        </div>
      </section>

      <section class="mobile container container_indent">
        <div class="mobile__container">
          <h3 class="subtitle"><?php pll_e('mobile_subtitle'); ?></h3>
          <h2 class="heading"><?php pll_e('mobile_title'); ?></h2>
          <div class="mobile__list">
            <div class="mobile__item">
              <div class="mobile__circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M-2-2h32v32H-2z"/>
                      <path fill="#2CA5E0" fill-rule="nonzero" d="M14 .667c7.364 0 13.333 5.97 13.333 13.333 0 7.364-5.97 13.333-13.333 13.333C6.636 27.333.667 21.363.667 14 .667 6.636 6.637.667 14 .667zm6.638 8.726c-.097-.818-1.089-.638-1.64-.454-2.837 1.079-5.645 2.238-8.441 3.418-1.626.72-3.366 1.437-4.925 2.295-.76.556.531.924 1.412 1.288.983.302 2.128.765 3.11.224 1.925-1.106 3.705-2.44 5.53-3.697.332-.213 1.339-.907.998-.084-1.263 1.382-2.677 2.498-4.01 3.812-.467.38-.953 1.143-.43 1.675 1.599 1.119 3.23 2.201 4.848 3.294.673.538 1.726.103 1.874-.737.43-2.522.87-5.044 1.252-7.575.15-1.15.369-2.302.422-3.46z"/>
                  </g>
                </svg>
              </div>
              Telegram
              <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                <g fill="none" fill-rule="evenodd">
                    <path d="M-9 18V-6h24v24z"/>
                    <path fill="#E0E0FF" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
                </g>
              </svg>
            </div>
            <div class="mobile__item">
              <div class="mobile__circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M-4-1h32v32H-4z"/>
                      <path fill="#E0E0FF" fill-rule="nonzero" d="M6.375 27.057a6.146 6.146 0 0 1-1.422-1.314 17.628 17.628 0 0 1-1.216-1.662 16.074 16.074 0 0 1-2.034-4.155c-.572-1.717-.85-3.36-.85-4.968 0-1.795.39-3.36 1.146-4.675a6.606 6.606 0 0 1 2.4-2.493 6.4 6.4 0 0 1 3.246-.96c.4 0 .834.057 1.291.171.331.092.731.24 1.223.423.628.24.971.389 1.086.423.365.137.674.194.914.194.183 0 .446-.057.737-.148.166-.058.48-.16.926-.355.44-.16.79-.297 1.068-.4.423-.125.832-.24 1.2-.297a5.664 5.664 0 0 1 1.312-.057 7.783 7.783 0 0 1 2.217.48c1.166.469 2.107 1.2 2.808 2.24a5.625 5.625 0 0 0-.828.629 6.997 6.997 0 0 0-1.406 1.72 5.828 5.828 0 0 0-.736 2.88c.017 1.237.332 2.325.96 3.268a6.092 6.092 0 0 0 1.753 1.756c.355.24.665.405.96.514-.137.428-.288.846-.463 1.257a16.216 16.216 0 0 1-1.428 2.64c-.494.72-.882 1.257-1.177 1.611-.46.549-.903.96-1.349 1.254a3.002 3.002 0 0 1-1.66.498c-.4.018-.8-.034-1.181-.145-.331-.108-.658-.23-.978-.369a7.932 7.932 0 0 0-1.035-.388 5.165 5.165 0 0 0-1.33-.168c-.457 0-.903.057-1.326.165-.354.1-.697.224-1.036.372-.48.2-.794.331-.977.388-.37.11-.75.176-1.132.2-.594 0-1.147-.171-1.698-.514l.015-.015zM14.208 5.96c-.777.389-1.515.553-2.255.498-.114-.738 0-1.497.309-2.328a6.293 6.293 0 0 1 1.143-1.92A6.181 6.181 0 0 1 15.267.77c.755-.388 1.475-.594 2.16-.628.092.777 0 1.543-.285 2.365a6.786 6.786 0 0 1-1.143 2.012 5.765 5.765 0 0 1-1.813 1.44l.022.001z"/>
                  </g>
                </svg>
              </div>
              iOS
              <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                <g fill="none" fill-rule="evenodd">
                    <path d="M-9 18V-6h24v24z"/>
                    <path fill="#E0E0FF" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
                </g>
              </svg>
            </div>
            <div class="mobile__item">
              <div class="mobile__circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="17" viewBox="0 0 28 17">
                  <g fill="none" fill-rule="evenodd">
                      <path d="M-2-7h32v32H-2z"/>
                      <path fill="#3DDC84" fill-rule="nonzero" d="M27.333 16.333H.667A15.111 15.111 0 0 1 3.122 9.59 12.444 12.444 0 0 1 7.19 5.667l.455-.256L5.4 1.622a.567.567 0 0 1 .189-.778.556.556 0 0 1 .767.2l2.31 3.89a14.022 14.022 0 0 1 5.378-1 13.556 13.556 0 0 1 5.278 1l2.3-3.89A.556.556 0 0 1 22.4.856a.567.567 0 0 1 .178.777l-2.245 3.8.556.311a12.644 12.644 0 0 1 4.033 4.023 16.089 16.089 0 0 1 2.411 6.566zM19 11.356a1.111 1.111 0 1 0 2.222 0 1.111 1.111 0 0 0-2.222 0zm-12.222 0a1.111 1.111 0 1 0 2.222 0 1.111 1.111 0 0 0-2.222 0z"/>
                  </g>
                </svg>
              </div>
              Android
              <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12">
                <g fill="none" fill-rule="evenodd">
                    <path d="M-9 18V-6h24v24z"/>
                    <path fill="#E0E0FF" fill-rule="nonzero" d="M.29 9.88L4.17 6 .29 2.12A.996.996 0 1 1 1.7.71L6.29 5.3c.39.39.39 1.02 0 1.41L1.7 11.3a.996.996 0 0 1-1.41 0c-.38-.39-.39-1.03 0-1.42z"/>
                </g>
              </svg>
            </div>
          </div>
        </div>
      </section>

      <section class="calculator container container_indent">
        <div class="calculator__left-container">
          <div class="calculator__tabs">
            <button data-tab="prizm" class="tab tab_active">Prizm Income</button>
            <button data-tab="percentage" class="tab">Percentage Income</button>
          </div>
          <div class="calculator__ranges">
            <div class="range">
              <div class="range__body">
                <div class="range__body-text">
                  <span class="range__title">Wallet balance PRIZM</span>
                  <span id="range-balance-body" class="range__body-total">65,698</span>
                </div>
                <div id="slider-balance" class="slider">
                  <div id="custom-handle" class="ui-slider-handle"></div>
                </div>
              </div>
              <div class="range__total">
                <span id="range-balance-total" class="range__total-text">65,698</span>
              </div>
            </div>
            <div class="range">
              <div class="range__body">
                <div class="range__body-text">
                  <span class="range__title">Reinvestment frequency in hours:</span>
                  <span id="range-time-body" class="range__body-total">320</span id="range-prizm-body">
                </div>
                <div id="slider-time" class="slider">
                  <div id="custom-handle" class="ui-slider-handle"></div>
                </div>
              </div>
              <div class="range__total">
                <span id="range-time-total" class="range__total-text">320</span>
              </div>
            </div>
          </div>
          <table data-tab="prizm" class="calculator__table">
            <tbody class="calculator__mobile-body">
              <tr class="mobile-body__item">
                <td class="mobile-body__item-head">less than 1,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item">
                <td class="mobile-body__item-head">from 1,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item">
                <td class="mobile-body__item-head">from 10,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item mobile-body__item-extra item-extra-hide">
                <td class="mobile-body__item-head">from 100,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item mobile-body__item-extra item-extra-hide">
                <td class="mobile-body__item-head">from 1,000,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item mobile-body__item-extra item-extra-hide">
                <td class="mobile-body__item-head">from 10,000,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item mobile-body__item-extra item-extra-hide">
                <td class="mobile-body__item-head">from 100,000,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item mobile-body__item-extra item-extra-hide">
                <td class="mobile-body__item-head">from 1,000,000,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr id="calculator-show-more-1" class="calculator__mobile-btn"><td class="calculator__more-info">More info</td></tr>
            </tbody>
            <thead class="calculator__table-head">
              <tr>
                <th>PZM</th>
                <th>COF</th>
                <th>Per Day</th>
                <th>Per Month</th>
                <th>Per Year</th>
              </tr>
            </thead>
            <tbody class="calculator__table-body">
              <tr>
                <td>less than 1,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 1,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 10,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 100,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 1,000,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 10,000,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 100,000,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 1,000,000,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
            </tbody>
          </table>
          <table data-tab="percentage" class="hide calculator__table">
            <tbody class="calculator__mobile-body">
              <tr class="mobile-body__item">
                <td class="mobile-body__item-head">less than 1,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">OOF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item">
                <td class="mobile-body__item-head">from 1,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item">
                <td class="mobile-body__item-head">from 10,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item mobile-body__item-extra item-extra-hide">
                <td class="mobile-body__item-head">from 100,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item mobile-body__item-extra item-extra-hide">
                <td class="mobile-body__item-head">from 1,000,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item mobile-body__item-extra item-extra-hide">
                <td class="mobile-body__item-head">from 10,000,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item mobile-body__item-extra item-extra-hide">
                <td class="mobile-body__item-head">from 100,000,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr class="mobile-body__item mobile-body__item-extra item-extra-hide">
                <td class="mobile-body__item-head">from 1,000,000,000</td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">COF</span>
                  <span class="item-row__value">1</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Day</span>
                  <span class="item-row__value">166.66</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Month</span>
                  <span class="item-row__value">5,111.70</span>
                </td>
                <td class="mobile-body__item-row">
                  <span class="item-row__name">Per Year</span>
                  <span class="item-row__value">96,937</span>
                </td>
              </tr>
              <tr id="calculator-show-more-2" class="calculator__mobile-btn"><td class="calculator__more-info">More info</td></tr>
            </tbody>
            <thead class="calculator__table-head">
              <tr>
                <th>OOP</th>
                <th>COF</th>
                <th>Per Day</th>
                <th>Per Month</th>
                <th>Per Year</th>
              </tr>
            </thead>
            <tbody class="calculator__table-body">
              <tr>
                <td>less than 1,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 1,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 10,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 100,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 1,000,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 10,000,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 100,000,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
              <tr>
                <td>from 1,000,000,000</td>
                <td>1</td>
                <td>166.66</td>
                <td>5,111.70</td>
                <td>96,937</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="calculator__right-container">
          <h3 class="subtitle"><?php pll_e('calculator_subtitle'); ?></h3>
          <h2 class="heading"><?php pll_e('calculator_title'); ?></h2>
          <p class="text"><?php format_paragraph(pll__('calculator_paragraph')); ?></p>
          <button class="button button_theme_purple button_with-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <g fill="none" fill-rule="evenodd">
                  <path d="M-2-2h24v24H-2z"/>
                  <path fill="#FFF" fill-rule="nonzero" d="M10 0c5.523 0 10 4.477 10 10s-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0zm4.979 6.545c-.073-.614-.817-.479-1.23-.34-2.128.809-4.234 1.678-6.332 2.563-1.219.54-2.524 1.077-3.693 1.721-.57.417.399.693 1.06.966.736.227 1.595.573 2.332.168 1.443-.83 2.778-1.83 4.147-2.773.249-.16 1.004-.68.749-.062-.948 1.036-2.008 1.873-3.008 2.858-.35.285-.714.858-.322 1.257 1.198.838 2.422 1.65 3.635 2.47.505.404 1.295.077 1.406-.553.322-1.892.653-3.783.939-5.681.112-.863.277-1.726.316-2.594z"/>
              </g>
            </svg>
            <?php pll_e('try_now'); ?>
          </button>
        </div>
      </section>

      <section class="steps container container_indent">
        <div class="steps__left-container">
          <h3 class="subtitle"><?php pll_e('steps_subtitle'); ?></h3>
          <h2 class="heading"><?php pll_e('steps_title'); ?></h2>
          <iframe width="445" height="250" src="https://www.youtube.com/embed/o-avwgbeD_8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="steps__right-container">
          <div class="steps__blocks">
            <div class="step">
              <span class="step__num">1</span>
              <h4 class="step__title"><?php pll_e('steps_title_1'); ?></h4>
              <p class="step__text hide-content"><?php format_paragraph(pll__('steps_paragraph_1')); ?></p>
              <button id="show-more-1" class="step__btn">
                <span id="show" class="step__more">more</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6"> -->
                  <g fill="none" fill-rule="evenodd">
                      <path d="M15 13H-5V-7h20z" opacity=".87"/>
                      <path fill="#9C42F5" fill-rule="nonzero" d="M8.233.742L5 3.975 1.767.742A.83.83 0 1 0 .592 1.917l3.825 3.825a.83.83 0 0 0 1.175 0l3.825-3.825a.83.83 0 0 0 0-1.175.848.848 0 0 0-1.184 0z"/>
                  </g>
                </svg>
              </button>
            </div>
            <div class="step">
              <span class="step__num">2</span>
              <h4 class="step__title"><?php pll_e('steps_title_2'); ?></h4>
              <p class="step__text hide-content"><?php format_paragraph(pll__('steps_paragraph_2')); ?></p>
              <button id="show-more-2" class="step__btn">
                <span id="show" class="step__more">more</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6"> -->
                  <g fill="none" fill-rule="evenodd">
                      <path d="M15 13H-5V-7h20z" opacity=".87"/>
                      <path fill="#9C42F5" fill-rule="nonzero" d="M8.233.742L5 3.975 1.767.742A.83.83 0 1 0 .592 1.917l3.825 3.825a.83.83 0 0 0 1.175 0l3.825-3.825a.83.83 0 0 0 0-1.175.848.848 0 0 0-1.184 0z"/>
                  </g>
                </svg>
              </button>
            </div>
            <div class="step">
              <span class="step__num">3</span>
              <h4 class="step__title"><?php pll_e('steps_title_3'); ?></h4>
              <p class="step__text hide-content"><?php format_paragraph(pll__('steps_paragraph_3')); ?></p>
              <button id="show-more-3" class="step__btn">
                <span id="show" class="step__more">more</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6"> -->
                  <g fill="none" fill-rule="evenodd">
                      <path d="M15 13H-5V-7h20z" opacity=".87"/>
                      <path fill="#9C42F5" fill-rule="nonzero" d="M8.233.742L5 3.975 1.767.742A.83.83 0 1 0 .592 1.917l3.825 3.825a.83.83 0 0 0 1.175 0l3.825-3.825a.83.83 0 0 0 0-1.175.848.848 0 0 0-1.184 0z"/>
                  </g>
                </svg>
              </button>
            </div>
          </div>
        </divs>
      </section>

      <section class="affiliates container container_indent">
        <div class="affiliates__left-container">
          
          <table class="affiliates__table">
            <tbody>
              <tr>
                <td>LINE 1</td>
                <td class="slider-affiliates-value">-</td>
                <td>
                  <div class="slider-affiliates"></div>
                </td>
              </tr>
              <tr>
                <td>LINE 2</td>
                <td class="slider-affiliates-value">-</td>
                <td>
                  <div class="slider-affiliates"></div>
                </td>
              </tr>
              <tr>
                <td>LINE 3</td>
                <td class="slider-affiliates-value">-</td>
                <td>
                  <div class="slider-affiliates"></div>
                </td>
              </tr>
              <tr>
                <td>LINE 4</td>
                <td class="slider-affiliates-value">-</td>
                <td>
                  <div class="slider-affiliates"></div>
                </td>
              </tr>
              <tr>
                <td>LINE 5</td>
                <td class="slider-affiliates-value">-</td>
                <td>
                  <div class="slider-affiliates"></div>
                </td>
              </tr>
              <tr>
                <td>LINE 6</td>
                <td class="slider-affiliates-value">-</td>
                <td>
                  <div class="slider-affiliates"></div>
                </td>
              </tr>
              <tr>
                <td>LINE 7</td>
                <td class="slider-affiliates-value">-</td>
                <td>
                  <div class="slider-affiliates"></div>
                </td>
              </tr>
              <tr>
                <td>LINE 8</td>
                <td class="slider-affiliates-value">-</td>
                <td>
                  <div class="slider-affiliates"></div>
                </td>
              </tr>
              <tr>
                <td>LINE 9</td>
                <td class="slider-affiliates-value">-</td>
                <td>
                  <div class="slider-affiliates"></div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="affiliates__right-container">
          <h3 class="subtitle"><?php pll_e('affiliates_subtitle'); ?></h3>
          <h2 class="heading"><?php format_paragraph(pll__('affiliates_title')); ?></h2>
          <p class="text"><?php format_paragraph(pll__('affiliates_paragraph')); ?></p>
        </div>
      </section>

      <section class="trading container container_indent">
        <div class="ratings__right-container">
          <h3 class="subtitle"><?php pll_e('trading_subtitle'); ?></h3>
          <h2 class="heading"><?php pll_e('trading_title'); ?></h2>
        </div>
        <div class="ratings__left-container">
          <div class="rating rating_market">
            <div class="trading__block">
              <div class="trading__img trading__img_circle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bit-team.png" width="62" height="69" alt="Logo of coin name site" />
              </div>
              <span class="trading__note">TRADING PLATFORM</span>
              <span class="trading__name">bit.team</span>
              <button class="button button_theme_purple button_mr_none">Buy PRIZM</button>
            </div>
          </div>
          <div class="rating rating_hills">
            <div class="trading__block">
              <div class="trading__img trading__img_circle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hotbit.png" width="62" height="69" alt="Logo of coin name site" />
              </div>
              <span class="trading__note">TRADING PLATFORM</span>
              <span class="trading__name">hotbit.io</span>
              <button class="button button_theme_purple button_mr_none">Buy PRIZM</button>
            </div>
          </div>
          <div class="rating rating_gecko">
            <div class="trading__block">
              <div class="trading__img trading__img_circle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/livecoin.png" width="62" height="69" alt="Logo of coin name site" />
              </div>
              <span class="trading__note">TRADING PLATFORM</span>
              <span class="trading__name">livecoin.net</span>
              <button class="button button_theme_purple button_mr_none">Buy PRIZM</button>
            </div>
          </div>
          <div class="rating rating_panic">
            <div class="trading__block">
              <div class="trading__img trading__img_circle">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btc-alpha.png" width="94" height="54" alt="Logo of coin name site" />
              </div>
              <span class="trading__note">CRYPTO EXCHANGE</span>
              <span class="trading__name">btc-alpha.com</span>
              <button class="button button_theme_purple button_mr_none">Buy PRIZM</button>
            </div>
          </div>
        </div>
      </section>

      <section class="ratings container container_indent">
        <div class="ratings__left-container">
          <div class="rating rating_market">
            <div class="rating__container">
              <img class="rating__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/market.png" width="96" height="96" alt="Logo of prizmbot.space site" />
              <span class="rating__note">PPC MARKETS TRACKING</span>
              <span class="rating__name">coinmarketcap.com</span>
              <span class="rating__cost">$0.422308</span>
            </div>
          </div>
          <div class="rating rating_hills">
            <div class="rating__container">
              <img class="rating__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/hills.png" width="96" height="96" alt="Logo of minter site" />
              <span class="rating__note">NETWORK ASSISTANT</span>
              <span class="rating__name">coinhills.com</span>
              <span class="rating__cost">$0.42974932</span>
            </div>
          </div>
          <div class="rating rating_gecko">
            <div class="rating__container">
              <img class="rating__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/gecko.png" width="96" height="96" alt="Logo of minter site" />
              <span class="rating__note">CRYPTOCURRENCY VALUE</span>
              <span class="rating__name">coingecko.com</span>
              <span class="rating__cost">$0.425709</span>
            </div>
          </div>
          <div class="rating rating_panic">
            <div class="rating__container">
              <img class="rating__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/panic.png" width="96" height="96" alt="Logo of minter site" />
              <span class="rating__note">RATES DATA</span>
              <span class="rating__name">cryptopanic.com</span>
              <span class="rating__cost">$0.426286</span>
            </div>
          </div>
        </div>
        <div class="ratings__right-container">
          <h3 class="subtitle"><?php pll_e('ratings_subtitle'); ?></h3>
          <h2 class="heading"><?php pll_e('ratings_title'); ?></h2>
          <p class="text"><?php format_paragraph(pll__('ratings_paragraph')); ?></p>
          <button class="button button_theme_purple button_with-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <g fill="none" fill-rule="evenodd">
                  <path d="M-2-2h24v24H-2z"/>
                  <path fill="#FFF" fill-rule="nonzero" d="M10 0c5.523 0 10 4.477 10 10s-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0zm4.979 6.545c-.073-.614-.817-.479-1.23-.34-2.128.809-4.234 1.678-6.332 2.563-1.219.54-2.524 1.077-3.693 1.721-.57.417.399.693 1.06.966.736.227 1.595.573 2.332.168 1.443-.83 2.778-1.83 4.147-2.773.249-.16 1.004-.68.749-.062-.948 1.036-2.008 1.873-3.008 2.858-.35.285-.714.858-.322 1.257 1.198.838 2.422 1.65 3.635 2.47.505.404 1.295.077 1.406-.553.322-1.892.653-3.783.939-5.681.112-.863.277-1.726.316-2.594z"/>
              </g>
            </svg>
            <?php pll_e('try_now'); ?>
          </button>
        </div>
      </section>

      <section class="news container container_indent">
        <h3 class="subtitle"><?php pll_e('news_subtitle'); ?></h3>
        <h2 class="heading"><?php pll_e('news_title'); ?></h2>
        <div class="news__list">
		
		<?php
		$args = array(
            'posts_per_page'   => 10,
            'offset'           => 0,
            'category'         => '',
            'category_name'    => '',
            'orderby'          => 'date',
            'order'            => 'DESC',
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'post',
            'post_mime_type'   => '',
            'post_parent'      => '',
            'author'           => '',
            'author_name'      => '',
            'post_status'      => 'publish',
            'suppress_filters' => true 
        );
        query_posts($args);
		if ( have_posts() ) :
			
			while ( have_posts() ) :
				the_post();
				
				get_template_part( 'template-parts/content', 'posts' );
			endwhile;
			
		endif;
		?>
        </div>
      </section>

      <section class="join">
        <div class="container">
          <div class="join__container">
            <h3 class="subtitle"><?php pll_e('join_subtitle'); ?></h3>
            <h2 class="heading"><?php pll_e('join_title'); ?> <span class="text-purple"></span></h2>
            <button class="button button_theme_purple button_with-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <g fill="none" fill-rule="evenodd">
                    <path d="M-2-2h24v24H-2z"/>
                    <path fill="#FFF" fill-rule="nonzero" d="M10 0c5.523 0 10 4.477 10 10s-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0zm4.979 6.545c-.073-.614-.817-.479-1.23-.34-2.128.809-4.234 1.678-6.332 2.563-1.219.54-2.524 1.077-3.693 1.721-.57.417.399.693 1.06.966.736.227 1.595.573 2.332.168 1.443-.83 2.778-1.83 4.147-2.773.249-.16 1.004-.68.749-.062-.948 1.036-2.008 1.873-3.008 2.858-.35.285-.714.858-.322 1.257 1.198.838 2.422 1.65 3.635 2.47.505.404 1.295.077 1.406-.553.322-1.892.653-3.783.939-5.681.112-.863.277-1.726.316-2.594z"/>
                </g>
              </svg>
              <?php pll_e('get_in_touch'); ?>
            </button>
          </div>
        </div>
      
      </section>

    </main> <!-- end content wrapper -->
<?php
get_footer();
?>
