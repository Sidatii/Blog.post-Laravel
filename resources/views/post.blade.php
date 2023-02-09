@include('inc/navbar')

<?php foreach ($posts as $post) : ?>
<div class="container w-[600px] m-auto p-5 text-black">
        <?= $post; ?>
</div>
<?php endforeach; ?>


@include('inc/footer')
