<?php

namespace App\Filament\Resources\SubscriptionGroupResource\Pages;

use App\Filament\Resources\SubscriptionGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubscriptionGroup extends EditRecord
{
    protected static string $resource = SubscriptionGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
