@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Journal Entry</h1>

    <div class="bg-white p-6 rounded shadow">
        <p class="text-lg font-semibold">{{ $journal->mood }}</p>
        <p class="text-gray-600 mt-4">{{ $journal->explanation }}</p>
        <p class="text-sm text-gray-400 mt-4">{{ $journal->created_at->format('M d, Y h:i A') }}</p>

        <div class="mt-6">
            <a href="{{ route('journals.edit', $journal) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
            <a href="{{ route('journals.index') }}" class="ml-2 text-gray-500">Back</a>
        </div>
    </div>
@endsection
