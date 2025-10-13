# 🧠 Brain Games (PHP Edition)

A collection of five console-based math games to sharpen your mental arithmetic skills. Each game challenges you with quick math questions—answer three correctly to win, but one mistake ends the game immediately!

[![Quality gate](https://sonarcloud.io/api/project_badges/quality_gate?project=ElenaManukyan_php-project-45)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)
[![SonarQube Cloud](https://sonarcloud.io/images/project_badges/sonarcloud-highlight.svg)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)
[![Actions Status](https://github.com/ElenaManukyan/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/ElenaManukyan/php-project-45/actions)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=ElenaManukyan_php-project-45&metric=alert_status)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=ElenaManukyan_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=ElenaManukyan_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=ElenaManukyan_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)
[![Lines of Code](https://sonarcloud.io/api/project_badges/measure?project=ElenaManukyan_php-project-45&metric=ncloc)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)
[![Reliability Rating](https://sonarcloud.io/api/project_badges/measure?project=ElenaManukyan_php-project-45&metric=reliability_rating)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=ElenaManukyan_php-project-45&metric=security_rating)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)
[![Technical Debt](https://sonarcloud.io/api/project_badges/measure?project=ElenaManukyan_php-project-45&metric=sqale_index)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)
[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=ElenaManukyan_php-project-45&metric=sqale_rating)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)
[![Vulnerabilities](https://sonarcloud.io/api/project_badges/measure?project=ElenaManukyan_php-project-45&metric=vulnerabilities)](https://sonarcloud.io/summary/new_code?id=ElenaManukyan_php-project-45)

## 🎮 Available Games

1. **Even or Odd** – Determine whether a number is even  
2. **Calculator** – Evaluate basic arithmetic expressions (`+`, `-`, `*`)  
3. **Greatest Common Divisor (GCD)** – Find the GCD of two numbers  
4. **Progression** – Identify the missing number in an arithmetic sequence  
5. **Prime Number** – Check if a given number is prime

## ⚙️ Installation

### Prerequisites
- PHP 8.0 or higher
- Composer

### Setup
```bash
git clone https://github.com/ElenaManukyan/php-project-45.git
cd php-project-45
composer install
```
After installation, the game executables will be available in the ```bin/Games/``` directory and can be run directly.

## 🛠️ Make Commands
For easier access, the project includes a ```Makefile```. You can use the following commands:
| Command                     | Action                |
|----------------------------|-----------------------|
| `make install`             | Run `composer install` |
| `make brain-games`         | Launch the main menu  |
| `make brain-even`          | Play "Even or Odd"    |
| `make brain-calc`          | Play "Calculator"     |
| `make brain-gcd`           | Play "GCD"            |
| `make brain-progression`   | Play "Progression"    |
| `make brain-prime`         | Play "Prime"          |

## 🕹️ How to Play
Each game follows the same rules: **3 correct answers = victory**, **1 wrong answer = game over**.
You can start any game using either ```make``` (see above) or by calling its binary directly.

## 💡 Demos
### Brain-even game demo:
[![asciicast](https://asciinema.org/a/230NgMHu4DJAJPvyUHEKsckZG.svg)](https://asciinema.org/a/230NgMHu4DJAJPvyUHEKsckZG)

### Brain-calc game demo:
[![asciicast](https://asciinema.org/a/SRxYoIEXDZgJ37N4JhlbEQ0QS.svg)](https://asciinema.org/a/SRxYoIEXDZgJ37N4JhlbEQ0QS)

### Brain-gcd game demo:
[![asciicast](https://asciinema.org/a/6zSvoHNKryBNZEOJiYa2ovFDo.svg)](https://asciinema.org/a/6zSvoHNKryBNZEOJiYa2ovFDo)

### Brain-progression game demo:
[![asciicast](https://asciinema.org/a/hVhWxTyJGiJzM1tj04yC8QfOe.svg)](https://asciinema.org/a/hVhWxTyJGiJzM1tj04yC8QfOe)

### Brain-prime game demo:
[![asciicast](https://asciinema.org/a/QmXGQge0CVMel8FGwvTmOjAYS.svg)](https://asciinema.org/a/QmXGQge0CVMel8FGwvTmOjAYS)

## 🤝 Contributing
Contributions are welcome! Feel free to submit pull requests. For significant changes, please open an issue first to discuss your idea.
