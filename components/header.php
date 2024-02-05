<div
    class="py-8 px-4 mx-auto max-w-screen-xl h-full flex flex-col justify-center items-center text-center lg:py-16 lg:px-12">
    <h1
        class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        <?php echo htmlspecialchars($title ?? 'Default Title'); ?>
    </h1>
    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Here at
        <?php echo htmlspecialchars($subtitle ?? 'Default Subtitle'); ?>
    </p>
</div>
<img class="absolute top-0 -z-10 h-full w-full object-cover blur-sm"
    src="<?php echo htmlspecialchars($imgSrc ?? 'assets/images/default-image.webp'); ?>"
    alt="<?php echo htmlspecialchars($imgAlt ?? 'Default Image Alt Text'); ?>">