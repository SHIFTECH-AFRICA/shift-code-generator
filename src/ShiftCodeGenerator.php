<?php

namespace ShiftechAfrica\CodeGenerator;


use Illuminate\Support\Str;
use ShiftechAfrica\CodeGenerator\Traits\CheckList;

class ShiftCodeGenerator
{
    use CheckList;

    /**
     * ----------------------------
     * Generate the code here
     * -----------------------------------------------------------------------
     * Code will be generated in the format of Y-M-D + 7 random characters
     * -----------------------------------------------------------------------
     * @param int $codeLength
     * @return string
     */
    public function generate(int $codeLength = 7)
    {
        // fetch the year
        $years = $this->get_number_of_years();

        // fetch month letter
        $m_letter = $this->get_month_letter_representative();

        // fetch date letter
        $d_letter = $this->get_date_letter_representative();

        // return the code generated
        return $years . $m_letter . $d_letter . Str::upper(Str::random($codeLength));
    }
}
