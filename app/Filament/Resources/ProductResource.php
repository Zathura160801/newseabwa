<?php

namespace App\Filament\Resources;

use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Filament\Resources\ProductResource\Pages\EditProduct;
use App\Filament\Resources\ProductResource\Pages\ListProducts;
use App\Filament\Resources\ProductResource\Pages\CreateProduct;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Product';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Fieldset::make('Details')->schema([
                TextInput::make('name')
                    ->required()
                    ->maxlength(255),
                
                TextInput::make('tagline')
                    ->required()
                    ->maxlength(255),

                FileUpload::make('thumbnail')
                    ->image()
                    ->required(),
                
                FileUpload::make('photo')
                    ->image()
                    ->required(),

                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('IDR')
                    ->live()
                    ->afterStateUpdated(function (callable $get, callable $set) {
                        $price = $get('price');
                        $capacity = $get('capacity');
                        if ($capacity > 0) {
                            $set('price_per_person', $price / $capacity);
                        } else{
                            $set('price_per_person', null);
                        }
                    }),

                TextInput::make('capacity')
                    ->required()
                    ->numeric()
                    ->prefix('People')
                    ->live()
                    ->afterStateUpdated(function (callable $get, callable $set) {
                        $price = $get('price');
                        $capacity = $get('capacity');
                        if ($capacity > 0) {
                            $set('price_per_person', $price / $capacity);
                        } else{
                            $set('price_per_person', null);
                        }
                    }),

                TextInput::make('price_per_person')
                    ->numeric()
                    ->readOnly()
                    ->prefix('IDR')
                    ->afterStateHydrated(function (callable $get, callable $set) {
                        $price = $get('price');
                        $capacity = $get('capacity');
                        if ($capacity > 0) {
                            $set('price_per_person', $price / $capacity);
                        } else{
                            $set('price_per_person', null);
                        }
                    }),

                TextInput::make('duration')
                    ->required()
                    ->numeric()
                    ->prefix('Month'),
                ]),
            
            Fieldset::make('Additional')->schema([
                Textarea::make('about')
                    ->required(),
                
                Repeater::make('keypoints')
                    ->relationship('keypoints')
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                    ]),

                Select::make('is_popular')
                    ->options([
                        true    => 'Popular',
                        false   => 'Not Popular',
                    ])
                    ->required(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            ImageColumn::make('thumbnail'),

            TextColumn::make('name')
                ->searchable(),

            IconColumn::make('is_popular')
                ->boolean()
                ->trueColor('success')
                ->falseColor('danger')
                ->trueIcon('heroicon-o-check-circle')
                ->falseIcon('heroicon-o-x-circle')
                ->label('Popular'),
        ])
        ->filters([
            TrashedFilter::make(),
        ])
        ->actions([
            ViewAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
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
