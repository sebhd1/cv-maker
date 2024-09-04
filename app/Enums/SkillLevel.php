<?php

    namespace App\Enums;

    use App\Enums\Concerns\Labelable;

    enum SkillLevel  : string implements Labelable
    {

        case Novice = 'novice';
        case Beginner = 'beginner';
        case Skillful = 'skillful';
        case Experienced = 'experienced';
        case Expert = 'expert';


        public function label(): string {
            return match ($this) {
                self::Novice => __('Novice'),
                self::Beginner => __('Beginner'),
                self::Skillful => __('Skillful'),
                self::Experienced => __('Experienced'),
                self::Expert => __('Expert'),
            };
        }
    }
