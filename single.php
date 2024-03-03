<?php get_header() ?>

<div class="px-6 mx-auto mt-32 lg:px-8 sm:mt-40 lg:mt-64">
  <div class="w-full mx-auto max-w-7xl lg:px-8">
    <div class="relative px-4 sm:px-8 lg:px-12">
      <div class="max-w-2xl mx-auto lg:max-w-6xl">
        <div class="xl:relative">
          <div class="max-w-2xl mx-auto">
            <a href="/articles" class="group mb-8 flex h-10 w-10 items-center justify-center rounded-full bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 transition lg:absolute lg:-left-5 lg:-mt-2 lg:mb-0 xl:-top-1.5 xl:left-0 xl:mt-0">
              <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="w-4 h-4 transition stroke-zinc-500 group-hover:stroke-zinc-700">
                <path d="M7.25 11.25 3.75 8m0 0 3.5-3.25M3.75 8h8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </a>
            <article>
              <header class="flex flex-col">
                <h1 class="mt-6 text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl">
                  <?= get_the_title() ?>
                </h1>
                <time datetime="2022-09-05" class="flex items-center order-first text-base text-zinc-400">
                  <span class="h-4 w-0.5 rounded-full bg-zinc-200"></span>
                  <span class="ml-3">
                    <?= get_the_date("M d, Y") ?>
                  </span>
                </time>
              </header>
              <div class="mt-8 text-xl prose" data-mdx-content="true">
                <?= get_the_content() ?>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_template_part('template-parts/components/section', 'cta') ?>

<?php get_footer() ?>