<?php get_header() ?>

<!-- HomeHero -->
<section class="px-4 mt-40 sm:mt-56 lg:mt-80 sm:px-8 lg:px-12">
  <div class="max-w-2xl">
    <h1 class="mt-6 text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl">
      Software designer, founder, and amateur astronaut.
    </h1>
    <p class="mt-6 text-xl text-zinc-600">
      I’m Spencer, a software designer and entrepreneur based in New York City. I’m the founder and CEO of Planetaria, where we develop technologies that empower regular people to explore space on their own terms.
    </p>
  </div>
  <div class="pt-8 mt-8 ml-auto border-t border-zinc-800/5">
    <ul class="">
      <li class="flex">
        <a class="flex text-sm font-medium transition group text-zinc-800 hover:text-teal-500 dark:text-zinc-200 dark:hover:text-teal-500" href="#">
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
</section>

<!-- Work -->
<section class="px-4 mt-24 sm:mt-32 lg:mt-40 sm:px-8 lg:px-12">
  <div class="max-w-2xl">
    <h2>
      <span class="block font-display tracking-tight [text-wrap:balance] text-4xl font-medium sm:text-5xl text-zinc-800">Harnessing technology for a brighter future</span>
    </h2>
    <div class="mt-6 text-xl text-zinc-600">
      <p>
        We believe technology is the answer to the world’s greatest challenges. It’s also the cause, so we find ourselves in bit of a catch 22 situation.
      </p>
    </div>
  </div>
  <div class="mt-16">
    <div class="max-w-2xl mx-auto lg:max-w-none">
      <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        <div class="flex" style="opacity: 1; transform: none;">
          <article class="relative flex flex-col w-full p-6 transition rounded-3xl ring-1 ring-zinc-800/5 hover:bg-zinc-50 sm:p-8">
            <h3>
              <a href="/work">
                <span class="absolute inset-0 rounded-3xl"></span>
                <img alt="FamilyFund" loading="lazy" width="36" height="36" decoding="async" data-nimg="1" class="w-16 h-16" src="<?= get_template_directory_uri() ?>/assets/images/client-logo.svg">
              </a>
            </h3>
            <p class="flex mt-6 text-sm gap-x-2 text-zinc-800">
              <time datetime="2023" class="font-semibold">2023</time>
              <span class="text-zinc-300">/</span>
              <span>Case study</span>
            </p>
            <p class="mt-6 text-2xl font-semibold font-display text-zinc-800">Skip the bank, borrow from those you trust</p>
            <p class="mt-4 text-base text-zinc-600">FamilyFund is a crowdfunding platform for friends and family. Allowing users to take personal loans from their network without a traditional financial institution.</p>
          </article>
        </div>
        <div class="flex" style="opacity: 1; transform: none;">
          <article class="relative flex flex-col w-full p-6 transition rounded-3xl ring-1 ring-zinc-800/5 hover:bg-zinc-50 sm:p-8">
            <h3>
              <a href="/work">
                <span class="absolute inset-0 rounded-3xl">

                </span>
                <img alt="Unseal" loading="lazy" width="36" height="36" decoding="async" data-nimg="1" class="w-16 h-16" src="<?= get_template_directory_uri() ?>/assets/images/client-logo.svg">
              </a>
            </h3>
            <p class="flex mt-6 text-sm gap-x-2 text-zinc-800">
              <time datetime="2022" class="font-semibold">2022</time>
              <span class="text-zinc-300">/</span>
              <span>Case study</span>
            </p>
            <p class="mt-6 text-2xl font-semibold font-display text-zinc-800">Get a hodl of your health</p>
            <p class="mt-4 text-base text-zinc-600">Unseal is the first NFT platform where users can mint and trade NFTs of their own personal health records, allowing them to take control of their data.</p>
          </article>
        </div>
        <div class="flex" style="opacity: 1; transform: none;">
          <article class="relative flex flex-col w-full p-6 transition rounded-3xl ring-1 ring-zinc-800/5 hover:bg-zinc-50 sm:p-8">
            <h3>
              <a href="/work">
                <span class="absolute inset-0 rounded-3xl">

                </span>
                <img alt="Phobia" loading="lazy" width="36" height="36" decoding="async" data-nimg="1" class="w-16 h-16" src="<?= get_template_directory_uri() ?>/assets/images/client-logo.svg">
              </a>
            </h3>
            <p class="flex mt-6 text-sm gap-x-2 text-zinc-800">
              <time datetime="2022" class="font-semibold">2022</time>
              <span class="text-zinc-300" aria-hidden="true">/</span>
              <span>Case study</span>
            </p>
            <p class="mt-6 text-2xl font-semibold font-display text-zinc-800">Overcome your fears, find your match</p>
            <p class="mt-4 text-base text-zinc-600">Find love in the face of fear — Phobia is a dating app that matches users based on their mutual phobias so they can be scared together.</p>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/components/section', 'testimonial') ?>

