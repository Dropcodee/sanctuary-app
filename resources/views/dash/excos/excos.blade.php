@extends('layouts.admin')
@section('title', 'Excos')
@section('header-title', 'Excos for about page UI')
@section('bread_crumbs', 'Excos Page')
@section('content')
    <div class="container">
        <div class="block my-6 md:my-0 w-full space-y-4 md:space-y-0 md:flex md:items-center md:justify-between md:mx-1">
            <p class="text-center">All Excos for about page UI </p>
            <div class="flex justify-end items-end">
                <button class="py-3 px-8 bg-green-600 text-white rounded mx-auto md:mx-0 md:float-right  w-full md:w-auto"
                    data-toggle="modal" data-target="#createExcos">Create
                    Excos</button>
                {{-- Modal for creating new department --}}
                @include('dash.excos.create-excos')
                {{-- Modal for creating new department --}}
            </div>
        </div>
        {{-- listing of excos --}}
        @if ($excos->count() > 0)
            <div class="grid grid-cols-4 gap-4 space-y-4 items-center justify-between mt-20">
                @foreach ($excos as $exco)
                    <div class="shadow-md rounded pb-6">
                        <div><img src="{{ $exco->exco_image }}" alt="" class="rounded-t"></div>
                        <div class="px-2 py-2 flex items-center justify-end">
                            <div class="dropdown">
                                <a class="toolbar hover:text-green-500" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                        class="mdi mdi-dots-vertical h-6 w-6"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"
                                    x-placement="bottom-end"
                                    style="position: absolute; transform: translate3d(18px, 25px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item text-green-500 hover:text-green-600" href="#"
                                        data-toggle="modal" data-target="#edit-exco">Update Exco</a>
                                    <a class="dropdown-item text-green-500 hover:text-green-600" href="#"
                                        data-toggle="modal" data-target="#delete-exco">Delete Exco</a>
                                </div>
                            </div>
                        </div>
                        <div class="px-4">
                            <p class="text-gray-500 text-semibold py-2">{{ $exco->department->name }}</p>
                            <div class="flex itens-center space-x-4 justify-start mt-2">
                                <p class="underline text-gray-600">Socials:</p>
                                <a href="#" target="_black"><i class="mdi mdi-instagram fill-current text-red-300"></i></a>
                                <a href="#" target="_black"><i class="mdi mdi-twitter fill-current text-blue-300"></i></a>
                                <a href="#" target="_black"><i
                                        class="mdi mdi-email-outline fill-current text-red-500"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            @include('layouts.empty', ['empty_message' => 'No Excos Created Yet....'])
        @endif
    </div>
@endsection
