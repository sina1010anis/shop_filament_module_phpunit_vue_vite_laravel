<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Modules\Front\App\Models\Menu;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use Modules\Front\App\Models\Product;
use Modules\Front\App\Models\SubMenu;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\ProductResource\Pages;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';
    protected static ?string $navigationGroup = 'Front';
    protected static ?int $navigationSort = 9;

    protected static ?string $navigationLabel = 'Products (Full From and Table"Filter and Action")';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Step::make('Name Product')->schema([
                        Group::make()->schema([
                            Section::make('Name Product')->schema([
                                Forms\Components\TextInput::make('name')
                                ->required()
                                ->maxLength(255)
                                ->minLength(5)
                                ->live(onBlur:true)
                                ->afterStateUpdated(function (Set $set, $state){
                                    $set('slug', Str::slug($state));
                                }),

                                Forms\Components\TextInput::make('slug')
                                ->required()
                                ->maxLength(255)
                                ->disabled()
                                ->helperText('In Baksh Bade Por kardan fild name por mishavad'),
                            ])->columns(2),

                                Section::make('Number Of ...')->schema([
                                    Forms\Components\TextInput::make('buy')
                                        ->required()
                                        ->maxLength(255)
                                        ->default(0)
                                        ->disabled()
                                        ->numeric()
                                        ->label('Number of Buy'),
                                    Forms\Components\TextInput::make('view')
                                        ->required()
                                        ->maxLength(255)
                                        ->default(0)
                                        ->disabled()
                                        ->numeric()
                                        ->label('Number of View'),

                                    Forms\Components\TextInput::make('popularity')
                                        ->required()
                                        ->numeric()
                                        ->label('Number of Popularity')
                                        ->default(0)
                                        ->numeric()
                                        ->disabled(),
                                ])->columns(3),

                        ]),
                    ]),

                    Step::make('Moshakhsat Koli')->schema([
                        Group::make()->schema([
                            Section::make('')->schema([
                                Forms\Components\TextInput::make('light')
                                    ->required()
                                    ->string()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('location')
                                    ->required()
                                    ->string()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('keeping')
                                    ->required()
                                    ->maxLength(255)
                                    ->string()
                                    ->columnSpan('full'),
                            ])->columns(2)

                        ]),
                    ]),

                    Step::make('Upload Image')->schema([
                        Group::make()->schema([
                            Section::make('')->schema([
                                FileUpload::make('index_image')->directory('products')->required()->maxSize(1024)->image()->label('Image')->imageEditor(),
                            ])
                        ]),
                    ]),

                    Step::make('Menu')->schema([
                        Group::make()->schema([
                            Section::make('Menu')->schema([

                                Select::make('sub_menu')->label('Sub Menu')->options(SubMenu::all()->pluck('name', 'id'))->required()->searchable(),

                                Select::make('menu')->label('Menu')->options(Menu::all()->pluck('name', 'id'))->required()->searchable(),

                            ])

                        ]),
                    ]),

                    Step::make('Price One View')->schema([
                        Group::make()->schema([
                            Section::make('')->schema([
                                Forms\Components\TextInput::make('price')
                                    ->required()
                                    ->numeric(),

                            ])

                        ])->columnSpanFull(),
                    ]),

                    Step::make('Description')->schema([
                        Group::make()->schema([
                            Section::make('')->schema([
                                Forms\Components\Textarea::make('smal_body')
                                    ->required()
                                    ->columnSpanFull(),
                                MarkdownEditor::make('big_body')
                                    ->required()
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('rev')
                                    ->required()
                                    ->columnSpanFull(),
                            ])

                        ])->columnSpanFull(),
                    ])
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')

                    ->searchable(),



                ImageColumn::make('index_image')->square()->width(100)->height(100)->extraImgAttributes(['alt' => 'test']),

                Tables\Columns\TextColumn::make('buy')

                    ->toggleable(isToggledHiddenByDefault: true),



                Tables\Columns\TextColumn::make('view')

                    ->toggleable(isToggledHiddenByDefault: true),



                Tables\Columns\TextColumn::make('slug')

                    ->toggleable(isToggledHiddenByDefault: true),



                Tables\Columns\TextColumn::make('popularity')

                    ->numeric()

                    ->sortable()->toggleable(isToggledHiddenByDefault: true),



                Tables\Columns\TextColumn::make('light')

                    ->toggleable(isToggledHiddenByDefault: true),



                Tables\Columns\TextColumn::make('location')

                    ->toggleable(isToggledHiddenByDefault: true),



                Tables\Columns\TextColumn::make('keeping')

                    ->toggleable(isToggledHiddenByDefault: true),



                Tables\Columns\TextColumn::make('price')

                    ->money('IRR')

                    ->sortable(),



                Tables\Columns\TextColumn::make('sub_menu.name')

                    ->numeric()

                    ->sortable(),



                Tables\Columns\TextColumn::make('menu.name')

                    ->numeric()

                    ->sortable(),



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
                SelectFilter::make('sub_menu')->relationship('sub_menu', 'name'),

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                ExportBulkAction::make()

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
}
