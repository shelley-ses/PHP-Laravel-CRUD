@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">New Journal Entry</h1>

    <form action="{{ route('journals.store') }}" method="POST" class="bg-white p-6 rounded shadow">
        @csrf

        <div class="mb-4">
            <label for="mood" class="block font-semibold mb-2">Mood Today</label>
            <input type="text" name="mood" id="mood" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="explanation" class="block font-semibold mb-2">Explanation</label>
            <textarea name="explanation" id="explanation" rows="4" class="w-full border p-2 rounded" required></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
        <a href="{{ route('journals.index') }}" class="ml-2 text-gray-500">Cancel</a>
    </form>
@endsection
