<x-app-layout>
    <div class="max-w-screen-2xl px-3 sm:px-5 lg:px-7">
        <div class="pt-16 pb-4 sm:pt-24 sm:pb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2">
                @foreach ($examplesGallery as $exampleGalleries)
                    <img src="{{ asset('storage/images/examples/' . $exampleGalleries['image']) }}"
                        alt="{{ $exampleGalleries['name'] }}"
                        class="w-full h-80 md:h-96 object-cover object-center bg-slate-200"
                        onclick="openModal('{{ asset('storage/images/examples/' . $exampleGalleries['image']) }}')">
                @endforeach
            </div>

            <!-- Modal Images -->
            <div id="myModal" class="modal">
                <span onclick="closeModal()" class="close material-symbols-outlined">
                    close
                </span>
                <img class="modal-content" id="img01">
            </div>
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
