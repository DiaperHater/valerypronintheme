<?php get_header() ?>

<div class="px-6 mx-auto mt-32 max-w-7xl lg:px-8 sm:mt-40 lg:mt-64">
  <div class="max-w-2xl mx-auto lg:max-w-none">
    <div>
      <h1><span class="block text-base font-semibold font-display text-zinc-800">Contact me</span><span class="sr-only"> - </span><span class="mt-6 block max-w-5xl font-display text-5xl font-medium tracking-tight text-zinc-800 [text-wrap:balance] sm:text-6xl">Let’s work together</span></h1>
    </div>
  </div>
</div>

<div class="px-6 mx-auto mt-24 max-w-7xl lg:px-8 sm:mt-32 lg:mt-40">
  <div class="max-w-2xl mx-auto lg:max-w-none">
    <div class="grid grid-cols-1 gap-x-8 gap-y-24 lg:grid-cols-2">
      <div class="lg:order-last">
        <?= do_shortcode('[hf_form slug="contact-from"]') ?>
      </div>
      <ul role="list">
        <li class="flex">
          <a class="flex text-sm font-medium transition group text-zinc-800 hover:text-teal-500 " href="https://www.linkedin.com/in/pronin-v">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="flex-none w-6 h-6 transition fill-zinc-500 group-hover:fill-teal-500">
              <path d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 01-1.548-1.549 1.548 1.548 0 111.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z"></path>
            </svg>
            <span class="ml-4">LinkedIn</span>
          </a>
        </li>
        <li class="flex mt-4">
          <a class="flex text-sm font-medium transition group text-zinc-800 hover:text-teal-500 " href="https://t.me/+375259875947">
            <svg class="w-5 h-5 mr-1 fill-zinc-500 group-hover:fill-teal-500" viewBox="0 0 24 24" aria-hidden="true" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
              <path id="telegram-1" d="M18.384,22.779c0.322,0.228 0.737,0.285 1.107,0.145c0.37,-0.141 0.642,-0.457 0.724,-0.84c0.869,-4.084 2.977,-14.421 3.768,-18.136c0.06,-0.28 -0.04,-0.571 -0.26,-0.758c-0.22,-0.187 -0.525,-0.241 -0.797,-0.14c-4.193,1.552 -17.106,6.397 -22.384,8.35c-0.335,0.124 -0.553,0.446 -0.542,0.799c0.012,0.354 0.25,0.661 0.593,0.764c2.367,0.708 5.474,1.693 5.474,1.693c0,0 1.452,4.385 2.209,6.615c0.095,0.28 0.314,0.5 0.603,0.576c0.288,0.075 0.596,-0.004 0.811,-0.207c1.216,-1.148 3.096,-2.923 3.096,-2.923c0,0 3.572,2.619 5.598,4.062Zm-11.01,-8.677l1.679,5.538l0.373,-3.507c0,0 6.487,-5.851 10.185,-9.186c0.108,-0.098 0.123,-0.262 0.033,-0.377c-0.089,-0.115 -0.253,-0.142 -0.376,-0.064c-4.286,2.737 -11.894,7.596 -11.894,7.596Z"></path>
            </svg>
            <span class="ml-4">Telegram</span>
          </a>
        </li>
        <li class="flex mt-4 ">
          <a class="flex text-sm font-medium transition group text-zinc-800 hover:text-teal-500 " href="mailto:hi@valerypronin.com">
            <svg viewBox="0 0 24 24" aria-hidden="true" class="flex-none w-6 h-6 transition fill-zinc-500 group-hover:fill-teal-500">
              <path fill-rule="evenodd" d="M6 5a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H6Zm.245 2.187a.75.75 0 0 0-.99 1.126l6.25 5.5a.75.75 0 0 0 .99 0l6.25-5.5a.75.75 0 0 0-.99-1.126L12 12.251 6.245 7.187Z"></path>
            </svg>
            <span class="ml-4">hi@valerypronin.com</span>
          </a>
        </li>
        <li class="flex mt-4 ">
          <a class="flex text-sm font-medium transition group text-zinc-800 hover:text-teal-500 " href="tel:+375259875947">
            <svg viewBox="0 0 24 24" class="flex-none w-6 h-6 transition fill-zinc-500 group-hover:fill-teal-500">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
            </svg>
            <span class="ml-4">+375 (25) 987-59-47</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<?php get_footer() ?>