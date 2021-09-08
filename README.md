# reflection

This is an extension for `ReflectionClass` which helps you get the body of a class method.

### Example

```php
namespace sagittaracc\classes;

class Test
{
    public function method()
    {
        if (true) {
            echo 'this method';
        }

        echo 'never goes here';
    }
}
```

```php
$reflection = new ReflectionClass(Test::class);
$method = $reflection->getMethod('method');
echo $method->body; // if (true) { echo 'this is method'; }  echo 'never goes here';
```
