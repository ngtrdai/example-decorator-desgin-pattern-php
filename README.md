# Decorator design pattern in PHP

This is a simple implementation of the decorator design pattern in PHP.

## Installation and run

## UML diagram
```mermaid
classDiagram
    BanhMi --|>BanhMiInterface
    BanhMiDecorator --|> BanhMiInterface
    DuaLeo --|> BanhMiDecorator
    ChaLua --|> BanhMiDecorator
    TuongOt --|> BanhMiDecorator
    Thit --|> BanhMiDecorator

    class BanhMi {
        +Cost() float
    }

    class BanhMiInterface {
        +Cost() float
    }

    class BanhMiDecorator {
        -BanhMiInterface banhMi
        +BanhMiDecorator(BanhMiInterface wrappee)
        +Cost() float
    }
```

## Usage

```php
$banhMi = new BanhMi();
$banhMi = new DuaLeo($banhMi);
$banhMi = new ChaLua($banhMi);
$banhMi = new TuongOt($banhMi);
$banhMi = new Thit($banhMi);

echo $banhMi->Cost();
```

## Output