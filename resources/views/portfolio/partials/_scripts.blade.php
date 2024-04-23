    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Vendor JS Files -->
    <script src="template/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="template/vendor/aos/aos.js"></script>
    {{-- <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <script src="template/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="template/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="template/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="template/vendor/typed.js/typed.umd.js"></script>
    <script src="template/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="template/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="template/js/main.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <script>
        $(document).ready(function() {
            const navLinks = $('.nav-link');
            const sections = $('section[id]');

            function setActiveNavLink() {
                let fromTop = $(window).scrollTop() + 1;

                sections.each(function() {
                    let section = $(this);
                    if (
                        section.offset().top <= fromTop &&
                        section.offset().top + section.outerHeight() > fromTop
                    ) {
                        navLinks.removeClass('active');
                        $('.nav-link[href="#' + section.attr('id') + '"]').addClass('active');
                    }
                });

                if ($(window).scrollTop() + $(window).height() == $(document).height()) {
                    navLinks.removeClass('active');
                    $('.nav-link[href="#contact"]').addClass('active');
                }
            }

            setActiveNavLink();

            $(window).on('scroll', setActiveNavLink);

            const isDarkMode = localStorage.getItem('darkMode') === 'true';
            if (isDarkMode) {
                $('body').addClass('dark-mode');
                $('#icon').attr('src', "{{ asset('assets/img/sun.png') }}");
            } else {
                $('#icon').attr('src', "{{ asset('assets/img/moon.png') }}");
            }

            $('.toggle').click(function(e) {
                e.preventDefault();
                let icon = $('#icon');
                $('body').toggleClass('dark-mode');
                if($('body').hasClass('dark-mode')) {
                    icon.attr('src', "{{ asset('assets/img/sun.png') }}");
                } else {
                    icon.attr('src', "{{ asset('assets/img/moon.png') }}");
                }
                localStorage.setItem('darkMode', $('body').hasClass('dark-mode'));
            });

            $(".navbar-nav a").on("click", function(e) {
                var href = $(this).attr("href");

                if (href.startsWith("#")) {
                    e.preventDefault();

                    if (window.location.pathname.includes('/portfolio')) {
                        var newUrl = window.location.origin + window.location.pathname.replace('/portfolio', '') + href;
                    } else {
                        var newUrl = window.location.origin + window.location.pathname + href;
                    }

                    window.location.href = newUrl;
                }
            });
        });
    </script>
    @if (session()->has('success'))
        <script>
            window.location.href = window.location.href.split('#')[0] + '#contact';
        </script>
    @endif
