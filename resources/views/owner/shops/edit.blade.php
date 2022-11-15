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

                    <form method="POST" action="{{ route('owner.shops.update' , ['shop' => $shop->id ]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="m-6 " >
                            <div class="mx-auto">
                                <div class="relative">
                                  <label for="name" class="leading-7 text-sm text-gray-600">店名 ※必須</label>
                                  <input type="text" value="{{ ($shop->name) }}" id="name" name="name" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            <div class="mx-auto">
                                <div class="relative">
                                  <label for="information" class="leading-7 text-sm text-gray-600">店舗情報 ※必須</label>
                                  <textarea  id="information" name="information" rows="10" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $shop->information }}</textarea>
                                  <x-input-error :messages="$errors->get('information')" class="mt-2" />
                                </div>
                                <div class="w-32">
                                    <x-thumbnail :filename="$shop->filename" type="shops" />
                                </div>
                            <div class="mx-auto">
                                <div class="relative">
                                  <label for="image" class="leading-7 text-sm text-gray-600">画像</label>
                                  <input type="file" id="image" name="image" accept="image/png,image/jpeg,image/jpg" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                  <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                            </div>
                            </div>
                                <div class="relative  ">
                                    <div class="mx-auto ">
                                        <div class="relative ">
                                            <div><input type="radio" name="is_selling" class="mr-3" value="1" @if($shop->is_selling === 1){ checked } @endif>販売中</div>
                                            <div><input type="radio" name="is_selling" class="mr-3" value="0" @if($shop->is_selling === 0){ checked } @endif>停止中</div>
                                        </div>
                                    </div>
                                </div>
                            <div class="p-2 w-full mt-4 flex justify-around" >
                                <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新する</button>
                                <button type="botton" onclick="location.href='{{ route('owner.shops.index') }}'"class=" text-white bg-gray-400 border-0 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded text-lg">戻る</button>
                            </div>                          
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
