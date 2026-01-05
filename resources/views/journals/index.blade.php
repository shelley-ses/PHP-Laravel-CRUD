@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">My Journal</h1>

    <a href="{{ route('journals.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        New Entry
    </a>

    @if($journals->count() > 0)
        <div class="mt-4 space-y-4">
            @foreach($journals as $journal)
                <div class="bg-white p-4 rounded shadow">
                    <p class="text-lg font-semibold">{{ $journal->mood }}</p>
                    <p class="text-gray-600 mt-2">{{ $journal->explanation }}</p>
                    <p class="text-sm text-gray-400 mt-2">{{ $journal->created_at->format('M d, Y') }}</p>
                    
                    <div class="mt-4 space-x-2">
                        <a href="{{ route('journals.show', $journal) }}" class="text-blue-500">View</a>
                        <a href="{{ route('journals.edit', $journal) }}" class="text-yellow-500">Edit</a>
                        <form action="{{ route('journals.destroy', $journal) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500" onclick="return confirm('Delete this entry?')">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="mt-4 text-gray-500">No journal entries yet.</p>
    @endif
@endsection
