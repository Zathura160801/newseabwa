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
                <p class="font-semibold leading-5 text-patungan-grey">></p>
                <p class="font-semibold text-lg leading-[22px] text-patungan-grey last:text-patungan-black">Checkout</p>
                <p class="font-semibold leading-5 text-patungan-grey">></p>
                <p class="font-semibold text-lg leading-[22px] text-patungan-grey last:text-patungan-black">Payment Details
                </p>
            </div>
            <h1 class="font-Grifter font-bold text-[32px] leading-[33px]">Payment Details</h1>
        </div>
        <div class="flex gap-9 mb-20">
            <div id="Product-Info"
                class="product-card flex flex-col w-[368px] h-fit shrink-0 rounded-[32px] overflow-hidden bg-white">
                <div class="w-full h-[180px] flex shrink-0 bg-[#D9D9D9]">
                    <img src="{{ Storage::url($product->thumbnail) }}" class="w-full h-full object-cover" alt="thumbnails">
                </div>
                <div class="flex flex-col p-6 gap-6">
                    <div class="flex items-center gap-3">
                        <div class="w-[62px] h-[62px] flex shrink-0 rounded-xl overflow-hidden">
                            <img src="{{ asset($product->photo) }}" class="w-full h-full object-contain object-center"
                                alt="icon">
                        </div>
                        <div>
                            <p class="font-bold text-xl leading-[25px]">{{ $product->name }}</p>
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
                                {{ number_format($product->price_per_person, 0, ',', '.') }}</p>
                            <div class="flex items-center rounded-lg p-2 gap-1 bg-patungan-red/10">
                                <img src="{{ asset('assets/images/icons/clock-red.svg') }}" class="w-6 flex shrink-0"
                                    alt="icon">
                                <p class="font-bold leading-5 text-patungan-red">{{ $product->duration }} month</p>
                            </div>
                        </div>
                        <hr class="border-patungan-border">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('assets/images/icons/verify-green.svg') }}" class="w-[18px] flex shrink-0"
                                alt="icon">
                            <p class="font-medium text-lg leading-[22px] text-patungan-grey">Garansi Uang Pasti Kembali</p>
                        </div>
                    </div>
                </div>
            </div>
            <form enctype="multipart/form-data" method="POST" action="{{ route('front.payment_store') }}"
                class="flex flex-col w-full rounded-[32px] overflow-hidden">
                @csrf
                <div class="flex flex-col rounded-[32px] p-8 gap-8 overflow-hidden bg-white">
                    <div class="flex flex-col gap-5">
                        <h2 class="font-bold text-xl leading-[25px]">Select Bank Account</h2>
                        <div class="flex items-center rounded-full bg-patungan-bg-grey">
                            <label
                                class="tab-link flex justify-center items-center w-full rounded-full border border-transparent py-4 px-8 text-patungan-grey transition-all duration-300 has-[:checked]:bg-patungan-orange/10 has-[:checked]:text-patungan-orange has-[:checked]:border-patungan-orange/10"
                                data-target-tab="#Popular-Payment-Tab">
                                <span class="font-bold text-lg leading-[22px]">Popular Payment</span>
                                <input type="radio" name="tab" class="hidden" checked>
                            </label>
                            <label type="button"
                                class="tab-link flex justify-center items-center w-full rounded-full border border-transparent py-4 px-8 text-patungan-grey transition-all duration-300 has-[:checked]:bg-patungan-orange/10 has-[:checked]:text-patungan-orange has-[:checked]:border-patungan-orange/10"
                                data-target-tab="#Other-Tab">
                                <span class="font-bold text-lg leading-[22px]">Other Payment</span>
                                <input type="radio" name="tab" class="hidden">
                            </label>
                        </div>
                        <div class="flex">
                            <div id="Popular-Payment-Tab" class="tab-content flex flex-col w-full gap-5">
                                <div class="group flex flex-col w-full rounded-3xl border border-[#F1F1F1] p-6 bg-white">
                                    <label class="flex items-center w-full justify-between h-10 overflow-hidden">
                                        <img src="{{ asset('assets/images/logos/bca.svg') }}"
                                            class="h-10 flex shrink-0 object-contain" alt="logo">
                                        <input type="radio" name="payment-method" id=""
                                            class="appearance-none w-6 h-6 rounded-full mr-[2px] ring-[1.5px] ring-patungan-border checked:ring-patungan-orange border-4 border-white bg-white checked:bg-patungan-orange transition-all duration-300">
                                    </label>
                                    <div
                                        class="content h-0 group-has-[:checked]:!h-[114px] transition-all duration-300 overflow-hidden">
                                        <hr class="border-patungan-border my-4">
                                        <div class="bank-details flex items-center justify-between">
                                            <div class="flex flex-col gap-[6px]">
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Transfer
                                                    to</p>
                                                <p class="Transfer-To font-bold text-xl leading-[25px]">1935 0009 1200</p>
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">PT
                                                    Seaccount Angga</p>
                                            </div>
                                            <button type="button" class="copy-btn flex items-center gap-[6px]"
                                                onclick="copyTransferTo(this)">
                                                <img src="{{ asset('assets/images/icons/copy-orange.svg') }}"
                                                    class="w-6 flex shrink-0" alt="icon">
                                                <span
                                                    class="font-semibold text-lg leading-[22px] text-patungan-orange">Copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="group flex flex-col w-full rounded-3xl border border-[#F1F1F1] p-6 bg-white">
                                    <label class="flex items-center w-full justify-between h-10 overflow-hidden">
                                        <img src="{{ asset('assets/images/logos/bri.svg') }}"
                                            class="h-10 flex shrink-0 object-contain" alt="logo">
                                        <input type="radio" name="payment-method" id=""
                                            class="appearance-none w-6 h-6 rounded-full mr-[2px] ring-[1.5px] ring-patungan-border checked:ring-patungan-orange border-4 border-white bg-white checked:bg-patungan-orange transition-all duration-300">
                                    </label>
                                    <div
                                        class="content h-0 group-has-[:checked]:!h-[114px] transition-all duration-300 overflow-hidden">
                                        <hr class="border-patungan-border my-4">
                                        <div class="bank-details flex items-center justify-between">
                                            <div class="flex flex-col gap-[6px]">
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Transfer
                                                    to</p>
                                                <p class="Transfer-To font-bold text-xl leading-[25px]">1935 8899 1200</p>
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">PT
                                                    Seaccount Angga</p>
                                            </div>
                                            <button type="button" class="copy-btn flex items-center gap-[6px]"
                                                onclick="copyTransferTo(this)">
                                                <img src="{{ asset('assets/images/icons/copy-orange.svg') }}"
                                                    class="w-6 flex shrink-0" alt="icon">
                                                <span
                                                    class="font-semibold text-lg leading-[22px] text-patungan-orange">Copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="group flex flex-col w-full rounded-3xl border border-[#F1F1F1] p-6 bg-white">
                                    <label class="flex items-center w-full justify-between h-10 overflow-hidden">
                                        <img src="{{ asset('assets/images/logos/bni.svg') }}"
                                            class="h-10 flex shrink-0 object-contain" alt="logo">
                                        <input type="radio" name="payment-method" id=""
                                            class="appearance-none w-6 h-6 rounded-full mr-[2px] ring-[1.5px] ring-patungan-border checked:ring-patungan-orange border-4 border-white bg-white checked:bg-patungan-orange transition-all duration-300">
                                    </label>
                                    <div
                                        class="content h-0 group-has-[:checked]:!h-[114px] transition-all duration-300 overflow-hidden">
                                        <hr class="border-patungan-border my-4">
                                        <div class="bank-details flex items-center justify-between">
                                            <div class="flex flex-col gap-[6px]">
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Transfer
                                                    to</p>
                                                <p class="Transfer-To font-bold text-xl leading-[25px]">1935 1111 1200</p>
                                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">PT
                                                    Seaccount Angga</p>
                                            </div>
                                            <button type="button" class="copy-btn flex items-center gap-[6px]"
                                                onclick="copyTransferTo(this)">
                                                <img src="{{ asset('assets/images/icons/copy-orange.svg') }}"
                                                    class="w-6 flex shrink-0" alt="icon">
                                                <span
                                                    class="font-semibold text-lg leading-[22px] text-patungan-orange">Copy</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Other-Tab" class="tab-content flex flex-col gap-5 hidden">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio laudantium officiis vitae
                                veritatis dolorem atque in ipsum eius doloribus nulla illo est tempora quos, nobis ea quis
                                consectetur incidunt maxime. Voluptatibus quod a rerum aut dolorem, illo ipsam provident
                                dolore nemo laudantium fugiat, suscipit accusantium, et fugit natus eligendi corrupti?
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-5">
                        <h2 class="font-bold text-xl leading-[25px]">Transfer Informations</h2>
                        <label class="flex flex-col gap-4">
                            <p class="font-bold text-xl leading-[25px] text-patungan-grey">Bank Name</p>
                            <div
                                class="flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                <img src="{{ asset('assets/images/icons/bank-black.svg') }}"
                                    class="w-6 h-6 flex shrink-0" alt="icon">
                                <div class="flex h-6 border border-patungan-border -mr-4"></div>
                                <select name="customer_bank_name" id=""
                                    class="px-4 appearance-none outline-none bg-patungan-bg-grey w-full font-bold text-xl leading-[25px] placeholder:text-patungan-black">
                                    <option hidden>Dari Bank Mana?</option>
                                    <option value="Bank Syariah">Bank Syariah</option>
                                    <option value="Bank Mandiri">Bank Mandiri</option>
                                    <option value="Bank BRI">Bank BRI</option>
                                    <option value="Bank BNI">Bank BNI</option>
                                    <option value="Bank BCA">Bank BCA</option>
                                    <option value="Bank BTN">Bank BTN</option>
                                </select>
                            </div>
                        </label>
                        <label class="flex flex-col gap-4">
                            <p class="font-bold text-xl leading-[25px] text-patungan-grey">Bank Account Name</p>
                            <div
                                class="flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                <img src="{{ asset('assets/images/icons/user-octagon-black.svg') }}"
                                    class="w-6 h-6 flex shrink-0" alt="icon">
                                <div class="flex h-6 border border-patungan-border"></div>
                                <input type="text" name="customer_bank_account" id=""
                                    class="appearance-none outline-none bg-patungan-bg-grey w-full font-bold text-xl leading-[25px] placeholder:text-patungan-black"
                                    placeholder="Atas Nama Siapa?">
                            </div>
                        </label>
                        <label class="flex flex-col gap-4">
                            <p class="font-bold text-xl leading-[25px] text-patungan-grey">Bank Account Number</p>
                            <div
                                class="flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                                <img src="{{ asset('assets/images/icons/blend-black.svg') }}"
                                    class="w-6 h-6 flex shrink-0" alt="icon">
                                <div class="flex h-6 border border-patungan-border"></div>
                                <input type="text" inputmode="numeric" name="customer_bank_number" id=""
                                    class="appearance-none outline-none bg-patungan-bg-grey w-full font-bold text-xl leading-[25px] placeholder:text-patungan-black"
                                    pattern="[0-9 ]*" title="Only numbers and spaces are allowed"
                                    placeholder="Nomor Rekening Kamu?">
                            </div>
                        </label>
                    </div>
                    <div class="flex flex-col gap-5">
                        <h2 class="font-bold text-xl leading-[25px]">Price Details</h2>
                        <div class="flex flex-col rounded-3xl border border-patungan-border p-6 gap-6">
                            <div class="flex items-center justify-between">
                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Original Price</p>
                                <p class="font-bold text-xl leading-[25px]">Rp
                                    {{ number_format($product->price, 0, ',', '.') }}</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Harga Patungan</p>
                                <p class="font-bold text-xl leading-[25px]">Rp
                                    {{ number_format($product->price_per_person, 0, ',', '.') }}</p>
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
                                    {{ number_format($booking['total_ppn'], 0, ',', '.') }}</p>
                            </div>
                            <hr class="border-patungan-border">
                            <div class="flex items-center justify-between">
                                <p class="font-semibold text-lg leading-[22px] text-patungan-grey">Total Price</p>
                                <p class="font-bold text-xl leading-[25px text-patungan-red">Rp
                                    {{ number_format($booking['total_amount'], 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h2 class="font-bold text-xl leading-[25px]">Payment Proof</h2>
                        <label
                            class="relative flex items-center rounded-3xl border border-patungan-border p-6 gap-4 bg-patungan-bg-grey focus-within:border-patungan-orange transition-all duration-300">
                            <img src="{{ asset('assets/images/icons/gallery-import-black.svg') }}"
                                class="w-6 h-6 flex shrink-0" alt="icon">
                            <div class="flex h-6 border border-patungan-border"></div>
                            <p id="File-Name" class="w-full font-bold text-xl leading-[25px]">Upload Proof</p>
                            <input type="file" name="proof" id="File-Input" class="absolute opacity-0">
                            <img src="{{ asset('assets/images/icons/import-black.svg') }}" class="w-6 h-6 flex shrink-0"
                                alt="icon">
                        </label>
                    </div>
                    <button type="submit"
                        class="flex items-center rounded-full h-[60px] px-9 w-full gap-[6px] bg-patungan-orange justify-center">
                        <span class="font-bold text-lg leading-5 text-white">Bayar Sekarang</span>
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection

@push('after-scripts')
    <script src="{{ asset('js/nav-tab.js') }}"></script>
    <script src=" {{ asset('js/accordion.js') }}"></script>
    <script src=" {{ asset('js/copy.js') }}"></script>
    <script src=" {{ asset('js/file-upload.js') }}"></script>
@endpush
