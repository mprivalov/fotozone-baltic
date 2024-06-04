<x-app-layout>
    <div class="max-w px-3 sm:px-5 lg:px-7">
        <div class="flex flex-col pt-16 pb-4 sm:pt-24 sm:pb-5">
            <div class="flex justify-end w-full my-1 sm:mb-4">
                <form action="{{ route('products.index') }}" method="GET" class="flex flex-row justify-between gap-3">
                    <select name="filter" id="filter"
                        class="w-full p-2 border-none focus:border-orange-400 focus:ring-orange-400 rounded-md">
                        <option value="">-</option>
                        <option value="balloons" {{ request('filter') == 'balloons' ? 'selected' : '' }}>Baloni</option>
                        <option value="kids" {{ request('filter') == 'kids' ? 'selected' : '' }}>Bērnu Pasākumi
                        </option>
                        <option value="birthday" {{ request('filter') == 'birthday' ? 'selected' : '' }}>Dzimšanas diena
                        </option>
                        <option value="wedding" {{ request('filter') == 'wedding' ? 'selected' : '' }}>Kāzas</option>
                        <option value="graduation" {{ request('filter') == 'graduation' ? 'selected' : '' }}>Izlaidums
                        </option>
                        <option value="flowers" {{ request('filter') == 'flowers' ? 'selected' : '' }}>Puķes</option>
                        <option value="sparkling" {{ request('filter') == 'sparkling' ? 'selected' : '' }}>Mirdzošās
                        </option>
                        <option value="christmas" {{ request('filter') == 'christmas' ? 'selected' : '' }}>Ziemassvētki
                        </option>
                    </select>
                    <x-primary-button type="submit">Sortēt</x-primary-button>
                </form>
            </div>
            @foreach ($products as $product)
                <div
                    class="product flex flex-col sm:flex-row justify-center items-center sm:items-stretch mb-2 sm:mb-5 p-2 border border-gray-300 rounded-md">
                    <div class="flex justify-center items-center sm:mr-7">
                        <img src="{{ asset('storage/images/shop/' . $product['image']) }}" alt="{{ $product['name'] }}"
                            class="size-56 sm:size-56 object-cover hover:shadow-md hover:cursor-pointer"
                            onclick="openModal('{{ asset('storage/images/shop/' . $product['image']) }}')">
                    </div>
                    <div class="flex flex-col justify-center sm:justify-start items-center sm:items-start sm:mr-auto">
                        <h2 class="text-2xl mb-6">{{ $product['name'] }}</h2>
                        <p><span class="text-gray-400">Krāsa:</span> {{ $product['color'] }}</p>
                        <p><span class="text-gray-400">Izmērs:</span> {{ $product['size'] }}</p>
                        <p class="mb-auto"><span class="text-gray-400">Skaits:</span> {{ $product['count'] }}</p>
                        <p><span class="text-gray-400">Id:</span> {{ $product['id'] }}</p>
                    </div>
                    <div class="flex flex-col justify-center items-center my-4 sm:my-0">
                        <p class="text-xl">{{ $product['price'] }}€/<span class="text-gray-400">diena</span></p>
                        <p class="flex flex-row items-center gap-1 text-sm">Piegāde <svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-3 h-3">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                        </p>
                    </div>
                </div>
            @endforeach
            <div>
                <p class="text-gray-400 text-sm">Jūs varat pasūtīt pa numuru (kontaktinformācija vai augšā uzspiest uz pogu telefons) vai arī uzrakstīt uz e-pastu;</p>
                <p class="text-gray-400 text-sm">Lai pasūtījums būtu konkrēts, lūdzu, norādiet produkta ID vai identifikācijas numuru;</p>
                <p class="text-gray-400 text-sm">Norādītajā cenā ir iekļauta uzstādīšana un piegāde;</p>
            </div>
        </div>

        <!-- Modal Images -->
        <div id="myModal" class="modal">
            <span onclick="closeModal()" class="close material-symbols-outlined">
                close
            </span>
            <img class="modal-content" id="img01">
        </div>
    </div>

    <script>
        function openModal(imgSrc) {
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("img01");
            modal.style.display = "block";
            modalImg.src = imgSrc;
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            var modal = document.getElementById("myModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</x-app-layout>
