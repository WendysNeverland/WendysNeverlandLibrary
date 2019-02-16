@extends('admin/layout')

@section('content')
<h1>Welcome to Neverland</h1>
<h2>
    {{-- add admin to link --}}
    <ul>
        <li><a href="admin/author">Authors</a></li>
        <li><a href="admin/author/create">Add Author</a></li>
        <li><a href="admin/book">Books</a></li>
        <li><a href="admin/book/create">Add Book</a></li>
        <li><a href="admin/audiobook">Audiobooks</a></li>
        <li><a href="admin/audiobook/create">Add Audiobook</a></li>
        <li><a href="admin/genre">Genres</a></li>
        <li><a href="admin/genre/create">Add Genre</a></li>
        <li><a href="admin/narrator">Narrator</a></li>
        <li><a href="admin/narrator/create">Add Narrator</a></li>
    </ul>
</h2>

@endsection
