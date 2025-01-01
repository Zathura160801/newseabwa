@extends('layouts.master')

@section('content')
    <div
        class="flex flex-col min-h-screen w-full justify-center items-center bg-[linear-gradient(113.19deg,#E25520_0%,#A83279_100.41%)]">
        <div class="absolute w-full h-full overflow-hidden">
            <img src="{{ asset('assets/images/backgrounds/Full-bg.svg') }}" class="w-full h-full object-cover"
                alt="background">
        </div>
        <main class="relative flex flex-col h-screen py-10 px-16 gap-8 items-center justify-between">
            <a href="index.html">
                <img src="{{ asset('assets/images/logos/logo-white.svg') }}" class="h-10 flex shrink-0" alt="logo">
            </a>
            <div class="flex flex-col w-full max-w-[616px] items-center rounded-[64px] p-[52px] gap-8 bg-white">
                <div class="flex flex-col items-center text-center gap-6">
                    <img src="{{ asset('assets/images/icons/receipt-text-orange-fill.svg') }}"
                        class="w-[62px] flex shrink-0" alt="icon">
                    <h1 class="font-Grifter font-bold text-[32px] leading-[51px]">Well done! Booking<br>Anda berhasil 🙌🏻
                    </h1>
                </div>
                <div class="flex flex-col gap-6 w-full">
                    <div
                        class="flex items-center rounded-3xl border border-patungan-border py-6 pl-8 pr-3 gap-4 bg-patungan-bg-grey">
                        <img src="{{ asset('assets/images/icons/receipt-grey.svg') }}" class="w-6 flex shrink-0"
                            alt="icon">
                        <div class="flex h-6 border-[1.5px] border-patungan-border"></div>
                        <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Booking Code:</p>
                        <p class="font-bold text-xl leading-[25px]">{{ $productSubscription->booking_trx_id }}</p>
                    </div>
                    <p class="font-['Poppins'] font-medium leading-[25px] text-patungan-grey text-center">Pesanan Anda
                        berhasil dibuat Kami sedang melakukan proses verifikasi, mohon menunggu beberapa menit 🎉 .</p>
                </div>
                <a href="{{ route('front.check_booking') }}"
                    class="flex items-center rounded-full h-[60px] px-9 w-full gap-[6px] bg-patungan-orange justify-center">
                    <span class="font-bold text-lg leading-5 text-white">Lihat Pesananku</span>
                </a>
            </div>
            <a href="{{ route('front.index') }}" class="font-bold text-xl leading-[25px] text-white">Back to Homepage
                ></a>
        </main>
    </div>
@endsection
