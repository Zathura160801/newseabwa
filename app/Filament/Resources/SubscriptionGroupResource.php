<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\SubscriptionGroup;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SubscriptionGroupResource\Pages;
use App\Filament\Resources\SubscriptionGroupResource\RelationManagers;
use App\Filament\Resources\SubscriptionGroupResource\Pages\EditSubscriptionGroup;
use App\Filament\Resources\SubscriptionGroupResource\Pages\ListSubscriptionGroups;
use App\Filament\Resources\SubscriptionGroupResource\Pages\CreateSubscriptionGroup;
use App\Filament\Resources\SubscriptionGroupResource\RelationManagers\GroupMessagesRelationManager;
use App\Filament\Resources\SubscriptionGroupResource\RelationManagers\GroupParticipantsRelationManager;

class SubscriptionGroupResource extends Resource
{
    protected static ?string $model = SubscriptionGroup::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('product_id')
                ->relationship('product', 'name')
                ->searchable()
                ->preload()
                ->required()
                ->live()
                ->afterStateUpdated(function ($state, callable $set) {
                    $product = Product::find($state);
                    $max_capacity = $product ? $product->capacity : 0;

                    $set('max_capacity', $max_capacity);
                })
                ->afterStateHydrated(function (callable $get, callable $set, $state) {
                    $productId = $state;
                    if ($productId) {
                        $product = Product::find($productId);
                        $max_capacity = $product ? $product->capacity : 0;

                        $set('max_capacity', $max_capacity);
                    }
                }),
                
            TextInput::make('max_capacity')
                ->required()
                ->label('Max Capacity')
                ->readOnly()
                ->numeric()
                ->prefix('People'),

            TextInput::make('participant_count')
                ->required()
                ->label('Total Capacity')
                ->numeric()
                ->prefix('People'),

            Select::make('product_subscription_id')
                ->relationship('productSubscription', 'booking_trx_id')
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('product.thumbnail')
                    ->label('Photo'),

                TextColumn::make('productSubscription.booking_trx_id')
                    ->label('Booking ID')
                    ->searchable(),

                TextColumn::make('id')
                    ->label('Group ID')
                    ->searchable(),

                TextColumn::make('participant_count'),

                TextColumn::make('max_capacity'),

                IconColumn::make('is_full')
                    ->label('full')
                    ->boolean()
                    ->getStateUsing(fn ($record) => $record->participant_count >= $record->max_capacity)
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            GroupMessagesRelationManager::class,
            GroupParticipantsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubscriptionGroups::route('/'),
            'create' => Pages\CreateSubscriptionGroup::route('/create'),
            'edit' => Pages\EditSubscriptionGroup::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
