package main

func main() {
	standardFizBuzz()
}

func standardFizBuzz() {
	for i := 1; i < 100; i++ {
		println(i)
		if i%3 == 0 {
			println("Fizz")
		}

		if i%5 == 0 {
			println("Buzz")
		}

		if i%3 == 0 && i%5 == 0 {
			println("FizzBuzz")
		}
	}
}
