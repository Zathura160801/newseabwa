<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('output.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <nav class="relative w-full max-w-[1280px] mx-auto h-[140px]">
        <div class="fixed top-10 w-full max-w-[1280px] px-16 z-20">
            <div
                class="flex items-center w-full max-w-[1280px] h-[100px] mx-auto rounded-full p-5 pl-9 justify-between bg-white shadow-[0px_23px_35px_0px_#0C0F2405]">
                <a href="index.html">
                    <img src="{{ asset('assets/images/logos/logo.svg') }}" class="h-10 flex shrink-0" alt="logo">
                </a>
                <ul class="flex items-center gap-8">
                    <li>
                        <a href="#" class="font-semibold text-lg leading-[22.68px] text-patungan-grey">Layanan</a>
                    </li>
                    <div class="h-[18px] border-[1.5px] border-patungan-border"></div>
                    <li>
                        <a href="#" class="font-semibold text-lg leading-[22.68px] text-patungan-grey">Cara
                            Pesan</a>
                    </li>
                    <div class="h-[18px] border-[1.5px] border-patungan-border"></div>
                    <li>
                        <a href="#"
                            class="font-semibold text-lg leading-[22.68px] text-patungan-grey">Testimoni</a>
                    </li>
                    <div class="h-[18px] border-[1.5px] border-patungan-border"></div>
                    <li>
                        <a href="#" class="font-semibold text-lg leading-[22.68px] text-patungan-grey">FAQ</a>
                    </li>
                </ul>
                <a href="view-booking.html"
                    class="flex items-center rounded-full border border-patungan-orange/10 bg-patungan-orange/10 h-[60px] px-9 gap-[6px]">
                    <img src="{{ asset('assets/images/icons/receipt-text-orange.svg') }}" class="w-6 flex shrink-0"
                        alt="icon">
                    <span class="font-bold leading-5 text-patungan-orange">Pesanan Saya</span>
                </a>
            </div>
        </div>
    </nav>
    <header class="flex flex-col items-center py-[100px] w-full max-w-[1280px] mx-auto px-16">
        <div id="Badge" class="flex items-center w-fit rounded-full p-2 pr-6 gap-3 bg-patungan-black">
            <img src="{{ asset('assets/images/photos/Profiles.png') }}" class="h-9 flex shrink-0" alt="icon">
            <p class="font-semibold leading-5 text-white"><span class="font-extrabold">16.500+</span> Users Has Joined
                🔥 </p>
        </div>
        <h1 class="font-Grifter text-[62px] text-center mt-[42px] flex justify-center flex-wrap">
            <span class="!block">Patungan Akun</span>
            <!-- animation from javascript -->
            <span id="slider-container" class="text-nowrap !block overflow-hidden ml-6 relative z-10">
                <span id="slider" class="absolute flex transition-all duration-500 z-10">
                    <span
                        class="bg-clip-text text-transparent bg-[linear-gradient(90deg,#E25520_0%,#E45687_100%)] whitespace-nowrap">Streaming,</span>
                    <span
                        class="bg-clip-text text-transparent bg-[linear-gradient(90deg,#E25520_0%,#E45687_100%)] whitespace-nowrap">Education,</span>
                    <span
                        class="bg-clip-text text-transparent bg-[linear-gradient(90deg,#E25520_0%,#E45687_100%)] whitespace-nowrap">Music,</span>
                </span>
            </span>
            <span class="!block w-full">Hemat Tanpa Batas</span>
        </h1>
        <p class="font-medium text-lg text-center text-patungan-grey">
            Collective premium subscription purchases for affordability. <br>
            Group subscription for discounted premium access
        </p>
        <div class="flex items-center justify-center gap-6 mt-16">
            <a href="#" class="flex items-center rounded-full h-[60px] w-fit px-9 gap-[6px] bg-patungan-orange">
                <span class="font-bold text-lg leading-5 text-white">Pesan Sekarang</span>
                <img src="{{ asset('assets/images/icons/arrow-right-white.svg') }}" class="w-6 flex shrink-0"
                    alt="icon">
            </a>
            <a href="#"
                class="flex items-center rounded-full h-[60px] w-fit px-9 gap-[6px] bg-white border border-patungan-border">
                <span class="font-bold text-lg leading-5">Lihat Cara Pesan</span>
            </a>
        </div>
    </header>
    <section id="Stats" class="w-full flex justify-center bg-patungan-black">
        <div class="flex items-center gap-8 w-full max-w-[1280px] px-16 py-[42px]">
            <div class="flex flex-col w-[222px] gap-[6px] text-center">
                <p class="font-Grifter font-bold text-[42px] leading-[44px] text-white">2.209+</p>
                <p class="font-medium text-xl leading-[25px] text-patungan-violet">Total User</p>
            </div>
            <img src="{{ asset('assets/images/icons/star-divider-white.svg') }}" class="w-6 flex shrink-0"
                alt="icon">
            <div class="flex flex-col w-[222px] gap-[6px] text-center">
                <p class="font-Grifter font-bold text-[42px] leading-[44px] text-white">9/10</p>
                <p class="font-medium text-xl leading-[25px] text-patungan-violet">Happy Client</p>
            </div>
            <img src="{{ asset('assets/images/icons/star-divider-white.svg') }}" class="w-6 flex shrink-0"
                alt="icon">
            <div class="flex flex-col w-[222px] gap-[6px] text-center">
                <p class="font-Grifter font-bold text-[42px] leading-[44px] text-white">12</p>
                <p class="font-medium text-xl leading-[25px] text-patungan-violet">Total Services</p>
            </div>
            <img src="{{ asset('assets/images/icons/star-divider-white.svg') }}" class="w-6 flex shrink-0"
                alt="icon">
            <div class="flex flex-col w-[222px] gap-[6px] text-center">
                <p class="font-Grifter font-bold text-[42px] leading-[44px] text-white">4.920+</p>
                <p class="font-medium text-xl leading-[25px] text-patungan-violet">Total Transactions</p>
            </div>
        </div>
    </section>
    <section id="Products" class="relative w-full overflow-hidden">
        <div class="Background-Effect absolute w-full h-full overflow-hidden">
            <img src="{{ asset('assets/images/backgrounds/Ellipse-top.svg') }}"
                class="absolute top-0 -right-[337px] z-0" alt="eclipse bg">
            <img src="{{ asset('assets/images/backgrounds/Ellipse-bottom.svg') }}"
                class="absolute bottom-0 -left-[283px] z-0" alt="eclipse bg">
        </div>
        <section class="Content relative flex flex-col w-full max-w-[1280px] px-16 mx-auto gap-8 py-[100px]">
            <div class="flex items-center justify-between">
                <div class="flex flex-col gap-5">
                    <h2 class="font-bold text-xl leading-[25px] text-patungan-red">Our Services</h2>
                    <p class="font-Grifter font-bold text-4xl leading-[37px]">Beragam Account bisa kamu nikmati 🥳 </p>
                </div>
                <a href="#"
                    class="flex items-center rounded-full h-[60px] w-fit py-3 px-9 gap-[6px] bg-white border border-patungan-border">
                    <span class="font-bold text-lg leading-5">Semua Product</span>
                    <img src="{{ asset('assets/images/icons/arrow-circle-down-black.svg') }}"
                        class="w-6 flex shrink-0" alt="">
                </a>
            </div>
            <div class="grid grid-cols-3 gap-6">
                @forelse ($newProducts as $itemNewProduct)
                    <div class="product-card flex flex-col rounded-[32px] overflow-hidden bg-white">
                        <div class="w-full h-[180px] flex shrink-0 bg-[#D9D9D9]">
                            <img src="{{ Storage::url($itemNewProduct->thumbnail) }}"
                                class="w-full h-full object-cover" alt="thumbnails">
                        </div>
                        <div class="flex flex-col p-6 gap-6">
                            <div class="flex items-center gap-3">
                                <div class="w-[62px] h-[62px] flex shrink-0 rounded-xl overflow-hidden">
                                    <img src="{{ Storage::url($itemNewProduct->photo) }}"
                                        class="w-full h-full object-contain object-center" alt="icon">
                                </div>
                                <div>
                                    <p class="font-bold text-xl leading-[25px]">{{ $itemNewProduct->name }}</p>
                                    <div class="flex items-center gap-[2px] mt-[2px]">
                                        <img src="{{ asset('assets/images/icons/Star.svg') }}"
                                            class="w-6 flex shrink-0" alt="icon">
                                        <p class="font-bold text-lg leading-[22px]">4.9</p>
                                        <p class="font-semibold leading-[20px] text-patungan-grey">(2120 Reviews)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col rounded-3xl border border-patungan-border p-4 gap-4">
                                <div class="flex items-center justify-between">
                                    <p class="font-extrabold text-2xl leading-[30px]">Rp
                                        {{ number_format($itemNewProduct->price_per_person, 0, ',', '.') }}</p>
                                    <div class="flex items-center rounded-lg p-2 gap-1 bg-patungan-red/10">
                                        <img src="{{ asset('assets/images/icons/clock-red.svg') }}"
                                            class="w-6 flex shrink-0" alt="icon">
                                        <p class="font-bold leading-5 text-patungan-red">
                                            {{ $itemNewProduct->duration }} month</p>
                                    </div>
                                </div>
                                <hr class="border-patungan-border">
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                        class="w-[18px] flex shrink-0" alt="icon">
                                    <p class="font-medium text-lg leading-[22px] text-patungan-grey">Garansi Uang Pasti
                                        Kembali</p>
                                </div>
                            </div>
                            <a href="{{ route('front.details', $itemNewProduct->slug) }}"
                                class="flex items-center rounded-full h-[60px] px-9 w-full gap-[6px] bg-patungan-orange justify-center">
                                <span class="font-bold text-lg leading-5 text-white">Pesan Sekarang</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <p>Belum ada data terbaru</p>
                @endforelse

            </div>
            <button
                class="flex items-center rounded-full border border-patungan-orange/10 bg-patungan-orange/10 h-[60px] px-9 gap-2 justify-center">
                <span class="font-bold leading-5 text-patungan-orange">Lihat Semua</span>
                <img src="{{ asset('assets/images/icons/arrow-right-orange.svg') }}" class="w-6 flex shrink-0"
                    alt="icon">
            </button>
        </section>
    </section>
    <section id="How-It-Works" class="flex py-[100px] w-full max-w-[1280px] mx-auto px-16 gap-6 justify-between">
        <div class="relative flex w-full h-[inherit]">
            <div class="sticky top-0 flex flex-col w-full max-w-[510px] gap-[54px] h-fit">
                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-5">
                        <h2 class="font-bold text-xl leading-[25px] text-patungan-red">How it Works</h2>
                        <p class="font-Grifter font-bold text-4xl leading-[37px]">Prosesnya Mudah & Cepat</p>
                    </div>
                    <p class="font-medium text-lg text-patungan-grey">Kami berkomitmen memberikan layanan terbaik dan
                        pengalaman menarik bagi setiap pelanggan setia kami.</p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                class="w-[18px] flex shrink-0" alt="icon">
                            <p class="font-medium text-lg leading-[22px] text-patungan-grey">Data pribadi aman</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                class="w-[18px] flex shrink-0" alt="icon">
                            <p class="font-medium text-lg leading-[22px] text-patungan-grey">beragam pembayaran</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                class="w-[18px] flex shrink-0" alt="icon">
                            <p class="font-medium text-lg leading-[22px] text-patungan-grey">Akun Resmi & legal</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                class="w-[18px] flex shrink-0" alt="icon">
                            <p class="font-medium text-lg leading-[22px] text-patungan-grey">24/7 Customer services</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                class="w-[18px] flex shrink-0" alt="icon">
                            <p class="font-medium text-lg leading-[22px] text-patungan-grey">Lebih hemat 50%</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                class="w-[18px] flex shrink-0" alt="icon">
                            <p class="font-medium text-lg leading-[22px] text-patungan-grey">Dan masih banyak lainnya
                            </p>
                        </div>
                    </div>
                </div>
                <a href="#"
                    class="flex items-center rounded-full h-[60px] w-fit px-9 gap-[6px] bg-patungan-orange">
                    <span class="font-bold text-lg leading-5 text-white">Pesan Sekarang</span>
                    <img src="{{ asset('assets/images/icons/arrow-right-white.svg') }}" class="w-6 flex shrink-0"
                        alt="icon">
                </a>
            </div>
        </div>
        <div class="flex flex-col w-full h-fit max-w-[560px] gap-8">
            <div class="card flex flex-col w-full rounded-[32px] bg-white overflow-hidden">
                <div class="flex flex-col gap-6 p-6">
                    <div class="flex items-center gap-4">
                        <span
                            class="flex w-11 shrink-0 rounded-[100px] h-[56px] bg-patungan-orange/10 justify-center items-center font-bold text-[32px] leading-[40px] text-patungan-orange">
                            1
                        </span>
                        <p class="font-Grifter font-bold text-2xl leading-[25px]">Select Product</p>
                    </div>
                    <p class="font-medium text-lg leading-8 text-patungan-grey">Pilih layanan langganan yang ingin Anda
                        patungi. Kami menyediakan berbagai pilihan seperti Netflix, Spotify, dan Disney+ dengan harga
                        terjangkau</p>
                </div>
                <div class="flex w-full h-[232px] overflow-hidden">
                    <img src="{{ asset('assets/images/thumbnails/select-product.png') }}"
                        class="w-full h-full object-cover object-top" alt="icon">
                </div>
            </div>
            <div class="card flex flex-col w-full rounded-[32px] bg-white overflow-hidden">
                <div class="flex flex-col gap-6 p-6">
                    <div class="flex items-center gap-4">
                        <span
                            class="flex w-11 shrink-0 rounded-[100px] h-[56px] bg-patungan-orange/10 justify-center items-center font-bold text-[32px] leading-[40px] text-patungan-orange">
                            2
                        </span>
                        <p class="font-Grifter font-bold text-2xl leading-[25px]">Payment Procces</p>
                    </div>
                    <p class="font-medium text-lg leading-8 text-patungan-grey">Lakukan pembayaran sesuai nominal yang
                        ditentukan. Anda bisa bergabung dengan grup patungan bersama teman atau pengguna lain.</p>
                </div>
                <div class="flex w-full h-[232px] overflow-hidden">
                    <img src="{{ asset('assets/images/thumbnails/payment-process.png') }}"
                        class="w-full h-full object-cover object-top" alt="icon">
                </div>
            </div>
            <div class="card flex flex-col w-full rounded-[32px] bg-white overflow-hidden">
                <div class="flex flex-col gap-6 p-6">
                    <div class="flex items-center gap-4">
                        <span
                            class="flex w-11 shrink-0 rounded-[100px] h-[56px] bg-patungan-orange/10 justify-center items-center font-bold text-[32px] leading-[40px] text-patungan-orange">
                            3
                        </span>
                        <p class="font-Grifter font-bold text-2xl leading-[25px]">Join Group</p>
                    </div>
                    <p class="font-medium text-lg leading-8 text-patungan-grey">Setelah pembayaran, Anda akan
                        dimasukkan ke dalam grup patungan sesuai layanan yang dipilih. Nikmati akses layanan bersama
                        dengan biaya lebih hemat.</p>
                </div>
                <div class="flex w-full h-[232px] overflow-hidden">
                    <img src="{{ asset('assets/images/thumbnails/join-group.png') }}"
                        class="w-full h-full object-cover object-top" alt="icon">
                </div>
            </div>
        </div>
    </section>
    <section id="Payment-Method" class="bg-[linear-gradient(69.16deg,#FFFFFF_0.82%,rgba(255,255,255,0)_52.97%)]">
        <div class="Content flex flex-col py-[100px] w-full max-w-[1280px] mx-auto px-16 gap-9">
            <div class="flex flex-col items-center text-center">
                <div class="flex flex-col gap-5">
                    <h2 class="font-bold text-xl leading-[25px] text-patungan-red">Payment Methods</h2>
                    <p class="font-Grifter font-bold text-4xl leading-[37px]">Beragam Metode pembayaran</p>
                    <div class="flex items-center justify-center gap-6">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                class="w-[18px] flex shrink-0" alt="icon">
                            <p class="font-medium text-lg leading-[22px] text-patungan-grey">Bank Transfer</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                class="w-[18px] flex shrink-0" alt="icon">
                            <p class="font-medium text-lg leading-[22px] text-patungan-grey">Virtual Account</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                class="w-[18px] flex shrink-0" alt="icon">
                            <p class="font-medium text-lg leading-[22px] text-patungan-grey">Digital Wallet</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex w-full max-w-[1000px] mx-auto overflow-hidden">
                <img src="{{ asset('assets/images/thumbnails/supported-payments.png') }}"
                    class="w-full h-full object-contain object-center" alt="payments">
            </div>
        </div>
    </section>
    <section id="Happy-Customer"
        class="py-[100px] bg-[linear-gradient(180deg,rgba(255,255,255,0.5)_50%,rgba(243,239,245,0)_100%)]">
        <div class="flex flex-col gap-5 text-center px-16">
            <h2 class="font-bold text-xl leading-[25px] text-patungan-red">Happy Customers</h2>
            <p class="font-Grifter font-bold text-4xl leading-[37px]">Happy Customer Feedback on Our Services</p>
        </div>
        <div id="Card-Slider" class="relative flex flex-col gap-6 mt-[30px] overflow-hidden">
            <div id="Top-Slider" class="group flex flex-nowrap flex-row">
                <div class="flex flex-row w-max gap-6 flex-nowrap animate-[slide_50s_linear_infinite] pl-6">
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-1.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Nabila Reyna</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Patungan akun di sini terpercaya, gak nyesel!
                                Netflix dan Disney+ lancar jaya, harga terjangkau pula!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-2.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Bapak Budi</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Hemat banget patungan akun di sini! Nonton Netflix
                                dan Spotify jadi lebih terjangkau. Proses cepat dan tanpa ribet!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-3.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Ibu Budi</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">“Layanan patungan akun terbaik! Bisa langganan
                                Netflix dan Disney+ jadi lebih murah. Proses mudah dan aman, rekomendasi banget!”</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-4.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Murayiki Bazz</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Website ini bikin langganan lebih ringan di
                                kantong. Langsung bisa akses Disney+, Netflix, dan lainnya. Top deh!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-5.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Bimore Atreidess</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Layanan top! Dulu nonton Netflix mahal, sekarang
                                lebih hemat dengan patungan akun. Proses gampang dan cepat!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-6.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Unil Utami</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Bisa nikmatin Spotify dan Disney+ murah banget!
                                Patungan di sini bikin semua jadi mudah dan terpercaya."</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-7.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Allison Suzu</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Solusi buat yang mau langganan akun premium murah.
                                Proses cepat dan aman, Netflix dan Disney+ lancar!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-max gap-6 flex-nowrap animate-[slide_50s_linear_infinite] pl-6">
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-1.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Nabila Reyna</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Patungan akun di sini terpercaya, gak nyesel!
                                Netflix dan Disney+ lancar jaya, harga terjangkau pula!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-2.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Bapak Budi</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Hemat banget patungan akun di sini! Nonton Netflix
                                dan Spotify jadi lebih terjangkau. Proses cepat dan tanpa ribet!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-3.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Ibu Budi</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">“Layanan patungan akun terbaik! Bisa langganan
                                Netflix dan Disney+ jadi lebih murah. Proses mudah dan aman, rekomendasi banget!”</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-4.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Murayiki Bazz</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Website ini bikin langganan lebih ringan di
                                kantong. Langsung bisa akses Disney+, Netflix, dan lainnya. Top deh!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-5.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Bimore Atreidess</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Layanan top! Dulu nonton Netflix mahal, sekarang
                                lebih hemat dengan patungan akun. Proses gampang dan cepat!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-6.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Unil Utami</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Bisa nikmatin Spotify dan Disney+ murah banget!
                                Patungan di sini bikin semua jadi mudah dan terpercaya."</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-7.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Allison Suzu</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Solusi buat yang mau langganan akun premium murah.
                                Proses cepat dan aman, Netflix dan Disney+ lancar!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Bottom-Slider" class="group flex flex-nowrap flex-row">
                <div class="flex flex-row w-max gap-6 flex-nowrap animate-[slideToR_50s_linear_infinite] pr-6">
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-1.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Nabila Reyna</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Patungan akun di sini terpercaya, gak nyesel!
                                Netflix dan Disney+ lancar jaya, harga terjangkau pula!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-2.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Bapak Budi</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Hemat banget patungan akun di sini! Nonton Netflix
                                dan Spotify jadi lebih terjangkau. Proses cepat dan tanpa ribet!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-3.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Ibu Budi</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">“Layanan patungan akun terbaik! Bisa langganan
                                Netflix dan Disney+ jadi lebih murah. Proses mudah dan aman, rekomendasi banget!”</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-4.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Murayiki Bazz</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Website ini bikin langganan lebih ringan di
                                kantong. Langsung bisa akses Disney+, Netflix, dan lainnya. Top deh!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-5.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Bimore Atreidess</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Layanan top! Dulu nonton Netflix mahal, sekarang
                                lebih hemat dengan patungan akun. Proses gampang dan cepat!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-6.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Unil Utami</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Bisa nikmatin Spotify dan Disney+ murah banget!
                                Patungan di sini bikin semua jadi mudah dan terpercaya."</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-7.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Allison Suzu</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Solusi buat yang mau langganan akun premium
                                murah. Proses cepat dan aman, Netflix dan Disney+ lancar!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-max gap-6 flex-nowrap animate-[slideToR_50s_linear_infinite] pr-6">
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-1.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Nabila Reyna</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Patungan akun di sini terpercaya, gak nyesel!
                                Netflix dan Disney+ lancar jaya, harga terjangkau pula!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-2.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Bapak Budi</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Hemat banget patungan akun di sini! Nonton
                                Netflix dan Spotify jadi lebih terjangkau. Proses cepat dan tanpa ribet!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-3.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Ibu Budi</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">“Layanan patungan akun terbaik! Bisa langganan
                                Netflix dan Disney+ jadi lebih murah. Proses mudah dan aman, rekomendasi banget!”</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-4.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Murayiki Bazz</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Website ini bikin langganan lebih ringan di
                                kantong. Langsung bisa akses Disney+, Netflix, dan lainnya. Top deh!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-5.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Bimore Atreidess</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Layanan top! Dulu nonton Netflix mahal, sekarang
                                lebih hemat dengan patungan akun. Proses gampang dan cepat!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-6.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Unil Utami</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Bisa nikmatin Spotify dan Disney+ murah banget!
                                Patungan di sini bikin semua jadi mudah dan terpercaya."</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                    <div class="card flex flex-col w-[322px] h-full shrink-0 rounded-3xl p-6 gap-6 bg-white">
                        <div class="flex items-center gap-3">
                            <div class="flex w-16 h-16 rounded-full overflow-hidden shrink-0">
                                <img src="{{ asset('assets/images/photos/photo-7.png') }}"
                                    class="w-full h-full object-cover" alt="photos">
                            </div>
                            <div>
                                <p class="font-semibold text-lg leading-[22px]">Allison Suzu</p>
                                <p class="font-semibold leading-5 text-patungan-grey">Netflix Subscription</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex flex-col gap-6 justify-between h-full">
                            <p class="font-semibold leading-[28px]">"Solusi buat yang mau langganan akun premium
                                murah. Proses cepat dan aman, Netflix dan Disney+ lancar!"</p>
                            <div class="flex items-center gap-[2px]">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                                <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                    alt="star">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Foreground"
                class="absolute bottom-0 w-full h-[457px] flex items-end justify-center bg-[linear-gradient(180deg,rgba(245,243,246,0)_0%,#F5F3F6_100%)]">
                <a href="#"
                    class="flex items-center rounded-full h-[60px] w-fit px-9 gap-[6px] bg-patungan-orange">
                    <span class="font-bold text-lg leading-5 text-white">Pesan Sekarang</span>
                    <img src="{{ asset('assets/images/icons/arrow-right-white.svg') }}" class="w-6 flex shrink-0"
                        alt="icon">
                </a>
            </div>
        </div>
    </section>
    <section id="FAQ"
        class="py-[100px] bg-[linear-gradient(270deg,rgba(255,255,255,0.5)_50%,rgba(243,239,245,0)_100%)]">
        <div class="content flex flex-col w-full max-w-[1280px] mx-auto px-16 gap-8">
            <div class="flex flex-col gap-5 text-center px-16">
                <h2 class="font-bold text-xl leading-[25px] text-patungan-red">Frequently Asked Questions</h2>
                <p class="font-Grifter font-bold text-4xl leading-[37px]">Common Questions About Our Service</p>
            </div>
            <div class="flex gap-6">
                <div id="Left-Cards" class="flex flex-col gap-6">
                    <div class="faq-card flex flex-col rounded-3xl p-8 gap-4 bg-white">
                        <p class="font-Grifter font-bold text-2xl leading-[25px]">1</p>
                        <div
                            class="accordion group flex flex-col has-[:checked]:!h-11 overflow-hidden transition-all duration-300">
                            <label class="flex items-center gap-4 justify-between min-h-[38px]">
                                <input type="checkbox" class="hidden" checked>
                                <h3 class="font-Grifter text-lg leading-[25px]">When does the subscription period at
                                    Patungan become active?</h3>
                                <img src="{{ asset('assets/images/icons/arrow-head-down-black.svg') }}"
                                    class="w-6 flex shrink-0 group-has-[:checked]:-rotate-180 transition-all duration-300"
                                    alt="icon">
                            </label>
                            <div class="accordion-content mt-4">
                                <p class="font-semibold leading-[25px]">Your subscription becomes active immediately
                                    after the payment is successfully processed. You will receive a confirmation email
                                    with the details</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-card flex flex-col rounded-3xl p-8 gap-4 bg-white">
                        <p class="font-Grifter font-bold text-2xl leading-[25px]">3</p>
                        <div
                            class="accordion group flex flex-col has-[:checked]:!h-11 overflow-hidden transition-all duration-300">
                            <label class="flex items-center gap-4 justify-between min-h-[38px]">
                                <input type="checkbox" class="hidden" checked>
                                <h3 class="font-Grifter text-lg leading-[25px]">What payment methods are available on
                                    Patungan?</h3>
                                <img src="{{ asset('assets/images/icons/arrow-head-down-black.svg') }}"
                                    class="w-6 flex shrink-0 group-has-[:checked]:-rotate-180 transition-all duration-300"
                                    alt="icon">
                            </label>
                            <div class="accordion-content mt-4">
                                <p class="font-semibold leading-[25px]">Your subscription becomes active immediately
                                    after the payment is successfully processed. You will receive a confirmation email
                                    with the details</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-card flex flex-col rounded-3xl p-8 gap-4 bg-white">
                        <p class="font-Grifter font-bold text-2xl leading-[25px]">5</p>
                        <div
                            class="accordion group flex flex-col has-[:checked]:!h-11 overflow-hidden transition-all duration-300">
                            <label class="flex items-center gap-4 justify-between min-h-[38px]">
                                <input type="checkbox" class="hidden" checked>
                                <h3 class="font-Grifter text-lg leading-[25px]">What if there are difficulties during
                                    the payment process?</h3>
                                <img src="{{ asset('assets/images/icons/arrow-head-down-black.svg') }}"
                                    class="w-6 flex shrink-0 group-has-[:checked]:-rotate-180 transition-all duration-300"
                                    alt="icon">
                            </label>
                            <div class="accordion-content mt-4">
                                <p class="font-semibold leading-[25px]">Your subscription becomes active immediately
                                    after the payment is successfully processed. You will receive a confirmation email
                                    with the details</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Right-Cards" class="flex flex-col gap-6">
                    <div class="faq-card flex flex-col rounded-3xl p-8 gap-4 bg-white">
                        <p class="font-Grifter font-bold text-2xl leading-[25px]">2</p>
                        <div
                            class="accordion group flex flex-col has-[:checked]:!h-11 overflow-hidden transition-all duration-300">
                            <label class="flex items-center gap-4 justify-between min-h-[38px]">
                                <input type="checkbox" class="hidden" checked>
                                <h3 class="font-Grifter text-lg leading-[25px]">How do I proceed with renewing my
                                    subscription on Patungan?</h3>
                                <img src="{{ asset('assets/images/icons/arrow-head-down-black.svg') }}"
                                    class="w-6 flex shrink-0 group-has-[:checked]:-rotate-180 transition-all duration-300"
                                    alt="icon">
                            </label>
                            <div class="accordion-content mt-4">
                                <p class="font-semibold leading-[25px]">Your subscription becomes active immediately
                                    after the payment is successfully processed. You will receive a confirmation email
                                    with the details</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-card flex flex-col rounded-3xl p-8 gap-4 bg-white">
                        <p class="font-Grifter font-bold text-2xl leading-[25px]">4</p>
                        <div
                            class="accordion group flex flex-col has-[:checked]:!h-11 overflow-hidden transition-all duration-300">
                            <label class="flex items-center gap-4 justify-between min-h-[38px]">
                                <input type="checkbox" class="hidden" checked>
                                <h3 class="font-Grifter text-lg leading-[25px]">What should be done if there are
                                    issues with the subscription account?</h3>
                                <img src="{{ asset('assets/images/icons/arrow-head-down-black.svg') }}"
                                    class="w-6 flex shrink-0 group-has-[:checked]:-rotate-180 transition-all duration-300"
                                    alt="icon">
                            </label>
                            <div class="accordion-content mt-4">
                                <p class="font-semibold leading-[25px]">Your subscription becomes active immediately
                                    after the payment is successfully processed. You will receive a confirmation email
                                    with the details</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-card flex flex-col rounded-3xl p-8 gap-4 bg-white">
                        <p class="font-Grifter font-bold text-2xl leading-[25px]">6</p>
                        <div
                            class="accordion group flex flex-col has-[:checked]:!h-11 overflow-hidden transition-all duration-300">
                            <label class="flex items-center gap-4 justify-between min-h-[38px]">
                                <input type="checkbox" class="hidden" checked>
                                <h3 class="font-Grifter text-lg leading-[25px]">How do I proceed with renewing my
                                    subscription on Patungan?</h3>
                                <img src="{{ asset('assets/images/icons/arrow-head-down-black.svg') }}"
                                    class="w-6 flex shrink-0 group-has-[:checked]:-rotate-180 transition-all duration-300"
                                    alt="icon">
                            </label>
                            <div class="accordion-content mt-4">
                                <p class="font-semibold leading-[25px]">Your subscription becomes active immediately
                                    after the payment is successfully processed. You will receive a confirmation email
                                    with the details</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-[52px] bg-[linear-gradient(277.6deg,#FFFFFF_0.22%,#F5F3F6_21.18%)]">
        <div class="flex flex-col w-full max-w-[1280px] px-[52px] mx-auto gap-[52px]">
            <div class="flex gap-[72px]">
                <div class="flex flex-col gap-6 w-full max-w-[349px] items-start">
                    <img src="{{ asset('assets/images/logos/logo.svg') }}" class="h-10 flex shrink-0"
                        alt="logo">
                    <p class="font-medium leading-[25px] text-patungan-grey">Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                        since the 1500s,</p>
                </div>
                <div class="flex gap-[52px]">
                    <ul class="flex flex-col gap-4 min-w-[165px]">
                        <p class="font-semibold leading-5">Popular Services</p>
                        <li class="font-medium leading-5 text-patungan-grey">
                            <a href="#" class="hover:text-patungan-black transition-all duration-300">Home</a>
                        </li>
                        <li class="font-medium leading-5 text-patungan-grey">
                            <a href="#"
                                class="hover:text-patungan-black transition-all duration-300">Layanan</a>
                        </li>
                        <li class="font-medium leading-5 text-patungan-grey">
                            <a href="#" class="hover:text-patungan-black transition-all duration-300">Cara
                                Pesan</a>
                        </li>
                        <li class="font-medium leading-5 text-patungan-grey">
                            <a href="#"
                                class="hover:text-patungan-black transition-all duration-300">Testimoni</a>
                        </li>
                        <li class="font-medium leading-5 text-patungan-grey">
                            <a href="#" class="hover:text-patungan-black transition-all duration-300">FAQ</a>
                        </li>
                    </ul>
                    <ul class="flex flex-col gap-4 min-w-[165px]">
                        <p class="font-semibold leading-5">Company</p>
                        <li class="font-medium leading-5 text-patungan-grey">
                            <a href="#" class="hover:text-patungan-black transition-all duration-300">About
                                Us</a>
                        </li>
                        <li class="font-medium leading-5 text-patungan-grey">
                            <a href="#" class="hover:text-patungan-black transition-all duration-300">Our
                                Contact</a>
                        </li>
                        <li class="font-medium leading-5 text-patungan-grey">
                            <a href="#" class="hover:text-patungan-black transition-all duration-300">Term
                                Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex items-center">
                <p class="w-full font-medium leading-5 text-patungan-grey">©2024 Patungan. All Rights Reserved</p>
                <div class="flex items-center gap-4 mx-auto shrink-0">
                    <a href="#">
                        <img src="{{ asset('assets/images/icons/instagram.svg') }}" class="w-6 flex shrink-0"
                            alt="icon">
                    </a>
                    <a href="#">
                        <img src="{{ asset('assets/images/icons/whatsapp.svg') }}" class="w-6 flex shrink-0"
                            alt="icon">
                    </a>
                    <a href="#">
                        <img src="{{ asset('assets/images/icons/facebook.svg') }}" class="w-6 flex shrink-0"
                            alt="icon">
                    </a>
                </div>
                <div class="w-full flex justify-end">
                    <a href="" class="font-medium leading-5 text-patungan-grey text-nowrap">Terms &
                        Conditions</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/accordion.js"></script>
    <script>
        const texts = document.querySelectorAll('#slider span');
        const sliderContainer = document.getElementById('slider-container');
        const slider = document.getElementById('slider');
        let currentIndex = 0;

        function updateSlider() {
            const currentText = texts[currentIndex];
            const containerWidth = currentText.offsetWidth;

            // Smoothly update the container's width
            sliderContainer.style.transition = 'width 300ms';
            sliderContainer.style.width = containerWidth + 'px';

            // Calculate the correct offset based on each text width
            let offset = 0;
            for (let i = 0; i < currentIndex; i++) {
                offset += texts[i].offsetWidth;
            }

            // Slide the text horizontally to the correct position
            slider.style.transform = `translateX(-${offset}px)`;

            // Move to the next text after 1s
            currentIndex = (currentIndex + 1) % texts.length;
        }

        // Set initial width and position on page load
        function setInitialWidth() {
            const firstText = texts[0];
            sliderContainer.style.width = firstText.offsetWidth + 'px';
        }

        // Ensure the width is correct when the page loads
        window.addEventListener('load', () => {
            setInitialWidth();
            // Start the slider interval after setting initial width
            setInterval(updateSlider, 2000);
        });
    </script>
</body>

</html>
