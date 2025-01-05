# MoneyCalculator Trait

The `MoneyCalculator` trait provides a set of utility functions for performing precise arithmetic operations on monetary values. It leverages PHP's **BCMath** library to ensure high precision in calculations, which is crucial for financial operations.

---

## Features

The trait includes the following functions for money-related calculations:

- **Addition**: `addMoney($a, $b)`  
  Adds two monetary values with precision. Uses `bcadd()` from the BCMath library.

- **Subtraction**: `subtractMoney($a, $b)`  
  Subtracts one monetary value from another with precision. Uses `bcsub()` from the BCMath library.

- **Multiplication**: `multiplyMoney($a, $b)`  
  Multiplies two monetary values with precision. Uses `bcmul()` from the BCMath library.

- **Division**: `divideMoney($a, $b)`  
  Divides one monetary value by another with precision. Uses `bcdiv()` from the BCMath library.

- **Modulus**: `modulusMoney($a, $b)`  
  Calculates the modulus of two monetary values with precision. Uses `bcmod()` from the BCMath library.

- **Comparison**: `compareMoney($a, $b)`  
  Compares two monetary values with precision. Uses `bccomp()` from the BCMath library.

- **Rounding**: `roundMoney($value)`  
  Rounds a monetary value to the specified precision.

- **Validation**: `isValidMoney($value)`  
  Validates if a value is a valid monetary amount (numeric, including negative values).

---

## Why Use This Trait?

- **Precision**: Financial calculations require high precision, especially when dealing with decimal numbers. The BCMath library ensures that calculations are accurate.
- **Consistency**: By encapsulating money-related operations in a trait, you ensure consistent handling of monetary values across your application.
- **Readability**: The trait provides clear and concise methods for common financial operations, making your code easier to understand and maintain.

---

## Usage

### 1. Include the Trait

To use the `MoneyCalculator` trait, include it in your class:

```php
use App\Traits\MoneyCalculator;

class FinancialService
{
    use MoneyCalculator;

    // Your class methods here
}
```

### 2. Perform Calculations

You can now use the provided methods to perform financial calculations:

```php
$service = new FinancialService();

// Addition
$sum = $service->addMoney('10.50', '20.75'); // Returns "31.25"

// Subtraction
$difference = $service->subtractMoney('50.00', '25.75'); // Returns "24.25"

// Multiplication
$product = $service->multiplyMoney('10.00', '2.5'); // Returns "25.00"

// Division
$quotient = $service->divideMoney('100.00', '4'); // Returns "25.00"

// Modulus
$remainder = $service->modulusMoney('100.00', '3'); // Returns "1.00"

// Comparison
$comparison = $service->compareMoney('50.00', '50.00'); // Returns "0" (equal)

// Rounding
$rounded = $service->roundMoney('10.505'); // Returns "10.51"
```

---

## Precision

All calculations are performed with a precision of **2 decimal places** by default, which is standard for most financial applications. This precision can be customized using the `setPrecision()` method.

---

## Dependencies

- **BCMath Library**: The trait relies on PHP's BCMath extension for arbitrary-precision arithmetic. Ensure that the BCMath extension is enabled in your PHP environment.

---

## Example Use Cases

- **Invoice Calculations**: Calculate totals, taxes, and discounts with precision.
- **Financial Reporting**: Perform accurate financial aggregations and comparisons.
- **E-commerce**: Handle pricing, discounts, and shipping costs accurately.

---

## Contributing

If you find any issues or have suggestions for improvement, feel free to open an issue or submit a pull request.

---

## License

This trait is open-source and available under the MIT License.

---

## Author

[Your Name or Organization]

---

## ملخص بالعربية

`MoneyCalculator` هو trait يوفر مجموعة من الدوال لإجراء العمليات الحسابية بدقة عالية على القيم المالية باستخدام مكتبة **BCMath** في PHP. يتميز هذا الـ trait بالدقة العالية في العمليات الحسابية، مما يجعله مناسبًا للتطبيقات المالية الحساسة.

### المميزات الرئيسية:
- **الدقة**: يدعم العمليات الحسابية بدقة تصل إلى منزلتين عشريتين (قابلة للتعديل).
- **المرونة**: يدعم القيم السالبة، مما يجعله مناسبًا لحسابات الديون والخسائر.
- **التحقق من الصحة**: يتأكد من أن القيم المدخلة صالحة للعمليات الحسابية.
- **سهولة الاستخدام**: يوفر واجهة بسيطة وواضحة للتعامل مع العمليات المالية.

### الاستخدامات الشائعة:
- **حسابات الفواتير**: حساب الإجماليات والضرائب والخصومات بدقة.
- **التقارير المالية**: إجراء عمليات تجميع ومقارنة مالية دقيقة.
- **التجارة الإلكترونية**: إدارة الأسعار والخصومات وتكاليف الشحن بدقة.

### كيفية الاستخدام:
1. قم بتضمين الـ trait في الفئة الخاصة بك.
2. استخدم الدوال المتاحة لإجراء العمليات الحسابية المالية.
