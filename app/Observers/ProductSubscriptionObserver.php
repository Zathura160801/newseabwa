<?php

namespace App\Observers;

use App\Models\GroupParticipant;
use App\Models\SubscriptionGroup;
use App\Models\ProductSubscription;

class ProductSubscriptionObserver
{
    public function creating(ProductSubscription $subscription): void
    {
        $subscription->booking_trx_id = $subscription->booking_trx_id ?? $this->generateUniqueTrxId();
    }

    private function generateUniqueTrxId(): string
    {
       $prefix = 'SEABWA';

        do {
            $randomString = $prefix . mt_rand(1000, 9999);
        } while (ProductSubscription::where('booking_trx_id', $randomString)->exists());

        return $randomString;
    }

    /**
     * Handle the ProductSubscription "created" event.
     */
    public function created(ProductSubscription $productSubscription): void
    {
        //
    }

    /**
     * Handle the ProductSubscription "updated" event.
     */
    public function updated(ProductSubscription $productSubscription): void
    {
        if ($productSubscription->isDirty('is_paid') && $productSubscription->product_id) {
            $currentGroup = SubscriptionGroup::where('product_id', $productSubscription->product_id)
                ->orderBy('created_at', 'desc')
                ->first();
            
            if (!$currentGroup || $currentGroup->participant_count >= $currentGroup->max_capacity) {
                $currentGroup = SubscriptionGroup::create([
                    'product_id'                => $productSubscription->product_id,
                    'product_subscription_id'   => $productSubscription->id,
                    'max_capacity'              => $productSubscription->product->capacity,
                    'participant_count'         => 0,
                ]);
            }

            $currentGroup->increment('participant_count');

            GroupParticipant::create([
                'name'                  => $productSubscription->name,
                'email'                 => $productSubscription->email,
                'subscription_group_id' => $currentGroup->id,
                'booking_trx_id'        => $productSubscription->booking_trx_id,
            ]);
        }
    }

    /**
     * Handle the ProductSubscription "deleted" event.
     */
    public function deleted(ProductSubscription $productSubscription): void
    {
        //
    }

    /**
     * Handle the ProductSubscription "restored" event.
     */
    public function restored(ProductSubscription $productSubscription): void
    {
        //
    }

    /**
     * Handle the ProductSubscription "force deleted" event.
     */
    public function forceDeleted(ProductSubscription $productSubscription): void
    {
        //
    }
}
