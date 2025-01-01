<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\BookingService;
use App\Models\ProductSubscription;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\StorePaymentRequest;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCheckBookingRequest;

class BookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function booking(Product $product)
    {
        $tax                = 0.11;
        $totalTaxAmount     = $tax * $product->price_per_person;
        $grandTotalAmount   = $product->price_per_person + $totalTaxAmount;

        return view('booking.booking', compact('product', 'totalTaxAmount', 'grandTotalAmount'));
    }

    public function bookingStore(Product $product, StoreBookingRequest $request)
    {
        $validated = $request->validated();

        try {
            $this->bookingService->storeBookingInSession($product, $validated);
        } catch (\Exception $e) {
            return rediirect()->back()->withErrors(['error' => 'Failed to store booking. Please try again.']);
        }

        return redirect()->route('front.payment');
    }

    public function payment()
    {
        $data = $this->bookingService->payment();

        return view('booking.payment', $data);
    }

    public function paymentStore(StorePaymentRequest $request)
    {
        $validated = $request->validated();
        $bookingTransactionId = $this->bookingService->paymentStore($validated);

        if ($bookingTransactionId) {
            return redirect()->route('front.booking_finished', $bookingTransactionId);
        }

        return redirect()->route('front.index')->withErrors(['error' => 'Payment failed. Please try again.']);
    }

    public function bookingFinished(ProductSubscription $productSubscription)
    {
        return view('booking.booking_finished', compact('productSubscription'));
    }

    public function checkBooking()
    {
        return view('booking.check_booking');
    }

    public function checkBookingDetails(StoreCheckBookingRequest $request)
    {
        $validated = $request->validated();

        $bookingData = $this->bookingService->getBookingDetailsWithGroupAndCapacity($validated);

        if ($bookingData) {
            return view('booking.check_booking_details', $bookingData);
        }

        return redirect()->route('front.check_booking')->withErrors(['error' => 'Transaction not found']);
    }
}
