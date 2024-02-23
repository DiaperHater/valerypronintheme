<?php get_header() ?>

<!-- HomeHero -->
<section class="px-4 mt-56 sm:px-8 lg:px-12">
  <div class="max-w-2xl">
    <h1 class="mt-6 text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl">
      Software designer, founder, and amateur astronaut.
    </h1>
    <p class="mt-6 text-xl text-zinc-600">
      I’m Spencer, a software designer and entrepreneur based in New York City. I’m the founder and CEO of Planetaria, where we develop technologies that empower regular people to explore space on their own terms.
    </p>
  </div>
</section>

<!-- Work -->
<section class="px-4 mt-24 sm:mt-32 lg:mt-40 sm:px-8 lg:px-12">
  <h2>
    <span class="block font-display tracking-tight [text-wrap:balance] text-4xl font-medium sm:text-5xl text-zinc-800">Harnessing technology for a brighter future</span>
  </h2>
  <div class="mt-6 text-xl text-zinc-600">
    <p>
      We believe technology is the answer to the world’s greatest challenges. It’s also the cause, so we find ourselves in bit of a catch 22 situation.
    </p>
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

<?php get_footer() ?>