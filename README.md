# <p align="center"><a href="https://shiftechafrica.com/" target="_blank"><img width="100" src="https://shiftechafrica.com/img/logo.png" alt="Shiftech Africa Logo"></a></p>

<p align="center">
  <b>Be in the next level</b><br>
  <a href="https://github.com/SHIFTECH-AFRICA/shift-code-generator/issues">
    <img src="https://img.shields.io/github/issues/SHIFTECH-AFRICA/shift-code-generator.svg">
  </a>
  <a href="https://github.com/SHIFTECH-AFRICA/shift-code-generator/network/members">
    <img src="https://img.shields.io/github/forks/SHIFTECH-AFRICA/shift-code-generator.svg">
  </a>
  <a href="https://github.com/SHIFTECH-AFRICA/shift-code-generator/stargazers">
    <img src="https://img.shields.io/github/stars/SHIFTECH-AFRICA/shift-code-generator.svg">
  </a>
  <a href="https://packagist.org/packages/shiftechafrica/shift-code-generator">
    <img src="https://poser.pugx.org/shiftechafrica/shift-code-generator/v/stable">
  </a>
  <a href="https://packagist.org/packages/shiftechafrica/shift-code-generator">
    <img src="https://poser.pugx.org/shiftechafrica/shift-code-generator/downloads">
  </a>
  <br><br>
  <img src="https://i.pinimg.com/originals/ce/69/4f/ce694f560636dffcf42ecf40d4f2f962.gif" alt="Shift Code Generator Animation">
</p>

---

## 🚀 Introduction

**Shift Code Generator** is a lightweight Laravel/PHP package that generates unique alphanumeric codes based on the **year**, **month**, and **day**, followed by a randomized string.  
It’s ideal for applications that require sequential or time-based identifiers — such as **transaction IDs**, **invoice numbers**, or **reference codes**.

For example:  
`1E1NKJDQVW`
- **1** → Represents the number of years since the start year
- **E** → Represents the month (A–Z mapping)
- **1** → Represents the day of the month
- **NKJDQVW** → Randomly generated string

This logic mimics the behavior of **M-Pesa transaction IDs**, ensuring unique, traceable, and time-bound identifiers.

---

## ⚙️ Installation

Install via [Composer](https://getcomposer.org/):

```bash
composer require shiftechafrica/shift-code-generator
```

Update to the latest version:

```bash
composer update shiftechafrica/shift-code-generator --lock
```

If the package isn’t automatically discovered, run:

```bash
composer dump-autoload
```

Publish the configuration file:

```bash
php artisan vendor:publish --provider="ShiftechAfrica\CodeGenerator\ShiftCodeGeneratorServiceProvider"
```

This will create a config file at:

```
config/shift-code-generator.php
```

---

## ⚙️ Configuration

In your `.env` file, add the following:

```dotenv
YEAR_OF_START=2020     # The year your application was launched
USE_DATABASE=false     # Set to true to use database tracking, or false to use static year configuration
```

If you enable database tracking, seed the database by adding this entry to your `DatabaseSeeder`:

```php
/**
 * Seed the application's database.
 *
 * @return void
 */
public function run()
{
     // Other seeds...
     $this->call(\ShiftechAfrica\CodeGenerator\Seeds\ShiftCodeGeneratorFactory::class);
}
```

This ensures your application initializes with proper baseline data for generating codes dynamically.

---

## 🧩 Usage

Generate unique codes easily within your application.

```php
use ShiftechAfrica\CodeGenerator\ShiftCodeGenerator;

/**
 * Generate a new Shift Code
 * 
 * @return string
 */
public function generateCode()
{
    return (new ShiftCodeGenerator())->generate(); 
    // Optionally pass an integer to set the random length, e.g. ->generate(5)
}
```

### Example Output

```text
1E1NKJDQVW
```
- **1** = Year offset
- **E** = Month letter
- **1** = Day
- **NKJDQVW** = Random string

---

## 🧭 Version Guidance

| Version | Status | Packagist | Namespace | Release |
|----------|--------|------------|------------|----------|
| **1.x** | ✅ Latest | `shiftechafrica/shift-code-generator` | `ShiftechAfrica\CodeGenerator` | [v1.5.2](https://github.com/SHIFTECH-AFRICA/shift-code-generator/releases/tag/v1.5.2) |

---

## 🛡️ Security Vulnerabilities

If you discover a security vulnerability, please contact:  
📧 **[Bugs](mailto:bugs@shiftech.co.ke)**

---

## 📄 License

This package is open-source software licensed under the  
**[MIT License](https://opensource.org/licenses/MIT)**
