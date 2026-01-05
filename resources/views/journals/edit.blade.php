@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Edit Journal Entry</h1>

    <form action="{{ route('journals.update', $journal) }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="mood" class="block font-semibold mb-2">Mood Today</label>
            <input type="text" name="mood" id="mood" value="{{ $journal->mood }}" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="explanation" class="block font-semibold mb-2">Explanation</label>
            <textarea name="explanation" id="explanation" rows="4" class="w-full border p-2 rounded" required>{{ $journal->explanation }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('journals.index') }}" class="ml-2 text-gray-500">Cancel</a>
    </form>
@endsection
