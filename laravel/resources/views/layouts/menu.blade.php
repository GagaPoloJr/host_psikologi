<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/home">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li class="dropdown {{ Request::is('posts') || Request::is('kategori') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown {{ Request::is('posts*') ? 'active' : '' }}" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Artikel</span></a>
    <ul class="dropdown-menu">
        <li class="side-menus {{ Request::is('posts*') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('posts.index') }}"><span>List Artikel</span></a>
        </li>
      <li class="side-menus {{ Request::is('kategori*') ? 'active' : '' }}">
        <a class="nav-link"href="{{ route('kategori.index') }}">Kategori Artikel</a>
    </li>
    
    </ul>
  </li>

  <li class="dropdown {{ Request::is('informasi') || Request::is('kategori_informasi') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown {{ Request::is('informasi*') || Request::is('kategori_informasi*') ? 'active' : '' }}" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Informasi</span></a>
    <ul class="dropdown-menu">
        <li class="side-menus {{ Request::is('informasi') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('informasi.index') }}"><span>List Informasi</span></a>
        </li>
      <li class="side-menus {{ Request::is('kategori_informasi') ? 'active' : '' }}">
        <a class="nav-link"href="{{ route('kategori_informasi.index') }}">Kategori Informasi</a>
    </li>
    
    </ul>
  </li>
  <li class="side-menus {{ Request::is('file') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('file.index') }}">
        <i class=" fas fa-building"></i><span>List Files</span>
    </a>
</li>
<li class="side-menus {{ Request::is('pesan') ? 'active' : '' }}">
  <a class="nav-link" href="{{ route('pesan.index') }}">
      <i class=" fas fa-building"></i><span>List Pesan</span>
  </a>
</li>
