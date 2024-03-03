<?php get_header() ?>

<?php

function print_article($article)
{
?>
  <article class="md:grid md:grid-cols-4 md:items-baseline">
    <div class="relative flex flex-col items-start md:col-span-3 group">
      <h2 class="text-2xl font-semibold tracking-tight text-zinc-800 ">
        <div class="absolute z-0 transition scale-95 opacity-0 -inset-x-4 -inset-y-6 bg-zinc-50 group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl "></div>
        <a href="<?= get_the_permalink($article) ?>">
          <span class="absolute z-20 -inset-x-4 -inset-y-6 sm:-inset-x-6 sm:rounded-2xl"></span>
          <span class="relative z-10">
            <?= get_the_title($article) ?>
          </span>
        </a>
      </h2>
      <time class="relative z-10 flex items-center order-first mb-3 text-sm md:hidden text-zinc-400 " datetime="2022-09-05">
        <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true">
          <span class="h-4 w-0.5 rounded-full bg-zinc-200 "></span>
        </span><?= get_the_date("M d, Y", $article) ?>
      </time>
      <p class="relative z-10 mt-2 text-base text-zinc-600 ">
        <?= get_the_excerpt($article) ?>
      </p>
      <div aria-hidden="true" class="relative z-10 flex items-center mt-4 text-sm font-medium text-teal-500">
        Read article
        <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="w-4 h-4 ml-1 stroke-current">
          <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </div>
    </div>
    <time class="relative z-10 flex items-center order-first hidden mt-1 mb-3 text-sm md:block text-zinc-400 " datetime="2022-09-05"><?= get_the_date("M d, Y", $article) ?></time>
  </article>
<?php
}

?>

<div class="px-6 mx-auto mt-32 lg:px-8 sm:mt-40 lg:mt-64">
  <div class="w-full mx-auto max-w-7xl lg:px-8">
    <div class="relative px-4 sm:px-8 lg:px-12">
      <div class="max-w-2xl mx-auto lg:max-w-5xl">
        <header class="max-w-2xl">
          <h1 class="text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl ">
            Work Journal
          </h1>
          <p class="mt-6 text-lg text-zinc-600 ">
            Every week or two I write about what I've been working on, problems I've solved, and things I'm still trying to figure out.
          </p>
        </header>
        <div class="mt-16 sm:mt-20">
          <div class="md:border-l md:border-zinc-100 md:pl-6 md:">
            <div class="flex flex-col max-w-3xl space-y-16">
              <?php

              $articles = get_posts(array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'fields' => 'ids'
              ));

              foreach ($articles as $article) {
                print_article($article);
              }

              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_template_part('template-parts/components/section', 'cta') ?>

<?php get_footer() ?>