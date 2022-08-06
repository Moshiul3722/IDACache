{{-- @extends('backend.layouts.master')

@section('title','IDA | Loan')
@section('page','Loan')

@section('content')
<div class="mt-12 mb-7">
    <div class="flex items-center justify-between">
        <h3 class="text text-2x font-semibold text-black"></h3>
        <div class="">
            <a href="#" class="btn btn_primary">Requests</a>
            <a href="{{ route('loan.create') }}" class="btn btn_secondary">Add New</a>
        </div>
    </div>
</div>


@endsection --}}


@extends('backend.layouts.master')

@section('title', 'IDA | Loan')
@section('page', 'Loan')

@section('content')
    <div class="py-4 flex items-center justify-between">
        <p class="text-lg font-medium">{{ count($loans) }} records found</p>
        <a href="{{ route('loan.create') }}" class="btn btn_secondary">Add New</a>
    </div>
    <!-- table -->
    <table class="table-collaps bg-white w-full">
        <thead>
            <tr>
                <th class="text-base w-20 py-2 border border-gray-400">#</th>
                <th class="text-base py-2 border border-gray-400">Name</th>
                <th class="text-base py-2 border border-gray-400">Loan Amount</th>
                <th class="text-base py-2 border border-gray-400">Loan Date</th>
                <th class="text-base py-2 border border-gray-400">Return Amount</th>
                <th class="text-base py-2 border border-gray-400">Return Date</th>
                <th class="text-base py-2 border border-gray-400">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($loans as $key=>$loan)
            {{-- {{dd($loan)}} --}}
                <tr>
                    <td class="py-2 text-center border border-gray-400">{{ ++$key }}</td>
                    <td class="py-2 text-center border border-gray-400">{{ $loan->user->name }}</td>
                    <td class="py-2 text-center border border-gray-400">{{ $loan->loan_amount }}</td>
                    <td class="py-2 text-center border border-gray-400">
                        {{ Carbon\Carbon::parse($loan->loan_date)->format('d M, Y') }}
                    </td>
                    <td class="py-2 text-center border border-gray-400">{{ $loan->received_amount }}</td>
                    <td class="py-2 text-center border border-gray-400">
                        {{ Carbon\Carbon::parse($loan->received_date)->format('d M, Y') }}
                    </td>
                    <td class="py-2 text-center border border-gray-400">
                        <div class="border-2 border-red-500 p-1 inline-block px-2 py-1 rounded">
                            <form action="{{ route('loan.destroy', $loan->id) }}" method="POST"
                                onsubmit="confirm('Do You Want To Delete!')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa fa-trash text-red-500 "></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                <tr>
                @empty
                    <td class="text-center" colspan="6">No loan Record Found!</td>
                </tr>
            @endforelse
        </tbody>

    </table>
    <div class="mt-6">
        {{ $loans->links() }}
    </div>
@endsection
