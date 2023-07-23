<?php get_header() ?>
<?php ?>
    <div class="bg-white px-6 py-32 lg:px-8">
<?php if (have_posts()): ?>
    <ul >
    <?php while (have_posts()):the_post(); ?>
    <li class="flex py-2 ">
        <div class="border-2 w-full rounded-md px-2">
            <p class="text-xl font-semibold leading-6 text-gray-900">
                <a href="<?php the_permalink();?>" class="hover:underline"><?php the_title()?></a>
            </p>
<!--            <p class="text-sm">--><?php //the_category();?><!--</p>-->
<!--            <p class="text-sm">--><?php //the_content("en voir plus");?><!--</p>-->
            <p class="text-sm"><?php the_excerpt();?></p>
            <div class="mt-1 flex items-center gap-x-2 text-xs leading-5 text-gray-500">
                <p>
                    <a href="#" class="hover:underline"><?php the_author();?></a>
                </p>
                <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 fill-current">
                    <circle cx="1" cy="1" r="1" />
                </svg>
                <p><time datetime="2023-01-23T22:34Z"><?php the_date();?></time></p>
            </div>
        </div>
    </li>
        <?php endwhile;?>
    </ul>

<?php else : ?>
    <div class="bg-red-500"> pas de post</div>
<?php endif; ?>
    <div/>
<?php get_footer() ?>