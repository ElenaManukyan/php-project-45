install:
	composer install

brain-games:
	./bin/Games/brain-games

brain-even:
	./bin/Games/brain-even

brain-calc:
	./bin/Games/brain-calc

brain-gcd:
	./bin/Games/brain-gcd

brain-progression:
	./bin/Games/brain-progression

brain-prime:
	./bin/Games/brain-prime

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin