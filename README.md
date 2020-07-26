# my_extension

TYPO3 Demo Extension

## System Requirements

Make sure you have the following components installed before you continue:

- [DDEV Local and Docker](https://ddev.readthedocs.io/en/stable/)
- [Git](https://git-scm.com/) is required on Windows to successfuly run DDEV Local
- Editor of your choice like [Visual Studio Code](https://code.visualstudio.com/Download)
  or [PhpStorm](https://www.jetbrains.com/de-de/phpstorm/download/)

Once you have successfuly installed the previous mentioned components your
project will be setup and ready to use within minutes.

## Quick Start

Clone this repository and start the project:

- `ddev start` -> starts the containers
- `ddev launch` -> launch the project in the web browser

## Run Tests

- `ddev composer test` -> run all tests
- `ddev composer test:php:functional` -> run functional tests, see composer.json
  for more options

## License

This project is released under the terms of the [GNU GENERAL PUBLIC LICENSE](LICENSE)
