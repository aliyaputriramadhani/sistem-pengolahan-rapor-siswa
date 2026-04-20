@extends('layouts.list')

@section('title', 'Halaman Produk')

@section('content')

<table class="min-w-full border border-gray-200">
    <thead class="bg-blue-500 text-white">
        <tr>
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Produk</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach($data as $post)
            <tr class="border-b hover:bg-gray-100">
                <td class="px-4 py-2">{{ $post['id'] }}</td>
                <td class="px-4 py-2">{{ $post['produk'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection