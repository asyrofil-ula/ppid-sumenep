@stack('scripts')
{{-- scroll top --}}
<script>
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    window.onscroll = function() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            scrollToTopBtn.classList.remove('hidden');
        } else {
            scrollToTopBtn.classList.add('hidden');
        }
    };

    scrollToTopBtn.onclick = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };
</script>
<script>
    window.onload = function() {
        const loader = document.getElementById('loader');
        const content = document.getElementById('content');
        loader.style.display = 'none';
        content.classList.remove('hidden');
    };
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    AOS.init();
</script>
