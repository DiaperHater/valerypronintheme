<?php

global $post;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head() ?>

  <title><?= get_the_title() ?></title>

  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/images/favicon.png">
</head>

<body class="">
  <div class="relative flex justify-center overflow-hidden bg-zinc-50 sm:px-8 lg:px-12 h-fit">
    <div class="w-full bg-white max-w-7xl">

      <!-- TopNav -->

      <div class="fixed top-0 left-0 z-10 flex justify-center w-full sm:px-8 lg:px-12">
        <div class="w-full max-w-7xl">
          <div class="px-4 sm:px-8 lg:px-12">
            <header class="relative flex items-center pt-6">
              <!-- Ava -->
              <a href="/" class="pointer-events-auto duration-500 [&#header-ava]:origin-left" <?= is_home() ? 'id="header-ava"' : '' ?>>
                <img src="<?= get_template_directory_uri() ?>/assets/images/left3-grayscale.webp" alt="Valery Pronin Ava" class="block object-cover object-center rounded-full shadow-lg w-14 h-14 ring-1 shadow-zinc-800/5 ring-zinc-900/5">
              </a>
              <!-- MobileOnly -->
              <div class="ml-auto md:hidden">
                <!-- MobileButton -->
                <button class="sticky flex items-center px-4 py-2 text-sm font-medium rounded-full shadow-lg md:hidden group bg-white/90 text-zinc-800 shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur" onclick="toggleMobileMenu()">
                  Menu
                  <svg viewBox="0 0 8 6" aria-hidden="true" class="w-2 h-auto ml-3 stroke-zinc-500 group-hover:stroke-zinc-700">
                    <path d="M1.75 1.75 4 4.25l2.25-2.5" fill="none" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </button>
                <!-- MobileMenu -->
                <div id="mobile-menu" class="hidden">
                  <div class="fixed inset-0 z-50 bg-zinc-800/40 backdrop-blur-sm "></div>
                  <div class="fixed z-50 p-8 origin-top bg-white inset-x-4 top-8 rounded-3xl ring-1 ring-zinc-900/5 " id="headlessui-popover-panel-:r1:" tabindex="-1" data-headlessui-state="open">
                    <div class="flex flex-row-reverse items-center justify-between">
                      <button aria-label="Close menu" class="p-1 -m-1" onclick="toggleMobileMenu()">
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6 text-zinc-500 ">
                          <path d="m17.25 6.75-10.5 10.5M6.75 6.75l10.5 10.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                      </button>
                      <h2 class="text-sm font-medium text-zinc-600 ">Navigation</h2>
                    </div>
                    <!-- Nav -->
                    <nav class="mt-6">
                      <ul class="-my-2 text-base divide-y divide-zinc-100 text-zinc-800 ">
                        <li>
                          <a class="block py-2" data-headlessui-state="open" href="/about">
                            About
                          </a>
                        </li>
                        <li>
                          <a class="block py-2" data-headlessui-state="open" href="/work">
                            Work
                          </a>
                        </li>
                        <li>
                          <a class="block py-2" data-headlessui-state="open" href="/contact">
                            Contact
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <!-- Nav -->
              <nav class="hidden md:block md:mx-auto">
                <ul class="flex px-3 text-sm transition rounded-full shadow-lg shadow-zinc-800/5 ring-1 ring-zinc-900/5 backdrop-blur">
                  <li>
                    <a href="/about" class="relative block px-3 py-2 transition text-zinc-800 hover:text-teal-500 group [&.active]:text-teal-500 group <?= $post->post_name == 'about' ? 'active' : '' ?>">
                      About
                      <span class="absolute h-px opacity-0 inset-x-1 -bottom-px bg-gradient-to-r from-teal-500/0 via-teal-500/40 to-teal-500/0 group-hover:opacity-100 group-[.active]:opacity-100"></span>
                    </a>
                  </li>
                  <li>
                    <a href="/work" class="relative block px-3 py-2 transition text-zinc-800 hover:text-teal-500 [&.active]:text-teal-500 group <?= $post->post_name == 'work' ? 'active' : '' ?>">
                      Work
                      <span class="absolute h-px opacity-0 inset-x-1 -bottom-px bg-gradient-to-r from-teal-500/0 via-teal-500/40 to-teal-500/0 group-hover:opacity-100 group-[.active]:opacity-100"></span>
                    </a>
                  </li>
                  <li>
                    <a href="/contact" class="relative block px-3 py-2 transition text-zinc-800 hover:text-teal-500 [&.active]:text-teal-500 group <?= $post->post_name == 'contact' ? 'active' : '' ?>">
                      Contact
                      <span class="absolute h-px opacity-0 inset-x-1 -bottom-px bg-gradient-to-r from-teal-500/0 via-teal-500/40 to-teal-500/0 group-hover:opacity-100 group-[.active]:opacity-100"></span>
                    </a>
                  </li>
                </ul>
              </nav>
            </header>
          </div>
        </div>
      </div>

      <main>