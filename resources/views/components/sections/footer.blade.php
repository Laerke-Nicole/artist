<footer class="bg-success py-5">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="mb-4">
                    <img src="{{ asset('storage/logo.png') }}" alt="Logo" class="h-28">
                </div>
                <div>
                    <p class="fs-4 fw-bold text-light" style="line-height: 1.2; margin-bottom: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed magna mauris, hendrerit sit amet luctus vel, aliquam iaculis mauris. Mauris in tellus non sapien interdum fringilla.</p>
                    <p class="fs-5 text-uppercase d-none d-lg-block">© Billie Eilish - cookie settings</p>
                </div>
            </div>

            <div class="col-6 col-lg-2 offset-lg-2">
                <p class="text-uppercase fs-3">Links</p>
                <ul class="list-unstyled text-uppercase text-light fw-bold d-flex flex-column gap-2" style="letter-spacing: 0.1em;">
                    <a href="{{ route('shop') }}"><li>Shop</li></a>
                    <a href="{{ route('discography') }}"><li>Discography</li></a>
                    <a href=""><li>Lyrics</li></a>
                    <a href=""><li>Tour</li></a>
                </ul>
            </div>

            <div class="col-6 col-lg-2">
                <p class="text-uppercase fs-3">Personal</p>
                <ul class="list-unstyled text-uppercase text-light fw-bold d-flex flex-column gap-2" style="letter-spacing: 0.1em;">
                    <a href=""><li>Privacy</li></a>
                    <a href=""><li>Terms</li></a>
                    <a href=""><li>Help & Support</li></a>
                </ul>
            </div>
            <div class="col-lg-2">
                <p class="text-uppercase fs-3">Socials</p>
                <div class="d-flex align-items-center gap-3">
                    <a href="">
                        <i class="bi bi-facebook link-secondary fs-1"></i>
                    </a>
                    <a href="">
                        <i class="bi bi-instagram link-secondary fs-1"></i>
                    </a>
                    <a href="">
                        <i class="bi bi-tiktok link-secondary fs-1"></i>
                    </a>
                    <a href="">
                        <i class="bi bi-spotify link-secondary fs-1"></i>
                    </a>
                </div>
            </div>

            <p class="fs-6 text-uppercase d-lg-none">© Billie Eilish - cookie settings</p>
        </div>
    </div>
</footer>
