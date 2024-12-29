<?php

namespace App\Filament\Resources\ProductSubscriptionResource\Pages;

use App\Filament\Resources\ProductSubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductSubscription extends EditRecord
{
    protected static string $resource = ProductSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
