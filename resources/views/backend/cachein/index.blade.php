@extends('backend.layouts.master')

@section('title', 'IDA | Dashboard')
@section('page', 'Cash In')

@section('content')

    <table class="w-full border-collapse">
        <thead>
            <tr>
                <th class="border py-2">#</th>
                <th class="border py-2">Dipositor</th>
                <th class="border py-2">Amount</th>
                <th class="border py-2">Transaction ID</th>
                <th class="border py-2">Date</th>
                <th class="border py-2">Activity</th>
                <th class="border py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cashins as $cash)
                <tr>
                    <td class="border py-2 text-center px-2 w-36">
                        {{ $cash->id }}
                    </td>
                    <td class="border py-2 text-center px-2 w-36">
                        {{ $cash->user->name }}
                    </td>
                    <td class="border py-2 text-center px-2 w-36">
                        {{ $cash->amount }}
                    </td>

                    <td class="border py-2 text-center px-2 w-36">
                        {{ $cash->transaction_id }}
                    </td>
                    <td class="border py-2 text-center px-2 w-36">
                        {{$cash->created_at->format('d M, Y')}}<br>
                        <small class="text-sm">{{ $cash->created_at->diffForHumans()}}</small>
                    </td>
                    <td class="border py-2 text-center px-2 w-36">
                        {{ $cash->created_at->diffForHumans()}}
                    </td>
                    <td class="border py-2 text-center px-2 w-36">
                        <div class="">
                            <form action="{{route('cashin.delete',$cash->id)}}" method="POST" onsubmit="return confirm('Do you want to delete?')" >
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="fa fa-trash border border-red-500 p-2 rounded-md text-red-500"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <th class="text-center" colspan="6">
                        No Cash In Record Found!
                    </th>
                </tr>
            @endforelse

        </tbody>
    </table>
<div class="mt-6">
    {{$cashins->links()}}
</div>
@endsection
