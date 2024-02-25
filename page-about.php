<?php get_header() ?>

<!-- About -->
<section class="mt-32 sm:px-8 sm:mt-40">
  <div class="w-full mx-auto max-w-7xl lg:px-8">
    <div class="relative px-4 sm:px-8 lg:px-12">
      <div class="max-w-2xl mx-auto lg:max-w-5xl">
        <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:grid-rows-[auto_1fr] lg:gap-y-12">
          <div class="lg:pl-20">
            <div class="max-w-xs px-2.5 lg:max-w-none">
              <img alt="" loading="lazy" width="800" height="1200" decoding="async" data-nimg="1" class="object-cover rotate-3 dark:bg-zinc-800" src="<?= get_template_directory_uri() ?>/assets/images/about.webp">
            </div>
          </div>
          <div class="lg:order-first lg:row-span-2">
            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl dark:text-zinc-100">
              I’m Spencer Sharp. I live in New York City, where I design the future.
            </h1>
            <div class="mt-6 text-lg space-y-7 text-zinc-600 dark:text-zinc-400">
              <p>
                I’ve loved making things for as long as I can remember, and wrote my first program when I was 6 years old, just two weeks after my mom brought home the brand new Macintosh LC 550 that I taught myself to type on.
              </p>
              <p>
                The only thing I loved more than computers as a kid was space. When I was 8, I climbed the 40-foot oak tree at the back of our yard while wearing my older sister’s motorcycle helmet, counted down from three, and jumped — hoping the tree was tall enough that with just a bit of momentum I’d be able to get to orbit.
              </p>
              <p>
                I spent the next few summers indoors working on a rocket design, while I recovered from the multiple surgeries it took to fix my badly broken legs. It took nine iterations, but when I was 15 I sent my dad’s Blackberry into orbit and was able to transmit a photo back down to our family computer from space.
              </p>
              <p>
                Today, I’m the founder of Planetaria, where we’re working on civilian space suits and manned shuttle kits you can assemble at home so that the next generation of kids really <em>can</em> make it to orbit — from the comfort of their own backyards.
              </p>
            </div>
          </div>
          <div class="lg:pl-20">
            <ul role="list">
              <li class="flex">
                <a class="flex text-sm font-medium transition group text-zinc-800 hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500" href="https://www.linkedin.com/in/pronin-v">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="flex-none w-6 h-6 transition fill-zinc-500 group-hover:fill-teal-500">
                    <path d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 01-1.548-1.549 1.548 1.548 0 111.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z"></path>
                  </svg>
                  <span class="ml-4">Follow on LinkedIn</span>
                </a>
              </li>
              <li class="flex mt-4 ">
                <a class="flex text-sm font-medium transition group text-zinc-800 hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500" href="mailto:one@valerypronin.com">
                  <svg viewBox="0 0 24 24" aria-hidden="true" class="flex-none w-6 h-6 transition fill-zinc-500 group-hover:fill-teal-500">
                    <path fill-rule="evenodd" d="M6 5a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H6Zm.245 2.187a.75.75 0 0 0-.99 1.126l6.25 5.5a.75.75 0 0 0 .99 0l6.25-5.5a.75.75 0 0 0-.99-1.126L12 12.251 6.245 7.187Z"></path>
                  </svg>
                  <span class="ml-4">one@valerypronin.com</span>
                </a>
              </li>
              <li class="flex mt-4 ">
                <a class="flex text-sm font-medium transition group text-zinc-800 hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500" href="tel:+375259875947">
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
    </div>
  </div>
</section>

<?php get_template_part('template-parts/components/section', 'cta') ?>

<?php get_footer() ?>