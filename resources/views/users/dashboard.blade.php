<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Infinite UNY">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Peserta LIP3D UNY">

    <link rel="shortcut icon" href="https://lomba.uny.ac.id/lip3d/favicon-lip3d-2023.jpg">
    <title>Dashboard
        || Peserta LIP3D #2</title>
    <link rel="stylesheet" href="https://lomba.uny.ac.id/lip3d/dashboard/css/dashlite.css?ver=3.1.2">
    <link id="skin-default" rel="stylesheet" href="https://lomba.uny.ac.id/lip3d/dashboard/css/theme.css?ver=3.1.2">

    <script type="text/javascript" class="flasher-js">
        (function() {
            var rootScript = 'https://cdn.jsdelivr.net/npm/@flasher/flasher@1.3.1/dist/flasher.min.js';
            var FLASHER_FLASH_BAG_PLACE_HOLDER = {};
            var options = mergeOptions([], FLASHER_FLASH_BAG_PLACE_HOLDER);

            function mergeOptions(first, second) {
                return {
                    context: merge(first.context || {}, second.context || {}),
                    envelopes: merge(first.envelopes || [], second.envelopes || []),
                    options: merge(first.options || {}, second.options || {}),
                    scripts: merge(first.scripts || [], second.scripts || []),
                    styles: merge(first.styles || [], second.styles || []),
                };
            }

            function merge(first, second) {
                if (Array.isArray(first) && Array.isArray(second)) {
                    return first.concat(second).filter(function(item, index, array) {
                        return array.indexOf(item) === index;
                    });
                }
                return Object.assign({}, first, second);
            }

            function renderOptions(options) {
                if (!window.hasOwnProperty('flasher')) {
                    console.error('Flasher is not loaded');
                    return;
                }
                requestAnimationFrame(function() {
                    window.flasher.render(options);
                });
            }

            function render(options) {
                if ('loading' !== document.readyState) {
                    renderOptions(options);
                    return;
                }
                document.addEventListener('DOMContentLoaded', function() {
                    renderOptions(options);
                });
            }
            if (1 === document.querySelectorAll('script.flasher-js').length) {
                document.addEventListener('flasher:render', function(event) {
                    render(event.detail);
                });
            }
            if (window.hasOwnProperty('flasher') || !rootScript || document.querySelector('script[src="' + rootScript +
                    '"]')) {
                render(options);
            } else {
                var tag = document.createElement('script');
                tag.setAttribute('src', rootScript);
                tag.setAttribute('type', 'text/javascript');
                tag.onload = function() {
                    render(options);
                };
                document.head.appendChild(tag);
            }
        })();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@flasher/flasher@1.3.1/dist/flasher.min.js" type="text/javascript"></script>
</head>

