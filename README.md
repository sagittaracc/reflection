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
            return 'this method';
        }

        return 'never goes here';
    }
}
```

```php
$reflection = new ReflectionClass(Test::class);
$method = $reflection->getMethod('method');
echo $method->body; // if (true) { return 'this method'; }  return 'never goes here';
```
