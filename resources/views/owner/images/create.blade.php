<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="sm:px-4 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <x-input-error :messages="$errors->get('image','mines','max')" class="mt-2" / --}}

                    <form method="POST" action="{{ route('owner.images.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="m-6 " >
                            <div class="mx-auto">
                                <div class="relative">
                                  <label for="image" class="leading-7 text-sm text-gray-600">画像</label>
                                  <input type="file" id="image" name="files[][image]" multiple accept="image/png,image/jpeg,image/jpg" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                            </div>
                            </div>
                            <div class="p-2 w-full mt-4 flex justify-around" >
                                <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">登録する</button>
                                <button type="button" onclick="location.href='{{ route('owner.images.index') }}'"class=" text-white bg-gray-400 border-0 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded text-lg">戻る</button>
                            </div>                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
