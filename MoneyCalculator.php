<?php

namespace App\Traits;

/**
 * Money Calculator:
 * A trait for performing precise arithmetic operations on monetary values
 * using PHP's BCMath library. Ensures high precision for financial calculations.
 *
 * Supported Operations:
 * - Addition: bcadd()
 * - Subtraction: bcsub()
 * - Multiplication: bcmul()
 * - Division: bcdiv()
 * - Modulus: bcmod()
 * - Comparison: bccomp()
 * - Rounding: Custom rounding function
 * - Validation: Check if a value is a valid monetary amount
 *
 * Precision: 2 decimal places by default (configurable).
 */

trait MoneyCalculator
{
    // Default precision for monetary calculations
    protected $precision = 2;

    /**
     * Set the precision for calculations.
     *
     * @param int $precision
     */
    public function setPrecision(int $precision): void
    {
        $this->precision = $precision;
    }

    /**
     * Get the current precision.
     *
     * @return int
     */
    public function getPrecision(): int
    {
        return $this->precision;
    }

    /**
     * Validate if a value is a valid monetary amount.
     * Negative values are allowed as they represent debts, losses, or overpayments.
     *
     * @param string $value
     * @return bool
     */
    public function isValidMoney($value): bool
    {
        return is_numeric($value);
    }

    /**
     * Addition of two monetary values.
     *
     * @param string $a
     * @param string $b
     * @return string
     * @throws \InvalidArgumentException
     */
    public function addMoney($a, $b): string
    {
        $this->validateInput($a, $b);
        return bcadd($a, $b, $this->precision);
    }

    /**
     * Subtraction of two monetary values.
     *
     * @param string $a
     * @param string $b
     * @return string
     * @throws \InvalidArgumentException
     */
    public function subtractMoney($a, $b): string
    {
        $this->validateInput($a, $b);
        return bcsub($a, $b, $this->precision);
    }

    /**
     * Multiplication of two monetary values.
     *
     * @param string $a
     * @param string $b
     * @return string
     * @throws \InvalidArgumentException
     */
    public function multiplyMoney($a, $b): string
    {
        $this->validateInput($a, $b);
        return bcmul($a, $b, $this->precision);
    }

    /**
     * Division of two monetary values.
     *
     * @param string $a
     * @param string $b
     * @return string
     * @throws \InvalidArgumentException
     */
    public function divideMoney($a, $b): string
    {
        $this->validateInput($a, $b);
        if (bccomp($b, '0', $this->precision) === 0) {
            throw new \InvalidArgumentException('Division by zero is not allowed.');
        }
        return bcdiv($a, $b, $this->precision);
    }

    /**
     * Modulus of two monetary values.
     *
     * @param string $a
     * @param string $b
     * @return string
     * @throws \InvalidArgumentException
     */
    public function modulusMoney($a, $b): string
    {
        $this->validateInput($a, $b);
        if (bccomp($b, '0', $this->precision) === 0) {
            throw new \InvalidArgumentException('Modulus by zero is not allowed.');
        }
        return bcmod($a, $b);
    }

    /**
     * Compare two monetary values.
     *
     * @param string $a
     * @param string $b
     * @return int Returns 0 if equal, 1 if $a > $b, -1 if $a < $b
     * @throws \InvalidArgumentException
     */
    public function compareMoney($a, $b): int
    {
        $this->validateInput($a, $b);
        return bccomp($a, $b, $this->precision);
    }

    /**
     * Round a monetary value to the specified precision.
     *
     * @param string $value
     * @return string
     * @throws \InvalidArgumentException
     */
    public function roundMoney($value): string
    {
        if (!$this->isValidMoney($value)) {
            throw new \InvalidArgumentException('Invalid monetary value provided.');
        }
        return number_format((float) $value, $this->precision, '.', '');
    }

    /**
     * Validate input values for monetary operations.
     *
     * @param string $a
     * @param string $b
     * @throws \InvalidArgumentException
     */
    protected function validateInput($a, $b): void
    {
        if (!$this->isValidMoney($a) || !$this->isValidMoney($b)) {
            throw new \InvalidArgumentException('Invalid monetary value provided.');
        }
    }
}