<!-- Servises -->
<section>
  <div class="px-6 mx-auto mt-24 max-w-7xl lg:px-8 sm:mt-32 lg:mt-40">
    <div class="max-w-2xl mx-auto lg:max-w-none">
      <div class="max-w-2xl" style="opacity: 1; transform: none;">
        <h2>
          <span class="block mb-6 text-base font-semibold font-display text-zinc-800">Services</span>
          <span class="sr-only"> - </span>
          <span class="block font-display tracking-tight [text-wrap:balance] text-4xl font-medium sm:text-5xl text-zinc-800">
            We help you identify, explore and respond to new opportunities.
          </span>
        </h2>
        <div class="mt-6 text-xl text-neutral-600">
          <p>
            As long as those opportunities involve giving us money to re-purpose old projects — we can come up with an endless number of those.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="px-6 mx-auto mt-16 max-w-7xl lg:px-8">
    <div class="max-w-2xl mx-auto lg:max-w-none">
      <div class="lg:flex lg:items-center lg:justify-end">
        <div class="flex justify-center lg:w-1/2 lg:justify-end lg:pr-12">
          <div class="w-[33.75rem] flex-none lg:w-[45rem]" style="opacity: 1; transform: none;">
            <div class="justify-center lg:justify-end relative flex aspect-[719/680] w-full grayscale"><svg viewBox="0 0 655 680" fill="none" class="h-full">
                <g clip-path="url(#:S1:-clip)" class="group">
                  <g class="transition duration-500 origin-center scale-100 motion-safe:group-hover:scale-105">
                    <foreignObject width="655" height="680">
                      <img alt="" loading="lazy" width="2400" height="3000" decoding="async" data-nimg="1" class="object-cover w-full bg-neutral-100 aspect-[655/680] text-transparent" src="<?= get_template_directory_uri() ?>/assets/images/laptop.webp">
                    </foreignObject>
                  </g>
                  <use href="#:S1:-shape" stroke-width="2" class="stroke-zinc-800/10"></use>
                </g>
                <defs>
                  <clipPath id=":S1:-clip">
                    <path id=":S1:-shape" d="M537.827 9.245A11.5 11.5 0 0 1 549.104 0h63.366c7.257 0 12.7 6.64 11.277 13.755l-25.6 128A11.5 11.5 0 0 1 586.87 151h-28.275a15.999 15.999 0 0 0-15.689 12.862l-59.4 297c-1.98 9.901 5.592 19.138 15.689 19.138h17.275l.127.001c.85.009 1.701.074 2.549.009 11.329-.874 21.411-7.529 24.88-25.981.002-.012.016-.016.023-.007.008.009.022.005.024-.006l24.754-123.771A11.5 11.5 0 0 1 580.104 321h63.366c7.257 0 12.7 6.639 11.277 13.755l-25.6 128A11.5 11.5 0 0 1 617.87 472H559c-22.866 0-28.984 7.98-31.989 25.931-.004.026-.037.035-.052.014-.015-.02-.048-.013-.053.012l-24.759 123.798A11.5 11.5 0 0 1 490.87 631h-29.132a14.953 14.953 0 0 0-14.664 12.021c-4.3 21.502-23.18 36.979-45.107 36.979H83.502c-29.028 0-50.8-26.557-45.107-55.021l102.4-512C145.096 91.477 163.975 76 185.902 76h318.465c10.136 0 21.179-5.35 23.167-15.288l10.293-51.467Zm-512 160A11.5 11.5 0 0 1 37.104 160h63.366c7.257 0 12.7 6.639 11.277 13.755l-25.6 128A11.5 11.5 0 0 1 74.87 311H11.504c-7.257 0-12.7-6.639-11.277-13.755l25.6-128Z" fill-rule="evenodd" clip-rule="evenodd"></path>
                  </clipPath>
                </defs>
              </svg></div>
          </div>
        </div>
        <div>
          <ul role="list" class="text-base text-zinc-600 mt-16 lg:mt-0 lg:w-1/2 lg:min-w-[33rem] lg:pl-4">
            <li class="mt-10 group first:mt-0">
              <div style="opacity: 1; transform: none;">
                <div class="relative pt-10 group-first:pt-0 group-first:before:hidden group-first:after:hidden before:absolute after:absolute before:bg-zinc-800 after:bg-zinc-800/10 before:left-0 before:top-0 before:h-px before:w-6 after:left-8 after:right-0 after:top-0 after:h-px"><strong class="font-semibold text-zinc-800">Web development. </strong>We specialise in crafting beautiful, high quality marketing pages. The rest of the website will be a shell that uses lorem ipsum everywhere.</div>
              </div>
            </li>
            <li class="mt-10 group first:mt-0">
              <div style="opacity: 1; transform: none;">
                <div class="relative pt-10 group-first:pt-0 group-first:before:hidden group-first:after:hidden before:absolute after:absolute before:bg-zinc-800 after:bg-zinc-800/10 before:left-0 before:top-0 before:h-px before:w-6 after:left-8 after:right-0 after:top-0 after:h-px"><strong class="font-semibold text-zinc-800">Application development. </strong>We have a team of skilled developers who are experts in the latest app frameworks, like Angular 1 and Google Web Toolkit.</div>
              </div>
            </li>
            <li class="mt-10 group first:mt-0">
              <div style="opacity: 1; transform: none;">
                <div class="relative pt-10 group-first:pt-0 group-first:before:hidden group-first:after:hidden before:absolute after:absolute before:bg-zinc-800 after:bg-zinc-800/10 before:left-0 before:top-0 before:h-px before:w-6 after:left-8 after:right-0 after:top-0 after:h-px"><strong class="font-semibold text-zinc-800">E-commerce. </strong>We are at the forefront of modern e-commerce development. Which mainly means adding your logo to the Shopify store template we’ve used for the past six years.</div>
              </div>
            </li>
            <li class="mt-10 group first:mt-0">
              <div style="opacity: 1; transform: none;">
                <div class="relative pt-10 group-first:pt-0 group-first:before:hidden group-first:after:hidden before:absolute after:absolute before:bg-zinc-800 after:bg-zinc-800/10 before:left-0 before:top-0 before:h-px before:w-6 after:left-8 after:right-0 after:top-0 after:h-px"><strong class="font-semibold text-zinc-800">Custom content management. </strong>At Studio we understand the importance of having a robust and customised CMS. That’s why we run all of our client projects out of a single, enormous Joomla instance.</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/components/section', 'cta') ?>

<?php get_footer() ?>