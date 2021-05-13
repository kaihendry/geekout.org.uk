build:
	docker build -t iki .

debug:
	docker run -t -i -v $(PWD):/www --rm iki bash
