<?php

/*
enum Wochentag {

    case MO;
    case DI;
    case MI;
    case DO;
    case FR;
    case SA;
    case SO;
}
*/

enum Wochentag: string { // int oder string

    case MO = 'Montag';
    case DI = 'Dienstag';
    case MI = 'Mittwoch';
    case DO = 'Donnerstag';
    case FR = 'Freitag';
    case SA = 'Samstag';
    case SO = 'Sonntag';
}

$tag = Wochentag::DO;
var_dump($tag->value);

//echo $tag->value;

enum Color {

    case BLACK;
    case WHITE;
    case GREEN;
    case BLUE;
    case RED;

    // Instanzmethode: Erst über einen case erreichbar
    public function hex(): string {

        return match($this){
            self::BLACK => '000000',
            self::WHITE => 'ffffff',
            self::GREEN => '00ff00',
            self::BLUE => '0000ff',
            self::RED => 'ff0000',
        };
    }

    // Klassenmethode: Direkt über Color verfügbar
    public static function wasAnderes(): string {
        return '';
    }
}


$color = Color::BLUE->hex();
var_dump($color);
var_dump(Color::cases());