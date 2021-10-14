<?php // routes/breadcrumbs.php
use App\Models\Informasi;
use App\Models\Post;
use App\Models\KategoriPost;


// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Blog
Breadcrumbs::for('informasi', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Informasi', route('informasi.index'));
});

Breadcrumbs::for('kategori', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('kategori', route('kategori.index'));
});

Breadcrumbs::for('posts', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('posts', route('posts.index'));
});

Breadcrumbs::for('pesan', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Pesan', route('pesan.index'));
});

Breadcrumbs::for('file', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dokumen', route('file.index'));
});

// end for this  Home > Blog


// Home > tambah
Breadcrumbs::for('posts.create', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('tambah artikel', route('posts.index'));
});

Breadcrumbs::for('kategori.create', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('tambah Kategori', route('kategori.index'));
});


// Home > edit

Breadcrumbs::for('informasi.edit', function (BreadcrumbTrail $trail, Informasi $informasi) {
    $trail->parent('informasi');
    $trail->push($informasi->title, route('informasi.index', $informasi->id));
});

Breadcrumbs::for('posts.edit', function (BreadcrumbTrail $trail, Post $posts) {
    $trail->parent('posts');
    $trail->push($posts->title, route('posts.index', $posts->id));
});

Breadcrumbs::for('kategori.edit', function (BreadcrumbTrail $trail, KategoriPost $kat_post) {
    $trail->parent('kategori');
    $trail->push($kat_post->nama_kat_peng, route('kategori.index', $kat_post->id));
});