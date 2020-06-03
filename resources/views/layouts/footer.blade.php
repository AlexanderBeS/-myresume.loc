<footer class="page-footer font-small unique-color-dark pt-4 mastfoot navbar-fixed-bottom bg-dark">

    <!-- Footer Elements -->
    @guest
        <div class="container text-secondary">

            <!-- Call to action -->
            <ul class="list-unstyled list-inline text-center">
                <li class="list-inline-item">
                    <h5 class="mb-1">Register for free</h5>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('login') }}" class="btn btn-outline-white btn-rounded btn-secondary">Sign up!</a>
                </li>
            </ul>
        </div>
        <!-- Footer Elements -->
@endguest

<!-- Copyright -->
    <div class="footer-copyright text-center text-secondary">© 2020 Copyright: Al</div>
    <!-- Copyright -->

</footer>