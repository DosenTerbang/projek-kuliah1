@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
@endsection

@section('container')
    @include('layouts.carousel')

    <section class="mt-5 mb-12">
        <div class="relative mb-12 flex justify-center items-center" data-aos="fade-right">
            <hr class="w-10 mr-5 border-2 border-yellow-700 rounded-md">
            <h2 class="text-center font-bold text-3xl">Profil</h2>
            <hr class="w-10 ml-5 border-2 border-yellow-700 rounded-md">
        </div>

        <div class="flex flex-wrap justify-evenly text-slate-800">
            <div
                class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow mr-3 mb-10">
                <img src="{{ asset('img/rajal.jpg') }}" alt="Gambar"
                    class="w-full h-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[53%] group-hover:translate-y-0 transition-all duration-500">
                    <i
                        class="fa-solid fa-scroll text-5xl w-full mb-3 text-center duration-200 text-white group-hover:-translate-y-24"></i>
                    <h1 class="text-2xl mb-2 font-bold text-white group-hover:-translate-y-7">Sejarah</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110"><a
                            href="{{ route('history') }}">Lihat</a></button>
                </div>
            </div>

            <div
                class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow">
                <img src="{{ asset('img/ranap.jpg') }}" alt="Gambar"
                    class="w-full h-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[53%] group-hover:translate-y-0 transition-all duration-500">
                    <i
                        class="fa-solid fa-hospital text-5xl w-full mb-3 text-center duration-200 text-white group-hover:-translate-y-24"></i>
                    <h1 class="text-lg mb-2 font-bold text-white group-hover:-translate-y-7">Visi, Misi, dan Motto</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110"><a
                            href="{{ route('visiMisi') }}">Lihat</a></button>
                </div>
            </div>

            <div
                class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow">
                <img src="{{ asset('img/penunjang.jpg') }}" alt="Gambar"
                    class="w-full h-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[53%] group-hover:translate-y-0 transition-all duration-500">
                    <i
                        class="fa-solid fa-sitemap text-5xl w-full mb-3 text-center duration-200 text-white group-hover:-translate-y-24"></i>
                    <h1 class="text-xl mb-2 font-bold text-white group-hover:-translate-y-7">Struktur Organisasi</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110"><a
                            href="{{ route('structure') }}">Lihat</a></button>
                </div>
            </div>
            <div
                class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow">
                <img src="{{ asset('img/rajal.jpg') }}" alt="Gambar"
                    class="w-full h-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[53%] group-hover:translate-y-0 transition-all duration-500">
                    <i
                        class="fa-solid fa-users-viewfinder text-5xl w-full mb-3 text-center duration-200 text-white group-hover:-translate-y-24"></i>
                    <h1 class="text-2xl mb-2 font-bold text-white group-hover:-translate-y-7">SDM</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110"><a
                            href="{{ route('sdm') }}">Lihat</a></a></button>
                </div>
            </div>

            <div
                class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow">
                <img src="{{ asset('img/ranap.jpg') }}" alt="Gambar"
                    class="w-full h-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[53%] group-hover:translate-y-0 transition-all duration-500">
                    <i
                        class="fa-solid fa-map text-5xl w-full mb-3 text-center duration-200 text-white group-hover:-translate-y-24"></i>
                    <h1 class="text-lg mb-2 font-bold text-white group-hover:-translate-y-7">Denah Rumah Sakit</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110"><a
                            href="{{ route('floorPlan') }}">Lihat</a></button>
                </div>
            </div>

            <div
                class="group relative shadow-md rounded-md overflow-hidden h-64 duration-200 w-[20%] flex items-center justify-center hover:shadow-xl hover:shadow-black/30 transition-shadow">
                <img src="{{ asset('img/penunjang.jpg') }}" alt="Gambar"
                    class="w-full h-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform">
                <div
                    class="absolute inset-0 bg-gradient-to-b from-transparent via-black/20 to-black/95 group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70">
                </div>
                <div
                    class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[53%] group-hover:translate-y-0 transition-all duration-500">
                    <i
                        class="fa-solid fa-diamond text-5xl w-full mb-3 text-center duration-200 text-white group-hover:-translate-y-24"></i>
                    <h1 class="text-xl mb-2 font-bold text-white group-hover:-translate-y-7">Logo</h1>
                    <p
                        class="text-xs italic text-white mb-9 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        Lorem
                        ipsum dolor, sit amet
                        consectetur adipisicing elit dier jighe skels jgeot.</p>
                    <button
                        class="rounded-full bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 duration-300 py-2 px-3.5 text-sm capitalize text-white shadow shadow-black/60 hover:scale-110"><a
                            href="{{ route('logo') }}">Lihat</a></button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items: 1, // Jumlah slide yang ditampilkan
                autoplay: true, // Bermain otomatis
                autoplayTimeout: 10000, // Durasi antara slide (dalam milidetik)
                loop: true, // Mengulang dari awal setelah slide terakhir
                onChanged: updateTextVisibility,
            });

            function updateTextVisibility(event) {
                $('.carousel-text').removeClass('animate__backInLeft'); // Hapus kelas fadeIn untuk animasi masuk
                $('.carousel-text').removeClass('animate__backOutLeft'); // Hapus kelas fadeOut untuk animasi keluar

                let currentSlideIndex = event.item.index;
                let $currentText = $('.owl-item').eq(currentSlideIndex).find('.carousel-text');

                // Tambahkan kelas fadeIn untuk animasi masuk
                setTimeout(function() {
                    // Tambahkan kelas fadeIn untuk animasi masuk
                    $currentText.addClass('animate__backInLeft').removeClass('animate__backOutLeft');
                }, 500); // Jeda 1 detik sebelum teks masuk

                // Atur waktu animasi hilang
                setTimeout(function() {
                    $currentText.addClass('animate__backOutLeft');
                }, 9000); // Ubah angka sesuai dengan durasi yang Anda inginkan (dalam milidetik)
            }
        });
    </script>
@endsection
