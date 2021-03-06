<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <section>
        <div class="imgContainer">
            <div class="center imgContainerList">
                @if (!isset($uploads->userImgPath))
                <a href="{{ route('upload_form')}}">マネキンアイコンを設定する</a>
                @else
                <img class="userImg" src="{{ asset(Storage::url($uploads->userImgPath)) }}" alt="">
                <a href="{{ route('upload_form')}}">マネキンアイコンを変更する</a>
                @endif
            </div>
            <div class="center imgContainerList">
                @if (!isset($uploads->userOpenImgPath))
                <a href="{{ route('uploadUser_form')}}">ユーザーアイコンを設定する</a>
                @else
                <img class="userImg" src="{{ asset(Storage::url($uploads->userOpenImgPath)) }}" alt="">
                <a href="{{ route('uploadUser_form')}}">ユーザーアイコンを変更する</a>
                @endif
            </div>
        </div>
    </section>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div>
                    <a style="border-bottom: 1px solid #777" href="{{ route('toMain') }}">メインページへ</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
