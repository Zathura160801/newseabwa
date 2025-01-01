@extends('layouts.master')

@section('content')
    <div
        class="flex flex-col min-h-screen w-full justify-center items-center bg-[linear-gradient(113.19deg,#E25520_0%,#A83279_100.41%)]">
        <div class="absolute w-full h-full overflow-hidden">
            <img src="{{ asset('assets/images/backgrounds/Full-bg.svg') }}" class="w-full h-full object-cover"
                alt="background">
        </div>
        <main class="relative flex flex-col h-screen py-10 px-16 gap-8 items-center justify-between">
            <a href="{{ route('front.index') }}">
                <img src="{{ asset('assets/images/logos/logo-white.svg') }}" class="h-10 flex shrink-0" alt="logo">
            </a>
            <form method="POST" action="{{ route('front.check_booking_details') }}"
                class="flex flex-col w-full max-w-[782px] items-center rounded-[64px] p-[52px] gap-8 bg-white">
                @csrf
                <div class="flex flex-col items-center text-center gap-6">
                    <img src="{{ asset('assets/images/icons/receipt-text-orange-fill.svg') }}"
                        class="w-[62px] flex shrink-0" alt="icon">
                    <h1 class="font-Grifter font-bold text-[32px] leading-[51px]">Lihat Pesanan Kamu</h1>

                    @if ($errors->any())
                        <div class="text-white font-bold py-3 px-10 rounded-full bg-patungan-orange">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
                <div class="flex flex-col gap-6">
                    <div class="grid grid-cols-2 gap-6">
                        <label class="flex flex-col gap-4">
                            <p class="font-bold text-xl leading-[25px] text-patungan-grey">Booking Code</p>
                            <div
                                class="flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                <img src="{{ asset('assets/images/icons/receipt-black.svg') }}"
                                    class="w-6 h-6 flex shrink-0" alt="icon">
                                <div class="flex h-6 border border-patungan-border"></div>
                                <input type="text" name="booking_trx_id" id=""
                                    class="appearance-none outline-none bg-patungan-bg-grey w-full font-bold text-xl leading-[25px] placeholder:text-patungan-black"
                                    placeholder="Enter the code">
                            </div>
                        </label>
                        <label class="flex flex-col gap-4">
                            <p class="font-bold text-xl leading-[25px] text-patungan-grey">WhatsApp Number</p>
                            <div
                                class="flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                <img src="{{ asset('assets/images/icons/whatsapp-black.svg') }}"
                                    class="w-6 h-6 flex shrink-0" alt="icon">
                                <div class="flex h-6 border border-patungan-border"></div>
                                <input type="tel" name="phone" id="phone-number"
                                    class="appearance-none outline-none bg-patungan-bg-grey w-full font-bold text-xl leading-[25px] placeholder:text-patungan-black"
                                    placeholder="+62 Enter the number">
                            </div>
                        </label>
                    </div>
                    <p class="font-['Poppins'] font-medium leading-[25px] text-patungan-grey text-center">Masukkan kode
                        booking yang telah dikirim ke email Anda untuk memeriksa status pemesanan Anda.</p>
                </div>
                <button type="submit"
                    class="flex items-center rounded-full h-[60px] px-9 w-full gap-[6px] bg-patungan-orange justify-center">
                    <span class="font-bold text-lg leading-5 text-white">Lihat Pesananku</span>
                </button>
            </form>
            <a href="{{ route('front.index') }}" class="font-bold text-xl leading-[25px] text-white">Back to Homepage > </a>
        </main>
    </div>
@endsection

@push('after-scripts')
    <script src="{{ asset('js/whatsapp-number.js') }}"></script>
@endpush
