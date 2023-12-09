# PHP Protobuf Implementation for protoc-gen-validate

This is a PHP implementation for protoc-gen-validate. It provides validation rules for protobuf messages.
This is only the compiled version of the PHP files. The source files can be found at [bufbuild/protoc-gen-validate](https://github.com/bufbuild/protoc-gen-validate)

## Note

This is not an official implementation. It is only a compiled version of the PHP files from the official repository.
And since the official repository was made using proto2 syntax, this implementation has removed the following 
to make it compatible with proto3 syntax.

This is intended for internal use only. If you want to use this, please use it at your own risk.
This package is not maintained and will not be updated.

- `default` field option
    - When using proto3 syntax, the `default` field option is not allowed and was removed from the following rules:
      `StringRules` field `strict`. The default value was `true`.

## Requirements

- PHP 7 or 8
- Google Common Protos 4.5

## Installation

Use composer to install the dependencies.

```bash
composer install
```

## Usage

Include the necessary classes from the src/Validate and src/GPBMetadata directories in your PHP files to use the validation rules.

## License

This project is licensed under the Apache 2.0 license. See the [LICENSE](LICENSE) file for details.