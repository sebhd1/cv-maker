<?php

    namespace App\Models\Concerns;

    trait WithDuration
    {
        public function initializeWithDuration(): void
        {
            $this->mergeFillable([
                'start_date',
                'end_date',
            ]);

            $this->mergeCasts([
                'start_date' => 'date:Y-m-d',
                'end_date' => 'date:Y-m-d',
            ]);
        }
    }
