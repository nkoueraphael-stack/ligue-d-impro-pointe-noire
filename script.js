<script>
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.main-nav');

    burger.addEventListener('click', () => {
        nav.classList.toggle('active');

        // animation du burger en X
        burger.classList.toggle('toggle');
    });
</script>
