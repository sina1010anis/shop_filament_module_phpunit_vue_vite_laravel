<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use Modules\Front\App\Models\ImageSlider;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ImageSliderResource\Pages;
use App\Filament\Resources\ImageSliderResource\RelationManagers;
use Filament\Forms\Components\FileUpload;

class ImageSliderResource extends Resource
{
    protected static ?string $model = ImageSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';
    protected static ?string $navigationGroup = 'Front';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    FileUpload::make('src')->required()->directory('slider'),
                    Select::make('mode')
                    ->options([
                        '0' => 'Slider',
                        '1' => 'Slider 1',
                        '2' => 'Slider 2',
                    ])->required(),
                Forms\Components\TextInput::make('link')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                    ImageColumn::make('src')->size(100),
                    SelectColumn::make('mode')
                    ->options([
                        '0' => 'None Link',
                        '1' => 'Anlink',
                    ]),
                Tables\Columns\TextColumn::make('link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListImageSliders::route('/'),
            'create' => Pages\CreateImageSlider::route('/create'),
            'edit' => Pages\EditImageSlider::route('/{record}/edit'),
        ];
    }
}
