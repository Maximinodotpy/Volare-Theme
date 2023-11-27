<div class="relative">
    <img src="<?php
        if (has_post_thumbnail()) {
            echo get_the_post_thumbnail_url();
        } else {
            echo 'https://placehold.co/1920x1080/ff0/000?text=' . single_post_title('', false);
        }
    ?>" alt="" class="aspect-[16/9] select-none rounded-2xl object-cover"/>

    <!-- Overlay Element for the Gradient -->
    <div class="absolute top-0 w-full h-full from-transparent to-black sm:bg-gradient-to-b rounded-2xl"></div>
    
    <div class="bottom-0 w-full py-4 p sm:absolute sm:px-4">
        <h1 class="text-lg font-bold sm:mb-2 sm:text-2xl"><?php single_post_title(); ?></h1>

        <div class="flex flex-col w-full gap-3 sm:flex-row sm:items-center sm:justify-between">
            <p><?php echo get_the_excerpt(); ?></p>

            <div class="flex items-start gap-2 sm:flex-col sm:items-end">

                <!-- Show the first category and hide the rest in a dropdown -->
                <?php if (get_the_category()) : ?>
                    <div>
                        <div class="flex gap-1">
                            <a href="<?php echo get_the_category()[0]->term_id ?>" class="badge badge-yellow" id="options-menu" aria-haspopup="true" aria-expanded="true">
                                <?php echo get_the_category()[0]->name ?>
                            </a>

                            <div class="relative group" tabindex="0">
                                <div class="badge badge-neutral">+</div>

                                <div class="absolute right-0 z-50 hidden mb-2 bottom-full group-focus-within:block">
                                    <div class="flex flex-col gap-2 py-2 border-0 bg-neutral-800 justify-stretch badge" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                        <?php foreach (get_the_category() as $category) : if ($category->name == get_the_category()[0]->name) continue?>
                                            <a href="<?php echo get_category_link($category->term_id) ?>" class="badge badge-yellow" role="menuitem"><?php echo $category->name ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Show the first tag and hide the rest in a dropdown -->
                <?php if (get_the_tags()) : ?>
                    <div>
                        <div class="flex gap-1">
                            <a href="<?php echo get_the_tags()[0]->term_id ?>" class="badge badge-green" id="options-menu" aria-haspopup="true" aria-expanded="true">
                                <?php echo get_the_tags()[0]->name ?>
                            </a>

                            <div class="relative group" tabindex="0">
                                <div class="badge badge-neutral">+</div>

                                <div class="absolute right-0 z-10 hidden mt-2 group-focus-within:block">
                                    <div class="flex flex-col gap-2 py-2 border-0 bg-neutral-800 justify-stretch badge" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                        <?php foreach (get_the_tags() as $tag) : if ($tag->name == get_the_tags()[0]->name) continue?>
                                            <a href="<?php echo get_tag_link($tag->term_id) ?>" class="badge badge-green" role="menuitem"><?php echo $tag->name ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>