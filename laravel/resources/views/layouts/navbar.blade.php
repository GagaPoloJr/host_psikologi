<section class="navbar_custom">
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow ">
    <div class="container my-2">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/logo_kabinet.png') }}" alt="logo" width="50" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item active">
                    <a class="nav-link">Tentang BEM <span class="sr-only">(current)</span></a>
                </li> --}}
                <li class="nav-item {{ (request()->is('artikel')) ? 'active' : '' }}">
                    <a class="nav-link" href="/artikel">Artikel</a>
                </li>
                <li class="nav-item {{ (request()->is('post-informasi')) ? 'active' : '' }}">
                    <a class="nav-link" href="/post-informasi">Informasi</a>
                </li>
                <li class="nav-item {{ (request()->is('dokumen')) ? 'active' : '' }}">
                    <a class="nav-link" href="/dokumen">Database</a>
                </li>
               
                <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">
                    <a class="nav-link" href="/contact">Hubungi Kami</a>
                </li>
                <li class="nav-item {{ ((request()->is('pengurusharian')) || (request()->is('visimisi'))) ? 'active' : '' }} dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tentang BEM
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{ (request()->is('pengurusharian')) ? 'active' : '' }}" href="/pengurusharian">Struktur Organisasi</a>
                        <a class="dropdown-item {{ (request()->is('visimisi')) ? 'active' : '' }}"  href="/visimisi">Visi Misi</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>
</section>