@extends('layouts.master')

@section('content')
    <x-navbar />

    <main class="flex flex-col w-full max-w-[1280px] mx-auto px-16 gap-9 mt-16">
        <div class="flex flex-col gap-6">
            <div class="flex items-center gap-2">
                <p class="font-semibold text-lg leading-[22px] text-patungan-grey last:text-patungan-black">Home</p>
                <p class="font-semibold leading-5 text-patungan-grey">></p>
                <p class="font-semibold text-lg leading-[22px] text-patungan-grey last:text-patungan-black">
                    {{ $product->name }}</p>
            </div>
            <h1 class="font-Grifter font-bold text-[32px] leading-[33px]">Product Details</h1>
        </div>
        <div class="flex gap-9 mb-20">
            <div id="Details-Content" class="flex flex-col w-full max-w-[670px] shrink-0 gap-9">
                <div class="flex flex-col rounded-[32px] bg-white overflow-hidden">
                    <div class="flex w-full h-[200px] overflow-hidden">
                        <img src="{{ Storage::url($product->thumbnail) }}" class="w-full h-full object-cover"
                            alt="thumbnails">
                    </div>
                    <div class="flex flex-col p-8 gap-6">
                        <div class="flex items-center gap-3">
                            <div class="w-[62px] h-[62px] flex shrink-0 rounded-xl overflow-hidden">
                                <img src="{{ Storage::url($product->photo) }}"
                                    class="w-full h-full object-contain object-center" alt="icon">
                            </div>
                            <div>
                                <h2 class="font-bold text-xl leading-[25px]">{{ $product->name }}</h2>
                                <div class="flex items-center gap-[2px] mt-[2px]">
                                    <img src="{{ asset('assets/images/icons/Star.svg') }}" class="w-6 flex shrink-0"
                                        alt="icon">
                                    <p class="font-bold text-lg leading-[22px]">4.9</p>
                                    <p class="font-semibold leading-[20px] text-patungan-grey">(2120 Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col rounded-3xl border border-patungan-border p-4 gap-4">
                            <div class="flex items-center justify-between">
                                <p class="font-extrabold text-2xl leading-[30px]">Rp
                                    {{ number_format($product->price_per_person, 0, ',', '.') }}<span
                                        class="font-semibold text-lg leading-[22px] text-patungan-grey">/person</span>
                                </p>
                                <div class="flex items-center rounded-lg p-2 gap-1 bg-patungan-red/10">
                                    <img src="{{ asset('assets/images/icons/clock-red.svg') }}" class="w-6 flex shrink-0"
                                        alt="icon">
                                    <p class="font-bold leading-5 text-patungan-red">{{ $product->duration }} month</p>
                                </div>
                            </div>
                            <hr class="border-patungan-border">
                            <div class="flex items-center gap-2">
                                <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                    class="w-[18px] flex shrink-0" alt="icon">
                                <p class="font-medium text-lg leading-[22px] text-patungan-grey"> Garansi Uang Pasti Kembali
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h2 class="font-bold text-xl leading-[25px]">About {{ $product->name }}</h2>
                            <p class="font-semibold text-lg leading-[32px] text-patungan-grey">{{ $product->about }}</p>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h2 class="font-bold text-xl leading-[25px]">{{ $product->name }} Feature’s</h2>
                            <div class="flex flex-col gap-4">
                                @foreach ($product->keypoints as $keypoint)
                                    <div class="flex items-center gap-2">
                                        <img src="{{ asset('assets/images/icons/verify-green.svg') }}"
                                            class="w-6 flex shrink-0" alt="icon">
                                        <p class="font-semibold text-lg leading-[22px] text-patungan-grey">
                                            {{ $keypoint->name }}</p>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/photos/Profiles.png') }}" class="h-9 flex shrink-0"
                                alt="icon">
                            <p class="font-semibold leading-5">5219+ <span class="text-patungan-grey">Users Has Joined
                                    🔥</span> </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col rounded-[32px] p-8 gap-6 bg-white">
                    <div class="flex items-center rounded-full bg-patungan-bg-grey">
                        <label
                            class="tab-link flex justify-center items-center w-full rounded-full border border-transparent py-4 px-8 text-patungan-grey transition-all duration-300 has-[:checked]:bg-patungan-orange/10 has-[:checked]:text-patungan-orange has-[:checked]:border-patungan-orange/10"
                            data-target-tab="#How-It-Works-Tab">
                            <span class="font-bold text-lg leading-[22px]">How it Works</span>
                            <input type="radio" name="tab" class="hidden" checked>
                        </label>
                        <label
                            class="tab-link flex justify-center items-center w-full rounded-full border border-transparent py-4 px-8 text-patungan-grey transition-all duration-300  has-[:checked]:bg-patungan-orange/10 has-[:checked]:text-patungan-orange has-[:checked]:border-patungan-orange/10"
                            data-target-tab="#Reviews-Tab">
                            <span class="font-bold text-lg leading-[22px]">Reviews</span>
                            <input type="radio" name="tab" class="hidden">
                        </label>
                    </div>
                    <hr class="border-patungan-border">
                    <div class="flex">
                        <div id="How-It-Works-Tab" class="tab-content flex flex-col gap-5">
                            <ol class="font-semibold text-lg leading-9 text-patungan-grey list-decimal pl-5">
                                <li>Ipsum creates an account and purchases a Premium Package on Netflix</li>
                                <li>In 1 account, Ipsum created 4 profiles</li>
                                <li>Profiles are customized with each member's name</li>
                                <li>Profiles are equipped with different PIN</li>
                                <li>Accounts are shared with ONLY 4 members in 1 group</li>
                            </ol>
                            <div class="flex items-center rounded-xl p-4 gap-3 bg-patungan-red/10">
                                <img src="{{ asset('assets/images/icons/notification-box-red.svg') }}"
                                    class="w-[52px] h-[52px] flex shrink-0" alt="icon">
                                <p class="font-semibold leading-[25px] text-patungan-red">The balance will be refunded
                                    if the required number of people is not met within the specified time.</p>
                            </div>
                        </div>
                        <div id="Reviews-Tab" class="tab-content flex flex-col gap-5 hidden">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio laudantium officiis vitae
                            veritatis dolorem atque in ipsum eius doloribus nulla illo est tempora quos, nobis ea quis
                            consectetur incidunt maxime. Voluptatibus quod a rerum aut dolorem, illo ipsam provident
                            dolore nemo laudantium fugiat, suscipit accusantium, et fugit natus eligendi corrupti?
                        </div>
                    </div>
                </div>
            </div>
            <div id="Price-Details" class="flex flex-col w-full h-fit rounded-[32px] p-8 gap-8 bg-white overflow-hidden">
                <h2 class="font-bold text-xl leading-[25px]">Price Details</h2>
                <div class="flex flex-col rounded-3xl border border-patungan-border p-6 gap-6">
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Original Price</p>
                        <p class="font-bold text-xl leading-[25px]">Rp {{ number_format($product->price, 0, ',', '.') }}
                        </p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Harga Patungan</p>
                        <p class="font-bold text-xl leading-[25px]">Rp
                            {{ number_format($product->price_per_person, 0, ',', '.') }}
                        </p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Durasi</p>
                        <p class="font-bold text-xl leading-[25px]">{{ $product->duration }} Month</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Group Capacity</p>
                        <p class="font-bold text-xl leading-[25px]">{{ $product->capacity }}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-lg leading-[22px] text-patungan-grey">PPN 11%</p>
                        <p class="font-bold text-xl leading-[25px]">Rp
                            {{ number_format($totalPpn, 0, ',', '.') }}</p>
                    </div>
                    <hr class="border-patungan-border">
                    <div class="flex items-center justify-between">
                        <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Total Price</p>
                        <p class="font-bold text-xl leading-[25px text-patungan-red">Rp
                            {{ number_format($grandTotal, 0, ',', '.') }}</p>
                    </div>
                </div>
                <a href="{{ route('front.booking', $product->slug) }}"
                    class="flex items-center rounded-full h-[60px] px-9 w-full gap-[6px] bg-patungan-orange justify-center">
                    <span class="font-bold text-lg leading-5 text-white">Pesan Sekarang</span>
                </a>
            </div>
        </div>
    </main>
@endsection

@push('after-scripts')
    <script src="{{ asset('js/nav-tab.js') }}"></script>
@endpush
