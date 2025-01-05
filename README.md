# MoneyCalculator Trait

The `MoneyCalculator` trait provides a set of utility functions for performing precise arithmetic operations on monetary values. It leverages PHP's **BCMath** library to ensure high precision in calculations, which is crucial for financial operations.

---

## **Features**

The trait includes the following functions for money-related calculations:

1. **Addition**: `addMoney($a, $b)`
   - Adds two monetary values with precision.
   - Uses `bcadd()` from the BCMath library.

2. **Subtraction**: `subtractMoney($a, $b)`
   - Subtracts one monetary value from another with precision.
   - Uses `bcsub()` from the BCMath library.

3. **Multiplication**: `multiplyMoney($a, $b)`
   - Multiplies two monetary values with precision.
   - Uses `bcmul()` from the BCMath library.

4. **Division**: `divideMoney($a, $b)`
   - Divides one monetary value by another with precision.
   - Uses `bcdiv()` from the BCMath library.

5. **Modulus**: `modulusMoney($a, $b)`
   - Calculates the modulus of two monetary values with precision.
   - Uses `bcmod()` from the BCMath library.

6. **Comparison**: `compareMoney($a, $b)`
   - Compares two monetary values with precision.
   - Uses `bccomp()` from the BCMath library.

---

## **Why Use This Trait?**

- **Precision**: Financial calculations require high precision, especially when dealing with decimal numbers. The BCMath library ensures that calculations are accurate.
- **Consistency**: By encapsulating money-related operations in a trait, you ensure consistent handling of monetary values across your application.
- **Readability**: The trait provides clear and concise methods for common financial operations, making your code easier to understand and maintain.

---

## **Usage**

### **1. Include the Trait**

To use the `MoneyCalculator` trait, include it in your class:

```php
use App\Traits\MoneyCalculator;

class FinancialService
{
    use MoneyCalculator;

    // Your class methods here
}