<body class="nk-body bg-lighter npc-default has-sidebar no-touch nk-nio-theme">

    <div id="appUser" class="nk-app-root">
        <div class="nk-main">
            <div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="https://lomba.uny.ac.id/lip3d/logo-lip3d-uny.png"
                                srcset="https://lomba.uny.ac.id/lip3d/logo-lip3d-uny.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="https://lomba.uny.ac.id/lip3d/logo-lip3d-uny.png"
                                srcset="https://lomba.uny.ac.id/lip3d/logo-lip3d-uny.png 2x" alt="logo-dark">
                            <img class="logo-small logo-img logo-img-small"
                                src="https://lomba.uny.ac.id/lip3d/logo-lip3d-collapse.png"
                                srcset="https://lomba.uny.ac.id/lip3d/logo-lip3d-collapse.png 2x" alt="logo-small">
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                            data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                            data-target="sidebarMenu"><svg xmlns="http://www.w3.org/2000/svg" height="16"
                                width="14" viewBox="0 0 448 512">
                                <path
                                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                            </svg></a>
                    </div>
                </div>


                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar="init">
                            <div class="simplebar-wrapper" style="margin: -16px 0px -40px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                            aria-label="scrollable content" style="height: 100%; overflow: hidden;">
                                            <div class="simplebar-content" style="padding: 16px 0px 40px;">
                                                <ul class="nk-menu">
                                                    <li class="nk-menu-heading">
                                                        <h6 class="overline-title text-primary-alt">Dashboard</h6>
                                                    </li>
                                                    <li class="nk-menu-item active current-page">
                                                        <a href="{{ route('users.dashboard') }}" class="nk-menu-link">
                                                            <span class="nk-menu-icon"><svg style="width: auto"
                                                                    xmlns="http://www.w3.org/2000/svg" height="16"
                                                                    width="18" viewBox="0 0 576 512">
                                                                    <path
                                                                        d="M160 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h50.7L9.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L256 109.3V160c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H160zM576 80a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM448 208a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM400 384a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48 80a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm128 0a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM272 384a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48 80a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM144 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM576 336a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm-48-80a48 48 0 1 0 0-96 48 48 0 1 0 0 96z" />
                                                                </svg></span>
                                                            <span class="nk-menu-text">Dashboard</span>
                                                        </a>
                                                    </li>


                                                    <li class="nk-menu-heading">
                                                        <h6 class="overline-title text-primary-alt">Biodata</h6>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="{{ route('users.pt') }}" class="nk-menu-link">
                                                            <span class="nk-menu-icon"><svg style="width: auto;"
                                                                    xmlns="http://www.w3.org/2000/svg" height="16"
                                                                    width="12" viewBox="0 0 384 512">
                                                                    <path
                                                                        d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" />
                                                                </svg></span>
                                                            <span class="nk-menu-text">Data Perguruan Tinggi</span>
                                                        </a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="{{ route('users.profile') }}" class="nk-menu-link">
                                                            <span class="nk-menu-icon"><svg style="width: auto"
                                                                    xmlns="http://www.w3.org/2000/svg" height="16"
                                                                    width="20" viewBox="0 0 640 512">
                                                                    <path
                                                                        d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v17.7c0 7.8 4.8 14.8 11.6 18.7c6.8 3.9 15.1 4.5 21.8 .6l13.8-7.9c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-14.4 8.3c-6.5 3.7-10 10.9-10 18.4s3.5 14.7 10 18.4l14.4 8.3c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-13.8-7.9c-6.7-3.9-15.1-3.3-21.8 .6c-6.8 3.9-11.6 10.9-11.6 18.7v17.7c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V467.8c0-7.9-4.9-14.9-11.7-18.9c-6.8-3.9-15.2-4.5-22-.6l-13.5 7.8c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l14-8.1c6.5-3.8 10.1-11.1 10.1-18.6s-3.5-14.8-10.1-18.6l-14-8.1c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l13.6 7.8c6.8 3.9 15.2 3.3 22-.6c6.9-3.9 11.7-11 11.7-18.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z" />
                                                                </svg></span>
                                                            <span class="nk-menu-text">Data Ketua</span>
                                                        </a>
                                                    </li>
                                                    <li class="nk-menu-item">
                                                        <a href="{{ route('users.team') }}" class="nk-menu-link">
                                                            <span class="nk-menu-icon"><svg style="width: auto"
                                                                    xmlns="http://www.w3.org/2000/svg" height="16"
                                                                    width="20" viewBox="0 0 640 512">
                                                                    <path
                                                                        d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z" />
                                                                </svg></span>
                                                            <span class="nk-menu-text">Manajemen Tim</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 350px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                            </div>
                        </div>
                        <div class="nk-sidebar-footer">
                            <ul class="nk-menu nk-menu-footer">
                                <li class="nk-menu-item">
                                    <a href="https://www.youtube.com/watch?v=kbc5pVOI6GQ" class="nk-menu-link"
                                        target="_blank">
                                        <span class="nk-menu-icon" style="color: #31b401"><svg style="width: auto"
                                                xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                                viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path fill="#41b041"
                                                    d="M0 128C0 92.7 28.7 64 64 64H320c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2V384c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1V320 192 174.9l14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z" />
                                            </svg></span>
                                        <span class="nk-menu-text">Tutorial</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item ms-auto">
                                    <div class="dropup">
                                        <a href="https://bit.ly/INFOLIP3DUNY" class="nk-menu-link has-indicator"
                                            data-offset="0,10">
                                            <span class="nk-menu-icon" style="color: #31b401"><svg
                                                    style="width: auto" xmlns="http://www.w3.org/2000/svg"
                                                    height="16" width="16"
                                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path fill="#41b041"
                                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM169.8 165.3c7.9-22.3 29.1-37.3 52.8-37.3h58.3c34.9 0 63.1 28.3 63.1 63.1c0 22.6-12.1 43.5-31.7 54.8L280 264.4c-.2 13-10.9 23.6-24 23.6c-13.3 0-24-10.7-24-24V250.5c0-8.6 4.6-16.5 12.1-20.8l44.3-25.4c4.7-2.7 7.6-7.7 7.6-13.1c0-8.4-6.8-15.1-15.1-15.1H222.6c-3.4 0-6.4 2.1-7.5 5.3l-.4 1.2c-4.4 12.5-18.2 19-30.6 14.6s-19-18.2-14.6-30.6l.4-1.2zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
                                                </svg></span>
                                            <span class="nk-menu-text">Bantuan</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nk-wrap">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon"
                                    data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="#" class="logo-link">
                                    <img class="logo-light logo-img"
                                        src="https://lomba.uny.ac.id/lip3d/lip3d-nobg.png"
                                        srcset="https://lomba.uny.ac.id/lip3d/lip3d-nobg.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="https://lomba.uny.ac.id/lip3d/lip3d-nobg.png"
                                        srcset="https://lomba.uny.ac.id/lip3d/lip3d-nobg.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ms-3 ms-xl-0">
                                <p><b>Sistem Perlombaan LIP3D #2 UNY 2023</b></p>

                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">

                                    <li class="dropdown chats-dropdown hide-mb-xs" style="padding: 0%">
                                        <a href="https://bit.ly/INFOLIP3DUNY" class="dropdown-toggle">
                                            <div class="user-name" style="margin-right: 1rem"> HelpDesk</div>
                                            <div class="user-avatar sm" style="background: #31b401">
                                                <svg style="width: 12px" xmlns="http://www.w3.org/2000/svg"
                                                    height="16" width="20" viewBox="0 0 640 512">
                                                    <path fill="#ffffff"
                                                        d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
                                                </svg>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm" style="background: #31b401">
                                                    <svg style="width: 12px" xmlns="http://www.w3.org/2000/svg"
                                                        height="16" width="14" viewBox="0 0 448 512">
                                                        <path fill="#ffffff"
                                                            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                                    </svg>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-name">Admin LIP3D
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="16"
                                                            width="10" viewBox="0 0 320 512">
                                                            <path
                                                                d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar" style="background: #31b401">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Admin LIP3D</span>
                                                        <span class="sub-text">lip3d@uny.ac.id</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href=""><svg xmlns="http://www.w3.org/2000/svg"
                                                                height="16" width="14"
                                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                <path
                                                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                                                            </svg><span>Lihat
                                                                Profil</span></a></li>
                                                    <li><a class="dark-switch" href="#"><svg
                                                                xmlns="http://www.w3.org/2000/svg" height="16"
                                                                width="12"
                                                                viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                <path
                                                                    d="M144.7 98.7c-21 34.1-33.1 74.3-33.1 117.3c0 98 62.8 181.4 150.4 211.7c-12.4 2.8-25.3 4.3-38.6 4.3C126.6 432 48 353.3 48 256c0-68.9 39.4-128.4 96.8-157.3zm62.1-66C91.1 41.2 0 137.9 0 256C0 379.7 100 480 223.5 480c47.8 0 92-15 128.4-40.6c1.9-1.3 3.7-2.7 5.5-4c4.8-3.6 9.4-7.4 13.9-11.4c2.7-2.4 5.3-4.8 7.9-7.3c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-3.7 .6-7.4 1.2-11.1 1.6c-5 .5-10.1 .9-15.3 1c-1.2 0-2.5 0-3.7 0c-.1 0-.2 0-.3 0c-96.8-.2-175.2-78.9-175.2-176c0-54.8 24.9-103.7 64.1-136c1-.9 2.1-1.7 3.2-2.6c4-3.2 8.2-6.2 12.5-9c3.1-2 6.3-4 9.6-5.8c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-3.6-.3-7.1-.5-10.7-.6c-2.7-.1-5.5-.1-8.2-.1c-3.3 0-6.5 .1-9.8 .2c-2.3 .1-4.6 .2-6.9 .4z" />
                                                            </svg></em><span>Mode
                                                                Gelap</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ route('logout') }}"><svg
                                                                xmlns="http://www.w3.org/2000/svg" height="16"
                                                                width="16"
                                                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                <path
                                                                    d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                                                            </svg><span>Keluar</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <div class="nk-content">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Dashboard</h3>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                                    data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="row g-gs">

                                        <div class="col-xxl-3 col-md-6">
                                            <div class="card card-full overflow-hidden">
                                                <div class="nk-ecwg nk-ecwg7 h-100">
                                                    <div class="card-inner flex-grow-1">
                                                        <div class="card-title-group mb-4">
                                                            <div class="card-title">
                                                                <h6 class="title">Selamat Datang, Peserta LIP3D #2
                                                                </h6>
                                                            </div>
                                                        </div>
                                                        <div class="ratio ratio-4x3">
                                                            <iframe width="560" height="315"
                                                                src="https://www.youtube.com/embed/kbc5pVOI6GQ?si=1NoLImWtl-bfvQzx"
                                                                title="YouTube video player" frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                allowfullscreen=""></iframe>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card">
                                                <div class="nk-ecwg nk-ecwg6">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Kelengkapan Biodata</h6>
                                                            </div>
                                                        </div>
                                                        <div class="data">
                                                            <div class="data-group">
                                                                <div>
                                                                    <ol>
                                                                        <li>1) Isian Email PT
                                                                            <span style="color:red; border:none">
                                                                                <svg style="width: auto"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    height="16" width="16"
                                                                                    viewBox="0 0 512 512">
                                                                                    <path fill="#ff0000"
                                                                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                                                                                </svg>
                                                                            </span>
                                                                        </li>
                                                                        <li>2) Isian Website PT
                                                                            <span style="color:#31b401; border:none">
                                                                                <svg style="width: auto"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    height="16" width="16"
                                                                                    viewBox="0 0 512 512">
                                                                                    <path fill="#31b401"
                                                                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                                                                                </svg>
                                                                            </span>
                                                                        </li>
                                                                        <li>3) Unggah Logo PT
                                                                            <span style="color:red; border:none">
                                                                                <svg style="width: auto"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    height="16" width="16"
                                                                                    viewBox="0 0 512 512">
                                                                                    <path fill="#ff0000"
                                                                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                                                                                </svg>
                                                                            </span>
                                                                        </li>
                                                                        <li>4) Unggah S.Pengantar
                                                                            <span style="color:red; border:none">
                                                                                <svg style="width: auto"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    height="16" width="16"
                                                                                    viewBox="0 0 512 512">
                                                                                    <path fill="#ff0000"
                                                                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                                                                                </svg>
                                                                            </span>
                                                                        </li>
                                                                    </ol>
                                                                </div>
                                                                <div>
                                                                    <ol>
                                                                        <li>5) Isian Program Studi
                                                                            <span style="color:red; border:none">
                                                                                <svg style="width: auto"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    height="16" width="16"
                                                                                    viewBox="0 0 512 512">
                                                                                    <path fill="#ff0000"
                                                                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                                                                                </svg>
                                                                            </span>
                                                                        </li>
                                                                        <li>6) Isian Fakultas
                                                                            <span style="color:red; border:none">
                                                                                <svg style="width: auto"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    height="16" width="16"
                                                                                    viewBox="0 0 512 512">
                                                                                    <path fill="#ff0000"
                                                                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z" />
                                                                                </svg>
                                                                            </span>
                                                                        </li>
                                                                    </ol>
                                                                </div>
                                                                <div class="amount">16.67%</div>
                                                            </div>
                                                            <hr>
                                                            <div class="info">
                                                                <span class="change down text-danger"><em
                                                                        class="icon ni ni-arrow-long-down"></em>Belum
                                                                    Lengkap</span><span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="nk-ecwg nk-ecwg6">
                                                    <div class="card-inner">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Kelengkapan Submission</h6>
                                                            </div>
                                                        </div>
                                                        <div class="data">
                                                            Belum Memiliki Tim Tahun ini
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> © Copyright 2023 <a href="https://uny.ac.id"
                                    style="color: #31b401">Kemahasiswaan UNY</a>. All Rights Reserved.</div>
                            <div class="nk-footer-links">Made with 💚 by <a href="https://infiniteuny.id"
                                    style="color: #31b401">INFINITE UNY</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://lomba.uny.ac.id/lip3d/dashboard/js/bundle.js?ver=3.1.2"></script>
    <script src="https://lomba.uny.ac.id/lip3d/dashboard/js/scripts.js?ver=3.1.2"></script>
    <script src="https://lomba.uny.ac.id/lip3d/dashboard/js/charts/chart-ecommerce.js?ver=3.1.2"></script>



</body>

</html>
