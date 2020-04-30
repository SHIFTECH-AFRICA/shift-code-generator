<?php

namespace ShiftechAfrica\CodeGenerator\Traits;

use ShiftechAfrica\CodeGenerator\Model\ShiftCodeGenerator;

trait CheckList
{
    /**
     * --------------------------------
     * get date letter representative
     * ---------------------------------
     * @return string
     */
    private function get_date_letter_representative()
    {
        $date = date('d');
        if ($date == 1) {
            return '1';
        }
        if ($date == 2) {
            return '2';
        }
        if ($date == 3) {
            return '3';
        }
        if ($date == 4) {
            return '4';
        }
        if ($date == 5) {
            return '5';
        }
        if ($date == 6) {
            return '6';
        }
        if ($date == 7) {
            return '7';
        }
        if ($date == 8) {
            return '8';
        }
        if ($date == 9) {
            return '9';
        }
        if ($date == 10) {
            return 'A';
        }
        if ($date == 11) {
            return 'B';
        }
        if ($date == 12) {
            return 'C';
        }
        if ($date == 13) {
            return 'D';
        }
        if ($date == 14) {
            return 'E';
        }
        if ($date == 15) {
            return 'F';
        }
        if ($date == 16) {
            return 'G';
        }
        if ($date == 17) {
            return 'H';
        }
        if ($date == 18) {
            return 'I';
        }
        if ($date == 19) {
            return 'J';
        }
        if ($date == 20) {
            return 'K';
        }
        if ($date == 21) {
            return 'L';
        }
        if ($date == 22) {
            return 'M';
        }
        if ($date == 23) {
            return 'N';
        }
        if ($date == 24) {
            return 'O';
        }
        if ($date == 25) {
            return 'P';
        }
        if ($date == 26) {
            return 'Q';
        }
        if ($date == 27) {
            return 'R';
        }
        if ($date == 28) {
            return 'S';
        }
        if ($date == 29) {
            return 'T';
        }
        if ($date == 30) {
            return 'U';
        }
        if ($date == 31) {
            return 'V';
        }
    }

    /**
     * ------------------------------------
     * get month letter representative
     * -----------------------------------
     * @return string
     */
    private function get_month_letter_representative()
    {
        $monthName = now()->monthName;
        if ($monthName === 'January') {
            return 'A';
        } elseif ($monthName === 'February') {
            return 'B';
        } elseif ($monthName === 'March') {
            return 'C';
        } elseif ($monthName === 'April') {
            return 'D';
        } elseif ($monthName === 'May') {
            return 'E';
        } elseif ($monthName === 'June') {
            return 'F';
        } elseif ($monthName === 'July') {
            return 'G';
        } elseif ($monthName === 'August') {
            return 'H';
        } elseif ($monthName === 'September') {
            return 'I';
        } elseif ($monthName === 'October') {
            return 'J';
        } elseif ($monthName === 'November') {
            return 'K';
        } elseif ($monthName === 'December') {
            return 'L';
        }
    }


    /**
     * -------------------------
     * get the number of yrs
     * -------------------------
     * @return int
     */
    private function get_number_of_years()
    {
        $to = now()->createFromFormat('Y-m-d H:s:i', ShiftCodeGenerator::query()->first()->created_at);
        $from = now()->createFromFormat('Y-m-d H:s:i', today());
        return $to->diffInYears($from); // Output: 1
    }
}
