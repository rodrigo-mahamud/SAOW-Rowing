<div class="flex justify-between items-center mb-12">
    <div class='flex flex-col'>

        <h2 class='text-4xl mb-2 font-bold text-gray-800'>Ultimas noticias</h2>
        <h3 class='text-xl text-gray-600'>Descubre las ultimas novedades del campeonato de remo </h3>
    </div>
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button"
        class="flex items-center ease-in-out duration-300 justify-center px-5 py-3 h-full text-sm font-medium text-center text-white rounded-lg bg-green-600 hover:bg-green-700"><svg
            xmlns="http://www.w3.org/2000/svg" class="mr-1 icon icon-tabler icon-tabler-plus" width="16" height="16"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 5l0 14" />
            <path d="M5 12l14 0" />
        </svg>Añadir Noticia</button>
</div>
<?php include 'noticiaModal.php'; ?>

<div class='flex flex-col md:flex-row'>
    <?php include 'card.php'; ?>
    <?php include 'card.php'; ?>
    <?php include 'card.php'; ?>
</div>